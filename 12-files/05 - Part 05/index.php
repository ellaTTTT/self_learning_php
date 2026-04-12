<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles/simple.css" />
    <title>Document</title>
</head>
<body>
    <header><h1>Automatic Image List</h1></header>
    <main><pre><?php 
        var_dump(pathinfo('index.php', PATHINFO_EXTENSION));
        $handle = opendir(__DIR__.'/images'); //represent an open directory (stream)
        $images = [];
        $allowedExtensions = [
            'jpg',
            'jpeg',
            'png'
        ];
        while(($currentFile = readdir($handle)) !== false) {
            if($currentFile === '.' || $currentFile === '..') continue;
            $extension = pathinfo($currentFile, PATHINFO_EXTENSION);
            if(!in_array($extension, $allowedExtensions)) continue;
            $info = '';
            $context = [];
            $filePath = __DIR__.'/images/'.pathinfo($currentFile, PATHINFO_FILENAME).'.txt';
            if(file_exists($filePath)) {
                $txt = file_get_contents($filePath);
                $txt = explode("\n", $txt);
                $info = $txt[0];
                unset($txt[0]);
                $context = implode("\n", $txt);
                // $context = array_value($info);
                // var_dump($txt);
                // var_dump($context);
                // var_dump($info);
            }
            $images[] = [
                'image' => $currentFile,
                'title' => $info,
                'content' => $context,
            ];
        }
        var_dump($images);
        closedir($handle); // return resources to OS, can be ignored.
    ?></pre>
        <?php foreach($images AS $image): ?>
            <img src="images/<?php echo e($image['title']); ?>" alt="" />
            <img src="images/<?php echo rawurlencode($image['image']); ?>" alt="" />
            <img src="images/<?php echo e($image['content']); ?>" alt="" />
        <?php endforeach; ?>
    </main>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    <pre><?php 
        $names = [
            'Elon Musk', 
            'Donald Trumps', 
            'Justin Bibber', 
            'Taylor Swift', 
            'Katty Parry', 
            'Tim Cook',
            'Tim Cook',
            'Tim Cook',
            'Tim Cook',
            'Tim Cook',
        ];
        // $names = array_unique($names);
        sort($names);
        var_dump($names);
        var_dump(array_unique($names));
    ?></pre>
</body>
</html>
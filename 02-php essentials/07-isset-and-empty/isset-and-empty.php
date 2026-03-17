<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
    <style> h1 {width: 20rem; height: 5rem; background: red;}</style>
</head>
<body>
    <pre><?php  
        $pageTitle = 'PHP is amazing';
        //$pageTitle = '0'; //"0" may seemed as empty in empty() in PHP!
        // $pageTitle = '';
        // $pageTitle = '';
        unset($pageTitle); //cancel the declaim of $pageTitle
        var_dump(isset($pageTitle)); //isset means to check whether valiable is exist or not.
        var_dump(empty($pageTitle));
    ?></pre>
    <?php 
        if(isset($pageTitle) && $pageTitle !== '') {
            echo "<h1>{$pageTitle}</h1>";
        }
        if(!empty($pageTitle)) {
            echo "<h1>{$pageTitle}</h1>";
        }
    ?>
</body>
</html>
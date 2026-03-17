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
        $categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History']; //should contain same type variables
        $categories[2] = 'Art and Drawing';
        $categories[] = 'Nature books';
        // unset($categories[3]); // unset $categories[3], you can see categories[0], [1], [2], [4]
        var_dump($categories);
        // var_dump($categories[3]); //Warning:  Undefined array key 3
        var_dump($categories[5]);
    ?></pre>
    
</body>
</html>
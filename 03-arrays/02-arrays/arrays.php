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
        $categories = ['Programming', 'Business', 'Art & Drawing', 'Self improvment', 'History'];
        var_dump($categories);
        var_dump(in_array('Programming', $categories)); // in_array(value, variable) is to check whether the value is in variable or not.
        var_dump(count($categories)); // count(variable) try to count size of variable.
        if(in_array('Programming', $categories)) {
            echo "Programming is category on our system. \n";
        }
        var_dump(isset($categories[99]));
        var_dump(empty($categories[99])); //true
        // var_dump($categories[99]);
    ?></pre>
</body>
</html>
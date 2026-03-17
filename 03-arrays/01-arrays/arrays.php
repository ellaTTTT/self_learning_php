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
        $category1 = 'Programming';
        $category2 = 'Business';
        $category3 = 'Art & Drawing';
        $category4 = 'Self improvment';
        $category5 = 'History';

        // $categories = array('Programming', 'Business'.'!!!', 'Art & Drawing', 'Self improvment', 'History'); //should contain same type variables
        $categories = ['Programming', 'Business'.'!!!', 'Art & Drawing', 'Self improvment', 'History']; //should contain same type variables
        // echo $categories;
        var_dump($categories);
        echo $categories[0]."\n";
        echo $categories[3]."\n";

        $firstCategory = $categories[0];
        var_dump($firstCategory);
    ?></pre>
    <ul>
        <li><?php echo $category1; ?></li>
        <li><?php echo $category2; ?></li>
        <li><?php echo $category3; ?></li>
        <li><?php echo $category4; ?></li>
        <li><?php echo $category5; ?></li>
    </ul>

    <select>
        <option><?php echo $category1; ?></option>
        <option><?php echo $category2; ?></option>
        <option><?php echo $category3; ?></option>
        <option><?php echo $category4; ?></option>
        <option><?php echo $category5; ?></option>
</select>
</body>
</html>
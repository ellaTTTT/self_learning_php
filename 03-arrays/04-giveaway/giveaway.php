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
        ];
        $num = count($names);
        $choice = rand(0, $num-1);
        echo "The winner is : {$names[$choice]}!!!\n";

        var_dump($names[rand(0, count($names)-1)]);
    ?></pre>
</body>
</html>
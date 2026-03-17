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
        $categories = [
            'Programming',
            'Business',
            'Art & Drawing',
            'Self improvment',
            'History',
        ];
        var_dump(array_search('Business', $categories)); // array_search() is to find index from srecific variable.
        var_dump(array_slice($categories, 1, 2)); // search $categories start from position 1(index0) and  get 2 elements
        $numbers = [1, 5, 8, 10];
        var_dump(min($numbers)); //return value
        var_dump(max($numbers)); // return value
        var_dump(array_sum($numbers) / count($numbers));
        
        $topics = ['Courses', 'Books'];
        $topics2 = ['TV', 'Travel'];
        $out = array_merge($topics, $topics2);
        var_dump($out);

        var_dump([...$topics, ...$topics2, 'Groceries']);
        var_dump([$topics, $topics2]);
        $numbers = [10.123, 1];
        var_dump(round(...$numbers));
        echo round(...$numbers)."\n";
        echo round(10.123, 1)."\n";
        echo round($numbers[0], $numbers[1]);

    ?></pre>
</body>
</html>
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
        $books = [
            'Harry Potter' => 'J.K. Rowling',
            'Lord of the Rings' => 'J.R.R. Tolkien',
            'The Little Prince' => 'Antoine de Saint-Exupery',
            'Don Quixote' => 'Miguel de Cervantes',
            'Alice in Wonderland' => 'Lewis Carroll',
            0 => 'This is book #0',
            'Another book',
        ];

        $books['0'] = 'Overwritten....';
        var_dump($books['0']);
        echo "The book is at index: ".array_search('This is book #0', $books)."\n";
        var_dump($books);
    ?></pre>
</body>
</html>
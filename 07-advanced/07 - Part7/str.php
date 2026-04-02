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
    require_once __DIR__ . '/inc/functions.inc.php';
    $text = "PHP,short for \"Hypertext Preprocessor,\" is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.";

    var_dump($text[0]); //get the first character of $text.
    var_dump(substr($text, 0)); //get the string from index 0 to the end of $text.
?></pre>
<p>
    <strong><?php echo e($text[0]); ?></strong><?php echo e(substr($text, 1)); ?>
</p>
</body>
</html>
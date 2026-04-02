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

    $text = "PHP, short for \"Hypertext Preprocessor,\" is a server-side scripting language first introduced in 1994 by Rasmus Lerdorf. Distributed under a permissive license, PHP is open-source, allowing both personal and commercial use at no cost. It's a cross-platform language, compatible with various server operating systems like Linux, Windows, and macOS, making it highly versatile. The language boasts a large and supportive community, offering an extensive range of libraries, frameworks, and online resources, which has made it a staple for developing dynamic websites and web applications. One of its significant advantages is its seamless integration with relational databases such as MySQL.
PHP is designed with a syntax that many find user-friendly, although the ease of learning can be subjective and vary from person to person. The language allows for efficient coding; tasks like outputting text can be performed with simple commands like echo. Variables are easily declared, and PHP offers a comprehensive set of control structures, including conditional statements and loops, providing a balance between simplicity and functionality.
While PHP is most commonly used for server-side web development, its capabilities extend beyond that scope. The language has evolved to include command-line scripting and even the creation of desktop applications. However, its primary utility remains in server-side scripting, making it a robust and flexible choice for everything from small websites to complex web-based applications.";

    // var_dump(explode('.', $text)); //seperate string by '.' in $text and return an array.
    $splitted = explode("\n", $text);
    // var_dump(implode('.', $text));
    $merged = implode("----", $splitted); //merge array into a string with '----' between each element.
    var_dump($merged);
    var_dump($splitted);
?></pre>
    <?php foreach($splitted AS $sentence): ?>
        <p><?php echo e($sentence); ?></p>
    <?php endforeach; ?>

    <ul>
        <li><?php echo implode("</li><li>", explode("\n", e($text)));?></li>
    </ul>
</body>
</html>
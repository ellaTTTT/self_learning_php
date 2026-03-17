<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./simple.css" />
    <title>Document</title>
</head>
<body>
    hello
    <pre><?php 
        $greeting = 'I\'m a string';
        echo $greeting.'!!'. ' '.$greeting.'<br/>';
        $name='James';
        $subject='PHP';
        $text = 'I\'m '.$name.' and I want to learn '.$subject; 
        echo $text.'.<br/>';

        $Greetin = "I\"m learning PHP!";
        echo "{$Greetin}_!<br/>";
        echo "I'm {$name}, and I want to learn {$subject}.<br/>";
        echo 'I"m {$name}, and I want to learn {$subject}.';

        echo "\n";
        echo '-';
        echo "\t444<br/>";


        $promoCode = 'SUMMER_SALE';
        echo "Seasonal Offer! 🤑 Use \"{$promoCode}\" for an exclusive discount.";

        ?></pre>
        <p>A first line of text.<br/> A second line of text</p>
        <p>A first line of text.<?php echo "\n"; ?> A second line of text</p>
        <p><?php echo 'My last echo $subject'; ?></p> <!-- should prefer to use without calling variable, /n or sth -->
        <p><?php echo "My last echo {$subject}"; ?></p>
    <div>line
        hi
    </div>
</body>
</html>
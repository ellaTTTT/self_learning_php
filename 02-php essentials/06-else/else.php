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
        include 'vars.php';
        if($serverStatus === 'ok') {
            echo 'welcome to our website! Browse and enjoy our content!';
        }
        else if ($serverStatus === 'error') {
            echo 'Oops! We got an error right now. Please just call us at...';
        }
        else {
            echo 'We\'re currently undergoing maintenance. Please check back later.';
        }
    ?></pre>
</body>
</html>
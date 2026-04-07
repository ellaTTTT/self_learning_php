<?php
// $contant = file_get_contents(__DIR__."/../data/index.json");
// $data = json_decode($contant, true); //using json_decode to implement superset of JSON from $content, and true value means change this valarible to associate array type.
// var_dump($data);
// var_dump($data[0]['filename']);

// echo filesize(__DIR__.'/../data/singapore.json.bz2'); //the data was compressed via bz2
// phpinfo(); //check tools you have/execute or not.
$data = json_decode(file_get_contents('compress.bzip2://'.__DIR__.'/../data/singapore.json.bz2'), true); //uncompress data via compress.bzip2://, which was found in phpinfo()
var_dump($data);
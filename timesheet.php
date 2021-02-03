<?php
 /** 
  * I'm aware that cloning the phpcs and phpcbf isn't efficient 
  * (need to clone it for every project) and is only a temporary solution
  *
  * @category Idk
  * @package  Idk
  * @author   dlanaras <dimitrislanaras04@outlook.com>
  * @license  none
  * @link     https://github.com/dlanaras/timescheduler/tree/master
  */

require_once("./person.class.php");
require_once("./timestamp.class.php");

$i = 1; //index

echo "Bitte wählen Sie ihre Name";

/* logical notes?
//open the file
$opened = fopen("./data.json", "r") or die("Datei könnte nicht geöfnet werden");

//read the file


//decode it from json to php
$results = json_decode

//do something with timestamp.class.php

//print out every element of the array
foreach($results as $row) {
    printf("%s %s: #%d", $vorname, $name, $i);
    $i++;
}
*/
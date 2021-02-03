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

echo "      _________________________________
      |1: Namensliste                 |
      |2: Registration                |
      |3: Stempel machen              |
      |_______________________________| 
      ";

$answer = readline("Bitte wählen Sie eine Zahl: ");


switch($answer) {
case (1):
  $test = new Person("", "");
  $test->get_from_json();
break;
case(2):
  $test = new Person("", "");
  $test->add_to_json();
break;
case(3):
  $bigtest = new Stempel("", "", "");
  $bigtest->__setStamp();
break;
default: 
echo "Bitte geben Sie nur gültige Eingaben ein (1, 2 oder 3)";
}

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

echo "Bitte wählen Sie zuerst die 1 um zu kontrollieren ob Sie schon registriert sind";
*/
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


 /**
  * Constructor for the different people
  *
  * @param string $name lastname of person 
  * @param string $vorname Prename of person
  *
  * @return string
  */
class Person
{
    public $name;
    public $vorname;

    public function __construct($name, $vorname)
    {
        $this->name = $name;
        $this->vorname = $vorname;
    }
}

$userinput[0] = readline("Geben Sie Ihre Nachname ein: ");
$userinput[1] = readline("Geben Sie Ihre Vorname ein: ");

$per1 = new Person($userinput[0], $userinput[1]);
$per2 = new Person("Filler", "Filler");

$handle = fopen("./data.json", "w");
$towrite = "[ \n" . json_encode($per2). ",\n" . json_encode($per1) . "\n]";
fwrite($handle, $towrite);
fclose($handle);

$handle = fopen("./data.json", "r");
echo fread($handle, filesize("./data.json"));
fclose($handle);




//var_dump($per1, $per2);
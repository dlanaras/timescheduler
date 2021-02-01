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

$userinput[0] = readline("Geben Sie Ihre Nachname ein: \n");
$userinput[1] = readline("Geben Sie Ihre Vorname ein: \n");

$per1 = new Person("Lanaras", "Dimitrios");
$per2 = new Person($userinput[0], $userinput[1]);

var_dump($per1, $per2);
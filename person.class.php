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
    
    public function add_to_json()
    {
        $handle = fopen("./data.json", "a+");
        $answer = "ja";

        //nicht sehr effizient aber es funktioniert
        $stat = fstat($handle);
        ftruncate($handle, $stat['size']-2);

        while ($answer != "nein") {
            $userinput[0] = readline("Geben Sie Ihre Nachname ein: ");
            $userinput[1] = readline("Geben Sie Ihre Vorname ein: ");
            $per = new Person($userinput[0], $userinput[1]);

            $answer = readline("Wollen Sie noch einen Benutzer einfügen? (nein eingeben um das Programm zu beenden): ");

            $towrite = "," .PHP_EOL . json_encode($per);
            //$towrite = json_encode($per1). ",\n" . json_encode($per2);
            fwrite($handle, $towrite);
        }
        fwrite($handle, "\n]}");

        fclose($handle);
    } 
    
    /**
     * get_from_json
     *
     * @return string
     */
    public function get_from_json() {


        $handle = file_get_contents("./data.json", "r");
        $data = json_decode($handle, true);
        /*
        foreach($data as $result) {
            foreach ($result as $name){
                echo $name . "\n";
                $i++;
            }
        }*/

        foreach($data['Person'] as $result) {
            echo $result['vorname'] . "\n";
        }
    }
}

//Instanceing 

//and writing into data.json


//read


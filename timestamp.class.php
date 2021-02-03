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
 * Stempel
 */
class Stempel 
{
    public  $start;
    public  $end;
    public  $project;
    
    /**
     * __setStamp
     *
     * @return void
     */
    public function __setStamp() 
    {
        //checks if name entered is in array and creates file out of the name also adds timestamp in file
        $answer = readline("Wie heissen Sie: ");
        $project = readline("Woran arbeiten Sie jetzt? ");
        $stamp = new Stempel(date("h:i:s"), date("h:i:s"), $project);
        $jsonstamp = json_encode($stamp, true);
        $handle = file_get_contents("./data.json", "r");
        //if stamp isset on start and isset on project -> those 2 arent isset and end isset
        $data = json_decode($handle, true);
        
        foreach($data['Person'] as $result) {
        if($answer == $result['vorname']) {
          $filename = $result['vorname'] . ".json";
          $conn = fopen($filename, "a+");
          $stat = fstat($conn);
          ftruncate($conn, $stat['size']-2);
          fwrite($conn, "," . "\n" . $jsonstamp);
          fwrite($conn, "\n]}");
          fclose($conn);
        } 

        //For now the timestamps in the newly created files cannot be printed out due to wrong formating of json
      }

        print_r($stamp);
    }

    public function __construct($start, $end, $project) 
    {
      $this->start = $start;
      $this->end = $end;
      $this->project = $project;
    }

}

$bigtest = new Stempel("", "", "");
$bigtest->__setStamp();

//It's going to be turned into a function soon 



//$sub = strtotime($stamp->$end) - strtotime($stamp[$start]);

//echo $worktime = Stempel[start] - Stempel[end] . "\n";


//print_r($sub);

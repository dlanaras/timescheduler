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
        //if stamp isset on start and isset on project -> those 2 arent isset and end is isset
        //readcontents of json file and then check if start and project isset if not then create them else end = isset

        $handle = file_get_contents("./data.json", "r");
        $data = json_decode($handle, true);




        
        //if { "Timestamp": [ not in filegetcontents then create it also add filler after it
        foreach($data['Person'] as $result) {
        if($answer == $result['vorname']) {
          $filename = $result['vorname'] . ".json";
          $conn = fopen($filename, "a+");
          $stat = fstat($conn);

          $startOrEnd = file_get_contents($filename, "r");
          $decodeDecision = json_decode($startOrEnd, true);
          foreach($decodeDecision['Timestamp'] as $res) {
            if(isset($res['start']) == true) {
              $stamp = new Stempel(NULL, date("h:i:s"), NULL);
              $jsonstamp = json_encode($stamp, true);
            } else {
              $stamp = new Stempel(date("h:i:s"), NULL, $project);
              $jsonstamp = json_encode($stamp, true);
            }
          }


          if($stat['size'] > 2) {
          ftruncate($conn, $stat['size']-2);
          fwrite($conn, "," . "\n" . $jsonstamp);
          fwrite($conn, "\n]}");
          fclose($conn);
          } else {
            fwrite($conn, '{ "Timestamp": [' . "\n" . '{"start":"Test","end":"Test","project":"Test"}' . "\n]}" );
          }
        } 

      }

        print_r($stamp);
        echo "Wenn Etwas vor diese Linie ausgegeben wird, bedeutet dies dass der Prozess erfolgreich war.";
    }

    public function __construct($start, $end, $project) 
    {
      $this->start = $start;
      $this->end = $end;
      $this->project = $project;
    }

}



//It's going to be turned into a function soon 



//$sub = strtotime($stamp->$end) - strtotime($stamp[$start]);

//echo $worktime = Stempel[start] - Stempel[end] . "\n";


//print_r($sub);

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
        //Does something
    }

    public function __construct($start, $end, $project) 
    {
      $this->start = $start;
      $this->end = $end;
      $this->project = $project;
    }

}

//It's going to be turned into a function soon 
$project = readline("Woran arbeiten Sie jetzt? ");

$testtime = mktime(03, 56, 15);
$stamp = new Stempel(date("h:i:s"), date("h:i:s", $testtime), $project);
//$sub = strtotime($stamp->$end) - strtotime($stamp[$start]);

//echo $worktime = Stempel[start] - Stempel[end] . "\n";
print_r($stamp);

//print_r($sub);

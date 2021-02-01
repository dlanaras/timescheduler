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

class Stempel 
{
    public $start;
    public $end;
    public $project;

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
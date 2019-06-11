<?php
class stopwatch{
    public $starttime;
    public $endtime;
    public function __construct()
    {$this->starttime;
    }
    public function start(){
        $this->starttime=microtime(true);
    }
    public function end(){
        $this->endtime=microtime(true);
    }
    public function display(){
        return $this->endtime - $this->starttime;
    }
}
$st=new stopwatch();
$st->start();
for($i=0;$i<1000;$i++){
   $total+=$i;
}
$st->end();
echo $st->display();
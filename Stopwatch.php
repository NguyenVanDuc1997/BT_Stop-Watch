<?php


class Stopwatch
{
        private $startTime;
        private $endTime;
         public function __construct()
         {
         }
         public function start(){
          return  $this->startTime=time();
         }

         public function stop(){
            return $this->endTime=time();
         }

         public function getElapsedTime(){
            return $this->endTime-$this->startTime;
         }
}
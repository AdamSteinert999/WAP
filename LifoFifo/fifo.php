<?php

class FIFO implements Pushable{
  private $queue = [];

  public function push($value){
    array_unshift($this->queue, $value);
  }

  public function pop(){
    return array_pop($this->queue);
  }
}

?>
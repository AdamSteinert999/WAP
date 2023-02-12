<?php

class LIFO implements Pushable{
  private $stack = [];

  public function push($value){
    array_push($this->stack, $value);
  }

  public function pop(){
    return array_pop($this->stack);
  }
}

?>
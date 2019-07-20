<?php

class Task
{
  protected $description;

  protected $completed;
  public function __construct($description)
  { 
    $this->description = $description;
    // automatically triggered on instantiation
  }
}

$task = new Task('Go to the store');
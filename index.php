<?php

require 'function.php';
require 'check_age.php';

$task = [
  'title' => 'Finish homework',
  'due' => 'today',
  'assigned_to' => 'John',
  'completed' => true
];

check_age(10);

dd($task);

// require 'index.view.php';

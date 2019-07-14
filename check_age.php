<?php

function check_age($age) {
  if ($age > 21) {
    echo "you are allowed";
  } elseif ($age < 21) {
    echo "you are not eligible";
  }
}
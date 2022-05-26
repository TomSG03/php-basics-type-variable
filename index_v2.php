<?php

$type = '';

$variable = true;
// $variable = 3;
// $variable = 3.14;
// $variable = 'one';
// $variable = null;
// $variable = [];

switch(true)
{
  case is_bool($variable):
    $type = 'bool';
    break;
  case is_float($variable):
    $type = 'float';
    break;  
  case is_int($variable):
    $type = 'int';
    break;   
  case is_string($variable):
    $type = 'string';
    break; 
  case is_null($variable):
    $type = 'null';
    break; 
  default:
    $type = 'other';
    break;
}

echo "type is $type";


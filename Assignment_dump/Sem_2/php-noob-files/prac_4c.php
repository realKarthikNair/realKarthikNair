<?php

echo "Input 1 to make an indexed array <br/>";

echo "Input 2 to make an associative array<br/>";

echo "input 3 to exit<br/><br/>";

$input=2;

switch ($input)
{
case 1:  $array0=[1,2,3,4];break;
case 2:  $array0=array("Joe" => "Mama", "Rick" => "Astley");break;
case 3: echo "exit";
}

echo "Input was $input<br/><br/>";

print_r($array0);

?>
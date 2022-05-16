<?php

$array0=[12,33,11,22,55,21];

echo 'array0 before sorting is',"<br/>";

foreach($array0 as $el)
{
    echo $el,", ";
}


sort($array0);

echo "<br/><br/>sorted array is <br/>";

foreach($array0 as $el)
{
    echo $el,", ";
}

echo "<br/><br/>";

if (is_array($array0))
{
    echo '$array0 ',"is an array since ".'is_array($array0)'." returned true<br/><br/>";
}

echo "Number of elements in ".'$array0'." is ".count($array0);

echo "<br/><br/>".'$array0'." after shuffling is <br/>";
shuffle($array0);
foreach($array0 as $el)
{
    echo $el,", ";
}

echo "<br/><br/>Using end() function, the last element of ".'array0'." is ".end($array0);

echo "<br/><br/>Using reset() function, the first element of ".'array0'." is ".reset($array0);

asort($array0);

echo "<br/><br/>sorted array is <br/>";

foreach($array0 as $el)
{
    echo $el,", ";
}

echo "<br/><br/>";

$var1="Hello Mr. Anderson";
echo '$var1 with value '.$var1.'would be exploded into an array';
$arr1=explode(" ", $var1);
echo "<br/><br/>Array is <br/>";

print_r($arr1);
echo "<br/><br/>";

$name="Rick";
$profession="RickRolling";
$place="YouTube";

echo '$name: '.$name.' $profession: '.$profession.' $place: '.$place.' would be compacted into an associative array';

$arr2=compact("name", "profession", "place");

echo "<br/><br/>Array is <br/>";

print_r($arr2);
echo "<br/><br/>";

echo "Extracting key-value pairs from ".'$arr1'." into variable-value pairs";

extract($arr2);

echo "<br/><br/>";
echo "Printing values of variables : <br/> $name <br/> $place <br/> $profession <br/>";


?>
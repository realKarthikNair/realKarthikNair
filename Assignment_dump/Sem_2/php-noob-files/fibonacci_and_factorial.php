<?php

$a=0;$b=1;

echo "$a $b ";

$next=$a+$b;

for ($i=0; $i<=9; $i++)
{
	echo "$next ";
    $a=$b;
    $b=$next;
    $next=$a+$b;
}

$num=6;
$fact=1;
for ($i=1; $i<=$num; $i++)
{
    $fact*=$i;
}
echo "</br>factorial is $fact"
?>


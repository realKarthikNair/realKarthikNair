<?php

$x=10;
$y=5;

echo "Arithmetic operators<br/><br/>", "Addition: ","$x + $y =",$x + $y,"<br>","Subtration: ","$x - $y =",$x - $y,"<br>","Multiply: ","$x * $y =",$x * $y,"<br>","Division: $x / $y =",$x / $y,"<br>","modulous: $x % $y =",$x % $y,"<br>","exponential: $x ** $y=",$x ** $y,"<br><br>";

echo "Assignment operators<br/><br/>";
$num=55;
echo '$num was assigned the value '. $num.' using $num=55'."<br>";
$num+=5;
echo '$num',' after $num+=5 is ',"$num<br>";
$num-=10;
echo '$num',' after $num-=10 is ',"$num<br>";
$num*=6;
echo '$num',' after $num*=6 is ',"$num<br>";
$num/=10;
echo '$num',' after $num/=10 is ',"$num<br>";
$num%=3;
echo '$num',' after $num%=3 is ',"$num<br>";

echo "<br/>Bitwise operators<br/><br/>";

$a=10; $b=5;
echo "$a & $b is ",$a & $b,"<br/>";  
echo "$a | $b is ",$a | $b,"<br/>";  
echo "$a ^ $b is ",$a ^ $b,"<br/>";  
echo "~$a is ",~$a,"<br/>";
echo "$a << $b is ",$a << $b,"<br/>";  
echo "$a >> $b is ",$a >> $b,"<br/>";  

echo "<br/>Comparison operators<br/><br/>";

$a=10; $b=5; $c="10"; $d=10;
echo "Using these variables to demonstrate comparison operators<br/><br/>";

echo '$a: ',var_dump($a),"<br/>";
echo '$b: ',var_dump($b),"<br/>";
echo '$c: ',var_dump($c),"<br/>";
echo '$d: ',var_dump($d),"<br/>";

echo "<br/>";
if ($a==$c)
{
    if (!($a===$c))
    {
        echo '$a==$c is true but $a===$c isn\'t',"<br/>";
    }
}
if (!($a!=$c))
{
    if ($a!==$c)
    {
        echo '$a!=$c is false but $a!==$c is true',"<br/>";
    }
}

if ($b<=$a)
{
    echo '$b<=$a is true',"<br/>";
}


echo '$a<=>$d ','returns ',$a<=>$d,"<br/>";
echo '$a<=>$b ','returns ',$a<=>$b,"<br/>";
echo '$b<=>$a ','returns ',$b<=>$a,"<br/>";

echo "<br/>Incrementing/Decrementing operators<br/><br/>";

echo "Using ",'$a: ',var_dump($a) ," to demonstrate<br/><br/>";

echo '++$a ',"is ",++$a,"<br/>";
echo '$a ',"now is $a<br/>";
echo '$a++ ',"is ",$a++,"<br/>";
echo '$a ',"now is $a";
echo '--$a and $a-- also works the same way'."<br/><br/>";

echo "<br/>Logical operators<br/><br/>";

echo "Using the values returned by these to demonstrate <br/>";
echo '$a=(10>5)',"<br/>",
'$b=(10>12)',"<br/>",
'$c=(10<20)',"<br/><br/>";

$a=(10>5);
$b=(10>12);
$c=(10<20);


if ((!($a and $b))&&($a or $b))
{
    echo '$a and $b is ',"false but ",'$a or $b is ',"true ","<br/>";
}

if ($a xor $b)
{
    echo '$a xor $b is true',"<br/>";
}

if (!$b)
{
    echo '!$b is true';
}


?>  
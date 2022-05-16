<?php

echo "In for loop, the number of iterations are already known/fixed <br/>";
echo "Below is the output of a for loop executed 4 times<br/><br/>";

for ($i = 1; $i < 5; $i++)
    echo "Hello $i time(s)<br/> ";

echo "<br/>In while loop the command runs until a certain condition is reached
and the statement is proved to be false.<br/><br/>";

echo "Below is the output of a while loop that runs from 4, incremented by 1  
but exits when it encounters a multiple of three<br/><br/>";

$i=4;
while ($i%3!=0)
{
    echo "Number is $i and it is NOT a multiple of three <br/>";
    $i+=1;
}
echo "<br/>Loop exited since it encountered $i which is a multiple of three<br/>";

echo "<br/>In do-while loop too the command runs until a certain condition is reached
and the statement is proved to be false. <br/>BUT ATLEAST ONE ITERATION IS GUARANTEED<br/><br/>";

echo "Below is the output of a do-while loop that runs from 4 
but exits when it encounters a multiple of 4. <br/> BUT SINCE WE'RE USING DO-WHILE LOOP, 4  ITSELF WON'T BE COUNTED<br/><br/>";

$i=4;
do {
    echo "Number is $i and it is NOT a multiple of four<br/>";
    $i+=1;
}while ($i%4!=0);

echo "<br/>Loop exited since it encountered $i which is a multiple of four<br/>";


?>


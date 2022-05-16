<?php
echo "Defining a constant PI for 3.142857142857143 using define() function<br/><br/>";
define("PI", "3.142857142857143");
echo "22/7 is ".PI;

echo "<br/><br/>Creating a constant using const keyword <br/><br/>";
const VARIABLE = "Today is a beautiful day!<br/>";
echo VARIABLE, "<br/>";
echo "<br/><br/>Creating an Array constant using the define() function <br/>";
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);

echo "<br><br/>Element at index 2 of constant array is ".cars[2];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>
<body>
    <h1>PHP Conditional Statements</h1>  
    
    <h2>If Statements</h2>

    <p><em>The if statement executes some code if one condition is true.</em></p>
<?php
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
?>

<p>Another example of if statement</p>

<?php

if(10>5) {
echo "10 is greater than 5";

}

?>

<p>Another example of if statement</p>

<?php

if (5<10) {
echo "5 is less than 10";

}
?>


<h2>PHP - The if...else Statement</h2>

<p><em>The if...else statement executes some code if a condition is true and another code if that condition is false.</em></p>

<p>if the statement is true, the first echo is outputed, if not, the else statement is outputed</p>
<?php

if (5>10) {
echo "5 is greater than 10";
}
else{
echo "5 is not greater than 10";

}
?>

<p>Another example</p>
<?php

if (5<10) {
echo "5 is less than 10";

}

else{
echo "5 is greater than 10";

}

?>

<h2>PHP - The if...elseif...else Statement</h2>
<p><em>The if...elseif...else statement executes different codes for more than two conditions.</em></p>

<?php

if(5>10){

    echo"IT IS TRUE";
   
    }
   
   elseif(5>10){  
       echo"NOT CORRECT";
   }
   
   else{
    echo "5 is not greater than 10";

   }
   
   ?>

<p>Another example</p>

<?php

if(5>10){

    echo"IT IS TRUE";
   
    }
   
   elseif(5>2){  
       echo"NOT CORRECT";
   }
   
   else{
    echo "The elseif statement is correct";

   }
   
   ?>

<p>Another example</p>

<?php

if(5>10){

    echo"IT IS TRUE";
   
    }
   
   elseif(5>15){  
       echo"NOT CORRECT";
   }
   
   else{
    echo "5 is not greater than 10 nor 15";

   }
   
   ?>

<p>Another example</p>

<?php

if(5==10){

    echo"IT IS TRUE";
   
    }
   
   elseif(5<10){  
       echo"5 is less than 10";
   }
   
   else{
    echo "5 is not equal to 10";

   }
   
   ?>

<p>Another example</p>

<?php

if(5==10){

    echo"IT IS TRUE";
   
    }
   
   elseif(5>10){  
       echo"5 is not greater than 10";
   }
   
   else{
    echo "None of the above statement is true";

   }
   
   ?>

<p>Another example</p>

<?php

$t = date("Y");

if($t < 2020){

    echo"This year is 2020";
   
    }
   
   elseif($t < 2020){  
       echo"This Year is not 2020";
   }
   
   else{
    echo "This year is greater than 2023";

   }
   
   ?>

<h4>Another example</h4>

<?php

$nathan = 10;
$ose = 5;

if($ose==$nathan) {
    echo "Ose is equal to Nathan";
}

elseif($ose>$nathan) {
    echo "True";
}

else{
echo "none is true";

}
?>





</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>

    <h1>PHP Functions</h1>
    <p>Note: A function name must start with a letter or an underscore. Function names are NOT case-sensitive.</p>

    <p><em>Example 1</em></p>

    <p>In the example below, the function name is child and it is used to output "the name of my son is Nathan"</p>

    <?php

    function child(){
        echo "The name of my son is Nathan";

    }
        child();


    ?>


<h3>PHP Function Arguments</h3>

<p><i>Example 2: single argument</i></p>

<?php

function surname($firstname){
echo "Isidahomen $firstname . <br>";

}

surname ("Smart");
surname ("Nathan");
surname ("Precious");
surname ("Natalie");


?>


<p><i>Example 3</i></p>
<p>The following example has a function with two arguments ($firstname and $year):</p>

<?php

function familyname($firstname, $year){
    echo "$firstname Isidahomen  was born in $year <br>";

}

familyname ("Smart", "1991");
familyname ("Nathan", "2022");
familyname ("Precious", "1992");
familyname ("Natalie", "2025");

?>


<h3>PHP Functions - Returning values</h3>

<p>To let a function return a value, use the return statement:</p>

<p><i>Example 1</i></p>

<?php

function add($number1, $number2){

return $number1 + $number2;

}

echo add(45, 50);

?>


<p><i>Practice 1</i></p>

<?php

function sum($x, $y){
    $z = $x + $y;
    return $z;
}

echo sum(10, 5);

?>

<p><i>Practice 2</i></p>
<?php

$x = 15;
$y = 20;
$z = $x * $y;

function addition($z){
   return $z;    //this can be commented out also and output won't be affected
}

echo ($z);

?>

<h3>Multiple Functions</h3>

<p><i>Practice 3</i></p>
<?php

function all(){     //Main function
    maths();
    echo'&nbsp';
    smart();
    echo'&nbsp';
    nathan();

}

function maths(){    //sub function 1
    echo 4850*365;


}

function smart(){     //sub function 2

    echo "Hello Mr Smart, do you undertstand the backend class?";
}

function nathan(){    //sub function 3

echo "Nathan is my son";

}

all();   //note: each of the sub function can be called individual or in combination

?>


<h3>Passing Arguments by Reference</h3>

<p><i>Example 1</i></p>

<?php

function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;

?>

<h3>No strict declaration</h3>

<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, "5 days");

?>


<h3>Class work</h3>


<?php

function newfunction(){

echo ("Hello World");
}

newfunction();
?>

</body>
</html>
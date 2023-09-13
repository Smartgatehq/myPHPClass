<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sorting Arrays</title>
</head>
<body>

    <h1>PHP Sorting Arrays</h1>
    <p>The elements in an array can be sorted in alphabetical or numerical order, descending or ascending.</p>

    <h3>PHP - Sort Functions For Arrays</h3>

    <p>In this chapter, we will go through the following PHP array sort functions:</p>

    <ul>

    <li>sort() - sort arrays in ascending order</li>
    <li>rsort() - sort arrays in descending order</li>
    <li>asort() - sort associative arrays in ascending order, according to the value</li>
    <li>ksort() - sort associative arrays in ascending order, according to the key</li>
    <li>arsort() - sort associative arrays in descending order, according to the value</li>
    <li>krsort() - sort associative arrays in descending order, according to the key</li>

    </ul>

    <p><i>Example 1</i></p>

<?php

    $list = [204,45,85,698,14,38,55,04,];

    echo max($list); //this outputs the highest number
    echo "<br>";
    echo min($list); //this outputs the smalles number
    echo "<br>";
    echo sort($list); //this sorts the array array in accending order
    echo "<br>";
    print_r($list);

?>

<h3>Sort Array in Ascending Order - sort()</h3>

<p><i>Example 1</i></p>

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
// print_r($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>




</body>
</html>
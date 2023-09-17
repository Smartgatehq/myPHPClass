<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP foreach Loop</title>
</head>
<body>
    <h1>PHP foreach Loop</h1>
    <p>The foreach loop - Loops through a block of code for each element in an array.</p>
    <p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>

<p><em>Example 1</em></p>

<p>The example below stores different names in arrays to the varible $name and $name is same as $smart</p>

<?php

$name = ["JOHN","PETER","UNCLE","EFE","STEVE","JONES","EDITH","BIGGI","JOY","TIM","JOJO","QUEEN","JOAN","WALTER","EDITH"];

foreach ($name as $smart){
echo $smart . "<br>";

}
?>

<p><em>Example 2</em></p>
<p>The following example will output the values of the given array ($colors):</p>

<?php
$colors = ["Blue","Red","Green","Yellow","Pink",];

foreach ($colors as $favcolors) {
echo $favcolors . "<br>";

}
?>


<p><em>Example 3</em></p>

<?php

$mychildren = array ("Nathan", "Bryan", "Natalie", "Royale",);
foreach($mychildren as $smart_children){
    echo $smart_children . "<br>";
}

?>

<p><em>Example 4</em></p>
<p>The example below uses numbers</p>

<?php

$numbers = [10, 20, 30, 40, 50, 60];
foreach($numbers as $values){
echo $values . "<br>";

}

?>

<p>Example 5</p>
<p>The following example will output both the keys and the values of the given array ($children):</p>

<?php

$mychildren = ["Nathan"=>"10", "Bryan"=>"20", "Natalie"=>"30", "Royale"=>"40",];
foreach($mychildren as $name => $age){
echo "$name = $age <br>";

}

?>

</body>
</html>
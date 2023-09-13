<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <h1>PHP Arrays</h1>
    <p>An array stores multiple values in one single variable:</p>

    <p><i>Example 1</i></p>

    <?php
        $cars = array("Volvo", "BMW", "Toyota"); 
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>


<h3>There are three types of arrays</h3>
<ol>
    <li><b>Index Arrays"</b> Arrays with a numeric index</li>
    <li><b>Associate Arrays:</b>Arrays with named keys</li>
    <li><b>Multidimensional Arrays:</b>Arrays containing one or more arrays</li>
</ol>
    
<h3>Get the lenght of an Array: The count() Function</h3>

<p><i>Example 2</i></p>

<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>

</body>
</html>
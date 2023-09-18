<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <h1>The PHP switch Statement</h1>
    
<p>The switch statement is used to perform different actions based on different conditions.</p>

<p>Use the switch statement to select one of many blocks of code to be executed.</p>

<p><em>Example 1</em></p>
<p>when none of the case is the answer, the default is outputted</p>
<?php

$myson = "Nathan";

switch ($myson) {

case "Bryan":

    echo "my son's name is Bryan";
    break;

case "Tim":
    echo "my son's name is Tim";
    break;
case "King":
    echo "my son's name is King";
    break;
case "Felix":
    echo "my son's name is Felix";
    break;

default:
echo "my son's name is Ose";    


}

?>


<p><em>Example 2</em></p>
<p>when one of the case is the answer, the statement for that case is outputted</p>
<?php

$myson = "Nathan";

switch ($myson) {

case "Bryan":

    echo "my son's name is Bryan";
    break;

case "Tim":
    echo "my son's name is Tim";
    break;
case "Nathan":
    echo "my son's name is Nathan";
    break;
case "Felix":
    echo "my son's name is Felix";
    break;

default:
echo "my son's name is Ose";    


}

?>


<p><em>Example 3</em></p>
<p>when one of the case is the answer, the statement for that case is outputted</p>


<?php

$answer = "Friday";

switch($answer){

case "Monday": 
    echo "Today is not Monday but friday";
    break;
    case "Tuesday":
        echo "Today is not tuesday but friday";
    break;
    case "Wednesday": 
    echo "Yes today is Wednesday";
    break;
    case "Thursday":
    echo "Today is not thursday but friday";
    break;
    case "Friday":
        echo "Today is friday";
    break;
    case "Saturday": 
    echo "Today is not Saturday but friday";
    break;
    case "Sunday":
    echo "Today is not sunday but friday";

}
?>

<p><em>example 4</em></p>

<p>Using switch statement to check if a username is correct</p>


<?php

$username = "smartercss";

switch ($username) {

    case "smartmgr":
    echo "incorrect username";
    break;

    case "smartercss":
    echo "correct username";
    break;

    default:
    echo "username is incorrect";
}
?>

</body>
</html>
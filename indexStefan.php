<?php
//* declaring variables

$name = "Stefan";
$surname = "Gouldson";

//$fullName = $name . " " . $surname; //* alternative way of concacting
$fullName = "$name $surname";

//define('passportID',009); //* old way of declaring constants
const age = 22;

$cars = ["Lambo", "Jaguar", "Bentley"];
$cars[] = "Ferrari"; //* add to array
// array_unshift($cars, "Porche"); //* add alternative

//echo $cars[0]; //* view first element in array
//print_r($cars) //* view full array
//var_dump($cars); //* PHP version of console.log
//dd($cars); //TODO fuck knows

//* associative array
$emails = [
    "Stefan" => "stefangouldson@gmail.com",
    "Nathan" => "Nathan@Caspian.co.uk",
    "Lauren" => "Lauren@bridgewater.com",
    "Robbie" => "Robert@CodeNation.co.uk"
];

//* for loop
// for ($i=0; $i < count($cars); $i++){
//     echo "$cars[$i] <br>";
// }

//* functions

$number = 3; //Global var

function addFive($num)
{
    $num += 5;
    $tag = "<h2>$num</h2>";
    echo $tag;
}

function addTen(&$number)
{
    $number += 10;
    echo "<h2>$number</h2>";
}

?>
​
​
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Intro to PHP</h1>
    <h3>My name is <?php echo $fullName ?></h3>
    <h3>my age is <?php echo age ?></h3>
    <h3>I own <?php echo count($cars) ?> cars</h3>
    <h3>They are: <br> <?php foreach ($cars as $car) {
                            echo $car . "<br>";
                        } ?></h3>
    <h3>My favourite is <?php echo $cars[0]; ?></h3>
    <h3>My email is <?php echo $emails["Stefan"]; ?></h3>
    <h3><?php foreach ($emails as $name1 => $email) {
            echo "the email of $name1 is $email <br>";
        } ?></h3>
    <h3><?php echo "my glob var is $number"; ?></h3>
    <h3>My global variable after ran in function addFive<?php addFive($number) ?></h3>
    <h3>My variable globally however is still <?php echo $number; ?></h3>
    <h3>Ran in the addTen function with & in the parameter, the answer is <?php addTen($number) ?></h3>
    <h3>And after running that function my global var is now <?php echo $number ?></h3>

</body>

</html>
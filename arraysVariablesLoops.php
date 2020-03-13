<?php 

//! <br /> means everything on list will print out on separate lines.
// TODO always end each line with a ;

//* Declaring Variables

//start variable with $
$name = "Lauren"; 
$surname = "Moor";

// echo $name; //echo means to print
// $fullName = $name . ' ' . $surname; //to concatinate strings
$fullName = "$name $surname"; //must use double quotes

// define("passportID", 007);
const passportID = "007";



//* Arrays

$cars = array("Lambo", "Jaguar", "Bentley"); //one way to create array
$cars = ["Lambo", "Jaguar", "Bentley"]; //second way to create array

// $cars[] = "Ferrari"; //method to add
// array_unshift($cars, "Porche"); //* add alternative

//echo $cars[0]; //* view first element in array
//print_r($cars) //* view full array
//var_dump($cars); //* PHP version of console.log
//dd($cars); //TODO fuck knows


//* for debugging
// print_r($cars); //print_r only works for arrays
// var_dump($cars);
// dd($cars);

// echo $cars[0];


$emails = array("Lauren" => "laurenkaede@gmail.com", 
                "John" => "John@email.com"); 

//* associative array
$emails = [
    "Stefan" => "stefangouldson@gmail.com",
    "Nathan" => "Nathan@Caspian.co.uk",
    "Lauren" => "Lauren@bridgewater.com",
    "Robbie" => "Robert@CodeNation.co.uk"
]; 

// echo $emails["Lauren"];

//* for loop

for($i=0; $i < count($cars); $i++) { 
    echo "$cars[$i]. <br />"; 
}

foreach ($cars as $car) {
    echo "My favourite car is $car <br />";
}

foreach ($emails as $name => $email) {
    echo "The email of $name is $email <br />";
}


//* functions

$myNumber = 3;

function addFive($number)
{
    $number = $number + 5;
    $number += 5;
    echo "$number <br />";
}

addFive($myNumber);
echo "My global variable myNumber is $myNumber";

function addTen(&$number){  
// & mutates the value at the top (global variable)
    $number += 10;
    echo "$number <br />";
}

addTen($myNumber);
echo "My global variable myNumber is $myNumber";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Intro to PHP</h1>
    <h3>My name is <?php echo $fullName ?></h3>
    <h3>My passport number is <?php echo passportID ?></h3>
</body>

</html>
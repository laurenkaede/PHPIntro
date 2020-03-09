<?php //start variable with $
// echo phpversion();
// $name = "Lauren"; //always end each line with a ;
// $surname = "Moor";

// // echo $name; //echo means to print
// // $fullName = $name . ' ' . $surname; //to concatinate strings
// $fullName = "$name $surname"; //must use double quotes

// // define("passportID", 007);
// const passportID = "007";



// //arrays

// // $cars = array("Lambo", "Jaguar", "Bentley"); //one way to create array
// $cars = ["Lambo", "Jaguar", "Bentley"]; //second way to create array
// $cars[] = "Ferrari"; //method to add
// array_unshift($cars, "Porsche"); //method to add
// $reverse = array_reverse($cars); //method to reverse
// print_r($reverse);
// // echo count($cars);


// //for debugging
// // print_r($cars); //print_r only works for arrays
// // var_dump($cars);
// // dd($cars);

// // echo $cars[0];


// $emails = array("Lauren" => "laurenkaede@gmail.com", "John" => "John@email.com"); //associative array 

// // echo $emails["Lauren"];

// // for($i=0; $i < count($cars); $i++) { // for loop.
// //     echo "$cars[$i]. <br />"; // <br /> means everything on list will print out on separate lines.
// // }

// foreach ($cars as $car) {
//     echo "My favourite car is $car <br />";
// }

// foreach ($emails as $name => $email) {
//     echo "The email of $name is $email <br />";
// }


// //functions

// $myNumber = 3;

// function addFive($number)
// {
//     // $number = $number + 5;
//     $number += 5;
//     echo "$number <br />";
// }

// addFive($myNumber);
// echo "My global variable myNumber is $myNumber";

// function addTen(&$number){  // & mutates the value at the top (global variable)
//     $number += 10;
//     echo "$number <br />";
// }

// addTen($myNumber);
// echo "My global variable myNumber is $myNumber";

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
<?php
    $dayOfTheWeek = "Saturday";

    if($dayOfTheWeek == "Sunday" || $dayOfTheWeek == "Saturday") {
        echo "We are on the weekend <br />";
    } else {
        echo "We are on the working week <br />";
    }

$wallet = 1200;

if( $wallet > 0 && $wallet < 1000) {
    echo "Let's go to the pub <br />";
} 

// A break ends the switch statement.
// Switch statements are an alternative way to if/else statements.

$favColour = "yellow";

switch($favColour) {
    case 'red':
        echo "My favourite colour is red <br />";
        break; 
    case 'blue':
        echo "My favourite colour is blue <br />";
        break;
    default:
        echo "My favourite colour is something else <br />";
}  



?>

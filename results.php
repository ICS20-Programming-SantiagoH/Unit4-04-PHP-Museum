<?php

// get age from user
$age = $_POST['age'];
$dayOfTheWeek = $_POST['dayOfTheWeek'];

//Display if user can watch r rated movies
if ($age <= 5 || $age >= 95) {
  echo "You can go enter for free.";

}

  // Display if user can watch G rated movies
else if ($age >= 12 && $age <= 21 || $dayOfTheWeek == "Tuesday" || $dayOfTheWeek == "Thursday") {
  echo "You get the student discount.";

}

// Display is the user does not enter a valid age
else {
  echo "You have to pay full price.";    
}

?>
<?php

//message for the user
  $message = "";
  // Use first and second number user has entered for results
    
  $userNumber = $_POST['userNumber'];


  //initialize counter and factorial

  $factorial = 1;


  $counter =  1;

  //statement for the do while loop
  do {
    
   //factorial calculation
    $factorial = $factorial * $counter;

    //increment counter
    $counter++;

  } while ($counter <= $userNumber);

  //Message if user enters nothing 

  if ($userNumber >= 0){
    $message = $message . "The Factorial of " . $userNumber . " is " . $factorial;
  }
  else {
     $message = "Please Enter a Number";
  }
  // Display Results back to User
  echo $message;
?>
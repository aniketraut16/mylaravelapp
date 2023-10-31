<?php
// Getting 2 numbers from user
$number1 = (int) readline("Enter 1st number:");
$number2 = (int) readline("Enter 2nd number:");

// Displaying Numbers Before Swapping
echo "Before Swapping \n";
echo "Number 1 = " , $number1 , "\nNumber 2 = ", $number2 , "\n";

//Swapping Numbers
$temporarynumber = $number1;
$number1 = $number2;
$number2 = $temporarynumber;

//Displaying Numbers After Swapping
echo "\nAfter Swapping \n";
echo "Number 1 = " , $number1 , "\nNumber 2 = ", $number2 ,"\n";
?>
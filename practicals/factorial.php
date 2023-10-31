<?php

// Making a Function to calculate the Factorial
function factorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

// Getting numbers from user
$number = (int) readline("Enter a number:");

//Calling the function to calculate the Factorial
$fact = factorial($number);

//Displaying the result
echo "Factorial of ",$number ," is " ,$fact,"\n";
?>
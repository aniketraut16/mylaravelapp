<?php
// Function to find fibonacci number
function fibonacci($n) {

    // Base case

    if ($n == 0 || $n == 1) {
        return $n;
    } else {

        // Recursive case: calculate the Fibonacci number by summing the previous two Fibonacci numbers
        
        $fibonacci_minus_1 = fibonacci($n - 1);
        $fibonacci_minus_2 = fibonacci($n - 2);
        $fibonacci_number = $fibonacci_minus_1 + $fibonacci_minus_2;
        return $fibonacci_number;

    }
}

// Number of Fibonacci numbers to print
$num_terms = (int) readline("Enter Number of terms to display in Fibonacci Sequence:");

echo "Fibonacci Sequence for the first $num_terms terms:\n";

// Print the Fibonacci Sequence
for ($i = 0; $i < $num_terms; $i++) {
    $fibonacci_number = fibonacci($i);
    echo "$fibonacci_number";
    
    if ($i < $num_terms - 1) {
        echo ", ";
    } else {
        echo "\n";
    }
}
?>

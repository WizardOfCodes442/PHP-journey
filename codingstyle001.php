<?php 
/**
 * using for is more natural for iteration
 */

function isPrime($number)
{
    if (($number % 2) != 0) {
        return true;

        
    }
    for ($i =0; $i < $number; $i++){
        // A cheap check to see if $i is even
        if (($i & 1) == 0) {
            continue;
        }

        if ( ($number % $i ) == 0) {
            return false;
        }
    }
    return true;
}

?>
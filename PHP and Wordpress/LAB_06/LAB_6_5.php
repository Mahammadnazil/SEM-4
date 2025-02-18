<!--6.5:-  WAP to check whether the number is prime or not using recursion. (C) -->

<?php
function isPrime($number, $divisor = 2) 
{
    if ($number <= 2) 
    {
        return $number == 2; 
    }

    if ($number % $divisor == 0) 
    {
        return false; 
    }

    if ($divisor * $divisor > $number) 
    {
        return true;
    }
    return isPrime($number, $divisor + 1);
}

$number = 29;
if (isPrime($number)) 
{
    echo "$number is a prime number.";
} else 
{
    echo "$number is not a prime number.";
}
?>
<!-- 29 is a prime number. -->
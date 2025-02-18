<!--6.4:- WAP to calculate factorial of a number using recursion. (B) -->
<?php
function factorial($number) 
{
    if ($number <= 1) 
    {
        return 1;
    }
    return $number * factorial($number - 1);
}
$number = 5;
$result = factorial($number);
echo "The factorial of $number is: $result";
?>
<!-- The factorial of 5 is: 120 -->
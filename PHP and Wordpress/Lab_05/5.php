<?php
    function maxNo($a,$b,$c) {
        if ($a>$b and $a>$c)
        {
            echo $a."=IS Max number";
        }
        elseif ($b>$a and $b>$c)
        {
            echo $b."=IS Max number";
        }
        elseif ($c>$a and $c>$b)
        {
            echo $c."=IS Max number";
        }
        else
        {
            echo "Two or more Number are Same";
        }
    }

    maxNo(10,20,30);    
?>
<?php
    $arr=array(
        array(1,2,3,4,5),
        array(45,56,89,87)
    );

    foreach($arr as $subarry)
    {

        foreach($subarry as $value)
            {
                echo " "."$value";
            } 
            echo"<br>";
    }
?>
<?php
    $arr =array(1,2,3,4,5,6,7,8,9,10);
    $odd=0;
    $even=0;
    foreach($arr as $val)
    {
        if($val%2==0)
        {
            $even++;
        }
        else{
            $odd++;
        }
    }
    echo "1 to 10 number odd".$odd."<br>";
    echo " 1 to 10 number even".$even."<br>";

?>
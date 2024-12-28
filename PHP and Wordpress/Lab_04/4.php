<?php
    $arr=array(
        array( 1=>"Name",
        "name"=>"YUG"),
        array( 1=>"Name",
        "name"=>"YUG")

    );

    foreach($arr as $key=>$val)
    {
        foreach($val as $k=>$v)
        {

            echo "key=".$k." ".$v;
        }
        echo "<br>";
    }
?>  
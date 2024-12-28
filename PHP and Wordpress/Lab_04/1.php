<!-- WAP to create numeric array and print it -->
<!-- array print using fro loop -->

<?php 
    $arr=array(1,2,3,4,5);

    for($i=0;$i<count($arr);$i++)
    {
        echo " ".$arr[$i];
    }
    echo"<br> ";
?>

<!-- array print using froeach loop -->

<?php 
    $arr=array(1,2,3,4,5);

    foreach($arr as $val)
    {
        echo " ".$val;
    }
?>
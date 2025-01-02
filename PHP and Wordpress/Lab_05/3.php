<?php
    function simpleintrest($p,$r,$t) {
        return ($p*$r*$t)/100;
    }
    $result= simpleintrest(100,20,30);
    echo $result;
?>
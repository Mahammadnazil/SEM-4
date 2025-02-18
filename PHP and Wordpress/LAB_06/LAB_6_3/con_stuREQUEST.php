<?php
    if(!isset($_REQUEST["sub"])){
        echo "not submited";
    }else{
        $name=$_REQUEST["name"];
        $email=$_REQUEST["email"];
        $pass=$_REQUEST["password"];
 
        echo "name:".$name."<br>";
        echo "email:".$email."<br>";
        echo "pass:".$pass."<br>";
    }
?>
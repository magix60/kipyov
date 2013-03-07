<?php
    include_once("controller.php");

    if(!islogin()){
        header("Location: ".getbase()."login.php");
    } else {
        if(true){
            include_once("adminindex.php");
        } else {
            include_once("memberindex.php");
        }
    }
?>
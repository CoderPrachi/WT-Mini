<?php
    session_start();
     $usertype = $_SESSION["usertype"];
    if($usertype=="student"){
        header("refresh:0; url=tutor.php");
    }

    if($usertype=="tutor"){
        header("refresh:0; url=student.php");
    }
?>
                    
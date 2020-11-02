<?php

$usertype = $_POST["UserTypeLanding"];
$name = $_POST["uname"];
$phone = $_POST["uphone"];
$email = $_POST["uemail"];
$course = $_POST["ucourse"];
$usubject = $_POST["usubject"];

session_start();
$_SESSION["usertype"]=$usertype;

try{
$con = mysqli_connect("localhost","root","","mini") or die("connection not established");
if($con==false){
    echo "connection error";
}
else{
    if($usertype=="student"){
        $sql = "INSERT INTO `student` (`stud_name`, `mobno`, `email`, `course`, `subject`) VALUES('$name','$phone', '$email', '$course', '$usubject')";
    }
    if($usertype=="tutor"){
        $sql = "INSERT INTO `tutor` (`tut_name`, `mobno`, `email`, `course`, `subject`) VALUES('$name','$phone', '$email', '$course', '$usubject')";
    }

  // $sql = "INSERT INTO `student` (`stud_name`, `mobno`, `email`, `course`, `subject`) VALUES('$name','$phone', '$email', '$course', '$usubject')";
   $result = mysqli_query($con,$sql);
    if($result){
        echo "<script>alert('Registration Successfull !!')</script>";
        header("refresh:5; url=requirement.html");
    }
    else{
        echo "Record not inserted";  
    }
}
}
catch (Exception $ex){
    echo $ex->get_message();
}

?>

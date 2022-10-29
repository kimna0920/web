<?php
    include "../dbconn.php";
    $getNo = $_POST['no'];
    $getName = $_POST['name'];
    $getJob = $_POST['job'];
    $getInsta = $_POST['insta'];
    $getPhone = $_POST['phone'];
    $getEmail = $_POST['email'];
    
    echo $getNo." ".$getName." ".$getJob." ".$getInsta." ".$getPhone." "$getEmail;
?>
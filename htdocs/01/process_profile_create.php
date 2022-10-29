<?php
include "../dbconn.php";

$getName = $_POST['name'];
$getJob = $_POST['job'];
$getInsta = $_POST['insta'];
$getPhone = $_POST['phone'];
$getEmail= $_POST['email'];
echo $getName." ".$getJob." ".$getInsta." ".$getPhone." ".$getEmail;

    $sql = "INSERT into profile SET pf_name='$getName', pf_job='$getJob', pf_insta='$getInsta', pf_phone='$getPhone', pf_email='$getEmail'";
    $query = mysqli_query($conn, $sql);
    
    if($query){
        echo"<script>alert('생성되었습니다.'); location.href='list.php';</script>";
    }else{
        echo"<script>alert('생성되지 않았습니다.'); location.href='list.php';</script>";
        exit;
    }
//$sql = "SELECT * FROM profile WHERE pf_name=''";
//$query = mysqli_query($conn, $sql);

//if(mysqli_num_rows($query)>0){
//    echo "<script>alert('해당아이디가 존재합니다.'); history.back();</script>";
//    exit;
//}
//else{

//}
?>
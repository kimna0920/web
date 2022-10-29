<?php
    include "../dbconn.php";
    $getNo = $_POST['no'];
    $getName = $_POST['name'];
    $getJob = $_POST['job'];
    $getInsta = $_POST['insta'];
    $getPhone = $_POST['phone'];
    $getEmail = $_POST['email'];
    
//    echo $getNo." ".$getName." ".$getJob." ".$getInsta." ".$getPhone." ".$getEmail;

    $sql="UPDATE profile SET pf_name='{$getName}', pf_job='{$getJob}', pf_insta='{$getInsta}', pf_phone='{$getPhone}', pf_email='{$getEmail}' WHERE pf_no='{$getNo}'";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo"<script>alert('수정되었습니다.'); location.href='list.php';</script>";
    }else{
        echo"<script>alert('수정되지 않았습니다.'); location.href='list.php';</script>";
        exit;
    }
?>
<?php
    header('Contect-type: text/html; charset-utf-8');
    session_start();
    
    include "../dbconn.php";
    include "../createSalt.php";

    date_default_timezone_set('Asia/Seoul');
    
    $getId = $_POST['id'];
    $getPw = $_POST['pw'];

    $sql = "SELECT * FROM client WHERE ct_id='$getId'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    $dbId = $data['ct_id'];
    $dbPw = $data['ct_pw'];
    $salt = $data['ct_salt'];

    $hash = hash('sha256', $getPw);
    $password = hash('sha256', $salt.$hash);

    if($getId == $dbId and $password){
        $_SESSION['user_id'] = $getId;
        $_SESSION['user_name'] = $data['ct_name'];
        $_SESSION['user_phone'] = $data['ct_phone'];
        $_SESSION['user_email'] = $data['ct_email'];
        $_SESSION['user_gender'] = $data['ct_gender'];
        $_SESSION['user_age'] = $data['ct_age'];
        $_SESSION['user_job'] = $data['ct_job'];
        $_SESSION['user_intersets'] = $data['ct_intersets'];
        
        echo"<script>alert('Welcome! {$_SESSION['user_id']} Login complete.'); location.href='index.php';</script>";
    }else{
        echo"<script>alert('아이디와 비밀번호가 일치하지 않습니다.'); history.back();</script>";
        exit;
    }
?>
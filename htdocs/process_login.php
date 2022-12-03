<?php
    include "dbconn.php";
    session_start();
    
    $getId = $_POST['id'];
    $getPw = $_POST['pw'];

    $sql = "SELECT * FROM member WHERE mb_id='$getId'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    $dbid = $data['mb_id'];
    $dbpw = $data['mb_pw'];
    $salt = $data['mb_salt'];
    $hash = hash('sha256', $getPw);
    $hash = hash('sha256', $salt.$hash);

//    echo $getId."<br>";
//    echo $dbpw."<br>";
//    echo $dbid."<br>";
//    echo $hash."<br>";

    if($getId == $dbid and $dbpw == $hash){
        $_SESSION['user_id'] = $getId;
        $_SESSION['user_name'] = $data['mb_name'];
        $_SESSION['user_hobby'] = $data['mb_hobby'];
        $_SESSION['user_num'] = $data['mb_num'];
        $_SESSION['user_mbti'] = $data['mb_mbti'];
        $_SESSION['user_salt'] = $data['mb_salt'];
        
//        $sql = "SHOW tables LIKE $getId";
//        $query = mysqli_query($conn, $sql);
//        
        echo"<script>alert('로그인되었습니다.'); location.href='index.php';</script>";
        

    }
    else{
        echo"<script>alert('아이디와 비밀번호가 일치하지 않습니다.'); history.back(-1);</script>";
        exit;
    }
    
?>
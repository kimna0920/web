<?php
include "dbconn.php";

$getId = $_POST['id'];
$getPw = $_POST['pw'];
$getName = $_POST['name'];
$getNum = $_POST['num'];
$getHobby = $_POST['hobby'];
$getMbti = $_POST['mbti'];
$salt = 'aaa';

$sql = "SELECT * FROM member WHERE mb_id='$getId'";
$query = mysqli_query($conn, $sql);

if(mysqli_num_rows($query)>0){
    echo "<script>alert('해당아이디가 존재합니다.'); history.back();</script>";
    exit;
}else{
    $sql = "INSERT into member SET mb_id='$getId', mb_pw='$getPw', mb_name='$getName', mb_hobby='$getHobby', mb_num='$getNum', mb_mbti='$getMbti', mb_salt='$salt'";
    $query = mysqli_query($conn, $sql);
    
    echo "<script>alert('멤버 추가가 완료 되었습니다.');location.href='board.php';</script>";
    exit;
}

?>
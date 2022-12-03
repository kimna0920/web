<?php
    include "dbconn.php";

    $getNo = $_GET['no'];
    echo $getNo;

    $sql = "DELETE FROM member WHERE mb_no='{$getNo}'";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo"<script>alert('멤버가 삭제되었습니다.'); location.href='board.php';</script>";
    }else{
        echo"<script>alert('멤버가 삭제되지 않았습니다.'); location.href='board.php';</script>";
        exit;
    }
?>
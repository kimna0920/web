<?php
    include "dbconn.php";
    $sql = "SELECT * FROM member";
    $query = mysqli_query($conn, $sql);
   // $data = mysqli_fetch_array($query);

//    echo $data['mb_no']."<br>";
//    echo $data['mb_name']."<br>";
//    echo $data['mb_hobby']."<br>";
//    echo $data['mb_num']."<br>";
//    echo $data['mb_mbti']."<br>";

    $trData = ' ';
    while($data = mysqli_fetch_array($query)){
        $getNo = $data['mb_no'];
        $getName = $data['mb_name'];
        $getHobby = $data['mb_hobby'];
        $getNum = $data['mb_num'];
        $getMbti = $data['mb_mbti'];
        
        $trData = $trData."<tr>
        <td>{$getNo}</td>
        <td>{$getName}</td>
        <td>{$getHobby}</td>
        <td>{$getNum}</td>
        <td>{$getMbti}</td>
        <td>
            <a class=\"updateBtn\" href =\"#\">수정</a>
            <a class=\"deleteBtn\" href =\"#\">삭제</a>
        </td>
        </tr>";   
    }

?>




<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
    <meta charset="UTF-8">
    <title>나영이의 흔한 인맥</title>
</head>
<body>
<!--    <form action="">-->
        <h1>나영이의 흔한 인맥</h1>
        <table border="1px">
            <th>순번</th>
            <th>이름</th>
            <th>취미</th>
            <th>학번</th>
            <th>MBTI</th>
            <th>기능</th>
            <tr>
            <?php
                echo $trData;
            ?>

        </table>
<!--    </form>-->
</body>
</html>
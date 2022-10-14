<?php
    include "dbconn.php";
    $sql = "SELECT * FROM member";
    $query = mysqli_query($conn, $sql);
    
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
            <a href=\"#\">수정</a>
            <a href=\"#\">삭제</a>
        </td>
        </tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>메인페이지</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>나영이의 흔한 인맥</h1>
    <form action="">
        <table border= "1px">
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
                </tr>
        </table>
    </form>
    
</body>
</html>
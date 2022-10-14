<?php
     include "dbconn.php";
     //db test 데이터를 읽어오기 read
     //Mysql select문
     // $sql = "SELECT * FROM list";
     // $query = mysqli_query($conn,$sql);
     //데이터 내의 행의 개수
     // $rows = mysqli_num_rows($query);
     // echo $rows."<br>";
     // 테이블내의 전개 데이터 불러오기
     // while($data = mysqli_fetch_array($query)){
     //    echo $data['li_no'].' '.$data['li_title'].' '.$data['li_contents']."<br>";
     // }
     $sql ="SELECT * FROM list WHERE li_no='2'";
     $query = mysqli_query($conn,$sql);
     $data = mysqli_fetch_array($query);

     // echo $data['li_title']."<br>";
     // echo $data['li_contents']."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>메인페이지</title>
</head>
<body>
     <nav>
          <ul>
               <li><a href="board.php">흔한인맥</a></li>
               <li><a href="/01/list.php">흔한프로필</a></li>
          </ul>
     </nav>
</body>
</html>

<?php
 include "dbconn.php";
    $trData = '';
     $sql ="SELECT * FROM member  ";
     $query = mysqli_query($conn,$sql);
    // $data = mysqli_fetch_array($query);
     $rows = mysqli_num_rows($query);

 while($data = mysqli_fetch_array($query)){
    $getNo = $data['mb_no'];
    $getName = $data['mb_name'];
    $getHobby = $data['mb_hobby'];
    $getNum = $data['mb_num'];
    $getMbti = $data['mb_mbti'];
// echo $data['mb_no'].' '.$data['mb_name'].' '.$data['mb_hobby'].' '.$data['mb_num'].' '.$data['mb_mbti']."<br>";
    $trData =$trData."<tr>
                  <td>{$getNo}</td>
                  <td>{$getName}</td>
                  <td>{$getHobby}</td>
                  <td>{$getNum}</td>
                  <td>{$getMbti}</td>
                  <td>
            <a class=\"updateBtn\" href=\"member_update_from.php?no={$getNo}\">수정</a>
            <a class=\"deleteBtn \"href=\"process_member_delete.php?no={$getNo}\">삭제</a>
           </td>
              </tr>";

      }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=   , initial-scale=1.0">
    <title>예서의 흔한 인맥</title>
       <style>
        .wrap{
            width: 60%;
            margin: 0 auto;

        }
        .wrap h1{
            padding: 20px 0;
            text-align:center;
            color: #777;
            text-shadow: 4px 4px 4px #eddcf5;
        }
        .wrap .frdList{
            width: 100%;
            border-collapse: collapse;
            text-align:center;
           box-shadow: 4px 4px 4px #aaa;
           border: none;
        }
        .wrap .frdList td, .wrap .frdList th{
            padding: 8px;
            border: none;
            border-bottom: 1px solid #ddd ;
        }
        .wrap .frdList tr:nth-of-type(2n-1){
              background: #eee;
        }
        .wrap .frdList .updateBtn,.wrap .frdList .deleteBtn{
            text-decoration: none;
            display:  inline-block;
            background: #a558cc;
            color:#eee;
            padding: 4px 8px;
            border-radius: 4px;
        }
       </style>
</head>
<body>
    <div class="wrap">
        <h1>예서의 흔한 인맥</h1>

     <table class="frdList" border>
        <tr>
           <th>순번</th>
           <th>이름</th>
           <th>취미</th>
           <th>학번</th>
           <th>엠비티아이</th>
           <th>기능</th>

        </tr>

            <?php  echo $trData; ?>

       <!--  <tr>
            <td>1</td>
            <td>강예서</td>
            <td>그림그리기</td>
            <td>20601</td>
            <td>infj</td>
           <td>
            <a class="updateBtn" href="#">수정</a>
            <a class="deleteBtn "href="#">삭제</a>
           </td>
        </tr>
         <tr>
            <td>2</td>
            <td>강은민</td>
            <td>운동하기</td>
            <td>20602</td>
            <td>intj</td>
            <td>
            <a  class="updateBtn" href="#">수정</a>
            <a class="deleteBtn "href="#">삭제</a>
           </td>
        </tr>
         <tr>
            <td>3</td>
            <td>강지원</td>
            <td>켈리그라피</td>
            <td>20603</td>
            <td>enfj</td>
            <td>
            <a class="updateBtn"href="#">수정</a>
            <a class="deleteBtn " href="#">삭제</a>
           </td>
        </tr> -->

     </table>
     <a href="member_create_form.php">생성</a>
    </div>
</body>
</html>

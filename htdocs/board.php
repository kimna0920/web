<?php
 include "dbconn.php";
 session_start(); 
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
        <?php
            if($_SESSION['user_id']=='admin'){
        ?>
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
         </table>
     <a href="member_create_form.php">멤버추가</a>
     <?php
     }else{
        echo "<script>alert('관리자 외에 접근 할 수 없습니다.');history.back(-1);</script>";
                
     }
     ?>
    </div>
</body>
</html>

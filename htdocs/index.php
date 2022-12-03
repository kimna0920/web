<?php
     include "dbconn.php";
     session_start();

//     if(isset($_SESSION['user_id'])){
//         echo $_SESSION['user_id'];
//     }
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
     $sql ="SELECT * FROM member ";
     $query = mysqli_query($conn,$sql);
     $data = mysqli_fetch_array($query);

     $getName = $data['mb_name'];

     // echo $data['li_title']."<br>";
     // echo $data['li_contents']."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>메인페이지</title>
     <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a0fdef4e51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
         <header>
            <div class="topMenu">
               <div class="welcome">
                   <?php    
                    if(!isset($_SESSION['user_id'])){
                    ?>
                        <p>로그인해주세요.</p>
                   <?php
                    }else{
                   ?>
                    <p><span><?php echo $_SESSION['user_name'] ?></span>님 반갑습니다.</p>
                   <?php
                    }
                   ?>  
               </div>
               
                <ul class="util">
                   <?php    
                    if(!isset($_SESSION['user_id'])){
                    ?>
                        <li><a href="login_form.php">로그인</a></li>
                        <li><a href="member_join.php">회원가입</a></li>
                    <?php
                    }else if($_SESSION['user_id']=='admin'){
                    ?> <p>관리자님 반갑습니다.</p>
                       <li><a href="board.php">회원관리</a></li>
                       <li><a href="process_logout.php">로그아웃</a></li>
                        
                   <?php
                    }else if(isset($_SESSION['user_id'])){
                   ?>
                        <li><a href="process_logout.php">로그아웃</a></li>
                    
                   <?php    
                    }
                    ?>
                    <li><a href="#">고객센터</a></li>
                </ul>
             <ul id="gnb">
                   <li><a href="board.php">흔한인맥</a></li>
                   <li><a href="/01/list.php">흔한프로필</a></li>
                   <li><a href="/02/index.php">주식회사 흔함</a></li>
                   <li><a href="#">흔한XXX</a></li>
                   <li><a href="#">흔한YYY</a></li>
              </ul>
            </div>
           <nav>
          
          </nav>
         </header>
     
</body>
</html>
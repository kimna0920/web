 <?php
    include "dbconn.php";

    $getNo = $_GET['no'];
    $sql ="SELECT * FROM member WHERE mb_no='{$getNo}'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    $getId = $data['mb_id'];
    $getPw = $data['mb_pw'];
    $getName = $data['mb_name'];
    $getHobby = $data['mb_hobby'];
    $getNum = $data['mb_num'];
    $getMbti = $data['mb_mbti'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrap">
        <form action="process_member_create.php" method="post">
            <div class="input_form">
                <label for="id">아이디</label>
                    <input type="text" name="id" id="id" value="<?php echo $getId ?>">
            </div>
             <div class="input_form">
                <label for="pw">비밀번호</label>
                    <input type="password" name="pw" id="pw" value="<?php echo $getPw ?>" placeholder="비밀번호를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="name">이름</label>
                    <input type="text" name="name" id="name" value="<?php echo $getName ?>" placeholder="이름를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="hobby">취미</label>
                    <input type="text" name="hobby" id="hobby" value="<?php echo $getHobby ?>" placeholder="취미를 입력해주세요">
            </div>
             <div class="input_form">
                <label for="number">학번</label>
                    <input type="number" name="number" id="number" value="<?php echo $getNum ?>" placeholder="학번을입력해주세요">
            </div>
             <div class="input_form">
                <label for="mbti">mbti</label>
                    <input type="text" name="mbti" id="mbti" value="<?php echo $getMbti ?>" placeholder="mbti를 입력해주세요">
            </div>
               <div class="btn_box">
                   <input type="submit" value="수정">
                   <input type="reset" value="취소">
               </div>
        </form>
    </div>
</body>
</html>

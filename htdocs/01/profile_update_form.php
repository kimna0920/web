<?php
    include "../dbconn.php";
    $getNo = $_GET['no'];
    $sql = "SELECT * FROM profile WHERE pf_no='{$getNo}'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    $getName = $data['pf_name'];
    $getJob = $data['pf_job'];
    $getInsta = $data['pf_insta'];
    $getPhone = $data['pf_phone'];
    $getEmail = $data['pf_email'];
    echo $getName." ".$getJob." ".$getInsta." ".$getPhone." ".$getEmail;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>프로필 수정폼</title>
</head>
<body>
    <div class="wrap">
        <form action="process_profile_update.php" method="POST">
            <div class="input_form">
                <label for="name">이름</label>
                <input type="text" name="name" id="name" value="<?php echo $getName ?>">
            </div>
            <div class="input_form">
                <label for="job">직업</label>
                <input type="text" name="job" id="job" value="<?php echo $getJob ?>">
            </div>
            <div class="input_form">
                <label for="insta">인스타 아이디</label>
                <input type="text" name="insta" id="insta" value="<?php echo $getInsta ?>">
            </div>
            <div class="input_form">
                <label for="phone">전화번호</label>
                <input type="text" name="phone" id="phone" value="<?php echo $getPhone ?>">
            </div>
            <div class="input_form">
                <label for="email">이메일</label>
                <input type="text" name="email" id="email" value="<?php echo $getEmail ?>">
            </div>
            <div class="btn_box">
                <input type="hidden" name="no" value="<?php echo $getNo; ?>">
                <input type="submit" value="수정">
                <input type="reset" value="취소">
            </div>
        </form>
    </div>
</body>
</html>
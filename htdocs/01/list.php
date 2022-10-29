<?php
    include "../dbconn.php";

    $sql = "SELECT * FROM profile";
    $query = mysqli_query($conn, $sql);
    $trData = "";
    while($data = mysqli_fetch_array($query)){
//        echo $data['pf_no']." ".$data['pf_name']."<br>";
        $getNo = $data['pf_no'];
        $getName = $data['pf_name'];
        $trData = $trData."
                <tr>
                    <td>$getNo</td>
                    <td>$getName</td>
                    <td><a href=\"propile.php?no={$getNo}\">프로필보기</a></td>
                    <td>
                        <a href=\"profile_update_form.php?no={$getNo}\">수정</a>
                        <a href=\"process_profile_delete.php?no={$getNo}\">삭제</a>
                        
                    </td>
                </tr>
        ";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>흔한프로필</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/list.css">
</head>
<body>
    <div class="wrap">
        <div class="header">
            
        </div>
        <div class="list">
           <div class="btn_box">
               <a href="propile_create_form.php">생성하기</a>
           </div>
            <table border>
                <tr>
                    <td>번호</td>
                    <td>이름</td>
                    <td>프로필보기</td>
                    <td>기능</td>
                </tr>
                <?php echo $trData; ?>
            </table>
        </div>
    </div>
</body>
</html>
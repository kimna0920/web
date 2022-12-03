<?php
    header('Content-type: text/html; charset=utf-8');

    include "dbconn.php";
    include "createSalt.php";

    date_default_timezone_set('Asia/Seoul');
    $salt = createSalt();
//    echo $salt;
    $getId = $_POST['id'];
    $getName = $_POST['name'];
    $getHobby = $_POST['hobby'];
    $getNum = $_POST['number'];
    $getMbti = $_POST['mbti'];

    $getPw = $_POST['pw'];
    $hash = hash('sha256', $getPw);
    $password = hash('sha256', $salt.$hash);

//    echo $getId.' '.$password.' '.$getName;

    $sql = "SELECT * FROM member WHERE mb_id ='$getId'";
    $query = mysqli_query($conn,$sql);

    if(mysqli_num_rows($query)>0){
        echo "<script>alert('해당 아이디가 존재합니다.'); history.back(); </script>";
        exit;
    }
    else{
        $sql = "INSERT into member SET mb_id='$getId', mb_pw='$password',mb_name='$getName',mb_hobby='$getHobby', mb_num='$getNum', mb_mbti='$getMbti', mb_salt='$salt'";
        $query = mysqli_query($conn,$sql);
            
        echo "<script>alert('회원가입이 완료되었습니다.');location.href='index.php'</script>";
    }
?>
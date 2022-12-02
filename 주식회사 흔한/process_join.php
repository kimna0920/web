<?php
    header('Content-type: text/html; charset=utf-8');

    include "../dbconn.php";
    include "../createSalt.php";

    date_default_timezone_set('Asia/Seoul');
    $salt = createSalt();

    $getId = $_POST['id'];
    $getPw = $_POST['pw'];
    $getName = $_POST['name'];
    $getFnum = $_POST['first_num'];
    $getSnum = $_POST['second_num'];
    $getTnum = $_POST['third_num'];
    $getFadd = $_POST['first_addr'];
    $getSadd = $_POST['second_addr'];
    $getGender = $_POST['gender'];
    $getAge = $_POST['age'];
    $getJob = $_POST['job'];
    $getInterests = $_POST['interests'];
    $getAgree = $_POST['agree'];
    
    $hash = hash('sha256', $getPw);
    $password = hash('sha256', $salt.$hash);

//    echo $getId."<br>";
//    echo $getPw." ".$password."<br>";
//    echo $getName."<br>";
    $phone = $getFnum."-".$getSnum."-".$getTnum."<br>";
    $email = $getFadd."@".$getSadd."<br>";
//    echo $getGender."<br>";
//    echo $getAge."<br>";
//    echo $getJob."<br>";
    $interests = '';
    for($i = 0; $i<count($getInterests); $i++){
        if($i == count($getInterests)-1){
            $interests = $interests.$getInterests[$i];
        }
        else{
            $interests = $interests.$getInterests[$i]."/";
        }
    }
    $date = date('Y-m-d H:i:s', time());

    $sql = "SELECT * FROM client WHERE ct_id='$getId'";
    $query = mysqli_query($conn, $sql);


//    프로그래밍/디자인/교육
if(mysqli_num_rows($query) > 0){
    echo "<script>alert('해당 아이디가 존재합니다'); history.back();</script>";
}
    $sql = "INSERT INTO client(ct_id, ct_pw, ct_name, ct_phone, ct_email, ct_gender, ct_age, ct_job, ct_interests, ct_agree, ct_date, ct_salt) VALUES('$getId','$getPw','$getName','$phone', '$email','$getGender','$getAge','$getJob','$interests', '$getAgree', '$date', '$salt')";
    $query = mysqli_query($conn, $sql);
    echo "<script>alert('멤버가 추가되었습니다'); loction.href='index.php';</script>";
    
?>

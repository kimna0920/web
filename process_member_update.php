<?php
include "dbconn.php";

$getNo = $_POST['no'];
$getPw = $_POST['pw'];
$getName = $_POST['name'];
$getHobby = $_POST['hobby'];
$getNum = $_POST['number'];
$getMbti = $_POST['mbti'];

echo $getPw." ".$getName." ".$getHobby." ".$getNo." ".$getMbti;

//sql구문
$sql = "UPDATE member SET mb_pw='$getPw', mb_name='$getName', mb_hobby='$getHobby', mb_num='$getNum', mb_MBTI='$getMbti' WHERE mb_no='$getNo'";
$query = mysqli_query($conn, $sql);

if($query){
    echo "<script>alert('멤버가 수정되었습니다.');location.href='board.php'</script>";
    
}
else{
    echo "<script>alert('멤버가 수정되지 않았습니다.'); history.back(); </script>";
    exit;
}
?>
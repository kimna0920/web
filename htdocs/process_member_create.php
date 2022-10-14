<?php
 include "dbconn.php";

   $getId =$_POST['id'];
   $getPw =$_POST['pw'];
   $getName =$_POST['name'];
   $getHobby =$_POST['hobby'];
   $getNumber =$_POST['number'];
   $getMbti =$_POST['mbti'];
   $salt ='aaa';
   // echo $getId.' '.$getPw.' '.$getName.' '. $getHobby.' '. $getNumber.' '. $getMbti.' '.$salt;
       $sql ="SELECT * FROM member WHERE mb_id ='$getId' ";
       $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) > 0){
        echo "<script>alert('해당 아이디가 존재합니다.'); history.back(); </script>";
        exit;
      }
      else{
        $sql = "INSERT into member set mb_id='$getId',mb_pw='$getPw',mb_name='$getName',mb_hobby='$getHobby',mb_num='$getNumber',mb_mbti='$getMbti',mb_salt='$salt'";
        $query = mysqli_query($conn,$sql);

        echo "<script>alert('멤버 추가가 완료되었습니다.');location.href='board.php'</script>";
      }


?>

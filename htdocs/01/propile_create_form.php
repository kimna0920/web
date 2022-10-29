<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>프로필 생성</title>
    <script src="https://kit.fontawesome.com/a0fdef4e51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/propile_create_form.css">
</head>
<body>
   <div class="wrap">
       <form action="process_profile_create.php" method="post">
           <div class="input_form">
               <label for="name"><i class="fa-regular fa-user"></i>NAME</label>
               <input type="text" name="name" id="name" placeholder="Input_your_name." required>
           </div>
            <div class="input_form">
               <label for="job"><i class="fa-solid fa-briefcase"></i>JOB</label>
               <input type="text" name="job" id="job" placeholder="Input_your_job." required>
           </div>
           <div class="input_form">
               <label for="insta"><i class="fa-brands fa-square-instagram"></i>INSTAGRAM</label>
               <input type="text" name="insta" id="phone" placeholder="Input_your_instagram account.">
           </div>
           <div class="input_form">
               <label for="phone"><i class="fa-solid fa-mobile"></i>phone Number</label>
               <input type="text" name="phone" id="phone" placeholder="Input_your_phone Number.">
           </div>
           <div class="input_form">
               <label for="email"><i class="fa-solid fa-envelope"></i>E-MAIL</label>
               <input type="text" name="email" id="phone" placeholder="Input_your_email.">
           </div>
           <div class="btn_box">
               <input type="submit" value="생성">
               <input type="reset" value="취소">
           </div>
        </form>
           
   </div>
</body>
</html>
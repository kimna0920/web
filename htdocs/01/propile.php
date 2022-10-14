<?php
    include "../dbconn.php";

    $getNo = $_GET['no'];

    $sql = "SELECT * FROM profile WHERE pf_no=$getNo";
    $query = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($query);
    $data = mysqli_fetch_array($query);

    $getName = $data['pf_name'];
    $getJob = $data['pf_job'];
    $getInsta = $data['pf_insta'];
    $getPhone = $data['pf_phone'];
    $getEmail = $data['pf_email'];

//    echo $getName.' '.$getJob.' '.$getInsta.' '.$getPhone.' '.$getEmail;
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>프로필카드</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a0fdef4e51.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="js/ie.js"></script>
</head>
<body>
    <section>
        <nav class="menu">
            <a href="#"><i class="fas fa-bars"></i></a>
            <a href="#"><i class="far fa-sticky-note"></i></a>
        </nav>
        <article class="profile">
            <img src="img/Wonyoung.jpg" alt="프로필 이미지">
            <h1><?php echo $getName; ?></h1>
            <h2><?php echo $getJob; ?></h2>
            <a href="#" class="btnView">View</a>
        </article>
        <ul class="contact">
            <li>
                <i class="fa-brands fa-square-instagram"></i>
                <span><a href="https://www.instagram.com/<?php echo $getInsta; ?>">Visit My instagram.</a></span>
            </li>
            <li>
                <i class="fas fa-envelope"></i>
                <span><?php echo $getEmail; ?></span>
            </li>
            <li>
                <i class="fa-solid fa-mobile"></i>
                <span><?php echo $getPhone; ?></span>
            </li>
        </ul>
        <nav class="others">
            <a href="https://www.instagram.com/<?php echo $getInsta; ?>"></a>
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </nav>
    </section>
</body>
</html>
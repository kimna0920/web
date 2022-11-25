<?php
header('Content-type: text/html; charset=utf-8');

include "../dbconn.php";

if(mysqli_connect_error()){
    echo "MYSQL Connection error: ".mysqli_connect_error();
    exit;
}else{
    echo "DB : $dbname Connection success.<br>";
}

//table 만들기
$sql = "CREATE TABLE client(
    ct_id VARCHAR(255) NOT NULL,
    ct_pw VARCHAR(255) NOT NULL,
    ct_name VARCHAR(255) NOT NULL,
    ct_phone VARCHAR(255) NOT NULL,
    ct_email VARCHAR(255) NOT NULL,
    ct_gender VARCHAR(255) NOT NULL,
    ct_age INT(11) NOT NULL,
    ct_job VARCHAR(255) NOT NULL,
    ct_interests VARCHAR(255) NOT NULL,
    ct_agree INT(11) NOT NULL,
    ct_date VARCHAR(255) NOT NULL,
    ct_salt VARCHAR(255) NOT NULL,
    PRIMARY KEY(ct_id)
) charset=utf8";
$query = mysqli_query($conn, $sql);

if($query){
    echo "DB table creation success<br>";
}else{
    echo "DB table creation error : ".mysqli_error($conn);
    exit;
}
?>
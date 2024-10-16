<?php
    session_start();
    $db = mysqli_connect("localhost","root","","test");
    if (mysqli_connect_errno()){
        echo "DB 연결에 실패했습니다. :" . mysqli_connect_error();
    }
    $db->set_charset("utf8"); //DB의 문자셋을 utf-8로 설정함
    function my_query($sql){
        global $db;
        return $db->query($sql);
    }
?>

<?php
    include "../db.php";
    $name = $_POST['fname'];
    $pay = $_POST['fpay'];
    $R_day = $_POST['fR_day'];
    $detail = $_POST['fdetail'];
    $image= $_POST['fimage'];

    $sql = my_query("insert into 20415_burger (name,pay,R_day,detail,image) values('
        ".$name."','".$pay."','".$R_day."','".$detail."','".$image."')");

?>
    <script type="text/javascript">alert('회원가입이 완료되었습니다.')
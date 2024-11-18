<?php
    include "../db.php";
    $userid = $_POST['fid'];
    $userpw = $_POST['fpass'];
    $username = $_POST['fname'];
    $addr = $_POST['faddr'];
    $gender = $_POST['fgender'];
    $email = $_POST['femail'];

$sql = my_query("insert into testmember (id,pass,name,address,gender,email) values(
    '".$userid."',
    '".$userpw."',
    '".$username."',
    '".$addr."',
    '".$gender."',
    '".$email."'
    )");

    ?>
    <script type="text/javascript">alert('회원가입이 완료되었습니다');
    location.href="index.php"</script>
    <meta http-equiv="refresh" content="0url=/">
<?php
    include "../db.php";
    $name = $_POST['fname'];
    $team = $_POST['fteam'];
    $age  = $_POST['fage'];
    $league = $_POST['fleague'];
    $nationily = $_POST['fnationily'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20330_son (name,team,age,league,nationily,image) values('".$name."','".$team."','".$age."','".$league."','".$nationily."','".$image."')");
?>
<script type="text/javascript">alert('선수 입력이 완료되었습니다.');
location.href="index.php"</script>
<meta http-equiv="refresh" content="0 url=/">
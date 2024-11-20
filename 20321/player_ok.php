<?php
    include "../db.php";
    $name = $_POST['fname'];
    $club = $_POST['fclub'];
    $country = $_POST['fcountry'];
    $position = $_POST['fposition'];
    $explan = $_POST['fexplan'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20321_player (name, club, country, position, explan, image) values(
    '".$name."',
    '".$club."',
    '".$country."',
    '".$position."',
    '".$explan."',
    '".$image."'
    )");
?>
<script type = "text/javascript">alert('선수 입력이 완료 되었습니다.');</script>
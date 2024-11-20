<?php
    include "../db.php";
    $name = $_POST['fname'];
    $P_date = $_POST['fp_date'];
    $Genre = $_POST['fgenre'];
    $rating = $_POST['frating'];
    $explanation = $_POST['fexplanation'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20423_game(name,P_date,Genre,rating,explanation,image) values('".$name."','".$P_date."','".$Genre."','".$rating."','".$explanation."','".$image."')");
?>
<script type="text/javascript">alert('게임 입력 검색 완료');</script>
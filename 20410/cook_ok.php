<?php

include "../db.php";
$name = $_POST['fname'];
$diff = $_POST['fdiff'];
$c_stuff = $_POST['fc_stuff'];
$recipe = $_POST['frecipe'];
$c_info = $_POST['fc_info'];
$image = $_POST['fimage'];

$sql = my_query("insert into 20410_cook (name,diff,c_stuff,recipe,c_info,image) values(
    '".$name."',
    '".$diff."',
    '".$c_stuff."',
    '".$recipe."',
    '".$c_info."',
    '".$image."'
    )");

?>

<script type = "text/javascript">alert('요리 업로드가 완료되었습니다.')
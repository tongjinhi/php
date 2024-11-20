<?php
    include "../db.php";
    $person_id = $_POST['fid'];
    $series = $_POST['fsereis'];
    $influence = $_POST['finfluence'];
    $times = $_POST['ftimes'];
    $nationality = $_POST['fnationality'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20402_artistsearch (person_id, series,influence,times,nationality,image) values('".$person_id."','".$series."','".$influence."','".$times."','".$nationality."','".$image."')");
?>

<script type="text/javascript"> alert ('아티스트 검색 완료되었습니다.'); </script>
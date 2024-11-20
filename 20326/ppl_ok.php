<<?php
    include "../db.php";
    $categorization = $_POST['fcategorization'];
    $name = $_POST['fname'];
    $actor = $_POST['factor'];
    $time = $_POST['ftime'];
    $ratings = $_POST['fratings'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20326_ppl (categorization,name,actor,time,ratings,image) values('
    ".$categorization."','".$name."','".$actor."','".$time."','".$ratings."','".$image."')");
?>
<script type="text/javascript">alert('정보가 업데이트 되었습니다.');
</script>
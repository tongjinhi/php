<?php
    include "../db.php";
    $creture_name = $_POST['fcreture_name'];
    $killability = $_POST['fkillability'];
    $attack = $_POST['fattack'];
    $max = $_POST['fmax'];
    $behavier = $_POST['fbehavier'];
    $image = $_POST['fimage'];




$sql = my_query("insert into 20310_lc (creture_name,killability,attack,max,behavier,image) values(
        '".$creture_name."','".$killability."','".$attack."','".$max."','".$behavier."','".$image."')");


?>

<script type="text/javascript">alert('입력이 완료되었습니다.');
</script>
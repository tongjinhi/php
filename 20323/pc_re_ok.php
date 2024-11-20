<?php
    include "../db.php";
    $game = $_POST["fgame"];
    $goal = $_POST["fgoal"];
    $performance = $_POST["fperformance"];
    $cpu_br = $_POST["fcpu_br"];
    $pc_price = $_POST["fpc_price"];
    $image = $_POST["fimage"];

$sql = my_query("INSERT INTO 20323_pc_re VALUES (
'".$game."',
'".$goal."',
'".$performance."',
'".$cpu_br."',
'".$pc_price."',
'".$image."'
)");

?>

<script type = "text/javascript">
alert("컴퓨터 사양 입력이 완료되었습니다.");
</script>
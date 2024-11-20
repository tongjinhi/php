<?php
    include "../db.php";
    $stock_name = $_POST['fid'];
    $stock_information = $_POST['finformation'];
    $Graph = $_POST['fgraph'];
    $chart = $_POST['fchart'];
    $country = $_POST['fcountry'];
    $image = $_POST['fimage'];
    $sql = my_query ("insert into 20407_stock(stock_name,stock_information,Graph,chart,country,image) values(
    '".$stock_name."',
    '".$stock_information."',
    '".$Graph."',
    '".$chart."',
    '".$country."',
    '".$image."')");
?>
<script type="text/javascript">alert('주식정보가 입력되었습니다.');
Location.href="index.php"</script>
<?php
    include "../db.php";
    $prod_num = $_POST['fprod_num'];
    $item = $_POST['fitem'];
    $color = $_POST['fcolor'];
    $price = $_POST['fprice'];
    $like_num = $_POST['flike_num'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20418_store(prod_num,item,color,price,like_num,image)values(
    '".$prod_num."',
    '".$item."',
    '".$color."',
    '".$price."',
    '".$like_num."',
    '".$image."')");
?>
<script type="text/javascript">alert('옷 관리가 완료되었습니다.');
</script>
<?php
    include "../db.php";
    $Area = $_POST['fArea'];
    $Place = $_POST['fPlace'];
    $culture = $_POST['fculture'];
    $hotel = $_POST['fhotel'];
    $restaurant = $_POST['frestaurant'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20416_trip (Area,Place,culture,hotel,restaurant,image) values(
    '".$Area."',
    '".$Place."',
    '".$culture."',
    '".$hotel."',
    '".$restaurant."',
    '".$image."'
)");
?>
<script type="text/javascript"> alert ('장소 찾기가 완료되었습니다.');
</script>
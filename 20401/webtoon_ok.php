<?php
    include "../db.php";
    $title = $_POST['ftitle'];
    $author = $_POST['fauthor'];
    $genre = $_POST['fgenre'];
    $serial_period = $_POST['fserial_period'];
    $serialization_cycle = $_POST['fserialization_cycle'];
    $image = $_POST['fimage'];

    echo $title . $author . $genre;
    echo $serial_period . $serialization_cycle . $image;

    $sql = my_query("insert into 20401_webtoon(title,author,genre,serial_period,serialization_cycle,image) values('".$title."', '".$author."','".$genre."','".$serial_period."','".$serialization_cycle."','".$image."')");
?>

<script type="text/javascript">alert('웹툰정보 완료되었습니다.')</script>
<?php
    include "../db.php";
    $name=$_POST['fname'];
    $maker=$_POST['fmaker'];
    $version=$_POST['fversion'];
    $map_date=$_POST['fmap_date'];
    $description=$_POST['fdescription'];
    $image=$_POST['fimage'];

$sql = my_query("insert into 20303_map (name,maker,version,map_date,description,image) values('".$name."','".$maker."','".$version."','".$map_date."','".$description."','".$image."')"
);

?>

<script type="text/javascript">alert('등록이 완료 되었습니다.');</script>
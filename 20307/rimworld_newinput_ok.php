<?php
include '../db.php';

$name = $_POST['fname'];
$type = $_POST['ftype'];
$rel_date = $_POST['fdate'];
$contents = $_POST['fcontents'];
$price = $_POST['fprice'];
$buylink = $_POST['fbuylink'];
$imglink = $_POST['fimglink'];

$query = "INSERT INTO 20307_official VALUES (
    '".$name."',
    '".$type."',
    '".$rel_date."',
    '".$contents."',
    '".$price."',
    '".$buylink."',
    '".$imglink."')";

// $sql = mysqli_query($db, $query);
my_query($query);

?>
<script type="text/javascript">
    alert('입력 완료');
</script>
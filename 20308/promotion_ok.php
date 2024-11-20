<?php
    include "../db.php";
    $project_name = $_POST['fproject_name'];
    $budget = $_POST['fbudget'];
    $com_name = $_POST['fcom_name'];
    $con_name = $_POST['fcon_name'];
    $email = $_POST['femail'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20308_saus values('".$project_name."','".$budget."','".$com_name."','".$con_name."','".$email."','".$image."')");
?>

<script type="text/javascript">alert('정보입력이 완료되었습니다.');
</script>
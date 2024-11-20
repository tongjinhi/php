<?php
    include "../db.php";
    $school_name = $_POST['fschool_name'];
    $dept_name = $_POST['fdept_name'];
    $competition = $_POST['fcompetition'];
    $job_rate = $_POST['fjob_rate'];
    $admissions = $_POST['fadmissions'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20413_college (school_name,dept_name,competition,job_rate,admissions,image) values(
    '".$school_name."','".$dept_name."','".$competition."','".$job_rate."','".$admissions."','".$image."')");

?>
<script type='text/javascript'>alert('대학정보가 입력되었습니다.'); </script>
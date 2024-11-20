<?php
    include "../db.php";
    $gundam_name=$_POST['gundam_name'];
    $lineup=$_POST['lineup'];
    $tpye=$_POST['tpye'];
    $meker=$_POST['meker'];
    $date=$_POST['date'];
    $image=$_POST['image'];

$sql=my_query("insert into 20313_gundam(gundam_name,lineup,tpye,meker,date,image)values('
".$gundam_name."','".$lineup."','".$tpye."','".$meker."','".$date."','".$image."')");
?>


<script type="text/javascript">alert('데이터정보가 입력되었습니다.');
</script>
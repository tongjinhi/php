<?php
    include "../db.php";
    $s_title = $_POST['fsongtitle'];
    $s_artist = $_POST['fartist'];
    $s_feat = $_POST['ffeat'];
    $s_range = $_POST['frange1'];
    $s_genre = $_POST['fgenre'];
    $s_image = $_POST['fiamge'];

$sql = my_query("insert into 20309_song (songtitle,artist,feat,range1,genre,iamge) values
    ('".$s_title."','".$s_artist."','".$s_feat."','".$s_range."','".$s_genre."','".$s_image."')");

?>

<script type="text/javascript">alert('회원가입이 완료되었습니다.')
</script>
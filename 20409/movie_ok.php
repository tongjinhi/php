<?php
    include "../db.php";
    $movie_name = $_POST['fmovie_name'];
    $supervision = $_POST['fsupervision'];
    $genre = $_POST['fgenre'];
    $rating = $_POST['frating'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20409_movie (movie_name,supervision,genre,rating,image) values('".$movie_name."','".$supervision."','".$genre."','".$rating."','".$image."')");
?>

<script type="text/javascript">alert('영화 정보가 확인되었습니다.');
</script>
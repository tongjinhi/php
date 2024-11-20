<?php
    include "../db.php";
    $title = $_POST['ftitle'];
    $news_date = $_POST['fnews_date'];
    $opinion = $_POST['fopinion'];
    $contect = $_POST['fcontect'];
    $source = $_POST['fsource'];
    $image = $_POST['fimage'];

$sql = my_query("insert into 20426_news (title,news_date,opinion,contect,source,image) values(
    '".$title."',
    '".$news_date."',
    '".$opinion."',
    '".$contect."',
    '".$source."',
    '".$image."'
    )");
?>
<script type="text/javascript">alert('경영뉴스가 올라왔습니다.');
</script>
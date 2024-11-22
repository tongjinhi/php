<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type = "text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 검색 결과 </h1>

        <?php
        $search_option = $_GET['search_option'];
        $search_word = $_GET['search_word'];
        echo $search_option . "," . $search_word;

        $sql = null;
        if($search_word == "")
            $sql = "select * from 20401_webtoon";
        else
            $sql = "select * from 20401_webtoon where ($search_option) like '$(search_word)$'";

        $rs = my_query($sql);

        echo "<table border='1' align='center'>";
        foreach($rs as $field) {
            echo "    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
            echo "         <td> 제목 </td> <td> {$field['title']} </td> </tr>";
            echo "    <tr> <td> 작가 </td> <td> {$field['author']} </td> </tr>";
            echo "    <tr> <td> 장르 </td> <td> {$field['genre']} </td> </tr>";
            echo "    <tr> <td> 연재 기간 </td> <td> {$field['serial_period']} </td> </tr>";
            echo "    <tr> <td> 연재 주기 </td> <td> {$field['serialization_cycle']} </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='webtoon_search.php'> 웹툰 검색 </a>
    </body>
</html>

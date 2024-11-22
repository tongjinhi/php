<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 경영 뉴스 결과 </h1>

        <?php
        $search_option = $_GET['search_option'];
        $search_word = $_GET['search_word'];
        echo $search_option . "," . $search_word;

        $sql = null;
        if($search_word == "")
            $sql = "select * from 20426_news";
        else
            $sql = "select * from 20426_news where {$search_option} like '%{$search_word}%'";

        $rs = my_query($sql);


        echo "<table border='1' align='center'>";
        foreach($rs as $field) {
            echo "    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
            echo "         <td> 제목 </td>  <td> {$field['title']}      </td> </tr>";
            echo "    <tr> <td> 뉴스 날짜 </td> <td> {$field['news_date']} </td> </tr>";
            echo "    <tr> <td> 기자 의견 </td> <td> {$field['opinion']}  </td> </tr>";
            echo "    <tr> <td> 기사 내용 </td> <td> {$field['contect']} </td> </tr>";
            echo "    <tr> <td> 출처 </td> <td> {$field['source']} </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='news_search.php'> 경영 뉴스 검색</a>
    </body>
</html>
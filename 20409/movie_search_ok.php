<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 영화 결과 </h1>

        <?php
        $search_option = $_GET['search_option'];
        $search_word   = $_GET['search_word'];
        echo $search_option . "," . $search_word;

        $sql = null;
        if($search_word == "")
            $sql = "select * from 20409_movie";
        else
            $sql = "select * from 20409_movie where {$search_option} like '%{$search_word}%'";
        
        $rs = my_query($sql);

        echo "<table border='1' align='center'>";
        foreach($rs as $field) {
            echo "    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
            echo "         <td> 영화이름 </td> <td> {$field['movie_name']}      </td> </tr>";
            echo "    <tr> <td> 감독 </td> <td> {$field['supervision']}  </td> </tr>";
            echo "    <tr> <td> 장르 </td> <td> {$field['genre']}  </td> </tr>";
            echo "    <tr> <td> 등급 </td> <td> {$field['rating']} </td> </tr>";
            echo "    <tr> <td> 개봉일 </td> <td> {$field['opening_date']} </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='movie_search.php'> 영화 검색</a>
    </body>
</html>
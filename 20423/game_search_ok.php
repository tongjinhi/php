<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 게임 검색 결과 </h1>
         
        <?php
        $search_option = $_GET['search_option'];
        $search_word = $_GET['search_word'];
        echo $search_option . "," . $search_word;
        
        $sql = null;
        if($search_word == "")
            $sql = "select * from 20423_game";
        else
            $sql = "select * from 20423_game where {$search_option} like '%($search_word}%'";
        $rs = my_query($sql);
        
        echo "<table border='1' align='center'>";
        foreach($rs as $field){
            echo "    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
            echo "         <td> 게임 이름 </td> <td> {$field['name']}      </td> </tr>";
            echo "    <tr> <td> 출시일 </td> <td> {$field['P_date']}  </td> </tr>";
            echo "    <tr> <td> 장르 </td> <td> {$field['Genre']}  </td> </tr>";
            echo "    <tr> <td> 연령 제한 </td> <td> {$field['rating']} </td> </tr>";
            echo "    <tr> <td> 게임 설명 </td> <td> {$field['explanation']} </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='game_search.php'> 게임 검색</a>
    </body>
</html>
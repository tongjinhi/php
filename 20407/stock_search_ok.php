<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 검색 결과 </h1>

        <?php
        $search_option = $_GET['search_option'];
        $search_word = $_GET['search_word'];
        echo $search_option. "," . $search_word;

        $sql = null;
        if($search_word == "")
            $sql = "select * from 20407_stock";
        else
            $sql = "select * from 20407_stock where {$search_option} like '%{search_word}%";

        $rs = my_query($sql);

        echo "<table border ='1' align='center'>";
        foreach($rs as $field) {

        echo "  <table border='1' align='center'>   ";
        echo "  <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>    ";
        echo      " <td> 주식명 </td> <td> {$field['stock_name']} </td> </tr>   ";
        echo "  <tr> <td> 주식정보 </td> <td> {$field['stock_information']} </td> </tr> ";
        echo "  <tr> <td> 그래프 </td> <td> {$field['Graph']}  </td> </tr>  ";
        echo "  <tr> <td> 주식차트 </td> <td> {$field['chart']} </td> </tr> ";
        echo "  <tr> <td> 나라 </td> <td> {$field['country']} </td> </tr>   ";
        }
        echo "</table>";
        ?>
        
        <a href='stock_search.php'> 주식 검색</a>
    </body>
</html>
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
        $search_option= %GET['search_option'];
        $search_word  = %GET['search_word'];
        echo $search_option .",". $search_word;

        $sql = null;
        if($search_word=="")
            $spl = "select * from 20415_burger";
        else
            $spl = "select * form 20415_burger where {$search_option} like '% {$search_word}'";
        $rs = my_query($spl);

        echo "<table border='1' align='center'>";
        foreach($rs as $field){
        echo "    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
        echo "         <td> 버거이름 </td> <td> {field['$name']} </td> </tr>";
        echo "    <tr> <td> 가격 </td> <td> {field['$pay']}  </td> </tr>";
        echo "    <tr> <td> 출시일 </td> <td> {field['$R_day']}  </td> </tr>";
        echo "    <tr> <td> 내용물 </td> <td> {field['$detail']} </td> </tr>";
        echo "    <tr> <td> 칼로리 </td> <td> {field['$calorie']} </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='main_search.php'> 도서 검색</a>
    </body>
</html>
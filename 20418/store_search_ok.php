<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 옷 검색 결과 </h1>

        <?php
        $search_option = $_GET['search_option'];
        $search_word = $_GET['search_word'];
        echo $search_option, "," ,$search_word;
        
        $sql = null;
        if($search_word == "")
            $sql = "select * from 20418_store";
        else
            $sql = "select * from 20418_store where {$search_option} like '%($search_word)%'";

        $rs = my_query($sql);

        echo "<table border='1' align='center'>";
        foreach($rs as $field) {
        echo"<table border='1' align='center'>";
        echo"    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
        echo"         <td> 품번 </td> <td> {$field['prod_num']}     </td> </tr>";
        echo"    <tr> <td> 품목 </td> <td> {$field['item']}  </td> </tr>";
        echo"    <tr> <td> 색상 </td> <td> {$field['color']}  </td> </tr>";
        echo"    <tr> <td> 가격 </td> <td> {$field['price']} </td> </tr>";
        echo"    <tr> <td> 좋아요 수 </td> <td> {$field['like_num']} </td> </tr>";
        }
        echo"</table>";
        ?>
        
        <a href='store_search.php'> 옷 검색</a>
    </body>
</html>
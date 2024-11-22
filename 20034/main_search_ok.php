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
        $search_word   = $_POST['search_word'];
        $search_option = $_POST['search_option'];
        
        $sql = null;
        if($search_word == "")
            $sql = "select * from bookinfo";
        else
            $sql = "select * from bookinfo where {$search_option} like '%{$search_word}%'";

        $rs = my_query($sql);

        echo "<table border='1' align='center'>";
        foreach($rs as $field) {
            echo "    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
            echo "         <td> 도서명 </td> <td> {$field['name']}      </td> </tr>";
            echo "    <tr> <td> 저자명 </td> <td> {$field['writer']}    </td> </tr>";
            echo "    <tr> <td> 출판사 </td> <td> {$field['publisher']} </td> </tr>";
            echo "    <tr> <td> 출판일 </td> <td> {$field['p_date']}    </td> </tr>";
            echo "    <tr> <td> 책설명 </td> <td> {$field['summary']}   </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='main_search.php'> 도서 검색</a>
    </body>
</html>
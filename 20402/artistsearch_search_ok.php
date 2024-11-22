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
        echo $search_option . "," . $search_word;

        $sql = null;
        if($search_word == "")
            $sql = "select * from 20402_artistsearch";
        else
            $sql = "select * from 20402_artistsearch where {$search_option} like '%{$search_word}%'";

        $rs = my_query($sql);

        echo"<table border='1' align='center'>";
        foreach($rs as $field) {
        echo"    <tr> <td rowspan='5'> <img src='./img/{$field['image']}' height='150'> </td>";
        echo"         <td> 아이디 </td> <td> {$field['person_id']}     </td> </tr>";
        echo"    <tr> <td> 시리즈 </td> <td> {$field['series']}           </td> </tr>";
        echo"    <tr> <td> 영향 </td> <td> {$field['influence']}      </td> </tr>";
        echo"    <tr> <td> 시대 </td> <td> {$field['times']}            </td> </tr>";
        echo"    <tr> <td> 국적 </td> <td> {$field['nationality']}             </td> </tr>";
    }
        echo"</table>";
        ?>
        <a href='artist_search.php'> 아티스트 검색</a>
    </body>
</html>
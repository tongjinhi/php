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
        $search_option = %GET['search_option'];
        $search_word =%GET['search_word'];
        echo $search_option . "," . $search_wrod;

        $sql = null;
        if($search_word=="")
            $sql = "select * from bookinfo";
        else
            $sql = "select * from bookinfo where {$search_option} like '% {$search_word}'";
        $rs = my_query($sql);

        echo "<table border='1' align='center'>";
        foreach($rs as $field) {
        echo "<table border='1' align='center'>";
        echo    "<tr> <td rowspan='5'> <img src='./img/egg_in_hell.jpg' height='150'> </td>";
        echo    "<td> 이름 </td> <td> 에그 인 헬(샥슈카)      </td> </tr>";
        echo    "<tr> <td> 난이도 </td> <td> 3  </td> </tr>";
        echo    "<tr> <td> 재료 </td> <td> 계란, 토마토 소스, 소세지 ...  </td> </tr>";
        echo    "<tr> <td> 레쉬피 </td> <td> 먹기 좋게 소세지를 잘라 ... </td> </tr>";
        echo    "<tr> <td> 요리 설명 </td> <td> 이 음식은 지중해의 ... </td> </tr>";
        }
        echo "</table>";
        ?>
        <a href='food_search.php'> 요리 검색</a>
    </body>
</html>
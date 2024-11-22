<?php
include '../db.php';
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>RimWorld - Search</title>
        <link type="text/css" rel="stylesheet" href="./rimworld.css">                  
    </head>
    <body>
        <p id="title_img">
            <img src="./img/rimworld_titleimg.png">
        </p>

        <form method="get" action="./rimworld_search_ok.php">
            <fieldset>
                <select name="ftype">
                    <option value="name">이름</option>
                    <option value="type">종류</option>
                    <option value="rel_date">출시일자</option>
                    <option value="contents">내용</option>
                    <option value="price">가격</option>
                </select>

                <input name='fname' size="15%" id="serch" type="text" placeholder="검색어 입력">

                <input name='iserch' id="serch_submit" type="submit" value="검색">

            </fieldset>
        </form>
    </body>
</html>
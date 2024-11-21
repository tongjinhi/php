<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charet = "utf-8" />
        <link type = "text/css" rel = "stylesheet" href = "../book.css">
    </head>
    <body>
        <h1> 컴퓨터 사양 검색 </h1>
        <div style = "text-align: center;">
            <form action = "pc_search_ok.php" method = "GET">
                <fieldset>
                    <select name = "seatch_option">
                        <option value = "game">게임 이름</option>
                        <option value = "goal">목적</option>
                        <option value = "performance">성능</option>
                        <option value = "cpu_br">cpu브랜드</option>
                        <option value = "pc_price">컴퓨터 가격</option>
                    </select>
                    <input type = "text" name = "search_word">
                    <input type = "submit" value = "검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

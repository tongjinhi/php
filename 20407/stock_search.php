<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body></body>
        <h1> 주식 검색 </h1>
        <div style="text-align: center;">
            <form action="main_stock_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="name"> 주식명 </option>
                        <option value="writer"> 주식 정보 </option>
                        <option value="publisher"> 그래프 </option>
                        <option value="p_date"> 주식 차트 </option>
                        <option value="summary"> 제조 나라 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

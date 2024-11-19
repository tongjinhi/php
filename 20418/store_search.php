<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="book.css">
    </head>
    <body>
        <h1>옷 검색</h1>
        <div style="text-allign: center;">
            <from action="main_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="prod_num"> 품번 </option>
                        <option value="item"> 품목 </option>
                        <option value="color"> 색상 </option>
                        <option value="price"> 가격 </option>
                        <option value="like_num"> 좋아요 수 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </from>
        </div>
    </body>
</html>   
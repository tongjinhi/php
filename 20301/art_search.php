<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 작품 검색 </h1>
        <div style="text-align: center;">
            <form action="art_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="art_name"> 작품명 </option>
                        <option value="author"> 작가 </option>
                        <option value="publisher"> 출판사 </option>
                        <option value="art_date"> 출판일 </option>
                        <option value="art_description"> 작품설명 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>
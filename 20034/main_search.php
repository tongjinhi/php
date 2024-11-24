<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 도서 검색 </h1>
        <div style="text-align: center;">
            <form action="main_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="name">      도서명 </option>
                        <option value="writer">    저자명 </option>
                        <option value="publisher"> 출판사 </option>
                        <option value="p_date">    출판일 </option>
                        <option value="summary">   책설명 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>
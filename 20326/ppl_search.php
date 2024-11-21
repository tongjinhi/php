<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 간접광고 단가 표 </h1>
        <div style="text-align: center;">
            <form action="ppl_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="categorization">      분류 </option>
                        <option value="name">    방송명 </option>
                        <option value="actor"> 출연자 </option>
                        <option value="time">    방영시간대 </option>
                        <option value="ratings">   시청률 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>
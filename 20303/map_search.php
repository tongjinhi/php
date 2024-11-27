<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 맵 검색 </h1>
        <div style="text-align: center;">
            <form action="map_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="name">        이름 </option>
                        <option value="maker">       만든사람 </option>
                        <option value="version">     버젼 </option>
                        <option value="map_date">    만든 날짜 </option>
                        <option value="description">  설명 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

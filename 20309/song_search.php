<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1>노래 검색 </h1>
        <div style="text-align: center;">
            <form action="song_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="songtitle"> 노래제목 </option>
                        <option value="artist"> artist</option>
                        <option value="feat"> 피처링 </option>
                        <option value="range1"> 노래길이 </option>
                        <option value="genre"> 장르 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

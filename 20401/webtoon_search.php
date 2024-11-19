<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type = "text/css" rel="stylesheet" href="book.css">
    </head>
    <body>
        <h1> 웹툰 검색 </h1>
        <div style="text-align: center;">
            <form action="webtoon_search_ok.php" method="POST">
                <fieldset>
                    <select name = "search_option">
                        <option value="title"> 제목 </option>
                        <option value="author"> 작가 </option>
                        <option value="genre"> 장르 </option>
                        <option value="serial_period"> 연재 기간 </option>
                        <option value="serialization_cycle"> 연재 주기 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>
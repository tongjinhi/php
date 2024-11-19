<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="book.css">
    </head>
    <body>
        <h1>영화 검색 </h1>
        <div style="text-align: center;">
            <form action="movie_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="movie_name"> 영화이름 </option>
                        <option value="supervision"> 감독</option>
                        <option value="genre"> 장르 </option>
                        <option value="rating"> 등급 </option>
                        <option value="opening_date"> 개봉일 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>
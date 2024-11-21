<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 선수 검색 </h1>
        <div style="text-align: center;">
            <form action="player_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="name">     선수 이름 </option>
                        <option value="club">     소속팀 </option>
                        <option value="country">  국적 </option>
                        <option value="position"> 포지션 </option>
                        <option value="explan">   설명 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

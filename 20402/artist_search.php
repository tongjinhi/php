<?php include '../db.php';?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8/">
        <link type="text/css" rel="stylesheet" href="artistsearch.css">
    </head>
    <body>
        <h1>아티스트 검색</h1>
        <div style="text-align: center;">
            <from action="main_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="person_id"> 아이디 </option>
                        <option value="series"> 시리즈 </option>
                        <option value="influence"> 영향 </option>
                        <option value="times"> 시대 </option>
                        <option value="nationality"> 국적 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </from>
        </div>
    </body>
</html>
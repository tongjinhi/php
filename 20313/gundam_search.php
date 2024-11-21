<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 프라모델 검색 </h1>
        <div style="text-align: center;">
            <form action="gundam_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="gundam_name">프라모델이름 </option>
                        <option value="lineup"> 라인업 </option>
                        <option value="tpye">종류 </option>
                        <option value="maker">제조사 </option>
                        <option value="date">발매일 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

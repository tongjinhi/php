<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 크리쳐 확인 폼 </h1>
        <div style="text-align: center;">
            <form action="lc_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="creture_name">     크리쳐 이름 </option>
                        <option value="killability">    처치여부 </option>
                        <option value="attack"> 공격력 </option>
                        <option value="max">    스폰수 </option>
                        <option value="behavier">   행동 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

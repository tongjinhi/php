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
                        <option value="fcreture_name">     크리쳐 이름 </option>
                        <option value="fkillability">    처치여부 </option>
                        <option value="fattack"> 공격력 </option>
                        <option value="fmax">    스폰수 </option>
                        <option value="fbehavier">   행동 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 작품 검색 </h1>
        <div style="text-align: center;">
            <from action="main_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="name">      작품명   </option>
                        <option value="writer">    저자명   </option>
                        <option value="publisher"> 출판사   </option>
                        <option value="p_date">    출판일   </option>
                        <option value="summary">   작품설명 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </from>
        </div>
    </body>
</html>
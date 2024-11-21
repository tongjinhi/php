<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 버거 검색 </h1>
        <div style="text-aling: center;">
            <form action="main_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="name"> 버거이름</option>
                        <option value="pay"> 가격</option>
                        <option value="R_day"> 출시일</option>
                        <option value="detail"> 내용물</option>
                        <option value="calorie"> 칼로리</option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </dody>
</html>

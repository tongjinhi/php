<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 경영 뉴스 검색 <h1>
        <div style="text-align: center;">
            <from action="news_search_ok.php" method="POST">
                <fieldest>
                    <select name="search_option">
                        <option value="title"> 제목 </option>
                        <option value="news_date"> 뉴스 날짜 </option>
                        <option value="opinion"> 기자 의견 </option>
                        <option value="contect"> 기사 내용 </option>
                        <option value="source"> 출처 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldest>
            </from>
        </div>
    </body>
</html>



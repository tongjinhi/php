<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="book.css">
    </head>
    <body>
        <h1>여행지 검색</h1>
        <div style="text-alian: center;">
            <form action="trip_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="Area">지역명</option>
                        <option value="place">장소명</option>
                        <option value="culture">문화</option>
                        <option value="hotel">근처호텔정보</option>
                        <option value="restaurant">근처 맛집</option>
                    </select>
                    <input type="text" name="search_ward">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>
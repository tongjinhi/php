<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <link type="text/css" rel="stylesheet" href="../book.css">
</head>
<body>
    <h1>게임 검색</h1>
    <div style="text-align: center;">
        <form action="game_search_ok.php" method="GET">
            <fieldset>
                <select name="search_option">
                    <option value="name">        게임 이름</option>
                    <option value="P_date">      출시일   </option>
                    <option value="Genre">       장르     </option>
                    <option value="rating">      연령 제한</option>
                    <option value="explanation"> 게임 설명</option>
                </select>
                <input type="text" name="search_word">
                <input type="submit" value="검색"> 
            </fieldset>
        </form>
    </div>
</body>
</html>

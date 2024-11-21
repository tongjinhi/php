<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 홍보물 검색 </h1>
        <div style="text-align: center;">
            <form action="promotion_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value="project_name">  프로젝트명 </option>
                        <option value="budget">    예산 </option>
                        <option value="com_name"> 회사명 </option>
                        <option value="con_name">    담당자 이름 </option>
                        <option value="email">   이메일 </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

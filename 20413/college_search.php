<?php include "../db.php";?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 대학 학과 검색 </h1>
        <div style="text-align: center;">
            <form action="college_search_ok.php" method="POST">
                <fieldset>
                    <select name="search_option">
                        <option value = "school_name"> 학교 이름</option>
                        <option value = "dept_name"> 학과 이름</option>
                        <option value = "competiton"> 경쟁률</option>
                        <option value = "job_rate"> 취업률</option>
                        <option value = "admissions"> 입학정원</option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="검색">
                </fieldset>
            </form>
        </div>
    </body>
</html>

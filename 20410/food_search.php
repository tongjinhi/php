<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> Search Foods </h1>
        <div style="text=align: center;">
            <form action="main_search_ok.php" method="GET">
                <fieldset>
                    <select name="search_option">
                        <option value="name"> food name </option>
                        <option value="diff"> Difficulty </option>
                        <option value="c_stuff"> ingredient </option>
                        <option value="recipe"> recipe </option>
                        <option value="c_info"> food's infomation </option>
                    </select>
                    <input type="text" name="search_word">
                    <input type="submit" value="search">
                </fieldset>
            </form>
        </div>
    </body>
</html>

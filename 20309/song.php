<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>노래정보입력 폼</title>
    </head>
    <body>
        <form method="post" action="song_ok.php">
        <h1>노래정보입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>노래제목</td>
                <td><input type="text" size="35" name="fsongtitle" placeholder="노래제목"> </td></tr>
            <tr><td>작곡가</td>
                <td><input type="text" size="35" name="fartist" placeholder="작곡가"></td></tr>
            <tr><td>피처링</td>
                <td><input type="text" size="35" name="ffeat" placeholder="피처링"> </td></tr>
            <tr><td>노래길이</td>
                <td><input type="text" size="35" name="frange1" placeholder="노래길이"> </td></tr>
            <tr><td>노래장르</td>
                <td><input type="text" size="35" name="fgenre" placeholder="노래장르"> </td></tr>
            <tr><td>앨범표지</td>
                <td><input type="text" size="35" name="fiamge" placeholder="앨범표지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>
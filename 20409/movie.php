<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>영화 폼</title>
    </head>
    <body>
        <form method="post" action="movie_ok.php">
        <h1>영화 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>영화이름</td>
                <td><input type="text" size="35" name="fmovie_name" placeholder="영화이름"> </td></tr>
            <tr><td>감독</td>
                <td><input type="text" size="35" name="fsupervision" placeholder="감독"></td></tr>
            <tr><td>장르</td>
                <td><input type="text" size="35" name="fgenre" placeholder="장르"> </td></tr>
            <tr><td>등급</td>
                <td><input type="text" size="35" name="frating" placeholder="등급"> </td></tr>
            <tr><td>개봉일</td>
                <td><input type="text" size="35" name="fopening_date" placeholder="개봉일"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

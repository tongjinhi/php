<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>회원가입 폼</title>
    </head>
    <body>
        <form method="post" action="artistsearch_ok.php">
        <h1>아티스트 검색 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>이름</td>
                <td><input type="text" size="35" name="fid" placeholder="name"> </td></tr>
            <tr><td>시리즈</td>
                <td><input type="text" size="35" name="fsereis" placeholder="sereis"></td></tr>
            <tr><td>영향</td>
                <td><input type="text" size="35" name="finfluence" placeholder="influence"> </td></tr>
            <tr><td>시대</td>
                <td><input type="text" size="35" name="ftimes" placeholder="times"> </td></tr>
            <tr><td>국적</td>
                <td><input type="text" size="35" name="fnationality" placeholder="nationality"></td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="image"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>
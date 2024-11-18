<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>선수 입력 폼</title>
    </head>
    <body>
        <form method="post" action="son_ok.php">
        <h1>선수 입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>이름</td>
                <td><input type="text" size="35" name="fname" placeholder="선수 검색"> </td></tr>
            <tr><td>팀 이름</td>
                <td><input type="text" size="35" name="fteam" placeholder="팀 이름"></td></tr>
            <tr><td>나이</td>
                <td><input type="text" size="35" name="fage" placeholder="나이"> </td></tr>
            <tr><td>리그명</td>
                <td><input type="text" size="35" name="fleague" placeholder="리그명"> </td></tr>
            <tr><td>국적</td>
                <td><input type="text" size="35" name="fnationily" placeholder="국적"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

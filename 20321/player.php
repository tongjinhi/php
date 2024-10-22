<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>선수 정보 입력 폼</title>
    </head>
    <body>
        <form method="post" action="player_ok.php">
        <h1>선수 정보 입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>선수이름</td>
                <td><input type="text" size="35" name="fname" placeholder="선수이름"> </td></tr>
            <tr><td>소속팀</td>
                <td><input type="text" size="35" name="fclub" placeholder="소속팀"></td></tr>
            <tr><td>국적</td>
                <td><input type="text" size="35" name="fcountry" placeholder="국적"> </td></tr>
            <tr><td>포지션</td>
                <td><input type="text" size="35" name="fposition" placeholder="포지션"> </td></tr>
            <tr><td>설명</td>
                <td><input type="text" size="35" name="fexplan" placeholder="설명"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>
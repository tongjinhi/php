<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>건담입력폼</title>
    </head>
    <body>
        <form method="post" action="gundam_ok.php">
        <h1>건담입력폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>프라모델이름</td>
                <td><input type="text" size="35" name="gundam_name" placeholder="프라모델이름"> </td></tr>
            <tr><td>라인업</td>
                <td><input type="text" size="35" name="lineup" placeholder="라인업"></td></tr>
            <tr><td>종류</td>
                <td><input type="text" size="35" name="tpye" placeholder="종류"> </td></tr>
            <tr><td>제조사</td>
                <td><input type="text" size="35" name="meker" placeholder="제조사"> </td></tr>
            <tr><td>발매일</td>
                <td><input type="text" size="35" name="date" placeholder="발매일"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="100" name="image" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="입력하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

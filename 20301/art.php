<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>미술작품 폼</title>
    </head>
    <body>
        <form method="post" action="art_ok.php">
        <h1>미술작품 폼</h1>
        <fieldset><legend>미술작품 입력</legend>
        <table>
            <tr><td>작품 명</td>
                <td><input type="text" size="35" name="fid" placeholder="작품 명"> </td></tr>
            <tr><td>작가</td>
                <td><input type="password" size="35" name="fpass" placeholder="작가"></td></tr>
            <tr><td>출판사</td>
                <td><input type="text" size="35" name="fname" placeholder="출판사"> </td></tr>
            <tr><td>출판일</td>
                <td><input type="text" size="35" name="faddr" placeholder="출판일"> </td></tr>
            <tr><td>작품 설명</td>
                <td><input type="text" size="35" name="femail" placeholder="작품 설명"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="femail" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>옷관리 폼</title>
    </head>
    <body>
        <form method="post" action="store_ok.php">
        <h1>옷관리 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>품번</td>
                <td><input type="text" size="35" name="fprod_num" placeholder="품번"> </td></tr>
            <tr><td>품목</td>
                <td><input type="text" size="35" name="fitem" placeholder="품목"></td></tr>
            <tr><td>색상</td>
                <td><input type="text" size="35" name="fcolor" placeholder="색상"> </td></tr>
            <tr><td>가격</td>
                <td><input type="text" size="35" name="fprice" placeholder="가격"> </td></tr>
            <tr><td>좋아요 수</td>
                <td><input type="text" size="35" name="flike_num" placeholder="좋아요 수"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

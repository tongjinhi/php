<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>주식시장 입력 폼</title>
    </head>
    <body>
        <form method="post" action="stock_ok.php">
        <h1>주식시장 입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>주식이름</td>
                <td><input type="text" size="35" name="fid" placeholder="주식이름"> </td></tr>
            <tr><td>주식정보</td>
                <td><input type="text" size="35" name="finformation" placeholder="주식정보"></td></tr>
            <tr><td>그래프</td>
                <td><input type="text" size="35" name="fgraph" placeholder="그래프"> </td></tr>
            <tr><td>주식 차트</td>
                <td><input type="text" size="35" name="fchart" placeholder="주식 차트"> </td></tr>
            <tr><td>제조나라</td>
                <td><input type="text" size="35" name="fcountry" placeholder="주소"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

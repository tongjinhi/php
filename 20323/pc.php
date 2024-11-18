<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>컴퓨터 사양 입력 폼</title>
    </head>
    <body>
        <form method="post" action="pc_re_ok.php">
        <h1>컴퓨터 사양 입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>게임</td>
                <td><input type="text" size="35" name="fgame" placeholder="게임"> </td></tr>
            <tr><td>목적</td>
                <td><input type="text" size="35" name="fgoal" placeholder="목적"></td></tr>
            <tr><td>성능</td>
                <td><input type="text" size="35" name="fperformance" placeholder="성능"> </td></tr>
            <tr><td>cpu브랜드</td>
                <td><input type="text" size="35" name="fcpu_br" placeholder="cpu브랜드"> </td></tr>
            <tr><td>pc가격</td>
                <td><input type="text" size="35" name="fpc_price" placeholder="pc가격"> </td></tr>
            <tr><td>게임 사진.jpg</td>
                <td><input type="text" size="35" name="fimage" placeholder="게임 사진.jpg"> </td></tr>
        </table>
        <input type="submit" value="입력하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

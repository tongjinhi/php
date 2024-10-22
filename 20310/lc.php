<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>리썰 크리처 폼</title>
    </head>
    <body>
        <form method="post" action="lc_ok.php">
        <h1>크리쳐 확인 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>크리쳐이름</td>
                <td><input type="text" size="35" name="fcreture_name" placeholder="크리쳐이름"> </td></tr>
            <tr><td>처치여부</td>
                <td><input type="text" size="35" name="fkillability" placeholder="처치여부"></td></tr>
            <tr><td>공격력</td>
                <td><input type="text" size="35" name="fattack" placeholder="공격력"> </td></tr>
            <tr><td>최대스폰</td>
                <td><input type="text" size="35" name="fmax" placeholder="스폰수"> </td></tr>
            <tr><td>행동및 특징</td>
                <td><input type="text" size="35" name="fbehavier" placeholder="행동"> </td></tr>
            <tr><td>lc.jpg</td>
                <td><input type="text" size="35" name="fimage" placeholder="lc.jpg"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>
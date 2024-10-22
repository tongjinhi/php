<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title> 맵 정보 입력 폼</title>
    </head>
    <body>
        <form method="post" action="map_ok.php">
        <h1>맵 정보 입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>이름</td>
                <td><input type="text" size="35" name="fname" placeholder="이름"> </td></tr>
            <tr><td>만든사람</td>
                <td><input type="text" size="35" name="fmaker" placeholder="만든사람"></td></tr>
            <tr><td>버젼</td>
                <td><input type="text" size="35" name="fversion" placeholder="버젼"> </td></tr>
            <tr><td>만든날짜</td>
                <td><input type="text" size="35" name="fmap_date" placeholder="만든날짜"> </td></tr>
            <tr><td>설명</td>
                <td><input type="text" size="35" name="fdescription" placeholder="설명"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>
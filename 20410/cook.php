<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>요리 업로드</title>
    </head>
    <body>
        <form method="post" action="cook_ok.php">
        <h1>요리 업로드 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>이름</td>
                <td><input type="text" size="35" name="fname" placeholder="이름"> </td></tr>
            <tr><td>난이도</td>
                <td><input type="int" size="35" name="fdiff" placeholder="난이도"></td></tr>
            <tr><td>재료</td>
                <td><input type="text" size="35" name="fc_stuff" placeholder="재료"> </td></tr>
            <tr><td>레시피</td>
                <td><input type="text" size="35" name="frecipe" placeholder="레시피"> </td></tr>
            <tr><td>정보</td>
                <td><input type="text" size="35" name="fc_info" placeholder="정보"> </td></tr>
            <tr><td>사진</td>
                <td><input type="text" size="35" name="fimage" placeholder="사진"> </td></tr>
        </table>
        <input type="submit" value="저장하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

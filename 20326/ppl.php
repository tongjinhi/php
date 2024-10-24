<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>간접광고 단가 표</title>
    </head>
    <body>
        <form method="post" action="ppl_ok.php">
        <h1>간접광고 단가 표</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>분류</td>
                <td><input type="text" size="35" name="fcategorization" placeholder="분류"> </td></tr>
            <tr><td>방송명</td>
                <td><input type="password" size="35" name="fname" placeholder="방송명"></td></tr>
            <tr><td>출연자</td>
                <td><input type="text" size="35" name="factor" placeholder="출연자"> </td></tr>
            <tr><td>방영시간대</td>
                <td><input type="text" size="35" name="ftime" placeholder="방영시간대"> </td></tr>
            <tr><td>시청률</td>
                <td><input type="text" size="35" name="fratings" placeholder="시청률"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

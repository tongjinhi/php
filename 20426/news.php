<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>경영뉴스 폼</title>
    </head>
    <body>
        <form method="post" action="news_ok.php">
        <h1>경영뉴스 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>제목</td>
                <td><input type="text" size="35" name="ftitle" placeholder="제목"> </td></tr>
            <tr><td>날짜</td>
                <td><input type="text" size="35" name="fnews_date" placeholder="날짜"></td></tr>
            <tr><td>기자의견</td>
                <td><input type="text" size="35" name="fopinion" placeholder="기자의견"> </td></tr>
            <tr><td>기사</td>
                <td><input type="text" size="35" name="fcontect" placeholder="기사"> </td></tr>
            <tr><td>출처</td>
                <td><input type="text" size="35" name="fsource" placeholder="출처"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

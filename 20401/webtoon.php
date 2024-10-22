<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>웹툰검색</title>
    </head>
    <body>
        <form method="post" action="webtoon_ok.php">
        <h1>웹툰 검색</h1>
        <fieldset><legend>웹툰검색</legend>
        <table>
            <tr><td>제목</td>
                <td><input type="text" size="35" name="ftitle" placeholder="제목"> </td></tr>
            <tr><td>작가 </td>
                <td><input type="text" size="35" name="fauthor" placeholder="작가 "></td></tr>
            <tr><td>장르</td>
                <td><input type="text" size="35" name="fgenre" placeholder="장르"> </td></tr>
            <tr><td>연재 기간</td>
                <td><input type="text" size="35" name="fserial_period" placeholder="연재 기간"> </td></tr>
            <tr><td>연재 주기</td>
                <td><input type="text" size="35" name="fserialization_cycle" placeholder="연재 주기"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>
<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>게임 검색 폼</title>
</head>
<body>
    <form method="post" action="game_ok.php">
        <h1>게임 검색</h1>
        <fieldset><legend>입력사항</legend>
        <table>
        <tr><td>이름</td>
            <td><input type="text" size="35" name="fname" placeholder="게임 이름">
            </td></tr>
        <tr><td>출시일</td>
            <td><input type="text" size="35" name="fp_date" placeholder="출시일"></td></tr>
        <tr><td>장르</td>
            <td><input type="text" size="35" name="fgenre" placeholder="장르"></td></tr>
        <tr><td>연령 제한</td>
            <td><input type="text" size="35" name="frating" placeholder="연령 제한"></td></tr>
        <tr><td>게임 설명</td>
            <td><input type="text" size="35" name="fexplanation" placeholder="게임 설명"></td></tr>
        <tr><td>이미지</td>
            <td><input type="text" size="35" name="fimage" placeholder="이미지"></td></tr>
        </table>
        <input type="submit" value="검색하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
    </form>
</body>
</html>

<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>회원가입 폼</title>
    </head>
    <body>
        <form method="post" action="member_ok.php">
        <h1>회원가입 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>아이디</td>
                <td><input type="text" size="35" name="fid" placeholder="아이디"> </td></tr>
            <tr><td>비밀번호</td>
                <td><input type="password" size="35" name="fpass" placeholder="비밀번호"></td></tr>
            <tr><td>이름</td>
                <td><input type="text" size="35" name="fname" placeholder="이름"> </td></tr>
            <tr><td>주소</td>
                <td><input type="text" size="35" name="faddr" placeholder="주소"> </td></tr>
            <tr><td>성별</td>
                <td>남<input type="radio" name="fgender" value="남"> 여<input type="radio" name="fgender" value="여"></td></tr>
            <tr><td>이메일</td>
                <td><input type="text" size="35" name="femail" placeholder="주소"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

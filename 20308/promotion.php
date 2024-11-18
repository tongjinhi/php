<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>홍보/마케팅 정보입력 폼</title>
    </head>
    <body>
        <form method="post" action="promotion_ok.php">
        <h1>홍보/마케팅 정보입력 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>프로젝트 명</td>
                <td><input type="text" size="35" name="fproject_name" placeholder="프로젝트 명을 입력해 주세요(ex:ERUSAU)."> </td></tr>
            <tr><td>예산</td>
                <td><input type="text" size="35" name="fbudget" placeholder="예산"></td></tr>
            <tr><td>회사명</td>
                <td><input type="text" size="35" name="fcom_name" placeholder="회사명"> </td></tr>
            <tr><td>담당자 이름</td>
                <td><input type="text" size="35" name="fcon_name" placeholder="담당자 이름"> </td></tr>
            <tr><td>이메일</td>
                <td><input type="text" size="35" name="femail" placeholder="이메일"> </td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="입력하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

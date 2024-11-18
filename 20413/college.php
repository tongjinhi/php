<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>대학 학과정보</title>
    </head>
    <body>
        <form method="post" action="college_ok.php">
        <h1>대학 학과정보   </h1>
        <fieldset><legend>경희대</legend>
        <table>
            <tr><td>학교이름</td>
                <td><input type="text" size="35" name="fschool_name" placeholder="학교이름"> </td></tr>
            <tr><td>학과이름</td>
                <td><input type="text" size="35" name="fdept_name" placeholder="학과이름"></td></tr>
            <tr><td>경쟁률</td>
                <td><input type="text" size="35" name="fcompetition" placeholder="경쟁률"> </td></tr>
            <tr><td>취업률</td>
                <td><input type="text" size="35" name="fjob_rate" placeholder="취업률"> </td></tr>
            <tr><td>입학정원</td>
                <td><input type="text" size="35" name="fadmissions" placeholder="입학정원"></td></tr>
            <tr><td>이미지</td>
                <td><input type="text" size="35" name="fimage" placeholder="이미지"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

<?php include"../db.php"; ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8"  /> <title> 버거 업로드 </title>   
</head>
<body>
    <form method="post" action="member_ok.php">
    <h1> 버거 업로드 폼 </h1>
    <fieldset><legend>입력사항</legend>
    <table>
    <tr><td>버거 이름</td>
        <td><input type="text" size="35" name="fname" placeholder="버거 이름">
            </td></tr>
        <tr><td>가격</td>
            <td><input type="text" size="35" name="fpay" placeholder="가격">
        <tr><td>출시일</td>
            <td><input type="text"size="35" name="fR_day" placeholder="출시일">
            </td></tr>
        <tr><td>내용물</td>
            <td><input type="text"size="35" name="fdetail" placeholder="내용물">
            </td></tr>
        <tr><td>이미지</td>
            <td><input type="text" size="35" name="fimage" placeholder="이미지">
            </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="submit" value="다시쓰기"/>
        </fieldset></form></body></html>
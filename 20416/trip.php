<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>회원가입 폼</title>
    </head>
    <body>
        <form method="post" action="trip_ok.php">
        <h1>여행지 폼</h1>
        <fieldset><legend>입력사항</legend>
        <table>
            <tr><td>지역명</td>
                <td><input type="text" size="35" name="fArea" placeholder="지역명"> </td></tr>
            <tr><td>장소명</td>
                <td><input type="password" size="35" name="fPlace" placeholder="장소명"></td></tr>
            <tr><td>문화</td>
                <td><input type="text" size="35" name="fculture" placeholder="문화"> </td></tr>
            <tr><td>근처호텔정보</td>
                <td><input type="text" size="35" name="fhotel" placeholder="근처호텔정보"> </td></tr>
            <tr><td>근처맛집</td>
                <td><input type="text" size="35" name="frestaurant" placeholder="근처맛집"></td></tr>
            <tr><td>사진</td>
                <td><input type="text" size="35" name="fimage" placeholder="사진"> </td></tr>
        </table>
        <input type="submit" value="가입하기"/>
        <input type="reset" value="다시쓰기"/>
        </fieldset>
        </form>
    </body>
</html>

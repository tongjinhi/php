<?php include "../db.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" /><title>신규 DLC/MOD 정보 입력</title>
    </head>
    <body>
        <form method="post" action="rimworld_newinput_ok.php">
        <h1>입력</h1>
            <fieldset><legend>입력사항</legend>
                <table>
                    <tr>
                        <td>DLC/MOD 이름</td>
                        <td><input type="text" size="35" name="fname" placeholder="이름입력"> </td>
                    </tr>
                    <tr>
                        <td>DLC or MOD</td>
                        <td><select name="ftype">
                            <option value="dlc">DLC</option>
                            <option value="mod">MOD</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>출시일</td>
                        <td><input type="text" size="35" name="fdate" placeholder="YYYY-MM-DD 형식으로 입력"> </td>
                    </tr>
                    <tr>
                        <td>컨텐츠</td>
                        <td><input type="text" size="35" name="fcontents" placeholder="컨텐츠 입력"> </td>
                    </tr>
                    <tr>
                        <td>가격</td>
                        <td><input type="text" size="35" name="fprice" placeholder="달러기준으로 정수 입력"> </td>
                    </tr>
                    <tr>
                        <td>구매링크</td>
                        <td><input type="text" size="35" name="fbuylink" placeholder="스팀링크 입력"> </td>
                    </tr>
                    <tr>
                        <td>이미지링크</td>
                        <td><input type="text" size="35" name="fimglink" placeholder="이미지 링크 입력"> </td>
                    </tr>

                </table>
                <input type="submit" value="입력 확인"/>
            </fieldset>
        </form>
    </body>
</html>

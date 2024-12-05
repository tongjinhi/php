<?php include "../../db.php"; ?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title>웹프로그래밍 연습 사이트</title>
    </head>
    <body>
        <div id="login_box">
            <h1>로그인</h1>
            <form method="post" action="login_ok.php" id="login_form">
                <table border="1" cellspacing="0" width="300">
                    <tr>
                        <td width="130">
                            <input type="text" name="userid" id="id">
                        </td>
                        <td rowspan="2" align="center" width="100" >
                            <button type="submit" id="btn" >로그인</button>
                            <!--input type="button" value="확인후 로그인"-->
                        </td>
                    </tr>
                    <tr>
                        <td width="130">
                            <input type="password" name="userpw" id="pwd">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center" class="mem">
                            <a href="member.php">회원가입하기</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

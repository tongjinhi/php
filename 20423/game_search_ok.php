<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 게임 검색 결과 </h1>

        <table border='1' align='center'>
            <tr> <td rowspan='5'> <img src='./img/valorant.jpg' height='150'> </td>
                 <td> 게임 이름 </td> <td> 발로란트      </td> </tr>
            <tr> <td> 출시일 </td> <td> 2020-06-02  </td> </tr>
            <tr> <td> 장르 </td> <td> FPS  </td> </tr>
            <tr> <td> 연령 제한 </td> <td> 15세 이용가 </td> </tr>
            <tr> <td> 게임 설명 </td> <td> 발로란트는 폭발물을 설치 또는 해체 하는 5:5게임이다 </td> </tr>
        </table>
        
        <a href='game_search.php'> 게임 검색</a>
    </body>
</html>
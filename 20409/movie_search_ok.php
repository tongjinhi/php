<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 영화 결과 </h1>

        <table border='1' align='center'>
            <tr> <td rowspan='5'> <img src='./img/날씨의 아이.jpg' height='150'> </td>
                 <td> 영화이름 </td> <td> 날씨의 아이      </td> </tr>
            <tr> <td> 감독 </td> <td> 신카이 마코토  </td> </tr>
            <tr> <td> 장르 </td> <td> 로맨스/재난  </td> </tr>
            <tr> <td> 등급 </td> <td> 15세이상 관람가 </td> </tr>
            <tr> <td> 개봉일 </td> <td> 2024-07-19 </td> </tr>
        </table>
        
        <a href='movie_search.php'> 영화 검색</a>
    </body>
</html>
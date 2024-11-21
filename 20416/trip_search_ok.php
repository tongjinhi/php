<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 여행지 검색 결과 </h1>

        <table border='1' align='center'>
            <tr> <td rowspan='5'> <img src='./img/Naksansa.jpg' height='150'> </td>
                 <td> 지역명 </td> <td> 강릉     </td> </tr>
            <tr> <td> 장소명 </td> <td> 낙산 </td> </tr>
            <tr> <td> 문화 </td> <td> 강원특별자치도 영동 지방의 빼어난 절경을 뜻하는 관동팔경 가운데 하나이다.  </td> </tr>
            <tr> <td> 근처호텔정보 </td> <td> 낙산비치호텔 </td> </tr>
            <tr> <td> 근처 맛집 </td> <td> 흥부네밥상 </td> </tr>
        </table>
        
        <a href='trip_search.php'> 여행지 검색</a>
    </body>
</html>
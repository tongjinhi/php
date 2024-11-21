<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 옷 검색 결과 </h1>

        <table border='1' align='center'>
            <tr> <td rowspan='5'> <img src='./img/cap.jpg' height='150'> </td>
                 <td> 품번 </td> <td> 70824     </td> </tr>
            <tr> <td> 품목 </td> <td> 모자  </td> </tr>
            <tr> <td> 색상 </td> <td> 검정  </td> </tr>
            <tr> <td> 가격 </td> <td> 20000 </td> </tr>
            <tr> <td> 좋아요 수 </td> <td> 824 </td> </tr>
        </table>
        
        <a href='store_search.php'> 옷 검색</a>
    </body>
</html>
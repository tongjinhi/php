<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 대학 학과 검색 결과 </h1>

        <table border='1' align='center'>
            <tr> <td rowspan='5'> <img src='./img/경희대.jpg' height='150'> </td>
                 <td> 학교이름 </td> <td> 경희대      </td> </tr>
            <tr> <td> 학과이름 </td> <td> 소프트웨어융합과  </td> </tr>
            <tr> <td> 경쟁률 </td> <td> 10.2:1 </td> </tr>
            <tr> <td> 취업률 </td> <td> 94% </td> </tr>
            <tr> <td> 입학정원 </td> <td> 약2800명 </td> </tr>
        </table>
        
        <a href='college_search.php'> 대학 검색</a>
    </body>
</html>
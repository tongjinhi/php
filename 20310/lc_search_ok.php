<?php include "../db.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="../book.css">
    </head>
    <body>
        <h1> 검색 결과 </h1>

        <table border='1' align='center'>
            <tr> <td rowspan='5'> <img src='./img/LC.jpg' height='150'> </td>
                 <td> 크리쳐이름 </td> <td> 호두까기인형      </td> </tr>
            <tr> <td> 처치여부 </td> <td> 처치가능  </td> </tr>
            <tr> <td> 공격력 </td> <td> 다소높음  </td> </tr>
            <tr> <td> 최대스폰 </td> <td> 10 </td> </tr>
            <tr> <td> 행동및 특징 </td> <td> 큰소리를 내며배회한다,배회할때 발차기를 주의하자 </td> </tr>
        </table>
        
        <a href='lc_search.php'> 크리쳐 확인 폼</a>
    </body>
</html>
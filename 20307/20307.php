<?php
include '../db.php';
?>

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="utf-8">
        <title>RimWorld - the story generater sim</title>
        <link type="text/css" rel="stylesheet" href="./rimworld.css">                  
    </head>
    <body>
        <p id="title_img">
            <img src="./img/rimworld_titleimg.png">
        </p>

        <form method="post" action="20307.php">
            <fieldset>
                <select name="ftype">
                    <option value="all">ALL</option>
                    <option value="dlc">DLC</option>
                    <option value="mod">MOD</option>
                </select>

                <input name='fname' size="15%" id="serch" type="text" placeholder="검색어 입력">

                <input name='iserch' id="serch_submit" type="submit" value="검색">

            </fieldset>
        </form>

        <br><br>
        <table>

            <tr>
                <td colspan="4">
                    <img id="text_img" src="./img/rimworld_textimg.png">
                </td>
            </tr>

            <tr>
                <td id="t_title">이름</td>
                <td>RIMWORLD</td>
                <td id="t_title">출시일</td>
                <td>2013/11/4</td>
            </tr>

            <tr>
                <td id="t_title">내용</td>
                <td colspan="3">AI 스토리텔러가 주도하는 SF 정착지 시뮬레이션.<br>
                                기분, 생태계, 건플레이, 격투, 기후, 생물군집, 외교, 
                                대인관계, 예술, 의학, 무역 등을 시뮬레이션하여 이야기를 생성하는 게임입니다.
                </td>
            </tr>

            <tr>
                <td id="t_title">가격</td>
                <td>$35</td>
                <td id="t_title">구매처</td>
                <td>
                    <a href="https://store.steampowered.com/app/294100/RimWorld/" target="_blank">
                        STEAM
                    </a>
                </td>
            </tr>

        </table>

    </body>
    
</html>
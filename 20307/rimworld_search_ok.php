<?php
include '../db.php';

$name = $_POST['fname'];
$type = $_POST['ftype'];

if($type=='all'){
    $query = "SELECT * FROM `20307_official` WHERE (name='".$name."')";
}
else{
    $query = "SELECT * FROM `20307_official` WHERE (name='".$name."' AND type='".$type."')";
}

$sql = mysqli_query($db, $query);
$result = $sql -> fetch_array();
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

        <form method="get" action="./rimworld_search_ok.php">
            <fieldset>
                <select name="ftype">
                    <option value="main">본편</option>
                    <option value="roya">로얄</option>
                    <option value="biot">바텍</option>
                    <option value="comb">CE</option>
                    <option value="anom">어노</option>
                </select>

                <input name='fname' size="15%" id="serch" type="text" placeholder="검색어 입력">

                <input name='iserch' id="serch_submit" type="submit" value="검색">

            </fieldset>
        </form>

        <br><br>
        <table>

            <tr>
                <td colspan="4">
                    <img id="text_img" src="./img/<?php echo $result['img']; ?>">
                </td>
            </tr>

            <tr>
                <td id="t_title">이름</td>
                <td>
                    <?php echo $result['name']; ?>
                </td>
                <td id="t_title">출시일</td>
                <td> <?php echo $result['rel_date']; ?> </td>
            </tr>

            <tr>
                <td id="t_title">내용</td>
                <td colspan="3"> <?php echo $result['contents']; ?> </td>
            </tr>

            <tr>
                <td id="t_title">가격</td>
                <td> <?php echo $result['price']; ?> </td>
                <td id="t_title">구매처</td>
                <td>
                    <a href="<?php echo $result['buylink'] ?>" target="_blank">
                        STEAM
                    </a>
                </td>

        </table>

    </body>
    
</html>
<?php include "../../db.php";
    if($_POST["userid"] == "" || $_POST["userpw"] == "") {
        echo '<script> alert("아이디나 패스워드 입력하세요");
        history.back(); </script>';
    } else {
        $input_pass = $_POST['userpw'];
        $sql = my_query("select * from testmember 
                         where id = '".$_POST['userid']."'");
        $member = $sql->fetch_array();
        echo $member['id'] . "," . $member['pass'];
        
        $db_pass = $member['pass'];
        if($input_pass == $db_pass){
            echo "<script> alert('로그인 되었습니다.');
                  location.href='../main_search.php'; </script>";
        } else {
            echo "<script> alert('아이디 또는 비밀번호를 확인하세요.');
            history.back();</script>";
        }
    }
?>
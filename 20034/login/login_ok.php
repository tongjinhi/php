<?php include "../../db.php";
    if($_POST["userid"] == "" || $_POST["userpw"] == "") {
        echo '<script> alert("아이디나 패스워드 입력하세요");
        history.back(); </script>';
    } else {
        $password = $_POST['userpw'];
        $sql = my_query("select * from testmember 
                         where id = '".$_POST['userid']."'");
        $member = $sql->fetch_array();
        $hash_pw = $member['pass'];
        
        //if($password == $hash_pw){
        if(password_verify($password, $hash_pw)){
            $_SESSION['userid'] = $member['id'];
            $_SESSION['userpw'] = $member['pass'];
            echo "<script> alert('로그인 되었습니다.');
                  location.href='./main.php'; </script>";
        } else {
            echo "<script> alert('아이디 또는 비밀번호를 확인하세요.');
            history.back();</script>";
        }
    }
?>

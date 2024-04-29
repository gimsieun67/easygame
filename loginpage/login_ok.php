<?php
    include "member/db.php";

    if($_POST["userid"] == "" || $_POST["userpw"] == "" ){
        echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
    }
    else {
        $test = $_POST['userid'];
        $pw = $_POST['userpw'];
        $asd = DB::fetch("select * from member where id = '$test'");
        if($asd){
            $rId = $asd['id'];
            $stored_pw = $asd['password'];
            if(password_verify($pw, $stored_pw)){
                echo "<script>alert('로그인되었습니다 😁'); location.href='mainpage.php';</script>";
                session_start();
                $_SESSION['uid'] = $asd;
            }
            else {
                echo "<script>alert('아이디와 비밀번호를 다시 확인해주세요😢'); history.back()</script>";
            }
        }
        else{
            echo "<script>alert('아이디와 비밀번호를 다시 확인해주세요😢'); history.back()</script>";
        }
    }
?>

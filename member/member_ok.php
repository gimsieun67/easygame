<?php
	include "db.php";
	// print_r($_POST);
    if($_POST["userid"] == "" || $_POST["userpw"] == ""){
        echo '<script> alert("아이디나 패스워드 입력하세요"); history.back(); </script>';
	}
	else {

		$userid = $_POST['userid'];
		$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
		$tel = $_POST['tel'];
		
		DB::exec("insert into member (id,password,tel) values('".$userid."','".$userpw."','".$tel."')");
		echo '회원가입이 완료되었습니다.';		?>
		<meta charset="utf-8" />
		<meta http-equiv="refresh" content="0 url=/">
		<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script> 
		<?php
	}
	?>                                                                          
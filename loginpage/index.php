<?php   
include "member/db.php"; 
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 및 로그인 사이트</title>
	<link rel="stylesheet" type="text/css" href="/common.css" />
</head>
<body>
	<div class="bg">
		<div class="container">
			<div id="login_box">
				<form method="post" action="login_ok.php">
					<main>
						<h1>Log In</h1>
						<div class="id">
							<input type="text" placeholder = "아이디를 입력해주세요." name="userid" class="inph" style = "width: 320px; height:50px" >
						</div>
						<div class="pw">
							<input type="password" placeholder = "비밀번호를 입력해주세요" name="userpw" class="inph" style = "width: 320px; height:50px">
						</div>
					</main> 
					<div class="logButton flex">
						<button type="submit" id="btn">로그인</button>
						<a href="/member/member.php">회원가입</a> 
                    </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>회원가입 폼</title>
	<link rel="stylesheet" type="text/css" href="/sign.css"/>	
</head>
<body>
	<div class="container flex">
		<form method="post" action="member_ok.php">
			<main>
				<h1 style="margin-bottom: 50px;">Sign in</h1>
				<div class="text">
					<span>아이디: </span>
					<input type="text"  name="userid" placeholder="아이디"></td>
				</div>
				<div class="text">
					<span>비밀번호:</span>
					<input type="password"  name="userpw" placeholder="비밀번호">
				</div>
				<div class="text">
					<span>전화번호:</span>
					<input type="text"   name="tel" placeholder="전화번호">
				</div>
				<div class="inputbutton">
					<input  type="submit"   value="가입하기" />
					<input type="reset" value="다시쓰기" />
				</div>
			</main>
				</form>
			</div>
</body>
</html>
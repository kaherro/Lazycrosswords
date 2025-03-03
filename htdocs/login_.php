<!DOCTYPE html>
<html lang="ru">
<html>
<head>
	<meta charset="UTF-8">
	<title>Lazycrosswords</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
	
	<form action="login.php" method="post">
		 <div class="group1">
			
		<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		<h1 class="q1">Вход</h1>
		<label class="q2" for="">Имя пользователя (на латинице)</label>
		<input class="q3" type="text" name="uname"><br>

		<label class="q4" for="">Пароль</label>
		<input class="q5" type="text" name="password">

		<button class="q7" id="submit"><div class="w1">Войти</div></button>

		<div class="group2">
			<div class="q9">Еще нет аккаунта?</div>
			<a href="signup.php" class="q10">Зарегестрируйтесь!</a>
		</div>
		
		
		</div>
	</form>
	

	<img class="picture1" src="1.png">
	<img class="picture2" src="2.png">
	<img class="picture3" src="3.gif">
	
	<div class="group3">
	<img class="picture4" src="4.png">

	</div>
</body>
</html>

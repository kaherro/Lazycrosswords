<!DOCTYPE html>
<html lang="ru">
<html>
<head>
	<meta charset="UTF-8">
	<title>Lazycrosswords</title>
	<link rel="stylesheet" type="text/css" href="reg.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     <div class="group1">
		<h1 class="a1">Регистрация</h1>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

		<label class="q2" for="">Имя пользователя (на латинице)</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input class="q3" type="text" name="uname" value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input class="q3" type="text" name="uname">
          <?php }?>
          
		<label class="q4" for="">Пароль</label>
     	<input class="q5" type="password" name="password">

		<a href="lazycrosswords2.html"><button class="q7"><div class="q11">Зарегистрироваться</div></button></a>

          <div class="group2">
			<div class="a9">Уже есть аккаунт?</div>
			<a href="login_.php" class="a10">Войдите!</a>
		</div>

     </form>
     </div>

	<img class="picture1" src="1.png">
	<img class="picture2" src="2.png">
	<img class="picture3" src="3.gif">
	
	<div class="group3">
	<img class="picture4" src="4.png">

	</div>
</body>
</html>
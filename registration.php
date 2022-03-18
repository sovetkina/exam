<?php 
	include 'libs/db.php';

	if (isset($_POST['reg'])) {
		$user = R::dispense('users');
		$user->name = $_POST['name'];
		$user->login = $_POST['login'];
		$user->password = $_POST['password'];
		R::store($user);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Flowers</title>
	<link rel="shortcut icon" href="img/логотип.png" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class ="container">
			<div class="heading clearfix">			
			<a  href="index.php">			
				<img src ="img/логотип2.png"  class="logo"></img>
			</a>			
			<nav id="menu">
				<ul class="menu">
					<li>
						<a class="menu_a" href="katalog.php">Каталог</a>
					</li>
					<li>
						<a class="menu_a" href="kont.php">Контакты</a>
					</li>
					<li>
						<a class="menu_a" href="registration.php">Регистрация</a>
					</li>
					<li>
						<a class="menu_a" href="vhod.php">Вход</a>
					</li>
					<li>
						<a href="exit.php"><?php echo $_SESSION['user']->name; ?></a>
					</li>
				</ul>
			</nav>
			</div>
	</header>
	<form action="" method="post">
		<div>
		    <label for="name">Имя</label>
		    <input type="text" id="name" name="name" />
	  	</div>
	 	<div>
	  	 	<label for="login">Логин</label>
	    	<input type="text" id="login" name="login" />
	 	</div>
	  	<div>
		    <label for="password">Пароль</label>
		    <input type="password" id="password" name="password" />
	  	</div>
	  	<div id="sales">
	  		<input type="submit" name="reg" value="Зарегистрироваться">
	  	</div>	
	</form>
	<div class ="footer2">
	<footer>
		<div class ="container">
			<div class="foot">
				<p>Flowers © Все права защищены. </p>
			</div>
		</div>
	</div>
	</footer>
</body>
</html>

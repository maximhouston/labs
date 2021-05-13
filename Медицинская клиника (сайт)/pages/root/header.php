<?php session_start(); error_reporting()?>
		<header>
			
				<a href= "/"><h2> <img src="/img/logo.png" alt="logo">
				Медицинская клиника "Здоровье"<h2></a>
				<?php
				  if ($_SESSION['login'] == ''){
				?>
				<a href = "../../pages/page.php?page=auth"><h6>Зарегистрироваться/Войти</h6></a>
				<?php
				  } else {
				?>
				<a href = "../../pages/account.php"><h6>Личный кабинет</h6></a>
				<a href = "../../pages/logout.php"><h6>Выйти</h6></a>
				<?php
				  }
				?>
				
		</header>
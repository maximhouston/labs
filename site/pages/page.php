<?php
	  include 'db.php';

?>
	<head> 
		<meta charset="utf-8"> 
		<title>Медицинская клиника</title> 
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../style/style.css">
	</head>
	<body>
		<div class="containerr">
			<?php include $_SERVER['DOCUMENT_ROOT']."/pages/root/header.php";?>
		<nav>
			<?php include $_SERVER['DOCUMENT_ROOT']."/pages/root/navbar.php";?>
		</nav>
		<section>
			<aside>
			<?php 
				if ($_GET['page'] == "service"){
					$z1 = '';
					$z2 = '';
					$z3 = '';
					$z4 = '';					
					$r1 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 1"); // запрос на выборку
					$r2 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 2"); // запрос на выборку
					$r3 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 3"); // запрос на выборку
					$r4 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 4"); // запрос на выборку
					 while ($result = mysqli_fetch_array($r1)) { 
						$z1 = $result['zagolovok'];
					  }
					 while ($result = mysqli_fetch_array($r2)) { 
						$z2 = $result['zagolovok'];
					  }
					 while ($result = mysqli_fetch_array($r3)) { 
						$z3 = $result['zagolovok'];
					  }
					 while ($result = mysqli_fetch_array($r4)) { 
						$z4 = $result['zagolovok'];
					  }
						echo "
						<p><h4>Меню</h4></p>
						<ul>
						  <a href= 'usluga.php?usluga=1'><li>{$z1}</li></a>
						  <a href= 'usluga.php?usluga=2'><li>{$z2}</li></a>
						  <a href= 'usluga.php?usluga=3'><li>{$z3}</li></a>
						  <a href= 'usluga.php?usluga=4'><li>{$z4}</li></a>
						</ul>						
						";
				}else if ($_GET['page'] == "contact"){
					include $_SERVER['DOCUMENT_ROOT']."/pages/root/menu.php";	
				}else if ($_GET['page'] == "about"){
					include $_SERVER['DOCUMENT_ROOT']."/pages/root/menu.php";				
				}else include $_SERVER['DOCUMENT_ROOT']."/pages/root/menu.php";				
			
			?>
			</aside>
			<article>
				<?php
					if ($_GET['page'] == "service"){
					$z1 = '';
					$z2 = '';
					$z3 = '';
					$z4 = '';					
					$r1 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 1"); // запрос на выборку
					$r2 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 2"); // запрос на выборку
					$r3 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 3"); // запрос на выборку
					$r4 = mysqli_query($link, "SELECT * FROM content WHERE id_content= 4"); // запрос на выборку
					 while ($result = mysqli_fetch_array($r1)) { 
						$z1 = $result['zagolovok'];
					  }
					 while ($result = mysqli_fetch_array($r2)) { 
						$z2 = $result['zagolovok'];
					  }
					 while ($result = mysqli_fetch_array($r3)) { 
						$z3 = $result['zagolovok'];
					  }
					 while ($result = mysqli_fetch_array($r4)) { 
						$z4 = $result['zagolovok'];
					  }
						echo "
					<table>
					<caption>Перечень услуг клиники</caption>
					  <tr>
						<th>№ п/п</th>
						<th>Наименование услуги</th>
						<th>Стоимость, руб.</th>
					  </tr>
					  <tr>
						<td>1.</td>
						<td>{$z1}</td><td>1500р
					  </tr>
					  <tr>
						<td>2.</td>
						<td>{$z2}</td><td>1000р
					  </tr>
					  <tr>
						<td>3.</td>
						<td>{$z3}</td><td>6000р
					  </tr>
					   <tr>
						<td>4.</td>
						<td>{$z4}</td><td>3500р
					  </tr>
					</table>						
						";
					}else if ($_GET['page'] == "contact"){
						echo "
						<p><h3>НАШИ КОНТАКТЫ</h3><p><br><hr>
						<br><p>Запись на прием:</p><br>
						<h1><a href='callto:+7 (48677) 2-10-17'>+7 (48677) 2-10-17</a><br>
						<a href='callto:+7 980 762-22-22'>+7 980 762-22-22</a><br></h1>
						<br><p>Наш адрес:</p><br> <h1>г. Ливны, улица Селитренникова дом 5</h1>
						
						<img class='img_help' src='../img/centr_zdorove.jpg' alt=''><br>
						</h3></p>						
						";
					}
					else if ($_GET['page'] == "about"){
						echo "
						<p><h1> ИСТОРИЯ<h1></p>
						<p><h4>Самая главная миссия — это чтобы человек выходил из медицинского центра ЗДОРОВЫМ! А главный принцип — это человечность по отношению к пациентам. 

						Медицинский Центр Здоровье, основанный группой единомышленников, начал свою работу в августе 2015 года. Осуществлялся прием терапевта, невролога, кардиолога, гинеколога, УЗИ, забор анализов с последующей их транспортировкой в НПО «ХЕЛИКС».

						Помимо постоянного улучшения качества оказываемой помощи и совершенствования материально-технической базы центра, приоритетом является развитие и расширение спектра оказываемой помощи. В 2016 году открыто стоматологическое отделение, в котором в настоящее время можно получить высококвалифицированную помощь, как взрослым, так и детям.

						Важной вехой в развитии нашего Центра, явилось приобретение современного магниторезонансного томографа. С 2017 года, жителям нашего города доступно МРТ всех органов и систем.

						В 2018 году получена лицензия на оказание помощи по специальностям рефлексотерапия и мануальная терапия, что позволило значительно улучшить результаты лечения больных с заболеваниями опорно-двигательного аппарата.<h4></p>
						";
					}
					else if ($_GET['page'] == "auth"){
						if ($_SESSION['login'] == ''){
						echo "<h1>Регистрация</h1><br>
						<form action='http://site/pages/register.php' method='post'>
							<p><label>Введите Email:  </label> <input type='text' name='email_reg'/></p><br> 
							<p><label>Введите ФИО:    </label> <input type='text' name='fio_reg'/></p><br>
							<p><label>Введите Пароль: </label> <input type='text' name='pass_reg'/></p><br>
							<p><input type='submit' value='Загеристрироваться' name='register'></p><br>	
						</form>
						<h1>Авторизация</h1><br>
						<form action='http://site/pages/login.php' method='post'>
							<p><label>Введите Email: </label> <input type='text' name='email_log'/></p><br> 
							<p><label>Введите Пароль: </label> <input type='text' name='pass_log'/></p><br>
							<p><input type='submit' value='Войти' name='login'></p><br>
						</form>					
						
						";}else {
							echo '<script>location.replace("account.php");</script>'; exit;
						}
					}
					else if ($_GET['page'] == "news" && $_GET['num']){
						if (isset($_GET['num'])) {
							// Если да то переменной $page присваиваем его
							$page = $_GET['num'];
						} else { // Иначе
							// Присваиваем $page один
							$page = 1;
						}
						 
						// Назначаем количество данных на одной странице
						$size_page = 2;
						// Вычисляем с какого объекта начать выводить
						$offset = ($page-1) * $size_page;
						// SQL запрос для получения количества элементов
						$count_sql = "SELECT COUNT(*) FROM news";
						// Отправляем запрос для получения количества элементов
						$result = mysqli_query($link, $count_sql);
						// Получаем результат
						$total_rows = mysqli_fetch_array($result)[0];
						// Вычисляем количество страниц
						$total_pages = ceil($total_rows / $size_page);
						// Создаём SQL запрос для получения данных
						$sql = "SELECT * FROM news LIMIT $offset, $size_page";
						$res_data = mysqli_query($link, $sql);
						while($row = mysqli_fetch_array($res_data)){
							echo '<h1>'.$row['id_news'].'.'.$row['zagolovok'] . '</h1></br>';
							echo $row['opisanie'] . '</br></br>';
						}
						function Pagination($total_pages, $page){
							if($total_pages < 5) foreach(range(1, $total_pages) as $p) echo '<li><a href="page.php?page=news&num='.$p.'">'.$p.'</a> </li>';
							if($total_pages > 4 && $page < 5) foreach(range(1, 5) as $p) echo '<li><a href="page.php?page=news&num='.$p.'">'.$p.'</a> </li>';
							if($total_pages - 5 < 5 && $page > 5 && $total_pages - 5 > 0) foreach(range($total_pages - 4, $total_pages) as $p) echo '<li><a href="page.php?page=news&num='.$p.'">'.$p.'</a> </li>';
							if($total_pages > 4 && $total_pages - 5 < 5 && $page == 5) foreach(range($page-2, $total_pages) as $p) echo '<li><a href="page.php?page=news&num='.$p.'">'.$p.'</a> </li>';
							if($total_pages > 4 && $total_pages-5 > 5 && $page >=5 && $page <= $total_pages-4) foreach(range($page-2, $page+2) as $p) echo '<li><a href="page.php?page=news&num='.$p.'">'.$p.'</a> </li>';
							if($total_pages > 4 && $total_pages-5 > 5 && $page > $total_pages-4) foreach(range($total_pages-4, $total_pages) as $p) echo '<li><a href="page.php?page=news&num='.$p.'">'.$p.'</a> </li>';
						}
					?>
				<ul class="pagination">
					<li><a href="?page=news&num=1">В начало</a></li>
					<li class="<?php if($page <= 1){ echo 'disabled'; } ?>">
					<a href="<?php if($page <= 1){ echo '#'; } else { echo "?page=news&num=".($page - 1); } ?>">Пред.</a>
					</li>
					<?php Pagination($total_pages, $page); ?>
					<li class="<?php if($page >= $total_pages){ echo 'disabled'; } ?>">
						<a href="<?php if($page >= $total_pages){ echo '#'; } else { echo "?page=news&num=".($page + 1); } ?>">След.</a>
					</li>
					<li><a href="?page=news&num=<?php echo $total_pages; ?>">В конец</a></li>
				</ul>
			<?php }?>
			</article>
		</section>
		<footer>
			<div>(c) Все права защищены!</div>
		</footer>
		</div>
	</body>
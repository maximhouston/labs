<?php
	include 'db.php';
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
?>
	<head> 
		<meta charset="utf-8"> 
		<title>Медицинская клиника</title> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../../style/style.css">
		
	</head>
	<body>
		<div class="container">	
			<?php
				include $_SERVER['DOCUMENT_ROOT']."/pages/root/header.php";
			?>
		<nav>
			<?php
				include $_SERVER['DOCUMENT_ROOT']."/pages/root/navbar.php";
			?>
		</nav>
		<section>
			<aside>
				<p><h4>Меню</h4></p>
				<ul>
				  <a href= "usluga.php?usluga=1"><li><?=$z1;?></li></a>
				  <a href= "usluga.php?usluga=2"><li><?=$z2;?></li></a>
				  <a href= "usluga.php?usluga=3"><li><?=$z3;?></li></a>
				  <a href= "usluga.php?usluga=4"><li><?=$z4;?></li></a>
				</ul>
			</aside>
			<article>
			<?php
			  $link = mysqli_connect("localhost", "root", "root", "mysite");
			  if (mysqli_connect_errno()) {
				exit();
			  }
				if ($_GET['usluga'] == 1){
				  $res = mysqli_query($link, "SELECT * FROM content WHERE id_content = 1"); // запрос на выборку
				  while ($result = mysqli_fetch_array($res)) {
					echo "
					<p><h1>{$result['zagolovok']}</h1></p><hr><br>
					<p><h3>{$result['opisanie']}</h3></p><br>
					<img class='img_help' src='{$result['image']}' alt='Как выгдядит узи почек'><br>
					{$result['about_doc']}
					<img class='doctor' src='{$result['img_doctor']}' alt='Врач'>
					<p><a href='page.php?page=contact' class='buttom'>Записаться на прием</a></p>	
					";
				  }
				}else
				if ($_GET['usluga'] == 2){
				  $res = mysqli_query($link, "SELECT * FROM content WHERE id_content = 2"); // запрос на выборку
				  while ($result = mysqli_fetch_array($res)) {
					echo "
					<p><h1>{$result['zagolovok']}</h1></p><hr><br>
					<p><h3>{$result['opisanie']}</h3></p><br>
					<img class='img_help' src='{$result['image']}' alt='Как выгдядит узи почек'><br>
					{$result['about_doc']}
					<img class='doctor' src='{$result['img_doctor']}' alt='Врач'>
					<p><a href='page.php?page=contact' class='buttom'>Записаться на прием</a></p>	
					";
				  }
				}else
				if ($_GET['usluga'] == 3){
				  $res = mysqli_query($link, "SELECT * FROM content WHERE id_content = 3"); // запрос на выборку
				  while ($result = mysqli_fetch_array($res)) {
					echo "
					<p><h1>{$result['zagolovok']}</h1></p><hr><br>
					<p><h3>{$result['opisanie']}</h3></p><br>
					<img class='img_help' src='{$result['image']}' alt='Как выгдядит узи почек'><br>
					{$result['about_doc']}
					<img class='doctor' src='{$result['img_doctor']}' alt='Врач'>
					<p><a href='page.php?page=contact' class='buttom'>Записаться на прием</a></p>	
					";
				  }
				}else
				if ($_GET['usluga'] == 4){
				  $res = mysqli_query($link, "SELECT * FROM content WHERE id_content = 4"); // запрос на выборку
				  while ($result = mysqli_fetch_array($res)) {
					echo "
					<p><h1>{$result['zagolovok']}</h1></p><hr><br>
					<p><h3>{$result['opisanie']}</h3></p><br>
					<img class='img_help' src='{$result['image']}' alt='Как выгдядит узи почек'><br>
					{$result['about_doc']}
					<img class='doctor' src='{$result['img_doctor']}' alt='Врач'>
					<p><a href='page.php?page=contact' class='buttom'>Записаться на прием</a></p>	
					";
				  }
				}			
			?>
			</article>
		</section>
		<footer>
			<div>(c) Все права защищены!</div>
		</footer>
		</div>
	</body>

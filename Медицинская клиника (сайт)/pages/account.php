<?php
      session_start();
	  include 'db.php';
	  if ($_SESSION['login'] == '') header('Location: /index.php');
	  $UT =2;
	  $email = $_SESSION['login'];
	  $sql = mysqli_query($link, "SELECT type_user FROM user WHERE email='{$email}'"); // запрос на выборку
      while ($row = mysqli_fetch_array($sql))
	  $UT = $row['type_user'];
	  if ($UT == 1){
		  $r = mysqli_query($link, "SELECT * FROM content"); // запрос на выборку
		  while ($result = mysqli_fetch_array($r)) {
			  $id = $result['id_content'];
			  echo "<a href = 'red_usluga.php?id=$id' ><h2>Редактировать страницу  '{$result['zagolovok']}'</h2></a>";
		  }
	  } else {
		  echo "У вас нет прав редактировать страницы";  
	  }
	  echo "<br><hr><a href = '/' ><h2>На главную</h2></a>";
?>
	<head> 
		<meta charset="utf-8"> 
		<title>Медицинская клиника</title> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../style/style.css">
	</head>
	<body>
	<br><br><br>
		<p><h1>Форма смены пароля</h1></p><br><br>
		<form action='pass_rename.php' method='post'>
			<p><label>Введите старый пароль </label> <input type='text' name='old_pass' required /></p><br> 
			<p><label>Введите новый пароль: </label> <input type='text' name='new_pass'required /></p><br>
			<p><input type='submit' value='Сменить' name='rename'></p><br>
		</form>	
	</body>
	
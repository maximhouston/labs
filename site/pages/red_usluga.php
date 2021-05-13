<?php
      session_start();
	  include 'db.php';
	  if ($_SESSION['login'] == '') header('Location: /index.php');
		  $r = mysqli_query($link, "SELECT * FROM content WHERE id_content= ".$_GET['id']); // запрос на выборку
		  while ($result = mysqli_fetch_array($r)) { 
		  echo "<form action='red_usluga.php?id={$_GET['id']}' method='post'>
			<p><label>Введите заголовок:  </label> <input type='text' name='zagolovok' value='{$result['zagolovok']}' required/></p><br> 
			<p><label>Введите путь к картинке:    </label> <input type='text' name='img' value='{$result['image']}' required/></p><br>
			<p><label>Введите путь к фото доктора: </label> <input type='text' name='img_doc' value='{$result['img_doctor']}' required/></p><br>
			<p><label>Введите описание: </label> <textarea name='opisanie' required>{$result['opisanie']}</textarea></p><br>	
			<p><label>Введите краткое описание доктора: </label> <input type='text' value='{$result['about_doc']}' name='doc' required/></p><br>
			<p><input type='submit' value='Редактировать' name='red'></p><br>
		    <br><hr><a href = '/' ><h2>На главную</h2></a>;			
		  </form>";
		  }
		  if (isset($_POST['red'])){
		    mysqli_query($link, "UPDATE content SET zagolovok = '{$_POST['zagolovok']}', image = '{$_POST['img']}', img_doctor = '{$_POST['img_doc']}', opisanie = '{$_POST['opisanie']}', about_doc = '{$_POST['doc']}' WHERE id_content = ".$_GET['id']); 
		 }  	  

?>
	<head> 
		<meta charset="utf-8"> 
		<title>Медицинская клиника</title> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../style/style.css">
	</head>


<?php
      session_start();
	  include 'db.php';
	  if ($_SESSION['login'] == '') header('Location: /index.php')
	  $email = $_SESSION['login'];
	  $sql = mysqli_query($link, "SELECT * FROM user WHERE email='{$email}'"); // запрос на выборку

      while ($row = mysqli_fetch_array($sql))
		  $old_pass = $row['password'];
	  if (isset($_POST['rename'])){
		  if (md5($_POST['old_pass']) == $old_pass){
			 $new_pass =md5($_POST['new_pass']);
			 $sql = mysqli_query($link, "UPDATE user SET password='{$new_pass}' WHERE email='{$email}'" ); // запрос на выборку
			 header('Location: account.php');			 
		  }
		  else exit('Неверный старый пароль');
	  }
?>
	<head> 
		<meta charset="utf-8"> 
		<title>Медицинская клиника</title> 
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="../style/style.css">
	</head>
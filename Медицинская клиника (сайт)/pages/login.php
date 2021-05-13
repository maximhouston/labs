<?php session_start();?>
<?php
  if ($_SESSION['login'] == ''){
	  include 'db.php';
	  if ($_POST['email_log'] != '' || $_POST['pass_log'] != ''){
		  $email = trim($_POST['email_log']);
		  $password = md5(trim($_POST['pass_log']));
		  if (isset($_POST['login'])){
			  $res = mysqli_query($link, "SELECT * FROM user WHERE email='$email' and password='$password'");
			  $row_cnt = mysqli_num_rows($res);
			  if ($row_cnt == 0) exit('Пользователь не найден в БД');
			  else {
				  $_SESSION['login'] = $email;
				  header('Location: account.php');
			  }
		  }
		  
	  }
	  mysqli_close($link);
  }else{
	header('Location: account.php');  
  }

?>
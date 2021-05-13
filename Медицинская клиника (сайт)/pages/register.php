<?php
  include 'db.php';
  if ($_POST['email_reg'] != '' || $_POST['fio_reg'] != '' || $_POST['pass_reg'] != ''){
	  $email = trim($_POST['email_reg']);
	  $fio = trim($_POST['fio_reg']);
	  $password = md5(trim($_POST['pass_reg']));
	  $today = date("Y-m-d H:i:s");
	  if (isset($_POST['register'])){
		  $res = mysqli_query($link, "SELECT * FROM user WHERE email='$email'");
		  $row_cnt = mysqli_num_rows($res);
		  if ($row_cnt > 0){
			exit();
		  }else{
		  $res = mysqli_query($link, "INSERT INTO user (fio, email, password, date_register) VALUES ('$fio','$email','$password','$today')");
            header('Location: page.php?page=auth');
		  }
	  }
	  
  }
  mysqli_close($link);

?>
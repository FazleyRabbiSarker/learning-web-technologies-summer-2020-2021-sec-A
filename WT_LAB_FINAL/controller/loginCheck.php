<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			if($_SESSION['user']['username'] == $username && $_SESSION['user']['password'] == $password){
					//$_SESSION['flag'] = 'true';
					setcookie('flag','true',time()+36000,'/');
					header('location: ../view/home.php');
			}else{
				echo 'invlaid username/password';
			}

		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?> 
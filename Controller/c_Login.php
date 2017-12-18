<?php
	class LoginController
	{

		public function login(){
			require_once('View/v_Login.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function authentication(){
			if (!isset($_GET['username'])) {
			}
			if(Login::find($_GET['username'],$_GET['password'])==0){
				$error="username atau password  tidak valid";
				require_once('View/v_Login.php');
			}else if(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login']=$_GET['username'];
				header("location:index.php?controller=Home&action=home");
			}elseif(Login::find($_GET['username'],$_GET['password'])==2){
				$_SESSION['login']=$_GET['username'];
				header("location:index.php?controller=Home&action=home");
			}

		}

}
?>

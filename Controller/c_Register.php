<?php
Class RegisterController{

	public function home(){
		require_once("View/v_Register.php");
	}

	public function register(){
		$register = Register::register($_POST["email"],$_POST["username"],$_POST["password"]);
		header("location:index.php?controller=Login&action=login");
	}


}

?>

<?php
class Register
{

  public $email;
	public $username;
	public $password;


	function __construct($email,$username,$password)
	{
    $this->email=$email;
		$this->username=$username;
		$this->password=$password;
	}

	public static function register($email,$username,$password){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO user
			VALUES (NULL,'2','".$email."','".$username."', '".$password."','','','','','','' );
			");

		return $req;
	}

}

?>

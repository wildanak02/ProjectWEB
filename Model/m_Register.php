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

    $getusername = $db->query("SELECT username from user where username ='$username'");
    foreach ($getusername->fetchAll() as $unm) {
        $usrname= $unm['username'];
      }
    $getemail = $db->query("SELECT email from user where email ='$email'");
    foreach ($getemail->fetchAll() as $em) {
        $eml= $em['email'];
      }

    // if ($email == $eml){
    //   $erroru = 'Email already exist';
    // }
    // elseif ($username == $usrname){
    //   $errore = 'Username already exist';
    // }
    // else{
		$req = $db->query("INSERT INTO user
			VALUES (NULL,'2','".$email."','".$username."', '".$password."','','','','','default.png','default.png' );
			");
          // }

		return $req;
	}

}

?>

<?php
class Profile
{

  public $idUser;
  public $email;
	public $username;
	public $password;
  public $firstName;
	public $lastName;
  public $dateBirth;
  public $location;
  public $picture;
  public $teamLogo;


	function __construct($idUser,$email,$username,$password,$firstName,$lastName,$dateBirth,$location,$picture,$teamLogo)
	{
    $this->idUser=$idUser;
    $this->email=$email;
		$this->username=$username;
		$this->password=$password;
    $this->firstName=$firstName;
		$this->lastName=$lastName;
    $this->dateBirth=$dateBirth;
    $this->location=$location;
    $this->picture=$picture;
    $this->teamLogo=$teamLogo;


	}


  public static function viewProfile(){
    $list = [];

		$db = DB::getInstance();

    $sesi=$_SESSION['login'];

		$req = $db->query("SELECT * FROM user where username='$sesi'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new Profile($post['idUser'],$post['email'],$post['username'],$post['password'],$post['firstName'],$post['lastName'],
        $post['dateBirth'],$post['location'],$post['picture'],$post['teamLogo']
  				);
  		}


  		return $list;
  }



	public static function editProfile($email,$username,$firstName,$lastName,$dateBirth,$location,$picture,$teamLogo)
	{
    $sesi = $_SESSION['login'];

		$db = DB::getInstance();

		$req = $db->query("UPDATE user SET email='".$email."', username='".$username."', firstName='".$firstName."', lastName='".$lastName."', dateBirth='".$dateBirth."', location='".$location."', picture='".$picture."', teamLogo='".$teamLogo."' where username = '$sesi'");
		return $req;
	}

  public static function editPwd($password)
	{
    $sesi = $_SESSION['login'];

		$db = DB::getInstance();

		$req = $db->query("UPDATE user SET password='".$password."' where username = '$sesi'");
		return $req;
	}


}

?>

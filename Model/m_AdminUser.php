<?php
class AdminUser
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

  public static function viewUser(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where level = 2");
    foreach ($req->fetchAll() as $user) {
  			$list[] = new AdminUser($user['idUser'],$user['email'],$user['username'],$user['password'],$user['firstName'],$user['lastName'],$user['dateBirth'],$user['location'],$user['picture'],$user['teamLogo']
  				);
  		}
  		return $list;
  }

  public static function ambiledit($idUser){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where idUser='$idUser'");
    foreach ($req->fetchAll() as $user) {
  			$list[] = new AdminUser($user['idUser'],$user['email'],$user['username'],$user['password'],$user['firstName'],$user['lastName'],$user['dateBirth'],$user['location'],$user['picture'],$user['teamLogo']
  				);
  		}


  		return $list;
  }


	public static function editUser($idUser,$email,$username,$firstName,$lastName,$dateBirth,$location,$picture,$teamLogo)
	{
		$db = DB::getInstance();

		$req = $db->query("UPDATE user SET email='".$email."', username='".$username."', firstName='".$firstName."', lastName='".$lastName."', dateBirth='".$dateBirth."', location='".$location."', picture='".$picture."', teamLogo='".$teamLogo."' where idUser = '$idUser'");
		return $req;
	}

  public static function hapus($idUser){
    $db = DB::getInstance();

    $req = $db->query("DELETE user,team,ptcp FROM user LEFT JOIN team ON user.idUser=team.idUser LEFT JOIN ptcp on team.idTeam = ptcp.idTeam WHERE user.idUser='$idUser'");


      return $req;
  }

}

?>

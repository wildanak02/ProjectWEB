<?php
class Team
{

  public $idTeam;
  public $idUser;
	public $teamName;
	public $teamMember;


	function __construct($idTeam,$idUser,$teamName,$teamMember)
	{
    $this->idTeam=$idTeam;
    $this->idUser=$idUser;
		$this->teamName=$teamName;
		$this->teamMember=$teamMember;
	}


  public static function viewTeam(){
    $list = [];

		$db = DB::getInstance();

    $sesi=$_SESSION['login'];

		$req = $db->query("SELECT * FROM team t join user u on t.idUser=u.idUser where username='$sesi'");
    foreach ($req->fetchAll() as $post) {
  			$list[] = new Team($post['idTeam'],$post['idUser'],$post['teamName'],$post['teamMember']
  				);
  		}


  		return $list;
  }

  public static function tambahTeam($teamName,$teamMember){
  $db = DB::getInstance();
  $sesi=$_SESSION['login'];
  $id= $db->query("SELECT idUser FROM user where username='$sesi'");
  foreach ($id->fetchAll() as $i) {
    $idUser = $i['idUser'];
  }

  $req = $db->query("INSERT INTO team
    VALUES (NULL,'".$idUser."','".$teamName."', '".$teamMember."');
    ");

  return $req;
}

public static function klikEditTeam($idTeam){
  $list = [];

  $db = DB::getInstance();

  $req = $db->query("SELECT * FROM team where idTeam='$idTeam'");
  foreach ($req->fetchAll() as $post) {
      $list[] = new Team($post['idTeam'],$post['idUser'],$post['teamName'],$post['teamMember']
        );
    }


    return $list;
}

	public static function editTeam($idTeam,$teamName,$teamMember){
		$db = DB::getInstance();

		$req = $db->query("UPDATE team SET teamName='".$teamName."', teamMember='".$teamMember."' where idTeam = '$idTeam'");
		return $req;
	}


  public static function hapus($idTeam){
    $db = DB::getInstance();

    $req = $db->query("DELETE team,ptcp from team LEFT JOIN ptcp on team.idTeam=ptcp.idTeam where team.idTeam ='$idTeam'");


      return $req;
  }

}

?>

<?php
class Ptcp
{
  public $idPtcp;
  public $joinDate;
  public $idEvent;
  public $eventName;
  public $idTeam;
  public $teamName;
  public $teamMember;
  public $idUser;
  public $teamLogo;
  public $date;
  public $location;

	function __construct($idPtcp,$joinDate,$idEvent,$eventName,$idTeam,$teamName,$teamMember,$idUser,$teamLogo,$date,$location)
	{
    $this->idPtcp=$idPtcp;
    $this->joinDate=$joinDate;
    $this->idEvent=$idEvent;
    $this->eventName=$eventName;
    $this->idTeam=$idTeam;
    $this->teamName=$teamName;
    $this->teamMember=$teamMember;
    $this->idUser=$idUser;
    $this->teamLogo=$teamLogo;
    $this->date=$date;
    $this->location=$location;
	}

  public static function news(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * from user u join team t on u.idUser=t.idUser join ptcp p on t.idTeam=p.idTeam join event e on p.idEvent=e.idEvent limit 7");
    foreach ($req->fetchAll() as $event) {
  			$list[] = new Ptcp($event['idPtcp'],$event['joinDate'],$event['idEvent'],$event['eventName'],$event['idTeam'],$event['teamName'],$event['teamMember'],$event['idUser'],$event['teamLogo'],$event['date'],$event['location']
  				);
  		}
  		return $list;
  }

  public static function userEvent(){
    $list = [];

    $db = DB::getInstance();

    $sesi=$_SESSION['login'];

    $req = $db->query("SELECT * from user u join team t on u.idUser=t.idUser join ptcp p on t.idTeam=p.idTeam join event e on p.idEvent=e.idEvent where username = '$sesi'");
    foreach ($req->fetchAll() as $event) {
        $list[] = new Ptcp($event['idPtcp'],$event['joinDate'],$event['idEvent'],$event['eventName'],$event['idTeam'],$event['teamName'],$event['teamMember'],$event['idUser'],$event['teamLogo'],$event['date'],$event['location']
          );
      }
      return $list;
  }

  public static function adminEvent(){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT * from user u join team t on u.idUser=t.idUser join ptcp p on t.idTeam=p.idTeam join event e on p.idEvent=e.idEvent");
    foreach ($req->fetchAll() as $event) {
        $list[] = new Ptcp($event['idPtcp'],$event['joinDate'],$event['idEvent'],$event['eventName'],$event['idTeam'],$event['teamName'],$event['teamMember'],$event['idUser'],$event['teamLogo'],$event['date'],$event['location']
          );
      }
      return $list;
  }

  public static function cancel($idPtcp){
    $db = DB::getInstance();

    $req = $db->query("DELETE FROM ptcp WHERE idPtcp = '$idPtcp'");

    return $req;
  }

}

?>

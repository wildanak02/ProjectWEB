<?php
class EventJoin
{

  public $idEvent;
  public $eventName;
  public $slot;
  public $idTeam;
  public $teamName;

	function __construct($idEvent,$eventName,$slot,$idTeam,$teamName)
	{
    $this->idEvent=$idEvent;
    $this->eventName=$eventName;
    $this->slot=$slot;
    $this->idTeam=$idTeam;
    $this->teamName=$teamName;
	}

  public static function join($idTeam,$idEvent){
  $db = DB::getInstance();

  $req = $db->query("INSERT INTO ptcp
    VALUES (NULL,'".$idTeam."','".$idEvent."', UTC_DATE());
    ");

  return $req;
}

public static function join2($idEvent){
$db = DB::getInstance();
$getslot = $db->query("SELECT slot from event where idEvent ='$idEvent'");
      foreach ($getslot->fetchAll() as $r) {
        $slot = $r["slot"] - 1;
      }
$req = $db->query("UPDATE event SET slot = '".$slot."' where idEvent='$idEvent'");

return $req;
}


}

?>

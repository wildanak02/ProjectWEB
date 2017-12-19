<?php
class AdminEvent
{

  public $idEvent;
  public $eventName;
  public $type;
	public $organizer;
	public $date;
  public $location;
  public $description;
  public $image;
  public $slot;

	function __construct($idEvent,$eventName,$type,$organizer,$date,$location,$description,$image,$slot)
	{
    $this->idEvent=$idEvent;
    $this->eventName=$eventName;
    $this->type=$type;
		$this->organizer=$organizer;
		$this->date=$date;
    $this->location=$location;
		$this->description=$description;
    $this->image=$image;
    $this->slot=$slot;
	}

  public static function viewEvent(){
    $list = [];

		$db = DB::getInstance();

    // $getdate = $db->query("SELECT date FROM event order by date desc");
    // $getdatenow = $db->query("SELECT UTC_DATE() as now");
    // foreach ($getdate->fetchAll() as $d) {
    //   $date=$d['date'];
    // }
    // foreach ($getdatenow->fetchAll() as $a) {
    //   $now=$a['now'];
    // }
    // if ($date<$now){
    //   $status='Available';
    // }
    // else {
    //   $status='Done';
    // }
		$req = $db->query("SELECT * FROM event");
    foreach ($req->fetchAll() as $event) {
  			$list[] = new AdminEvent($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
  				);
  		}
  		return $list;
  }

  public static function tambahEvent($eventName,$type,$organizer,$date,$location,$description,$image,$slot){
  $db = DB::getInstance();

  $req = $db->query("INSERT INTO event
    VALUES (NULL,'".$eventName."','".$type."', '".$organizer."','".$date."', '".$location."','".$description."','".$image."','".$slot."');
    ");

  return $req;
}

  public static function ambiledit($idEvent){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM event where idEvent='$idEvent'");
    foreach ($req->fetchAll() as $event) {
  			$list[] = new AdminEvent($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
  				);
  		}


  		return $list;
  }



	public static function editEvent($idEvent,$eventName,$type,$organizer,$date,$location,$description,$image,$slot)
	{
		$db = DB::getInstance();

		$req = $db->query("UPDATE event SET eventName='".$eventName."',type='".$type."', organizer='".$organizer."',date='".$date."', location='".$location."',
    description='".$description."', image='".$image."', slot='".$slot."' WHERE idEvent='$idEvent'");
		return $req;
	}

  public static function hapus($idEvent){
    $db = DB::getInstance();

    $req = $db->query("DELETE event,ptcp FROM event LEFT JOIN ptcp ON event.idEvent=ptcp.idEvent WHERE event.idEvent='$idEvent'");


      return $req;
  }

}

?>

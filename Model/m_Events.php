<?php
class Events
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

  public static function viewEventCS(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM event where type='1'  and date>=UTC_DATE()  order by date desc");
    foreach ($req->fetchAll() as $event) {
  			$list[] = new Events($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
  				);
  		}
  		return $list;
  }

  public static function viewEventDota(){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT * FROM event where type='2'  and date>=UTC_DATE() order by date desc");
    foreach ($req->fetchAll() as $event) {
        $list[] = new Events($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
          );
      }
      return $list;
  }


  public static function viewEventDetail($idEvent){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT * FROM event where idEvent = '$idEvent'");
    foreach ($req->fetchAll() as $event) {
        $list[] = new Events($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
          );
      }
      return $list;
  }

  public static function viewEventRecent(){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT * FROM event order by date desc LIMIT 5");
    foreach ($req->fetchAll() as $event) {
        $list[] = new Events($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
          );
      }
      return $list;
  }

  public static function klikJoin($idEvent){
    $list = [];

    $db = DB::getInstance();

    $req = $db->query("SELECT * FROM event where idEvent='$idEvent'");
    foreach ($req->fetchAll() as $event) {
        $list[] = new Events($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image'],$event['slot']
          );
      }
      return $list;
  }


}

?>

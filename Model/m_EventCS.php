<?php
class EventCS
{

  public $idEvent;
  public $eventName;
  public $type;
	public $organizer;
	public $date;
  public $location;
  public $description;
  public $image;

	function __construct($idEvent,$eventName,$type,$organizer,$date,$location,$description,$image)
	{
    $this->idEvent=$idEvent;
    $this->eventName=$eventName;
    $this->type=$type;
		$this->organizer=$organizer;
		$this->date=$date;
    $this->location=$location;
		$this->description=$description;
    $this->image=$image;
	}

  public static function viewEvent(){
    $list = [];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM event where type='1' order by date desc");
    foreach ($req->fetchAll() as $event) {
  			$list[] = new EventCS($event['idEvent'],$event['eventName'],$event['type'],$event['organizer'],$event['date'],$event['location'],$event['description'],$event['image']
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

}

?>

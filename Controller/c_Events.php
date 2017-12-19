<?php
Class EventsController{

	public function homeCS(){
		$events=Events::viewEventCS();
		require_once("View/v_EventCS.php");
	}

	public function homeDota(){
		$events=Events::viewEventDota();
		require_once("View/v_EventDota.php");
	}

	public function homeDetail(){
		$events=Events::viewEventDetail($_GET['idEvent']);
		$recent=Events::viewEventRecent();
		require_once("View/v_EventDetail.php");
	}

	public function klikJoin(){
		$events=Events::klikJoin($_GET["idEvent"]);
		$teams=Team::viewTeam();
		require_once("View/v_EventJoin.php");
	}

	public function join(){
		$join= EventJoin::join($_POST["idTeam"],$_POST["idEvent"]);
		$join2= EventJoin::join2($_POST["idEvent"]);
		header("location:index.php?controller=Home&action=home&success= Your team joined the event!");
	}
}

?>

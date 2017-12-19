<?php
Class HomeController{

	public function home(){
		$events=Events::viewEventRecent();
		$news=Ptcp::news();
		require_once("View/v_home.php");
	}
}

?>

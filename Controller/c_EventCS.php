<?php
Class EventCSController{

	public function home(){
		$events=EventCS::viewEvent();
		require_once("View/v_EventCS.php");
	}
}

?>

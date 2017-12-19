<?php
function call($controller, $action){
	require_once('Controller/c_'.$controller.'.php');

	switch ($controller) {
		case 'Login':
		require_once('Model/m_Login.php');
		$controller=new LoginController();
		break;

		case 'Register':
		require_once('Model/m_Register.php');
		$controller=new RegisterController();
		break;

		case 'Home':
		require_once('Model/m_Ptcp.php');
		require_once('Model/m_Events.php');
		$controller=new HomeController();
		break;

		case 'AdminPanel':
		require_once('Model/m_Ptcp.php');
		require_once('Model/m_AdminUser.php');
		require_once('Model/m_AdminEvents.php');
		$controller=new AdminPanelController();
		break;

		case 'Profile':
		require_once('Model/m_Ptcp.php');
		require_once('Model/m_Team.php');
		require_once('Model/m_Profile.php');
		$controller=new ProfileController();
		break;

		case 'Events':
		require_once('Model/m_Team.php');
		require_once('Model/m_Events.php');
		require_once('Model/m_EventJoin.php');
		$controller=new EventsController();
		break;


	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['login', 'error','authentication'],
'Register'=>['home','register'],
	'Home'=>['home'],
	'AdminPanel'=>['home','klikUserEdit','tambahEvent','klikEventTambah','klikEventEdit','editUser','editEvent','hapusUser','hapusEvent','cancelEvent'],
	'Profile'=>['home','edit','klikPwd','changepwd','kliktambahTeam','tambahTeam','klikEditTeam','editTeam','hapusTeam','cancelEvent'],
	'Events'=>['homeCS','homeDota','homeDetail','klikJoin','join']
	);


if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>

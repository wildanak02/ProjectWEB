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
		$controller=new HomeController();
		break;

		case 'AdminPanel':
		require_once('Model/m_AdminUser.php');
		require_once('Model/m_AdminEvents.php');
		$controller=new AdminPanelController();
		break;

		case 'Profile':
		require_once('Model/m_Profile.php');
		$controller=new ProfileController();
		break;

		case 'EventCS':
		require_once('Model/m_EventCS.php');
		$controller=new EventCSController();
		break;

		case 'EventDota':
		require_once('Model/m_EventDota.php');
		$controller=new EventDotaController();
		break;


	}
	$controller->{ $action }();
}

$controllers = array('Login' => ['login', 'error','authentication'],
'Register'=>['home','register'],
	'Home'=>['home'],
	'AdminPanel'=>['home','klikUserEdit','tambahEvent','klikEventTambah','klikEventEdit','editUser','editEvent','hapusUser','hapusEvent'],
	'Profile'=>['home','edit'],
	'EventCS'=>['home'],
	'EventDota'=>['home']
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

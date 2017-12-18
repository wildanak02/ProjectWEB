<?php
Class AdminPanelController{

	public function home(){
		$users=AdminUser::viewUser();
		$events=AdminEvent::viewEvent();
		require_once("View/v_AdminPanel.php");
	}

	public function klikUserEdit(){
		$users=AdminUser::ambiledit($_GET["idUser"]);
		require_once("View/v_AdminUserEdit.php");
	}

	public function klikEventTambah(){
		require_once("View/v_AdminEventTambah.php");
	}

	public function klikEventEdit(){
		$events=AdminEvent::ambiledit($_GET["idEvent"]);
		require_once("View/v_AdminEventEdit.php");
	}

	public function editUser(){
		$picture = $_FILES['picture']['name'];
		$tmp1 = $_FILES['picture']['tmp_name'];

		$teamLogo = $_FILES['teamLogo']['name'];
		$tmp2 = $_FILES['teamLogo']['tmp_name'];

		//rename image
		$newpicture=$picture;
		$newlogo=$teamLogo;
		// Set path folder tempat menyimpan fotonya
				$path1 = "Images/UserPic/".$newpicture;
				$path2 = "Images/TeamLogo/".$newlogo;
		// Proses upload
				if (move_uploaded_file($tmp1, $path1)&&move_uploaded_file($tmp2, $path2)) {
		$posts=AdminUser::editUser($_POST["idUser"],$_POST["email"],$_POST["username"],$_POST["firstName"],$_POST["lastName"],$_POST["dateBirth"],$_POST["location"],$newpicture,$newlogo);
		header("location:index.php?controller=AdminPanel&action=home");
	}
}

	public function tambahEvent(){
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

//rename gambar
		$newimage = $image;
// Set path folder tempat menyimpan fotonya
		$path = "Images/EventImg/".$newimage;
// Proses upload
		if (move_uploaded_file($tmp, $path)) {
		$user= AdminEvent::tambahEvent($_POST["eventName"],$_POST["type"],$_POST["organizer"],$_POST["date"],$_POST["location"],$_POST["description"],$newimage);
	}
		header("location:index.php?controller=AdminPanel&action=home");
	}

	public function editEvent(){
		$image = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];

// rename gambar
		$newimage = $image;
// Set path folder tempat menyimpan fotonya
		$path = "Images/EventImg/".$newimage;
// Proses upload
		if (move_uploaded_file($tmp, $path)) {
		$user= AdminEvent::editEvent($_POST["idEvent"],$_POST["eventName"],$_POST["type"],$_POST["organizer"],$_POST["date"],$_POST["location"],$_POST["description"],$newimage);
	}
		header("location:index.php?controller=AdminPanel&action=home");
	}

	public function hapusUser(){
	$posts=AdminUser::hapus($_GET["idUser"]);
	header("location:index.php?controller=AdminPanel&action=home");
}

	public function hapusEvent(){
	$posts=AdminEvent::hapus($_GET["idEvent"]);
	header("location:index.php?controller=AdminPanel&action=home");
}
}

?>

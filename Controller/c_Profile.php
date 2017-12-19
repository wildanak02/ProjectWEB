<?php
Class ProfileController{

	public function home(){
		$events=Ptcp::userEvent();
		$profiles=Profile::viewProfile();
		$teams=Team::viewTeam();
		require_once("View/v_Profile.php");
	}

	public function edit(){
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
		$posts=Profile::editProfile($_POST["email"],$_POST["username"],$_POST["firstName"],$_POST["lastName"],$_POST["dateBirth"],$_POST["location"],$newpicture,$newlogo);
		$_SESSION['login']=$_POST['username'];

	}
header("location:index.php?controller=Profile&action=home");
}

	public function klikPwd(){
		$posts=Profile::viewProfile();
		require_once("View/v_ChangePwd.php");
	}

	public function changepwd(){
		$posts=Profile::editPwd($_POST["password"]);
		header("location:index.php?controller=Profile&action=home");
	}

	public function kliktambahTeam(){
		require_once("View/v_TambahTeam.php");
	}

	public function tambahTeam(){
		$posts=Team::tambahTeam($_POST["teamName"],$_POST["teamMember"]);
		header("location:index.php?controller=Profile&action=home");
	}

	public function klikEditTeam(){
		$teams=Team::klikEditTeam($_GET["idTeam"]);
		require_once("View/v_EditTeam.php");
	}

	public function editTeam(){
		$posts=Team::editTeam($_POST["idTeam"],$_POST["teamName"],$_POST["teamMember"]);
		header("location:index.php?controller=Profile&action=home");
	}

	public function hapusTeam(){
	$posts=Team::hapus($_GET["idTeam"]);
	header("location:index.php?controller=Profile&action=home");
}

	public function cancelEvent(){
	$posts=Ptcp::cancel($_GET["idPtcp"]);
	header("location:index.php?controller=Profile&action=home");
}
}

?>

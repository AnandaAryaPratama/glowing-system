<?php
//-------------------
//----GET DAN POST---
//-------------------

// if ( isset($_GET['submit']) ){
//   echo $_GET['password'];
// }

//if ( isset($_POST['submit']) ){
//	echo $_POST['password'];
//}

session_start();

$user = 'hilman';
$password = '123';

if ( isset($_POST['submit']) ){
	
	if( $_POST['nama'] == $user &&
	    $_POST['password'] == $password) {

	    //cookie
	    //setcookie(key, nilai, expire)
	    setcookie('nama_user', $_POST['nama'], time()+120);

		$_SESSION['nama_user'] = $_POST['nama']; 

	    //memindahkan halaman
	    header('location: Profile3.php?nama=' . $user);

	 }else{
	      echo 'login gagal!';
	 }


}

?>

<form action="Session.php" method="post">
  <input type="text" name="nama">
  <input type="password" name="password">
  <input type="submit" name="submit">
</form>
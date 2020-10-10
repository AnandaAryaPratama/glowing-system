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

$user = 'hilman';
$password = '123';

if ( isset($_POST['submit']) ){
	
	if( $_POST['nama'] == $user &&
	    $_POST['password'] == $password) {

	    //memindahkan halaman
	    header('location: Profile.php?nama=' . $user);

	    }else{
	      echo 'login gagal!';
	    }

}

?>

<form action="Login2.php" method="post">
  <input type="text" name="nama">
  <input type="password" name="password">
  <input type="submit" name="submit">
</form>
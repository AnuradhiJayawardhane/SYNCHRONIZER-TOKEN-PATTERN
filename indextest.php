<?php
 session_start();

//check login credentials
if ( ! empty( $_POST ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['password'] ) ) {
      $uname = $_POST['username'];
      $pwd = $_POST['password'];
      if($uname == 'admin' && $pwd == 'admin'){

        //set username as a session id
        $_SESSION['id'] = $uname;

      //directed to send.php
        header("Location:send.php");
      }
       else{
        //redirect to login page
				header("Location:index.php");
			}
    }
}
else{
	header("Location:index.php");
	}
  ?>
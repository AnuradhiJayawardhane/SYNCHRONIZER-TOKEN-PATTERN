<?php
 session_start();


//checking the login 
if ( empty( $_SESSION['id']) ) {
	header("Location:index.php");
}
else{

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>DOUBLE SUBMIT COOKIE PATTERN</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   	 	<link href="style.css" rel="stylesheet">
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	

		<script>
		//ajax call	
		$(document).ready(function(){
	
		var xhttp;
      	xhttp = new XMLHttpRequest();
      	xhttp.onreadystatechange = function() {
      	if (this.readyState == 4 && this.status == 200) {

      	//set csrf token as a hidden field in POST request
      	document.getElementById("csrftoken").setAttribute('value', this.responseText) ;
      }
  
      };
      //generate and get csrf token 
      xhttp.open("GET", "tokengenerator.php", true);
      xhttp.send();
  
      });

		</script>

  	</head>

	<body class="obody">
		<h1 class="login">SUCCESSFULLY LOGGED IN</h1>
		<div class="s_container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div class="box">


                	<!--form for sending both request and csrf token-->
                      <form class="form" action="result.php" method="post">
                            <div class="form-group">
                                <label for="username" class="text-white"><h5>SEND A REQUEST</h5></label><br>
                                <input type="text" name="updatepost" class="inpt">
                            </div>
                            <div id="div1">
					              <input type="hidden" name="token" value="" id="csrftoken"/>
					        </div>
                            <div class="form-group">
                                <input type="submit"  class="btn" value="UPDATE POST">
                            </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

	</body> 
</html>

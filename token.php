<?php

class token {
   
	public static function checkToken($token,$sessionIdentifier){
		
		
		echo " Token: $sessionIdentifier ";
		
		//open token.txt file which is stored the token
		$myfile = fopen("token.txt", "r") or die("Unable to open file!");
		list($tok,$sid) = explode(",",chop(fgets($myfile)),2); // chop() is a must because fgets() returns new line character
		fclose($myfile);
		
		//compare the token which stored in server side with token which in hidden field
		if($tok == $token){
			if($sessionIdentifier == $sid ) {
		       return true;
			}
		}
	}
}
?>
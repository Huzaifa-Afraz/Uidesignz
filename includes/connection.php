<?php 
	$server = "localhost";
	$username = "u765900786_uidesignz";
	$password = "$555Mubi25$#3";
	$db = "u765900786_uidesignz";

	$conn = mysqli_connect($server, $username, $password, $db);

	if ($conn) {
		// echo "connection successfull";
	}else{

		echo "Error in connecting with db";
		die;
	}
	$website_main_url = "https://www.uidesignz.com";
	
	function re_write_title($string){
		$string = trim($string);
		$string = preg_replace('/[^a-zA-Z0-9-]/', '-', $string);
		$string = preg_replace('/-{2,}/','-',$string);
		return strtolower($string);
	}
?>
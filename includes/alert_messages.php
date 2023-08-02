<?php
	//for showing the alert messages 
	function messages($msg,$type){
		if($type=="success"){
			echo '<div class="alert alert-success text-center" >'.$msg.'</div>';
		}else if($type=="warning"){
			echo '<div class="alert alert-warning text-center" >'.$msg.'</div>';
		}else if($type=="danger"){
			echo '<div class="alert alert-danger text-center"  >'.$msg.'</div>';
		}else if($type=="info"){
			echo '<div class="alert alert-info text-center"  >'.$msg.'</div>';
		}
	}
?> 
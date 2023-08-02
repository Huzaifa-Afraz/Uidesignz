<?php
include '../includes/connection.php';
error_reporting( E_ALL );
//Contact Us
if (isset($_POST['contact_us_submit'])) {
	if($_POST['captcha_hidden'] == ""){
		echo "<script>
		  window.location.href='../contact-us?contact_us_error=1';
		  </script>"; 
		exit;
	}
	$captcha = md5($_POST["captcha"]);
	if($_POST['captcha_hidden'] != $captcha){
		echo "<script>
		  window.location.href='../contact-us?contact_us_error=1';
		  </script>"; 
		exit;
		 
	}
		
         
		$from = trim($_POST['contact_us_email']);
		$to = "designermubeen85@gmail.com";
		$subject = 'Inquiry : '.$_POST['contact_us_subject'];
		$message = "Hi<br>";
		$message .= "<br>Name : ".$_POST['contact_us_name'];
		$message .= "<br>E-mail : ".$_POST['contact_us_email'];
		$message .= "<br>Phone Number : ".$_POST['contact_us_phone'];
		$message .= "<br>Message : ".$_POST['contact_us_msg'];
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";	
		$headers .= "From:" . $from;
		@mail($to,$subject,$message, $headers);
		 
		 
 
    $contact_us_name = $_POST['contact_us_name'];
    $contact_us_email = $_POST['contact_us_email']; 
    $contact_us_phone = $conn -> real_escape_string($_POST['contact_us_phone']);
    $contact_us_subject = $conn -> real_escape_string($_POST['contact_us_subject']);
    $contact_us_msg = $conn -> real_escape_string($_POST['contact_us_msg']);
  	
    $queryQuote = "INSERT INTO `contact_us`(`contact_us_name`, `contact_us_email`, `contact_us_phone`, `contact_us_subject`, `contact_us_msg`) 
                    VALUES ('$contact_us_name','$contact_us_email','$contact_us_phone','$contact_us_subject','$contact_us_msg')";
    // echo $queryQuote; die();
    $query3 = mysqli_query($conn,$queryQuote);
  
  if ($query3) {
  echo "<script>
  window.location.href='../contact-us';
  </script>"; 
        }
  }
  
  if(isset($_POST['submit_comment'])){
  	$blog_id = $conn -> real_escape_string($_POST['blog_id']);
	$comment_name = $conn -> real_escape_string($_POST['comment_name']);
	$comment_email = $conn -> real_escape_string($_POST['comment_email']);
	$comment_description = $conn -> real_escape_string($_POST['comment_description']);
	$Sql = "INSERT INTO `comment` SET 
			`blog_id`='$blog_id', 
			`comment_name`='$comment_name', 
			`comment_email`='$comment_email', 
			`comment_description`='$comment_description'
			";	
	$query = mysqli_query($conn, $Sql);
    
    	if ($query) {
        	echo "<script>
                alert('Comment has been added Successfully');
                window.location.href='".$website_main_url."/blogs/".$_POST['blog_slug']."';
                </script>"; 
    	}
  }
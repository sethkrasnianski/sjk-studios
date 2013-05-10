<?php 
   if(isset($_POST['submit'])) {
		$errors_email = '';
		$errors_required = '';
		$myemail = 'seth@sjkstudios.com';
		if(empty($_POST['name'])  || 
		   empty($_POST['email']))
		{
		    $errors_required = "\n <span style=\"color:red;\">Error: Your Name and E-mail are Required.</span>";
		}
		
		$name = $_POST['name']; 
		$email_address = $_POST['email']; 
		$company = $_POST['company'];
		$message = $_POST['message']; 
		
		
		
		if (!preg_match(
		"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
		$email_address))
		{
		    $errors_email = "\n <span style=\"color:red;\">Error: Invalid email address</span>";
		}
		
		if( empty($errors_email) && empty($errors_required))
		{
			$to = $myemail; 
			$email_subject = "Contact form submission from: $name";
			$email_body = "You have received a new contact form submission. ".
			" Here are the details:\n\n Name: $name \n Email: $email_address \n Company: $company \n\n Message: \n $message"; 
			
			$headers = "From: $myemail\n"; 
			$headers .= "Reply-To: $email_address";
			
			mail($to,$email_subject,$email_body,$headers);
			//redirect to the 'thank you' page
			header('Location: thanks.php');
		} 
		
			include('head.php');
			include('header.php');
			include('contact.php');
			include('footer.php');
	   }else{
     die("Direct access not allowed!");
   }
?>

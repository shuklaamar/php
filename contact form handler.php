<? php
   $name=$_POST['name'];
   $visitoremail=$_POST['email'];
   $msg=$_POST['message'];
   
   $email_form="mandapatiganesh5@gmail.com";
   $email_subject="NEW form submission ";
   $email_body="UserName :$name.\n".
                "User email:$visitoremail.\n".
				"user message:$message.\n";
	$to="mandapatiganesh389@gmail";
	$headers="From: $email_form \r\n";
	$headers.="reply-To: $visitoremail \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	header("Location: contact form1.html");
	
?>
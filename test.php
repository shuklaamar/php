<?php
$to="rozork636.com";
$subject ="response from website";
$message= "thank for contacting us";
$headers = "From : amarshukla636@gmail.com";
if(mail($to,$subject,$message,$headers)){
    echo "mail sent";
}
else {
    echo "not sent";
}
?>
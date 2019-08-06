
    Your email has been sent.

<?php
	
	$subject 		= "Sample PHP e-mail";
	$body 			= "The FROM is a little more professional now!";
    				'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $body, $headers);
?>
<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$company = $_POST['company'];
$describe = $_POST['describe'];


$subject = "Project Quote Request from $company by $firstname $lastname";

$to = "contact@chigisoft.com"; 

$txt = $describe;
 $header = "From: $firstname $lastname\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
      
		$retval = mail ($to,$subject,$txt,$header);
			echo"$firstname $lastname<br>";
			
			if( $retval == true ) {
				echo "Message sent successfully...<font color='green'><i class='glyphicon glyphicon-ok'></i></font><br>We'll be in touch.";
			}else {
				echo "Message could not be sent...<font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font><br>Please try again.";
			}
		
         
        
        
?> 
<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
<?php

$email = $_POST['email'];
$message = $_POST['message'];
$name = $_POST['name'];
$subject = $_POST['subject'];

$to = "contact@chigisoft.com"; 

$txt = $message;
 $header = "From:$email\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
        
            $retval = mail ($to,$subject,$txt,$header);
         
         if( $retval == true ) {
			 echo"$name<br>";
            echo "Message sent successfully...<font color='green'><i class='glyphicon glyphicon-ok'></i></font><br>We'll be in touch.";
         }else {
			  echo"$name<br>";
            echo "Message could not be sent...<font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font><br>Plesae try again.";
         }
        
?> 
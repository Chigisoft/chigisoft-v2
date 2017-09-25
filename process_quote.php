<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $type = $_POST['type'];
    $describe = $_POST['describe'];
    $subject = "Quote Request for $type project";
    $to = "contact@chigisoft.com";

    $txt = "We require a qoute for a $type project. <br>".$describe."<br>"."$fullname <br>For: $company";
    $header = "From: $email\r\n";
    $header .= "Cc:$email \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";

	$retval = mail ($to,$subject,$txt,$header);

	if( $retval == true ) {
		echo "Message sent successfully...<font color='green'><i class='glyphicon glyphicon-ok'></i></font><br>We'll be in touch.";
	}else {
		echo "Message could not be sent...<font color='red'><i class='glyphicon glyphicon-warning-sign'></i></font><br>Please try again.";
	}
?>


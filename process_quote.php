<?php
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $type = $_POST['type'];
    $describe = $_POST['describe'];
    $subject = "<h3>Project Quote Request for $company by $fullname</h3>.<br><br> we require a qoute for a $type project.<br> $describe";
    $to = "contact@chigisoft.com";

    $txt = $describe;
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

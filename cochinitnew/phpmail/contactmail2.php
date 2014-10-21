<?php
ob_start();

require_once('class.phpmailer.php');
include("class.smtp.php");

 // First we set the to address and subject
 $to = 'mail@ipcsautomation.com';
 //$to = 'aneeshs.email@gmail.com';
 
 require_once('../admin/include/settings.php');
 $UPLOAD_RES="http://www.ipcsautomation.com/resume/";
 $manage=$_POST['manage'];
 
 if($manage=="Contacts") {
	 ////post///
	 $name=$_POST['name'];
	 $phone=$_POST['phone'];
	 $mail=$_POST['mail'];
	 $address=nl2br($_POST['address']);
	 $country=$_POST['country'];
	 $company=$_POST['company'];
	 $intrested=$_POST['intrested'];
	 $details=$_POST['details'];
	  $address=$_POST['address'];
	 $subject = "IPCS Automation - " . $manage . " - " . $from;
 
	// add label and value to array ,if body contains more data,, no limit
	//$bodyarray=array("Enquiry" =>$enquiry, "Space1" =>$space1, "Space2" =>$space2, "Name"=>$name,"Contact"=>$contact,"Email"=>$from);
	
	// body
	$body='<div style=background:#EFEFEF;><b>'.$manage.'</b></div><br>';
	$body.='<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">First Name</div><div style="float:left; margin-right:5px;">:</div> <div>' . $name . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Phone</div><div style="float:left; margin-right:5px;">:</div> <div>' . $phone . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">E-Mail</div><div style="float:left; margin-right:5px;">:</div> <div>' . $mail . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Company</div><div style="float:left; margin-right:5px;">:</div> <div>' . $company . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Country</div><div style="float:left; margin-right:5px;">:</div> <div>' . $country . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Details</div><div style="float:left; margin-right:5px;">:</div> <div>' . $details . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Interested in</div><div style="float:left; margin-right:5px;">:</div> <div>' . $intrested . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Requirement</div><div style="float:left; margin-right:5px;">:</div> <div>' . $address . '</div></div><div style="clear:both;"></div>';
 
	$mail             = new PHPMailer();
	
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.ipcsautomation.com"; // SMTP server
	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
											   // 1 = errors and messages
											   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "ipcsquickcontact@gmail.com";  // GMAIL username
	$mail->Password   = "lockedforipcs";            // GMAIL password
	
	$mail->SetFrom($from, $name);
	
	$mail->AddReplyTo($from, $name);
	
	$mail->Subject    = $subject;
	
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress($to, "IPCS Automation");
	$mail->AddBCC('enquirysem@gmail.com');
	$mail->AddBCC('mail@ipcsautomation.com');
	/*
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}
	*/
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: ' . $name . ' <' . $from . '>' . "\r\n";
	$headers .= 'Bcc: enquirysem@gmail.com, info@ipcsautomation.com' . "\r\n";
	mail($to, $subject, $body, $headers);
	
	// set location page after  send mail
	
	//$location='../completed.php?msg=4';
	$location='../success_reg.html';
 }
 
 if($manage=="Careers") {
	///post///
	$name=$_POST['name'];
	$organization=$_POST['organization'];
	$country=$_POST['country'];
	$contact=$_POST['contact'];
	$mail=$_POST['mail'];
	if(isset($_FILES['resume'])) {
		$baseName = basename($_FILES['resume']['name']);
		$ext=strrchr($baseName,".");
		if(isset($baseName) && strlen(trim($baseName)) > 0) {
			$rand_no=rand();
			$filenameToStore = $rand_no.$ext;
			$uploadfile = $UPLOAD_RES. $filenameToStore;
			move_uploaded_file($_FILES['resume']['tmp_name'], $uploadfile);
			echo $uploadfile;
		}
	}
	$subject = "IPCS Automation - " . $manage . " - " . $from;
 
	// add label and value to array ,if body contains more data,, no limit
	//$bodyarray=array("Enquiry" =>$enquiry, "Space1" =>$space1, "Space2" =>$space2, "Name"=>$name,"Contact"=>$contact,"Email"=>$from);
	
	// body
	$body='<div style=background:#EFEFEF;><b>'.$manage.'</b></div><br>';
	$body.='<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Name</div><div style="float:left; margin-right:5px;">:</div> <div>' . $name . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Organization</div><div style="float:left; margin-right:5px;">:</div> <div>' . $organization . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Country</div><div style="float:left; margin-right:5px;">:</div> <div>' . $country . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Contact No.</div><div style="float:left; margin-right:5px;">:</div> <div>' . $contact . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Email</div><div style="float:left; margin-right:5px;">:</div> <div>' . $mail . '</div></div><div style="clear:both;"></div>
	<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Resume</div><div style="float:left; margin-right:5px;">:</div> <div><a href=http://' . $PATH.$uploadfile . '>View Resume</a></div></div><div style="clear:both;"></div>';
 
	$mail             = new PHPMailer();
	
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "mail.ipcsautomation.com"; // SMTP server
	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
											   // 1 = errors and messages
											   // 2 = messages only
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "ipcsquickcontact@gmail.com";  // GMAIL username
	$mail->Password   = "lockedforipcs";            // GMAIL password
	
	$mail->SetFrom($from, $name);
	
	$mail->AddReplyTo($from, $name);
	
	$mail->Subject    = $subject;
	
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	
	$mail->MsgHTML($body);
	
	$mail->AddAddress($to, "IPCS Automation");
	$mail->AddBCC('enquirysem@gmail.com');
	$mail->AddBCC('mail@ipcsautomation.com');
	/*
	if(!$mail->Send()) {
	  echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  echo "Message sent!";
	}
	*/
	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$headers .= 'From: ' . $name . ' <' . $from . '>' . "\r\n";
	$headers .= 'Bcc: enquirysem@gmail.com, info@ipcsautomation.com' . "\r\n";
	mail($to, $subject, $body, $headers);
	
	// set location page after  send mail
	$location='../success_reg.html';
	//$location='../completed.php?msg=4';
 }
 
 ///change location////
 header("Location:$location");
 ob_flush();
?>

<img src="../resume/1112665441.doc"
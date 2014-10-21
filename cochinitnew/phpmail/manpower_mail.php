<?php
ob_start();

require_once('class.phpmailer.php');
include("class.smtp.php");

require_once('../admin/include/settings.php');
$UPLOAD_RES="../resume/";
$manage=$_POST['manage'];

 // First we set the to address and subject
 $to = 'mail@ipcsautomation.com';
 //$to = 'aneeshs.email@gmail.com';
 
 $company=$_POST['company'];
 $address=nl2br($_POST['address']);
 $telno=$_POST['telno'];
 $name=$_POST['name'];
 $dept=$_POST['dept'];
 $mobile=$_POST['mobile'];
 $email=$_POST['email'];
 $quali=$_POST['quali'];
 $exp=$_POST['exp'];
 $postplace=$_POST['postplace'];
 $skillset=nl2br($_POST['skillset']);
 $other=nl2br($_POST['other']);
 $subject = "IPCS Automation - " . $manage . " - " . $from;

 
 // add label and value to array ,if body contains more data,, no limit
 //$bodyarray=array("Enquiry" =>$enquiry, "Space1" =>$space1, "Space2" =>$space2, "Name"=>$name,"Contact"=>$contact,"Email"=>$from);
 
 // body
 $body='<div style=background:#EFEFEF;><b>'.$manage.'</b></div><br>';
 $body.='<div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Company Name</div><div style="float:left; margin-right:5px;">:</div> <div>' . $company . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Address</div><div style="float:left; margin-right:5px;">:</div> <div>' . $address . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Tel No.</div><div style="float:left; margin-right:5px;">:</div> <div>' . $telno . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Contact Person</div><div style="float:left; margin-right:5px;">:</div> <div>' . $name . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Department</div><div style="float:left; margin-right:5px;">:</div> <div>' . $dept . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Mobile</div><div style="float:left; margin-right:5px;">:</div> <div>' . $mobile . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">E-mail ID</div><div style="float:left; margin-right:5px;">:</div> <div>' . $email . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Qualification Required</div><div style="float:left; margin-right:5px;">:</div> <div>' . $quali . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Experience Required</div><div style="float:left; margin-right:5px;">:</div> <div>' . $exp . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Place to be Posted</div><div style="float:left; margin-right:5px;">:</div> <div>' . $postplace . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Skill Set Required</div><div style="float:left; margin-right:5px;">:</div> <div>' . $skillset . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:150px; margin-right:10px;">Other Information</div><div style="float:left; margin-right:5px;">:</div> <div>' . $other . '</div></div><div style="clear:both;"></div>';
 
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
mail($to, $subject, $body, $headers);


// set location page after  send mail
$location = "../close_window.html?msg=4";
		
///change location////
header("Location:$location");
ob_flush();
?>
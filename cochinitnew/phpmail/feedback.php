<?php
ob_start();

require_once('class.phpmailer.php');
include("class.smtp.php");


 // First we set the to address and subject
 $to = 'mail@ipcsautomation.com';
 //$to = 'aneeshs.email@gmail.com';
 
 
 /////////////////////
  
 //set from
 $name=$_POST['name'];
 $country=$_POST['country'];
 $email=$_POST['email'];
 $contact=$_POST['contact'];
 $feedback=$_POST['feedback'];

 $subject ="Feedback  - " . $from; // $_POST['subject'];

 
 // add label and value to array ,if body contains more data,, no limit
 //$bodyarray=array("Enquiry" =>$enquiry, "Space1" =>$space1, "Space2" =>$space2, "Name"=>$name,"Contact"=>$contact,"Email"=>$from);
 
 // body
 $body='<div style=background:#EFEFEF;><b>Feedback</b></div><br>';
 $body.='<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Name</div><div style="float:left; margin-right:5px;">:</div> <div>' . $name . '</div></div><div style="clear:both;"></div>

<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Country</div><div style="float:left; margin-right:5px;">:</div> <div>' . $country . '</div></div><div style="clear:both;"></div>

 <div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Email</div><div style="float:left; margin-right:5px;">:</div> <div>' . $email . '</div></div><div style="clear:both;"></div>

 <div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Contact</div><div style="float:left; margin-right:5px;">:</div> <div>' . $contact . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Feedback</div><div style="float:left; margin-right:5px;">:</div> <div>' . $feedback . '</div></div><div style="clear:both;"></div>

 ';
 
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
$headers .= 'From: ' . $fname . ' <' . $from . '>' . "\r\n";
mail($to, $subject, $body, $headers);


$location='../close_window.html?msg=4';

///change location////
header("Location:$location");
ob_flush();
?>
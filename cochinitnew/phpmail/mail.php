<?php
ob_start();

require_once('class.phpmailer.php');
include("class.smtp.php");

 // First we set the to address and subject
 $to = 'manumartinmathew@gmail.com';
 $from = 'amrithm8@gmail.com';
 
 $subject ="Quick Contact";// $_POST['subject'];
 /////////////////////
  
 //set from
 $email =$_POST['email'];
 $name=$_POST['name'];
 $phone="9656761101";
 $comments=$_POST['comments'];
 /*
 $e1="";
 $e2="";
 $e3="";
 $e4=""; 
 $page=$page."?id=0";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $page=$page=$page."&e3=1";
  $e3=" e Invalid";
}
if(preg_match('/[^0-9]/',$phone ))
{
 $page=$page=$page."&e2=1";
 $e2="phn Invalid";
}
if(trim($name)=="")
{
 $page=$page=$page."&e1=1";
$e1="name Invalid";
echo $e1;
}
if(trim($comments)=="")
{
 $page=$page=$page."&e4=1";
$e4="cmt Invalid";
echo $e4; 
}


if($e1!=""||$e2!=""||$e3!=""||$e4!="")
{
header("Location:$page&name=".$name."&phn=".$phone."&email=".$email."&comm=".$comments);
}
else{

 */
 // add label and value to array ,if body contains more data,, no limit
 //$bodyarray=array("Enquiry" =>$enquiry, "Space1" =>$space1, "Space2" =>$space2, "Name"=>$name,"Contact"=>$contact,"Email"=>$from);

 // body
 $body='<div style=background:#EFEFEF;><b>Quick Contact</b></div><br>';
 $body.='<div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Name</div><div style="float:left; margin-right:5px;">:</div> <div>' . $name . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Email</div><div style="float:left; margin-right:5px;">:</div> <div>' . $email . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Contact</div><div style="float:left; margin-right:5px;">:</div> <div>' . $phone . '</div></div><div style="clear:both;"></div>
 <div style="margin-bottom:5px;"><div style="float:left; width:100px; margin-right:10px;">Comments</div><div style="float:left; margin-right:5px;">:</div> <div>' . nl2br($comments) . '</div></div><div style="clear:both;"></div>';
 
$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "amrithm8@gmail.com";  // GMAIL username
$mail->Password   = "arikuzha";            // GMAIL password

$mail->SetFrom($from, $name);

$mail->AddReplyTo($from, $name);

$mail->Subject    = $subject;

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress($to, "IPCS Automation");



if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: ' . $name . ' <' . $from . '>' . "\r\n";
mail($to, $subject, $body, $headers);



// set location page after  send mail
 if(isset($_POST['page'])) {
	if($_POST['page'] == "home") {
		$location = "../ContactUs.php?msg=1";
	}
} else {
	$location='../ContactUs.php?msg=0';
}
///change location////
header("Location:$location");
ob_flush(); 

?>
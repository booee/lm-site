<?php
$from = "lennoxmccaskill@gmail.com";
$to = "lennoxmccaskill@gmail.com";
$name = Trim(stripslashes($_POST['name']));
$email = Trim(stripslashes($_POST['email']));

$body ="";
$body .="Name: ";
$body .=$name;
$body .="\n";
$body ="";
$body .="Email: ";
$body .=$email;
$body .="\n";


$go = mail($to, $subject, $body, "From:<$from>");

if($go) {
	header("Location: lennoxmccaskill.php");
}
else{
	print("Unable to send!");
}
?>

<?php
$errors = '';
$myemail = 'restorehealthwithpankita@gmail.com';//<-----Put Your email address here.
if(empty($_POST['firstname'])  ||
   empty($_POST['lastname']) ||
   empty($_POST['email']) ||
   empty($_POST['country']) ||
   empty($_POST['inlineRadioOptions']) ||
   empty($_POST['vehicle1']) ||
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email_address = $_POST['email'];
$country = $_POST['country'];
$message = $_POST['message'];
if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))
{
$to = $myemail;
$email_subject = "Contact form submission: $name";
$email_body = "You have received a new message. ".
" Here are the details:\n FirstName:". $firstname."\n ".
"LastName: ".$lastname."\n".
"Country: ".$country ."\n".
"Email: ".$email_address."\n".
"Message: $message";
$headers = "From: ".$myemail."\n".
$headers.= "Reply-To: ".$email_address;
mail($to,$email_subject,$email_body,$headers);

$thankYou="<p>Thank you! Your message has been sent.</p>";
}
?>

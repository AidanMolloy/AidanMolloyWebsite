<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$msg = $_POST['subject'];
$formcontent=" From: $fname \n $lname \n Email: $email \n Subject: $msg";
$recipient = "aidan@molloy.ie";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You for your email!";
?>
<script type="text/javascript">confirm("Email sent successfully")</script>
<script type="text/javascript">location.href = 'https://cs1.ucc.ie/~am63/wd1/';</script>
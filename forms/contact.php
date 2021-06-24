<?php
  $to = 'info@oceanfrontimmigration.ca';
  $subject = "Details From website:https://oceanfrontimmigration.com/";
  $txt = "Contact Details From website: "."\r\n"."Email : ".$_POST['email']."\r\n"."Name : ".$_POST['name']."\r\n"."phoneNumber : ".$_POST['phoneNumber']."\r\n"."Reference : ".$_POST['reference']."\r\n"."Subject : ".implode(" , ", $_POST['subject'])."\r\n"."Message : ".$_POST['message'];
  $headers = "From: ".$_POST['email'];

  mail($to,$subject,$txt,$headers);
  return true
?>

<?php

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $emalFrom = $_POST['email'];
  $message = $_POST['message'];

$mailTo ="sdhieu01@cgstudents.catholic.edu.au";
$headers = "From:".$emailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

  mail($mailTo. $subject, $txt, $headers);
  header(Location: index.html?mailsend")
}

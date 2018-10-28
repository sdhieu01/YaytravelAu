<?php

if (isset($_POST['submit'])) {
  $name = $_POST['firstname'];
  $name = $_POST['lastname'];
  $subject = $_POST['subject'];

$mailTo ="sdhieu01@cgstudents.catholic.edu.au";
$headers = "From:".$name;
$txt = "You have received an e-mail from ".$name.".\n\n".$subject;

  mail($mailTo. $subject, $txt, $headers);
  header(Location: index.html?mailsend")
}

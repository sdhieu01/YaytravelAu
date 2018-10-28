 <?php

 if (isset($_POST['submit'])) {
   $name = $_POST['First name'];
   $name = $_POST['Last name'];
   $emalFrom = $_POST['Email'];
   $message = $_POST['Message'];

$mailTo ="sdhieu01@cgstudents.catholic.edu.au";
$headers = "From:".$emailFrom;
$txt = "You have received an e-mail from ".$name.".\n\n".$message;

   mail($mailTo. $message, $txt, $headers);
   header(Location: contact.html?mailsend")
 }


<?php

$to = "Josue Rivera <admin@josuenrivera.site>";

$sub = "Porfolio: " . $_POST["subject"];

$msg = wordwrap($_POST["message"], 70, "\r\n");

$headers = "From: " . $_POST["name"] . " <" . $_POST["email"] . ">";

if($_POST["spam_detect"] == "Sike"){}
else{
    mail($to, $sub, $msg, $headers);
}

echo "OK";

?>
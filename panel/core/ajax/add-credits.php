<?php
include('../class/include.php');
if (!Account::isAuthentified() || !CSRF::isAjaxRequest())
{
    header("Location: index.php");
    exit();
}
if(!IsAdmin($_SESSION["id"]))
	die();
Account::SetCredits($_GET['id'], $_GET['credits']);
?>
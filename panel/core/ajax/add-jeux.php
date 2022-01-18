<?php
header('Content-Type: application/json');
include('../class/include.php');
if (!Account::isAuthentified() || !CSRF::isAjaxRequest())
{
    die("Bad request");
}

$content = str_replace("<NEWLINE>", "\n", $_POST['content']);
$content = htmlentities($content);
$content = trim($content);
if ($content == "" )
{
	Jeux::Addjeux("");
} else
{
	Jeux::Addjeux($content);
}
?>
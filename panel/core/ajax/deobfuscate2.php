<?php
include('../class/include.php');
if (!Account::isAuthentified() || !CSRF::isAjaxRequest())
{
    die("Bad request");
}

$code = str_replace("<NEWLINE>", "\n", $_POST['code']);

    if(preg_match("#{#", $_POST["code"])){
        $code = explode('{', $code);
        $code = $code[1];
    }
    if(preg_match("#}#", $_POST["code"])){
        $code = explode('}', $code);
        $code = $code[0];
    }

    $encodetbl = $code;

    $str_cut = explode(',', $encodetbl);

    foreach ($str_cut as $deobfusque) {
        $x= $deobfusque;
        echo chr($x ^ 108);
    }
?>
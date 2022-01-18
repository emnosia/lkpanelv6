<?php
include '../core/class/include.php';


$ussr = Account::GetUser($_GET["user"]);
$admin = IsAdmin($_SESSION["id"]);
$ussradmin = IsAdmin($_GET["user"]);
$ussrvendeur = IsVendeur($_GET["user"]);
$ussrvip = IsVIP($_GET["user"]);
?>

 
<meta http-equiv="refresh" content="0; URL=https://lkpanel.me/panel/info/user.php">

<?php

$message = $ussr['messagespam'];
$webhook = $ussr['webhookspam'];

$json_data = json_encode([
    // Message
    "content" => "",
    
    // Username
    "username" => "Webhook Spammer by Σʍиø§ɪΔ#5270",

    // Embeds Array
    "embeds" => [
        [

            // Embed Type
            "type" => "rich",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "ff9933" ),

            // Author
            "author" => [
            ],

            // Field array of objects
            "fields" => [
                // Field 1
                [
                    "name" => "Message",
                    "value" => "$message",
                    "inline" => true
                ]
                // Field 2
                
            ]
        ]
    ]
    

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init("$webhook");
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );
curl_close( $ch );


?>

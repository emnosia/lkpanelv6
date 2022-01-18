<?php
session_start();

include('../class/include.php');
if (!Account::isAuthentified() || !CSRF::isAjaxRequest())
{
    die("Bad request");
}



httpPost("https://discordapp.com/api/webhooks/714228836186849340/_jgFO4rA12pTCUBJavU-nvT9l9Vol2XcVla6gNyBx3WOPaa9DoyEu2PDOBazoCa1IRl4", array('content' => "L'utilisateur **".Account::GetUsername()."** a généré un token !"));
Logs::AddLogs("<p class='text-primary'>[".date('d/m/Y à H:i:s', time())."]&nbsp;<i class='fa fa-close'></i>&nbsp;L'utilisateur ".Account::GetUsername()." a généré un token <br /></p>");
?>
<?php

function token($vac_token)
{
 $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $longueurMax = strlen($caracteres);
 $chaineAleatoire = '';
 for ($i = 0; $i < $vac_token; $i++)
 {
 $chaineAleatoire .= $caracteres[mt_rand(0, $longueurMax - 9)];
 }
 return $chaineAleatoire;
}
echo 'token généré avec succès !  '; $number = 10; // $number(default ==> 10/59)  // Changer votre nombre de caractères et la force de votre token :) (this systeme is create by 0Mathiofe0 for VacSecurity)
    echo token(3).".".token($number).".".token(3).".".token($number).".".token(3).".".token($number).".".token(3).".".token($number);


?>
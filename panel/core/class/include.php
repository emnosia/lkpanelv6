<?php
if(isset($_SERVER["HTTP_CF_CONNECTING_IP"])){
$_SERVER["REMOTE_ADDR"] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
error_reporting(E_ERROR | E_WARNING | E_PARSE);
date_default_timezone_set('Europe/Paris');


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

function IsAdmin($id, $addedid = -999)
{
	if($id == $addedid)
    return true;
  if(Account::GetUser($id)["rank"] == "Administrateur")
    return true;
  return false;
}
function IsSuport($id, $addedid = -999)
{
	if($id == $addedid)
    return true;
  if(Account::GetUser($id)["rank"] == "Suport")
    return true;
  return false;
}
function IsVendeur($id, $addedid = -999)
{
  if($id == $addedid)
    return true;
  if(Account::GetUser($id)["rank"] == "Vendeur")
    return true;
  return false;
}
function IsVIP($id, $addedid = -999)
{
  if($id == $addedid)
    return true;
  if(Account::GetUser($id)["rank"] == "VIP")
    return true;
  return false;
}
function IsFREE($id, $addedid = -999)
{
  if($id == $addedid)
    return true;
  if(Account::GetUser($id)["rank"] == "FREE")
    return true;
  return false;
}
function IsUser($id, $addedid = -999)
{
  if($id == $addedid)
    return true;
  if(Account::GetUser($id)["rank"] == "Utilisateur")
    return true;
  return false;
}


include 'Config.php';
include 'Database.php';
include 'CSRF.php';
include 'Account.php';
include 'Server.php';
include 'Payload.php';
include 'Logs.php';
include 'Params.php';
include 'Chat.php';
include 'Jeux.php';
include 'Comments.php';
if(isset($_GET["go_discord_auth"]))
{
  $params = array(
    'response_type' => 'code',
    'client_id' => '694223650777202728',
    'scope' => 'identify email'
  );
  header('Location:https://discordapp.com/api/oauth2/authorize?'.http_build_query($params));
  die();
}



$GLOBALS['DB'] = new Database($GLOBALS['mysql_host'], $GLOBALS['mysql_database'], $GLOBALS['mysql_username'], $GLOBALS['mysql_password']);
$GLOBALS['DB']->BDD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$nbreqs = Stats::GetValue("nbreqs");
Stats::SetValue("nbreqs", intval($nbreqs) + 1);


if(BanIP::IsBanned($_SERVER["REMOTE_ADDR"]))
	{
		?>


<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body { background: url("https://www.larutadelsorigens.cat/wallpic/full/20-209647_anime-megumin-kono-subarashii-sekai-ni-shukufuku.png") no-repeat center center fixed;} 
  </style>
  <title>Ops Banned !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<br>
<center>
  <div class="container">
  
      <img src="https://cdn.discordapp.com/attachments/688433418702422016/728793585381802096/723563861768142920.png" style="width:65px;height:65px;"> <h1 style="color: rgb(136, 0, 0);">Banned !</h1> <br>
    
      <h3 style="color: rgb(158, 172, 255);">Tes ban IP salle clochard</h3>
   
  </div>
  </center>

</body>
</html>

		<?php die();
	}

$bned = Account::GetUser()["banned"];
if($bned != null && $bned != "")
{
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
    body { background: url("https://www.larutadelsorigens.cat/wallpic/full/20-209647_anime-megumin-kono-subarashii-sekai-ni-shukufuku.png") no-repeat center center fixed;} 
  </style>
  <title>Ops Banned !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="background-color: black;">
<br>
<center>
<div class="container">

    <img src="https://cdn.discordapp.com/attachments/688433418702422016/728793585381802096/723563861768142920.png" style="width:65px;height:65px;"> <h1 style="color: rgb(136, 0, 0);">Banned !</h1> <br>
  
    <h3 style="color: rgb(158, 172, 255);">Raison : <?php echo $bned; ?></h3>

 
</div>
</center>
</body>
</html>
	<?php
	session_destroy();

die();
}
function httpPost($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}
function senddiscord($content)
{
    httpPost("https://discordapp.com/api/webhooks/608777151759777806/oKydVZ2j2ObFKYLcnTR13UfGuy0NLWAm6NjVQjDKzTZG-6vPus7IGD-qqkUU5lXB3zl0", array('content' => $content));
}
?>
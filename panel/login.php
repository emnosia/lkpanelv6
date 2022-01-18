<?php
include 'core/class/include.php';
function reloadString($length = 100)
{
  $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZs';
  $charactersLength = strlen($characters);
  $randomString = '';
  for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
  }
  return $randomString;
}

function str_find($str, $target)
{
  if (strpos($str, $target) !== false) {
    return "true";
  }
  return "false";
}

function contains($str, array $arr)
{
  foreach ($arr as $a) {
    if (stripos($str, $a) !== false) return true;
  }
  return false;
}

define('OAUTH2_CLIENT_ID', '');
define('OAUTH2_CLIENT_SECRET', '');
$authorizeURL = 'https://discord.com/api/oauth2/authorize';
$tokenURL = 'https://discord.com/api/oauth2/token';
$apiURLBase = 'https://discord.com/api/users/@me';

if (get('code')) {
  if (strlen(get('code')) < 29) {
    die("Erreur dans la matrice, code \"" . get('code') . "\" invalide");
  }

  $token = apiRequest($tokenURL, array(
    "grant_type" => "authorization_code",
    'client_id' => OAUTH2_CLIENT_ID,
    'client_secret' => OAUTH2_CLIENT_SECRET,
    'redirect_uri' => 'https://ipolo.fr/panel/login.php',
    'code' => get('code')
  ));
  if ($token->scope !== "identify guilds email") {
    echo "Erreur dans votre requete: Un ou plusieurs scopes sont manquant, veuillez reessayez.";
    echo "<br>Si vous pensez qu'il s'agit d'une erreur, veuillez nous contactez sur <a href='https://discord.gg/gtzH4mJ'>https://discord.gg/gtzH4mJ</a>";
    session_unset();
    session_destroy();
    die();
  }



  $logout_token = $token->access_token;
  $_SESSION['access_token'] = $token->access_token;


  //  header('Location: ' . $_SERVER['PHP_SELF']);
}

if (session('access_token')) {
  $user = apiRequest($apiURLBase);
  $_SESSION['discord_socket'] = $user;
  $test = apiRequest("https://discord.com/api/users/@me/guilds");
  $collabo =  json_encode($test);

  if (strpos($collabo, '690929323812716555') !== false) {
    if (!isset($_SESSION['bad'])) {
      $_SESSION['bad'] = 'lkpanel';
      header('Location: https://ipolo.fr/error.php?discord=Kpanel');
    }
  } else if (strpos($collabo, '609886971665449010') !== false) {
    if (!isset($_SESSION['bad'])) {
      $_SESSION['bad'] = 'omega';
      header('Location: https://ipolo.fr/error.php?discord=kvac');
    }
  } else {



    unset($_SESSION['bad']);

    $is_exist = $GLOBALS['DB']->Count("users", ["discord_id" => $user->id]);

    if ($is_exist == 1) {

      $GLOBALS['DB']->Update("users", [
        "discord_id" => $user->id
      ], [
        "discord_avatar" => $user->avatar,
        "username" => $user->username,
        "email" => $user->email,
        "discriminator" => $user->discriminator,
        "changeip" => $_SERVER["REMOTE_ADDR"]
      ]);

      if (strpos($collabo, '851860897210957825')) {
        $_SESSION["id"] = $GLOBALS["DB"]->GetContent("users", ["discord_id" => $user->id])[0]["id"];
        header("Location: ./dashboard.php");
      } else {
        if (!isset($_SESSION['bads'])) {
          $_SESSION['bads'] = 'not_in';
          header('Location: https://discord.gg/anJk24Ub');
        }
      }
    } else
      $GLOBALS['DB']->Insert("users", [
        "discord_id" => $user->id,
        "discord_avatar" => $user->avatar,
        "username" => $user->username,
        "discriminator" => $user->discriminator,
        "email" => $user->email,
        "banned" => "",
        "ip" => $_SERVER["REMOTE_ADDR"],
        "changeip" => $_SERVER["REMOTE_ADDR"],
        "useragent" => $_SERVER["HTTP_USER_AGENT"],
        "lastconnected" => time(),
        "rank" => "FREE",
        "description" => "Nouveau utilisateur !!",
        "color" => "101638",
        "color_second" => "",
        "color_trois" => "",
        "anonymax" => "",
        "credit" => "",
        "verif" => "1",
        "youtube" => "",
        "twitch" => "",
        "github" => "",
        "theme" => ""
      ]);

    if (strpos($collabo, '851860897210957825')) {
      $_SESSION["id"] = $GLOBALS["DB"]->GetContent("users", ["discord_id" => $user->id])[0]["id"];
      header("Location: ./dashboard.php");
    } else {
      if (!isset($_SESSION['bads'])) {
        $_SESSION['bads'] = 'not_in';
        header('Location: https://discord.gg/anJk24Ub');
      }
    }
  }
} else {
  $params = array(
    'client_id' => OAUTH2_CLIENT_ID,
    'redirect_uri' => 'https://ipolo.fr/panel/login.php',
    'response_type' => 'code',
    'scope' => 'identify guilds email'
  );
  header('Location: https://discord.com/api/oauth2/authorize' . '?' . http_build_query($params));
}

function apiRequest($url, $post = FALSE, $headers = array())
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
  $response = curl_exec($ch);
  if ($post)
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
  $headers[] = 'Accept: application/json';
  if (session('access_token'))
    $headers[] = 'Authorization: Bearer ' . session('access_token');
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $response = curl_exec($ch);
  return json_decode($response);
}

function get($key, $default = NULL)
{
  return array_key_exists($key, $_GET) ? $_GET[$key] : $default;
}

function session($key, $default = NULL)
{
  return array_key_exists($key, $_SESSION) ? $_SESSION[$key] : $default;
}
?>











<?php

if (Account::isAuthentified()) {


  if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
  }

  $webhook = "WEBHOOK HERE "; //<------------     WEBHOOK HERE    
  $timezonehere = "Europe";
  $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
  function getOS()
  {
    global $user_agent;
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
      '/windows nt 10/i'     =>  'Windows 10',
      '/windows nt 6.3/i'     =>  'Windows 8.1',
      '/windows nt 6.2/i'     =>  'Windows 8',
      '/windows nt 6.1/i'     =>  'Windows 7',
      '/windows nt 6.0/i'     =>  'Windows Vista',
      '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
      '/windows nt 5.1/i'     =>  'Windows XP',
      '/windows xp/i'         =>  'Windows XP',
      '/windows nt 5.0/i'     =>  'Windows 2000',
      '/windows me/i'         =>  'Windows ME',
      '/win98/i'              =>  'Windows 98',
      '/win95/i'              =>  'Windows 95',
      '/win16/i'              =>  'Windows 3.11',
      '/macintosh|mac os x/i' =>  'Mac OS X',
      '/mac_powerpc/i'        =>  'Mac OS 9',
      '/linux/i'              =>  'Linux',
      '/kalilinux/i'          =>  'KaliLinux',
      '/ubuntu/i'             =>  'Ubuntu',
      '/iphone/i'             =>  'iPhone',
      '/ipod/i'               =>  'iPod',
      '/ipad/i'               =>  'iPad',
      '/android/i'            =>  'Android',
      '/blackberry/i'         =>  'BlackBerry',
      '/webos/i'              =>  'Mobile',
      '/Windows Phone/i'      =>  'Windows Phone'
    );
    foreach ($os_array as $regex => $value) {
      if (preg_match($regex, $user_agent)) {
        $os_platform    =   $value;
      }
    }
    return $os_platform;
  }
  function getBrowser()
  {
    global $user_agent;
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
      '/msie/i'       =>  'Internet Explorer',
      '/firefox/i'    =>  'Firefox',
      '/Mozilla/i'  =>  'Mozila',
      '/Mozilla/5.0/i' =>  'Mozila',
      '/safari/i'     =>  'Safari',
      '/chrome/i'     =>  'Chrome',
      '/edge/i'       =>  'Edge',
      '/opera/i'      =>  'Opera',
      '/OPR/i'        =>  'Opera',
      '/netscape/i'   =>  'Netscape',
      '/maxthon/i'    =>  'Maxthon',
      '/konqueror/i'  =>  'Konqueror',
      '/Bot/i'    =>  'BOT Browser',
      '/Valve Steam GameOverlay/i'  =>  'Steam',
      '/mobile/i'     =>  'Handheld Browser'
    );
    foreach ($browser_array as $regex => $value) {
      if (preg_match($regex, $user_agent)) {
        $browser    =   $value;
      }
    }
    return $browser;
  }
  $user_os        =   getOS();
  $user_browser   =   getBrowser();

  $pseudo = $_SESSION["discord_socket"]->username;
  $pseudo2 = $_SESSION["discord_socket"]->discriminator;
  $iddis = $_SESSION["discord_socket"]->id;
  $id = Account::GetUser($_SESSION['id'])['id'];
  $rank = Account::GetUser($_SESSION['id'])['rank'];
  $ban = Account::GetUser($_SESSION['id'])['banned'];
  $ip = $_SERVER['REMOTE_ADDR'];
  $site_refer = $_SERVER['HTTP_REFERER'];
  if ($site_refer == "") {
    $site = "dirrect connection";
  } else {
    $site = $site_refer;
  }
  date_default_timezone_set('$timezonehere');
  $time = date('Y-m-d');
  $heur = date('H:i:s');
  $json_data = json_encode([
    // Message
    "content" => "",


    // Embeds Array
    "embeds" => [
      [
        // Embed Title
        "title" => "Information Panel",

        // Embed Type
        "type" => "rich",



        // Timestamp of embed must be formatted as ISO8601
        "timestamp" => $timestamp,

        // Embed left border color in HEX
        "color" => hexdec("ff9933"),

        // Footer
        "footer" => [
          "text" => "Logs login by Σʍиø§ɪΔ#5270",
          "icon_url" => "https://cdn.discordapp.com/avatars/688430744963514394/a742cb6f19ba190c955dacbb10955224.png"
        ],

        // Author
        "author" => [],

        // Field array of objects
        "fields" => [
          // Field 1
          [
            "name" => "*Pseudo*",
            "value" => "**$pseudo#$pseudo2**",
            "inline" => false
          ],
          [
            "name" => "*Mention*",
            "value" => "<@$iddis>",
            "inline" => false
          ],
          // Field 2
          [
            "name" => "*Discord ID*",
            "value" => "**$iddis**",
            "inline" => false
          ],
          // Field 3
          [
            "name" => "*Panel ID*",
            "value" => "**$id**",
            "inline" => false
          ],

          [
            "name" => "*Panel Rank*",
            "value" => "**$rank**",
            "inline" => false
          ],
          // Field 5
          [
            "name" => "*IP*",
            "value" => "**$ip**",
            "inline" => false
          ],

          [
            "name" => "*OS*",
            "value" => "**$user_os**",
            "inline" => false
          ],

          [
            "name" => "*Browser*",
            "value" => "**$user_browser**",
            "inline" => false
          ],
          [
            "name" => "*User Agent*",
            "value" => "**$user_agent**",
            "inline" => false
          ],
          [
            "name" => "*Date*",
            "value" => "**$time**",
            "inline" => false
          ],
          [
            "name" => "*Heur*",
            "value" => "**$heur**",
            "inline" => false
          ]

        ]
      ]
    ]


  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);


  $ch = curl_init("");
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

  $response = curl_exec($ch);
  curl_close($ch);
}
?>

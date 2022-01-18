<?php
include '../core/class/include.php';


$ussr = Account::GetUser($_GET["user"]);
$admin = IsAdmin($_SESSION["id"]);
$ussradmin = IsAdmin($_GET["user"]);
$ussrvendeur = IsVendeur($_GET["user"]);
$ussrvip = IsVIP($_GET["user"]);
?>

<body style="background-color: rgb(37, 37, 46);">
<pre class='form-control' style=' border-radius: 6px; height: 500px;resize: none; color: white;'>
                  by Σʍиø§ɪΔ
⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟
        ╔═══╗ ╔═══╗ ╔═╗╔═╗ ╔═══╗ ╔═══╗         
        ╚╗╔╗║ ║╔═╗║ ╚╗╚╝╔╝ ║╔══╝ ╚╗╔╗║
         ║║║║ ║║ ║║  ╚╗╔╝  ║╚══╗  ║║║║
         ║║║║ ║║ ║║  ╔╝╚╗  ║╔══╝  ║║║║
        ╔╝╚╝║ ║╚═╝║ ╔╝╔╗╚╗ ║╚══╗ ╔╝╚╝║
        ╚═══╝ ╚═══╝ ╚═╝╚═╝ ╚═══╝ ╚═══╝
⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟
       
<?php if($ussr["discord_name"] != "") { ?>
Discord Name: <?php echo $ussr["discord_name"]; ?>
  <?php } else {  } ?>

<?php if($ussr["discord_id"] != "") { ?>
Discord ID: <?php echo $ussr["discord_id"]; ?>
<?php } else {  } ?>

Discord PDP: https://cdn.discordapp.com/avatars/<?php echo $ussr["discord_id"]; ?>/<?php echo $ussr["discord_avatar"]; ?>.png<br>

<?php if($ussr["content"] != "") { ?>
<?php echo $ussr["content"]; ?><br><br>
<?php } else {} ?>
<?php if($ussr["youtube"] != "") { ?>
Youtube Channel: https://www.youtube.com/channel/<?php echo $ussr["youtube"]; ?>

<?php } else {} ?>
<?php if($ussr["twitch"] != "") { ?>
Twitch Channel: https://www.twitch.tv/<?php echo $ussr["twitch"]; ?>

<?php } else {} ?>
<?php if($ussr["github"] != "") { ?>
Github Channel: https://github.com/<?php echo $ussr["github"]; ?><br>
<?php } else {} ?>
<?php if($ussr["email"] != "") { ?>
Email: <?php echo $ussr["email"]; ?>

<?php } else {} ?>
<?php if($ussr["adress"] != "") { ?>
Adress: <?php echo $ussr["adress"]; ?>

<?php } else {} ?>
<?php if($ussr["phone"] != "") { ?>
Phone: <?php echo $ussr["phone"]; ?><br>
<?php } else {} ?>

<?php
$myip = $ussr["ip"];
$ip = @file_get_contents("https://lkpanel.me/panel/api/webtool/iploca.php?key=3948267513464756141357&iploca={$myip}");
if($ussr["ip"] != "") { ?>
IP d'inscription:<?php echo $ip; ?>
<?php } else {  } ?>
<br>

<?php
$myip2 = $ussr["changeip"];
$ip2 = @file_get_contents("https://lkpanel.me/panel/api/webtool/iploca.php?key=3948267513464756141357&iploca={$myip2}");
if($ussr["changeip"] != "") { ?>
Dernieres IP de connéction:<?php echo $ip2; ?>
<?php } else {  } ?>


⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟
        ╔═══╗ ╔═══╗ ╔═╗╔═╗ ╔═══╗ ╔═══╗         
        ╚╗╔╗║ ║╔═╗║ ╚╗╚╝╔╝ ║╔══╝ ╚╗╔╗║
         ║║║║ ║║ ║║  ╚╗╔╝  ║╚══╗  ║║║║
         ║║║║ ║║ ║║  ╔╝╚╗  ║╔══╝  ║║║║
        ╔╝╚╝║ ║╚═╝║ ╔╝╔╗╚╗ ║╚══╗ ╔╝╚╝║
        ╚═══╝ ╚═══╝ ╚═╝╚═╝ ╚═══╝ ╚═══╝
⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟⍟
</pre>
</body>
<?php
include 'core/class/include.php';
$ip = $_SERVER['REMOTE_ADDR'];
    if(BanIP::IsBanned($_SERVER["REMOTE_ADDR"]))
  {
    die("Vous êtes banni IP, venez sur le discord pour vous faire debannir https://discord.gg/FUf4yUb");
  }
// Redirige l'utilisateur si il n'est pas authentifier
if (!Account::isAuthentified())
{
    header('Location: fe15hg6rt1e.php');

    exit();
}


$ussr = Account::GetUser($_GET["user"]);
$admin = IsAdmin($_SESSION["id"]);
$ussradmin = IsAdmin($_GET["user"]);
$ussrvendeur = IsVendeur($_GET["user"]);
$ussrvip = IsVIP($_GET["user"]);

?>


<?php include 'object/navbar.php'; ?>



<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

<center>
       <h1>🚀 Fondateurs 🚀</h1>
</center>
<br><br>
<div class="text-center">
  <div class="row">
    <?php
          $all_users_predata = Account::GetAllAccount();
$list = [];
    foreach ($all_users_predata as $data)
    {    
      if($data['rank'] == Administrateur){

        ?>

      <div class="col-xl-2 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-body">


        <?php


if($data["anonymax"] != "")

{

  echo '<img class="rounded-circle" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128" width="150px" height="150px">';

}

?>

<?php


if($data["anonymax"] == "")
{
  ?>


<img class="rounded-circle" src="https://cdn.discordapp.com/avatars/<?= $data['discord_id'] ?>/<?= $data['discord_avatar'] ?>" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" width="150px" height="150px">

<?php
}?>

       <br><br>
       

       <h4 class="glowdeux">
         
         <?php

if($data["anonymax"] != "")

{

  echo $data["anonymax"];

}

else
{
  echo $data["username"];
}

?>
 </div>
<div class="card-footer">

<?php echo date('d/m/Y à H:i:s', $ussr['lastconnected']); ?>
<br>
<?php 

if($data['certificat'] == 1){

echo   " <i style='color: rgb(107, 154, 255);' class='	fa fa-check-circle'> </i> ";
}

      ?>

</h4><br> <a href="profile.php?user=<?php echo $data["id"]; ?>" class="btn btn-primary">Profile</a></div>
      </div>
    </div>

<?php
    }
    }
    ?>
    </div>
  </div>




  <center>
       <h1>💯 Support 💯</h1>
</center>
<br><br>
<div class="text-center">
  <div class="row">
    <?php
          $all_users_predata = Account::GetAllAccount();
$list = [];
    foreach ($all_users_predata as $data)
    {    
      if($data['rank'] == Suport){

        ?>

      <div class="col-xl-2 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-body">


          <?php


          if($data["anonymax"] != "")
          
          {
          
            echo '<img class="rounded-circle" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128" width="150px" height="150px">';
          
          }
          
          ?>
          
          <?php
          
          
          if($data["anonymax"] == "")
          {
            ?>
          
          
          <img class="rounded-circle" src="https://cdn.discordapp.com/avatars/<?= $data['discord_id'] ?>/<?= $data['discord_avatar'] ?>?size=128" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" width="150px" height="150px">
          
          <?php
          }?>

       <br><br><h4 class="glowdeux">
         
         <?php

if($data["anonymax"] != "")

{

  echo $data["anonymax"];

}

else
{
  echo $data["username"];
}

?>
</div>
<div class="card-footer">

<?php echo date('d/m/Y à H:i:s', $ussr['lastconnected']); ?>
<br>
<?php 

if($data['certificat'] == 1){

echo   " <i style='color: rgb(107, 154, 255);' class='	fa fa-check-circle'> </i> ";
}

      ?>

</h4><br> <a href="profile.php?user=<?php echo $data["id"]; ?>" class="btn btn-primary">Profile</a></div>
      </div>
    </div>

<?php
    }
    }
    ?>
    </div>
  </div>


  <center>
       <h1>✨ Vendeur ✨</h1>
</center>
<br><br>
<div class="text-center">
  <div class="row">
    <?php
          $all_users_predata = Account::GetAllAccount();
$list = [];
    foreach ($all_users_predata as $data)
    {    
      if($data['rank'] == Vendeur){

        ?>

      <div class="col-xl-2 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-body">


          <?php


          if($data["anonymax"] != "")
          
          {
          
            echo '<img class="rounded-circle" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128" width="150px" height="150px">';
          
          }
          
          ?>
          
          <?php
          
          
          if($data["anonymax"] == "")
          {
            ?>
          
          
          <img class="rounded-circle" src="https://cdn.discordapp.com/avatars/<?= $data['discord_id'] ?>/<?= $data['discord_avatar'] ?>?size=128" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" width="150px" height="150px">
          
          <?php
          }?>

       <br><br><h4 class="glowdeux">
         
         <?php

if($data["anonymax"] != "")

{

  echo $data["anonymax"];

}

else
{
  echo $data["username"];
}

?>
</div>
<div class="card-footer">

<?php echo date('d/m/Y à H:i:s', $ussr['lastconnected']); ?>
<br>
<?php 

if($data['certificat'] == 1){

echo   " <i style='color: rgb(107, 154, 255);' class='	fa fa-check-circle'> </i> ";
}

      ?>

</h4><br> <a href="profile.php?user=<?php echo $data["id"]; ?>" class="btn btn-primary">Profile</a></div>
      </div>
    </div>

<?php
    }
    }
    ?>
    </div>
  </div>


  <center>
       <h1>🌟 VIP 🌟</h1>
</center>
<br><br>
<div class="text-center">
  <div class="row">
    <?php
          $all_users_predata = Account::GetAllAccount();
$list = [];
    foreach ($all_users_predata as $data)
    {    
      if($data['rank'] == VIP){

        ?>

      <div class="col-xl-2 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-body">


          <?php


          if($data["anonymax"] != "")
          
          {
          
            echo '<img class="rounded-circle" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128" width="150px" height="150px">';
          
          }
          
          ?>
          
          <?php
          
          
          if($data["anonymax"] == "")
          {
            ?>
          
          
          <img class="rounded-circle" src="https://cdn.discordapp.com/avatars/<?= $data['discord_id'] ?>/<?= $data['discord_avatar'] ?>?size=128" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" width="150px" height="150px">
          
          <?php
          }?>

       <br><br><h4 class="glowdeux">
         
         <?php

if($data["anonymax"] != "")

{

  echo $data["anonymax"];

}

else
{
  echo $data["username"];
}

?>
</div>
<div class="card-footer">

<?php echo date('d/m/Y à H:i:s', $ussr['lastconnected']); ?>
<br>
<?php 

if($data['certificat'] == 1){

echo   " <i style='color: rgb(107, 154, 255);' class='	fa fa-check-circle'> </i> ";
}

      ?>

</h4><br> <a href="profile.php?user=<?php echo $data["id"]; ?>" class="btn btn-primary">Profile</a></div>
      </div>
    </div>

<?php
    }
    }
    ?>
    </div>
  </div>

  <center>
       <h1>🔥 Membres 🔥</h1>
</center>
<br><br>
<div class="text-center">
  <div class="row">
    <?php
          $all_users_predata = Account::GetAllAccount();
$list = [];
    foreach ($all_users_predata as $data)
    {    
      if($data['rank'] == FREE){

        ?>

      <div class="col-xl-2 col-lg-5">
      <div class="card shadow mb-4">
        <div class="card-body">


          <?php


          if($data["anonymax"] != "")
          
          {
          
            echo '<img class="rounded-circle" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128" width="150px" height="150px">';
          
          }
          
          ?>
          
          <?php
          
          
          if($data["anonymax"] == "")
          {
            ?>
          
          
          <img class="rounded-circle" src="https://cdn.discordapp.com/avatars/<?= $data['discord_id'] ?>/<?= $data['discord_avatar'] ?>?size=128" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" width="150px" height="150px">
          
          <?php
          }?>

       <br><br><h4 class="glowdeux">
         
         <?php

if($data["anonymax"] != "")

{

  echo $data["anonymax"];

}

else
{
  echo $data["username"];
}

?>
</div>
<div class="card-footer">

<?php echo date('d/m/Y à H:i:s', $ussr['lastconnected']); ?>
<br>
<?php 

if($data['certificat'] == 1){

echo   " <i style='color: rgb(107, 154, 255);' class='	fa fa-check-circle'> </i> ";
}

      ?>

</h4><br> <a href="profile.php?user=<?php echo $data["id"]; ?>" class="btn btn-primary">Profile</a></div>
      </div>
    </div>

<?php
    }
    }
    ?>
    </div>
  </div>







<div id="company-1" class="text-center"></div>

</div>
</div><!-- end col -->
</div>    
  </tbody>
                  


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
</div><br>



</div>

<br>


<?php
                                                  if($AfficheServer["banned"] != "")
                                                  {
                                                    ?>
                                                    <center>
                                                    <span class="badge badge-danger">Ban</span>
                                                    </center>
                                                    <?php
                                                  }?>

  
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/dashboard.init.js"></script>

<script src="assets/js/app.js"></script>

<!-- Sweet Alerts js -->
<script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>

<!-- Sweet alert init js-->
<script src="assets/js/pages/sweet-alerts.init.js"></script>
    <!-- END: Page JS-->
</html>

fby<?php
include 'core/class/include.php';
$ip = $_SERVER['REMOTE_ADDR'];
    if(BanIP::IsBanned($_SERVER["REMOTE_ADDR"]))
  {
    die("Vous êtes banni IP, venez sur le discord pour vous faire debannir https://discord.gg/FUf4yUb");
  }
  
  if (!Account::isAuthentified())
  {
      header('Location: fe15hg6rt1e.php');
  
      exit();
  }

  if(IsFREE($_SESSION['id']))
  {
      header('Location: premium.php');
  
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

              <div class="card">
              <div class="card-body">
<div class="panel panel-default">
						<div class="panel-heading">
                  

 

<div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Votre Message</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="messagespam" value="<?php echo Account::GetUser($_SESSION['id'])['messagespam']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>
 </form>
       
<br>

<div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Votre Discord Webhook</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="webhookspam" value="<?php echo Account::GetUser($_SESSION['id'])['webhookspam']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>
 </form>
                                                    
<br>

 <center><a href="https://lkpanel.me/panel/info/user.php" target="_blank"><button class="btn btn-block btn-primary">Envoyer</button> </a></center>
                
                                </div>
                            </div>                       
                   
                            
  
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

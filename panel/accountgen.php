<?php
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

  if (IsFREE($_SESSION['id']))
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
					<center><h2><strong> Accounts Generator</strong></h2></center>	
							<div class="panel-actions">
								<a href="ipping.php" class="btn-setting"><i class="fa fa-rotate-right"></i></a>

							</div>
						</div>
						<?php
if(isset($_POST['resolve'])){
	$username = $_POST['username'];
        strtolower($username);
        if($username == null){
            echo "Insérer une Adress IP!";
        } else {
        $ip = @file_get_contents("https://lkpanel.me/panel/api/account.php?key=3948267513464756141357&account={$username}"); // Put own API link with Key in here.
		    echo "<textarea class='form-control' style=' border-radius: 6px; height: 400px;resize: none;'>$ip</textarea>";
	    }

}
?>
<br>
              <form action="" method="post">

     <select name="username" class="form-control custom-select">
                                                                   
                                            <option value="nordvpn">Nord VPN</option>
                                            <option value="spotify">Spotify</option> 
                                            <option value="minecraft">Minecraft</option>
                                            <option value="fortnite">Fortnite</option>
                                            <option value="steam">Steam</option>
                                                                    
                                                                </select>
                                                                
   </div><br>
   <center><button type="submit" name="resolve" class="btn btn-block btn-primary">Start</button></form></form></center>
 </div>


                
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


</html>

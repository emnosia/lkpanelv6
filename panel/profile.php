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


$ussr = Account::GetUser($_GET["user"]);
$admin = IsAdmin($_SESSION["id"]);
$ussradmin = IsAdmin($_GET["user"]);
$ussrvendeur = IsVendeur($_GET["user"]);
$ussrvip = IsVIP($_GET["user"]);
?>

<?php
if(isset($_POST['rank'])){
        $clr3 = substr($_POST['rank'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['rank' => $clr3]);
    } 
    ?>

  <?php include 'object/navbar.php'; ?>


<style>
.primary {
background-color: #131313;
}
</style>



<div class="main-content">

<div class="page-content">
    <div class="container-fluid">
  

    <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="media">
                                                    <div class="mr-3">

<?php

if($ussr["anonymax"] != "")

{
?>
  <img class="avatar-md rounded-circle img-thumbnail" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128">

  <?php
}?>

<?php

if($ussr["anonymax"] == "")
{
  ?>
  
  <img class="avatar-md rounded-circle img-thumbnail" src="https://cdn.discordapp.com/avatars/<?= $ussr['discord_id'] ?>/<?= $ussr['discord_avatar'] ?>" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'">

<?php
}

?>



                                                    </div>
                                                    <div class="media-body align-self-center">
                                                        <div class="text-muted">
                                            <p style="color: red;">            <?php if($ussr["banned"] != "") {?>
                Cette utilisateur est banni !
</p>            
                                                          <?php }?>

                                                            <h5 class="mb-1">
                                                            <?php

if($ussr["anonymax"] != "")

{

  echo $ussr["anonymax"];

}

else
{
  echo $ussr["discord_name"];
}

?>
                                                            </h5>
                                                            <p class="mb-0">
                                                              <?php echo $ussr['rank']; ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

  


                
                                            <div class="col-lg-4 align-self-center">
                                                <div class="text-lg-center mt-4 mt-lg-0">
                                                    <div class="row">

                                                    <?php

if($ussr["anonymax"] != "")

{
?>
  

  <?php
}?>

<?php

if($ussr["anonymax"] == "")
{
  ?>

                                                 <?php   if($ussr["youtube"] != "") { ?>

<div class="noti-icon col-4">
  <div>
    <a href="https://www.youtube.com/channel/<?php echo $ussr["youtube"]; ?>" target="_blank">
    <i style="color: rgb(255, 0, 0); size: 40px;" class="fab fa-youtube align-middle mr-1"></i>
  </a>   
  <p class="text-muted text-truncate mb-2">Youtube</p>
  </div>
</div>



<?php } else {?>

  <?php } ?>

  <?php   if($ussr["github"] != "") { ?>

    
    <div class="noti-icon col-4">
      <div>
        <a href="https://github.com/<?php echo $ussr["github"]; ?>" target="_blank">
        <i style="color: rgb(224, 224, 224); size: 40px;" class="fab fa-github align-middle mr-1"></i>
      </a>   
      <p class="text-muted text-truncate mb-2">Github</p>
      </div>
    </div>

    
    
    
    <?php } else {?>
    
      <?php } ?>

      <?php   if($ussr["twitch"] != "") { ?>
        
        <div class="noti-icon col-4">
          <div>
            <a href="https://www.twitch.tv/<?php echo $ussr["twitch"]; ?>" target="_blank">
            <i style="color: rgb(132, 0, 255); size: 40px;" class="fab fa-twitch align-middle mr-1"></i>
          </a>   
          <p class="text-muted text-truncate mb-2">Twitch</p>
          </div>
        </div>
        
        
        
        <?php } else {?>
        
          <?php } ?>
                                              
          <?php } ?>


                                                    </div>
                                                </div>
                                            </div>
                
                                           
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
<center>
<p class="text-muted text-truncate mb-2">Panel ID :</p>
                                                                <h5 class="mb-0"> <?php

if($ussr["anonymax"] != "")

{

  echo '<h5 style="color: #fff;" class="m-0 font-weight-bold">No</h5>';

}

else
{
  echo '<h5 style="color: #fff;" class="m-0 font-weight-bold">'.htmlentities($ussr["id"]).'</h5>';

}

?></h5>
</center>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
<center>
<p class="text-muted text-truncate mb-2">Discord ID :</p>
                                                                <h5 class="mb-0">              <?php

if($ussr["anonymax"] != "")

{

  echo '<h5 style="color: #fff;" class="m-0 font-weight-bold">No</h5>';

}

else
{
  echo '<h5 style="color: #fff;" class="m-0 font-weight-bold">'.htmlentities($ussr["discord_id"]).'</h5>';

}

?></h5>
</center>
                                            </div>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-4">
                                        <div class="card">
                                            <div class="card-body">
                                        
                                      
                                    <center>
                                                                <p class="text-muted text-truncate mb-2">Compte créer le :</p>
                                                                <h5 class="mb-0"><?php echo date('d/m/Y à H:i:s', $ussr['lastconnected']); ?></h5>
                                                                </center>
                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- end row -->



    
    <?php if(IsAdmin($_SESSION['id'])) { ?>


    <div style="margin-top: -1pc" class="col-lg-12 grid-margin">
              <div class="card">
              <div class="card-body">
                <center>
                <div class="row gy-4">
                <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <div class="form-control-wrap">
                <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" value="<?php echo $ussr["discord_name"]; ?>">
</div>
</div>
</div>

                <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                <div class="form-control-wrap">
                <input type="text" class="form-control form-control-xl form-control-outlined" id="outlined-normal" value="<?php echo $ussr["id"]; ?>">
</div>
</div>
</div>

                <div class="col-lg-4 col-sm-6" data-select2-id="14">
                <form action="" method="post">
                <div class="form-group" data-select2-id="13">
                <div class="form-control-wrap" data-select2-id="12">
                <select name="rank" class="form-select form-control form-control-xl select2-hidden-accessible" data-ui="xl" tabindex="-1" aria-hidden="true">
                <option name="rank" value="<?php echo $ussr["rank"]; ?>"><?php echo $ussr["rank"]; ?></option>

<?php if($ussr["rank"] == "FREE") { ?>
    <?php } else { ?>
        <option name="rank"  value="FREE">FREE</option>
    <?php } ?>

    <?php if($ussr["rank"] == "VIP") { ?>
        <?php } else { ?>
            <option name="rank"  value="VIP">VIP</option>
        <?php } ?>
        
    <?php if($ussr["rank"] == "Vendeur") { ?>
        <?php } else { ?>
            <option name="rank"  value="Vendeur">Vendeur</option>
        <?php } ?>

        <?php if($ussr["rank"] == "Suport") { ?>
            <?php } else { ?>
                <option name="rank"  value="Suport">Support</option>
            <?php } ?>

            <?php if($ussr["rank"] == "Administrateur") { ?>
                <?php } else { ?>
                    <option name="rank"  value="Administrateur">Administrateur</option>
                <?php } ?>

</select>
                </div></div></div></div>

                <button class="btn btn-primary" type="submit" name="submit">Enregister</button>
<br><br><br>
</form>

                
              <a class="btn btn-primary" onclick="setCredits(<?php echo $_GET["user"]; ?>)" href="#"><i class="fab fa-btc"> </i> Mettre des crédits</a>
                <a class="btn btn-warning" onclick="banAccount(<?php echo $_GET["user"]; ?>)" href="#">Bannir</a>
                <a class="btn btn-primary" onclick="stealAccount(<?php echo $_GET["user"]; ?>)" href="#">Se connecter en tant que</a>
</center>
</div></div>
            </div>



            <?php } ?>

  </div>              
  
  
  
  
  
							</div>
						</div>
          </div>
          



        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  

</body>

    <!-- BEGIN: Vendor JS-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="assets/vendors/js/extensions/tether.min.js"></script>
  
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/js/core/app-menu.min.js"></script>
    <script src="assets/js/core/app.min.js"></script>
    <script src="assets/js/scripts/components.min.js"></script>
    <script src="assets/js/scripts/customizer.min.js"></script>
    <script src="assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/js/scripts/pages/dashboard-analytics.min.js"></script>
    <!-- END: Page JS-->






    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/datatables.bootstrap.min.js"></script>
<script src="js/custom.js"></script>


<div class="rightbar-overlay"></div>



<script src="assets/libs/peity/jquery.peity.min.js"></script>

<script src="assets/libs/chartist/chartist.min.js"></script>
<script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/pages/dashboard.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="assets/libs/select2/select2.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>


</html>
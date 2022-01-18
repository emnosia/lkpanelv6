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
if(isset($_POST['email2'])){
        $clr3 = substr($_POST['email2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['email' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['youtube2'])){
        $clr3 = substr($_POST['youtube2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['youtube' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['github2'])){
        $clr3 = substr($_POST['github2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['github' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['twitch2'])){
        $clr3 = substr($_POST['twitch2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['twitch' => $clr3]);
    } 
    ?>
    <?php
if(isset($_POST['phone2'])){
        $clr3 = substr($_POST['phone2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['phone' => $clr3]);
    } 
    ?>
    <?php
if(isset($_POST['adress2'])){
        $clr3 = substr($_POST['adress2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['adress' => $clr3]);
    } 
    ?>
        <?php
if(isset($_POST['content2'])){
        $clr3 = substr($_POST['content2'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $ussr['id']], ['content' => $clr3]);
    } 
    ?>

  <?php include 'object/navbar.php'; ?>


<style>
.primary {
background-color: #131313;
}
</style>

<?php if(IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id'])) { ?>

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

    <div class="card">
    <ul class="nav nav-tabs">
           <li class="nav-item">
           <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Info</span></a>
           </li>
           <li class="nav-item">
           <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>New Info</span></a>
           </li>   
        </ul>
              <div class="card-body">
<div class="panel panel-default">
						<div class="panel-heading">
                  

                        
                <div class="tab-content"> 
            <div class="tab-pane active" id="tabItem5">
<div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Email</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="email2" value="<?php echo $ussr['email']; ?>">
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
    <h5 class="font-size-15">Youtube Channel</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="youtube2" value="<?php echo $ussr['youtube']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>

 <div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Twitch Channel</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="twitch2" value="<?php echo $ussr['twitch']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>

 <div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Github Channel</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="github2" value="<?php echo $ussr['github']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>

 <div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Phone</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="phone2" value="<?php echo $ussr['phone']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>

 <div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Adress</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <input class="form-control" type="text" name="adress2" value="<?php echo $ussr['adress']; ?>">
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>
 
 </div> 

 <div class="tab-pane" id="tabItem6">
 <div class="faq-box media">
    <div class="media-body">
    <h5 class="font-size-15">Add Info</h5>
        <form action="" method="post">
        <div class="input-group mb-3">
        <textarea class='form-control' style=' border-radius: 6px; height: 500px;resize: none;' type="text" name="content2"><?php echo $ussr['content']; ?></textarea>
        <div class="input-group-append">
        <button class="btn btn-primary" type="submit" name="submit">édit</button>
       </div>
     </div>
   </div>
 </div>
                 </div>

                </div>
                                                    
<br>

<a class="btn btn-primary" href="https://lkpanel.me/panel/walloffall.php?user=<?php echo $ussr['id']; ?>">Retour --> </a>
                
                                </div>
                            </div> 

       
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->


</body>
<?php } else {} ?>

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
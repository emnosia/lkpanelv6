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

<style>

.nav-link.active {
    background-color: #<?php echo $ussr["color"]; ?> !important;
}

</style>

    <div class="main-content">

<div class="page-content">
    <div class="container-fluid">


    <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
        <center>
                                        <h2 class="card-title">Crack</h2><br><br>
                                     
                                        </center>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link mb-2 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Application  <span style="margin-left: 14pc;"><?= $GLOBALS['DB']->Count("chat") ?></span></a>
                                                <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Jeux Vidéo  <span style="margin-left: 13.9pc;"><?= $GLOBALS['DB']->Count("jeux") ?></span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover">
              <thead class="thead-light">
                  <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                  </tr>
                  </thead>
                   <tbody>
                              <?php
                              $selectionserver = $GLOBALS['DB']->GetContent("chat", [], "ORDER BY id DESC");
                                      // Print Output
                                      foreach($selectionserver as $AfficheServer)
                                      {  ?>
                                              <tr>
                                                <td> <?= ($AfficheServer['name']) ?></td>
                                                <td> <?= ($AfficheServer['date']) ?></td>
                                                <td><b><a href='<?php echo $AfficheServer['msg'] ?>' class='sidebar-link btn' target='_blank'><span class='btn btn-primary'>Download</span></a></b></td>
                                              </tr>
                                            <?php
                                          } 
                                      
                              ?> 
               </tbody>
            </table>   
                                                   
                                                    </div>
                                                    </div>


                                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                                                                          <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover">
              <thead class="thead-light">
                  <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                  </tr>
                  </thead>
                   <tbody>
                              <?php
                              $selectionserver = $GLOBALS['DB']->GetContent("jeux", [], "ORDER BY id DESC");
                                      // Print Output
                                      foreach($selectionserver as $AfficheServer)
                                      {  ?>
                                              <tr>
                                                <td> <?= ($AfficheServer['name']) ?></td>
                                                <td> <?= ($AfficheServer['date']) ?></td>
                                                <td><b><a href='<?php echo $AfficheServer['msg'] ?>' class='sidebar-link btn' target='_blank'><span class='btn btn-primary'>Download</span></a></b></td>
                                              </tr>
                                            <?php
                                          } 
                                      
                              ?> 
               </tbody>
            </table>   
                                                   
                                                    </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

            </div>
        </div>
    </div>
    
    <br>

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
        
    </body>

<!-- Mirrored from coderthemes.com/minton/layouts/horizontal/dark/forms-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 May 2020 20:14:16 GMT -->
</html>

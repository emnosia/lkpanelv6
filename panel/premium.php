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

.shadow{

}
.shadow:before,
.shadow:after{
  content: '';
  position: absolute;
  left: -2px;
  top: -2px;
  background: linear-gradient(45deg, #fb0094,#0000ff, #00ff00,#ffff00,
    #ff0000,#fb0094,#0000ff, #00ff00,#ffff00, #ff0000);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  background-size: 400%;
  z-index: -1;
  animation: animate 20s linear infinite;
}

.shadow:after{
  filter: blur(20px);
}

@keyframes animate {

  0%{
    background-position: 0 0;
  }
  50%{
    background-position: 300% 0;
  }
  100%{
    background-position: 0 0;
  }
}

</style>


  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">
      <br>
<center><h1 style="color: black;text-shadow: 0px 0px 10px #<?php echo $ussr["color"]; ?>;"></h1></center>
<center><a href="https://discord.gg/Wta53Byh" target="_blank"><h2 style="text-shadow: 0px 0px 10px #<?php echo $ussr["color"]; ?>;"></h2></a></center>


<div class="row mt-3">
                            <div class="col-lg-12">
                                <div>

                                    <div class="row">

                                      <?php if(IsFREE($_SESSION['id'])) { ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/product/img-11.png" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="text-center text-md-left pt-3 pt-md-0">
                                                                <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Free</a></h5>
                                                                <p class="text-muted">
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star"></i>
                                                                    <i class="bx bx-star"></i>
                                                                    <i class="bx bx-star"></i>
                                                                </p>
                                                                <h5 class="my-0"><span class="text-muted mr-2"></span> <b>0€</b></h5><br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>


                                        <div class="col-xl-4 col-sm-6">
                                          <div class="card">
                                              <div class="card-body">
                                                  <div class="row align-items-center">
                                                      <div class="col-md-4">
                                                          <img src="assets/images/product/img-11.png" alt="" class="img-fluid mx-auto d-block">
                                                      </div>
                                                      <div class="col-md-8">
                                                          <div class="text-center text-md-left pt-3 pt-md-0">
                                                              <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Free</a></h5>
                                                              <p class="text-muted">
                                                                  <i class="bx bx-star text-warning"></i>
                                                                  <i class="bx bx-star text-warning"></i>
                                                                  <i class="bx bx-star"></i>
                                                                  <i class="bx bx-star"></i>
                                                                  <i class="bx bx-star"></i>
                                                              </p>
                                                              <h5 class="my-0"><span class="text-muted mr-2"></span> <b>0€</b></h5><br>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <br><br>
                                              </div>
                                          </div>
                                      </div>
                                      <?php } ?>


                                      <?php if(IsVIP($_SESSION['id'])) { ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/product/img-9.png" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="text-center text-md-left pt-3 pt-md-0">
                                                                <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Premium</a></h5>
                                                                <p class="text-muted">
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                </p>
                                                                <h5 class="my-0"> <!-- <span class="text-muted mr-2"><del>5€</del></span> --> <b>5€</b></h5>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                          <div class="col-xl-4 col-sm-6">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/product/img-9.png" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="text-center text-md-left pt-3 pt-md-0">
                                                                <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Premium</a></h5>
                                                                <p class="text-muted">
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                </p>
                                                                <h5 class="my-0"><!-- <span class="text-muted mr-2"><del>5€</del></span> --> <b>5€</b></h5>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if(IsFREE($_SESSION['id'])) { ?>
                                                    <a style="margin-left: 9.3pc; margin-top: -1pc;" class="sidebar-link btn " data-shoppy-product="p3lVRo0"><span class="btn btn-primary">Buy</span></a>
                                                    <?php }else{ ?>
<br><br>
                                                      <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>


                                        <?php if(IsVendeur($_SESSION['id']) || IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id'])) { ?>
                                        <div class="col-xl-4 col-sm-6">
                                            <div class="card shadow">
                                                <div class="card-body">
                                                    <div class="row align-items-center">
                                                        <div class="col-md-4">
                                                            <img src="assets/images/product/img-12.png" alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="text-center text-md-left pt-3 pt-md-0">
                                                                
                                                                <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Vendeur</a></h5>
                                                                <p class="text-muted">
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star text-warning"></i>
                                                                    <i class="bx bx-star"></i>
                                                                </p>
                                                                <h5 class="my-0"><!-- <span class="text-muted mr-2"><del>15€</del></span> --> <b>15€</b></h5>
                                                            </div>
                                                        </div>
                                                    </div>
<br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                            <?php }else{ ?>

                            <div class="col-xl-4 col-sm-6">
                              <div class="card">
                                  <div class="card-body">
                                      <div class="row align-items-center">
                                          <div class="col-md-4">
                                              <img src="assets/images/product/img-12.png" alt="" class="img-fluid mx-auto d-block">
                                          </div>
                                          <div class="col-md-8">
                                              <div class="text-center text-md-left pt-3 pt-md-0">
                                                  
                                                  <h5 class="mb-3 text-truncate"><a href="#" class="text-dark">Vendeur</a></h5>
                                                  <p class="text-muted">
                                                      <i class="bx bx-star text-warning"></i>
                                                      <i class="bx bx-star text-warning"></i>
                                                      <i class="bx bx-star text-warning"></i>
                                                      <i class="bx bx-star text-warning"></i>
                                                      <i class="bx bx-star"></i>
                                                  </p>
                                                  <h5 class="my-0"><!-- <span class="text-muted mr-2"><del>15€</del></span> --> <b>15€</b></h5>
                                              </div>
                                          </div>
                                      </div>
                                      <a style="margin-left: 9.3pc; margin-top: -1pc;" data-shoppy-product="GcNKTjy" class="sidebar-link btn"><span class="btn btn-primary">Buy</span></a>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- end row -->
                  </div>
              </div>
              <?php } ?>
          </div>
  
<script src="https://shoppy.gg/api/embed.js"></script>

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
</html>


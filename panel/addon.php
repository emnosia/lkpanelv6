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

if($ussr['verif'] == 0)
  {
    header('Location: ../unverif.php');
  
    exit();
  } 
  ?>

  <?php include 'object/navbar.php'; ?>


  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">


              <div class="card">
              <div class="card-body">
<div class="panel panel-default">
						<div class="panel-heading">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center">
                                <img src="assets/img/addon/wcd.webp" alt="logo" class="">
                                <h4 class="mb-1">William Cars Dealler</h4>
                 
                            </div>

                            <div class="text-center">
                                <a href="Download/addon/wcd.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center">
                                <img src="assets/img/addon/tomasprint.webp" alt="logo" class="">
                                <h4 class="mb-1">Tomas Custom Printer</h4>
                 
                            </div>

                            <div class="text-center">
                                <a href="Download/addon/tomascustoms_printers.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center">
                                <img src="assets/img/addon/stungun.webp" alt="logo" class="">
                                <h4 class="mb-1">Stungun</h4>
                 
                            </div>

                            <div class="text-center">
                                <a href="Download/addon/Stungun SWEP.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->
  


                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/shsafezone.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">sh_safzone</h4><br>
                 
                            </div>

                            <div class="text-center">
                                <a href="Download/addon/sh_safzone.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->


                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/shaccesory.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">sh_accesory</h4><br>
                 
                            </div>

                            <div class="text-center">
                                <a href="Download/addon/sh_accesory.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/rprint.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">rprint</h4><br>
                 
                            </div>

                            <div class="text-center">
                                <a href="Download/addon/rprint.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/mlogs.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Mlogs2</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/mlogs2.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/medicmod.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Medic Mod</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/medicmod.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/jewelryrobery.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Jewerly Robery</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/jewerlyrobery.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->


                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/item.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Item Stor</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/itemstor.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->


                                   <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="https://media.gmodstore.com/0.5x/script_banners/70140f83b3924d5d28610c97efa56564.png" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Graphite Hud</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/graphitehud.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/ghome.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Ghome</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/ghome.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->





                <!-- end row -->    

                <div class="row">
                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/dls.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">D.L.S</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/drivinglicensesystem.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/advancedkey.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Advanced Keys</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/darkrpadvancedkeys.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/blogs.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Blogs</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/blogs.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->
<br><br><br>

                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/bitminer.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Bitminers2</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/Bitminers2.rar" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->
<br><br><br>

                                   <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/awarn3.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Awarn3</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/awarn3.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->
<br><br><br>
                    <div class="col-md-4">
                        <div class="card-box">
                            <div class="text-center"><br><br><br><br>
                                <img src="assets/img/addon/ahud.webp" alt="logo" class="">
                                <br><br>
                                <h4 class="mb-1">Ahud</h4><br>
                   
                            </div>

    

                            <div class="text-center">
                                <a href="Download/addon/ahud.zip" class="btn btn-sm btn-secondary">Download</a>
                            </div>


                            <div id="company-1" class="text-center"></div>

                        </div>
                    </div><!-- end col -->

                </div>
                <!-- end row -->




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
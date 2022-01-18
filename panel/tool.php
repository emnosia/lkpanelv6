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
                <center><h4 class="card-title">TOOL</h4><br></center>
                <div class="table-responsive">
                    <table class="table table-hover-animation mb-0">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Posted by</th>
                            <th scope="col">#</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

             
                                                                        <tr>
                            
                            <td>Discord Tokens Graber</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>1</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/token.zip"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>


                                                                        <tr>
                            
                            <td>Discord nitro générator</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>2</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/discord nitro générator.zip"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>
                                            
                                            
                                            
                                       
                                                                        <tr>
                            
                            <td>Discord TOOL</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>3</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/Discordtool.rar"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>
                                       


                                         
                                                                        <tr>
                            
                            <td>IP Localisation</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>4</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/iplocalisation.zip"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>
                                           

                                         
                                                                        <tr>
                            
                            <td>livebot youtube</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>5</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/livebot.zip"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>
                                        

                                                                                                
                                                                        <tr>
                            
                            <td>Ping V2 by emnosia</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>6</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/ping v2 by emnosia.zip"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>
                                           

                                         
                                                                        <tr>
                            
                            <td>Spammer Weebhook</td>
                            <td></td>
                            <td></td>
                            <td>emnosia</td>
                            <th scope="row"><code>7</code></th>
                            <td>
                            <a style="color: #<?php echo $ussr["color_second"]; ?>;"  href="Download/tool/spammer weebhook.zip"><span class='btn btn-primary'><i class="fa fa-download"></i> Download</span></a>
                            </td>
                        </tr>
                                            </tbody>   
   



                    </table>
                </div>
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
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


  <?php include 'object/navbar.php'; ?>


<style>
.primary {
background-color: #131313;
}

</style>

<link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0 font-size-18">Dashboard</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Welcome to Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-4">
                <div class="card overflow-hidden">
                <?php if($ussr["theme"] == "noel") { ?>
                <body>
<div class="snow">
  <div class="snow__layer"><div class="snow__fall"></div></div>
  <div class="snow__layer"><div class="snow__fall"></div></div>
  <div class="snow__layer">
    <div class="snow__fall"></div>
    <div class="snow__fall"></div>
    <div class="snow__fall"></div>
  </div>
  <div class="snow__layer"><div class="snow__fall"></div></div>
</div>
</body>
                <?php } ?>
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                    <h5 style="color: #fff" class="">Hello 
                                        
                                        <?php
                  
                                        if($ussr["anonymax"] != "")
                                        
                                        {
                                        
                                          echo $ussr["anonymax"];
                                        
                                        }
                                        
                                        else
                                        {
                                          echo $_SESSION["discord_socket"]->username;
                                        }
                                        
                                        ?> !
                                    </h5>
                                    <p style="color: #fff"> Welcome to lkpanel</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <?php

                                    if(Account::GetUser($_SESSION['id'])['anonymax'] != "")
                                    
                                    {
                                      ?>
                                    
                                    <img class="img-thumbnail rounded-circle" src="https://avatarfiles.alphacoders.com/198/198394.jpg" class="rounded-circle header-profile-user" alt="Header Avatar">
                                    
                                    
                                      <?php
                                    }
                                    
                                    ?>
                                    
                                    <?php
                                    
                                    if(Account::GetUser($_SESSION['id'])['anonymax'] == "")
                                    
                                    {
                                      ?>
                                    
                                    <img class="img-thumbnail rounded-circle" src="https://cdn.discordapp.com/avatars/<?php echo Account::GetUser($_SESSION['id'])['discord_id']; ?>/<?php echo Account::GetUser($_SESSION['id'])['discord_avatar']; ?>.png"  style="" class="rounded-circle header-profile-user" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" alt="Header Avatar">
                                    
                                    <?php
                                    }
                                    
                                    ?>

                                </div>
                                <h5 class="font-size-15 text-truncate">
                                    <?php
                  
                                    if($ussr["anonymax"] != "")
                                    
                                    {
                                    
                                      echo $ussr["anonymax"];
                                    
                                    }
                                    
                                    else
                                    {
                                      echo $_SESSION["discord_socket"]->username;
                                    }
                                    
                                    ?> 
                                    
                                    <?php if($ussr['certificat'] == 1){ ?>
                                        <i style="color: #<?php echo $ussr["color"];?>;" class="bx bxs-badge-check font-size-19"> </i> 
                                   <?php } ?>
                                </h5>
                                <p class="text-muted mb-0 text-truncate"><?php echo $ussr["rank"]; ?></p>
                            </div>

                            <div class="col-sm-8">
                                <div class="pt-4">

                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="font-size-15"><?php echo $ussr["id"]; ?></h5>
                                            <p class="text-muted mb-0">User ID</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="font-size-15">
                                                <?php if($ussr['certificat'] == 1){
                                                    echo "yes";
                                                } else {
                                                    echo "no";
                                                }; ?>
                                            </h5>
                                            <p class="text-muted mb-0">Certificat</p>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" type="button" class="btn btn-primary waves-effect waves-light btn-sm" id="dynamic-alert">My IP</a>
                                        <a href="myprofile.php" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Monthly Earning</h4><br>
                        <div class="row">
                            <div class="col-sm-12">
         
                             
                                <center>                     
                                    
                                                 
                                    <h3>Discord ID</h3>
                                    <form action="" method="post">
                                    <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="id" value="<?php echo $ussr["discord_id"];?>" readonly>
                                                            <div class="input-group-append">
                                                                <!--<button class="btn btn-primary" type="button">Voir</button>--> 
                                       
                                                            </div>
                                                    </div>
                                                    </form>
                                         
                                            
                                    
                                    <h3 style="margin-top: 1.4pc" > Description </h3>
                                    <form action="" method="post">
                                    <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="description" value="<?php echo Account::GetUser($_SESSION['id'])['description']; ?>">
                                                            <div class="input-group-append">
                                                                <!--<button class="btn btn-primary" type="button">Voir</button>--> 
                                                                <button style="background-color:  #<?php echo $ussr["color"]; ?>;"  type="submit" name="submit" class="btn btn-primary">édit</button>
                                            
                                                        </div>
                                                      </div>
                                                    </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Users</p>
                                        <h4 class="mb-0"><?= $GLOBALS['DB']->Count("users") ?></h4>
                                    </div>

                                    <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-user font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Staff</p>
                                        <h4 class="mb-0">2</h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-ghost font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mini-stats-wid">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <p class="text-muted font-weight-medium">Users Enregistrée</p>
                                        <h4 class="mb-0">751</h4>
                                    </div>

                                    <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                        <span class="avatar-title rounded-circle bg-primary">
                                            <i class="bx bx-group font-size-24"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4 float-sm-left">New Members</h4>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover">
              <thead class="thead-light">
                  <tr>
                  <th scope="col">Avatar</th>
                  <th scope="col">Pseudo</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                  </tr>
                  </thead>
                   <tbody>
                              <?php
                              $selectionserver = $GLOBALS['DB']->GetContent("users", [], "ORDER BY id DESC");
                              $pah = 0;
                                      // Print Output
                                      foreach($selectionserver as $AfficheServer)
                                      { if($pah != 5) {
                                      $pah = $pah + 1; ?>
                                              <tr>
                                                  <td><img src="https://cdn.discordapp.com/avatars/<?= $AfficheServer['discord_id'] ?>/<?= $AfficheServer['discord_avatar'] ?>.png?size=128" style='border-radius:100%;width:37px;' onerror="this.onerror=null; this.src='https://i.imgur.com/vXzHaQe.png'">
                                                 </td>
                                                <td> <?= ($AfficheServer['username']) ?></td>
                                                <td> <?php echo date('m/d/Y H:i:s', $AfficheServer['lastconnected']); ?></td>
                                                <td><b><a href='profile.php?user=<?php echo $AfficheServer['id'] ?>' class='sidebar-link btn '><span class='hide-menu'><i style="color:  #<?php echo $ussr["color"]; ?>;" class='fa fa-paper-plane'></span></a></b></td>
                                              </tr>
                                            <?php
                                          } 
                                      }
                              ?> 
               </tbody>
            </table>    
            </div>
        </div>
        <!-- end row -->

       
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->





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
<script src="assets/js/pages/sweet-alerts.init2.js"></script>


</body>


<!-- Mirrored from www.bootstrapdash.com/demo/vanta/template/demo/Emerald/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jun 2020 19:20:06 GMT -->
</html>
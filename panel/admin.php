<?php
include 'core/class/include.php';
$ip = $_SERVER['REMOTE_ADDR'];
    if(BanIP::IsBanned($_SERVER["REMOTE_ADDR"]))
  {
    die("Vous êtes banni IP, venez sur le discord pour vous faire debannir https://discord.gg/FUf4yUb");
  }

  if(IsFREE($_SESSION['id']) || IsVIP($_SESSION['id']) || IsVendeur($_SESSION['id'])) 
  {
    header('Location: premium.php');
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
                                                <a class="nav-link mb-2 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Validation  <span style="margin-left: 14pc;"></span></a>
                                                <a class="nav-link mb-2" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Users  <span style="margin-left: 13.9pc;"></span></a>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                                                    <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover">
              <thead class="thead-light">
                  <tr>
                  <th><i>Pseudo</i></th>
<th><i>id</i></th>
<th><i>Discord ID</i></th>
<th><i>Adress IP</i></th>
                  <th scope="col">Action</th>
                  </tr>
                  </thead>
                   <tbody>
                   <?php 
      $all_users_predata = Account::GetAllAccount();
$list = [];

foreach ($all_users_predata as $data)
{    
if($data['verif'] == 0){
$buttonn = '<button onclick="validate('.$data['id'].')" type="button"  class="btn btn-success btn-sm"><i class="fas fa-hammer"></i> Valider</button>';
$buttonn2 = '<button onclick="nonvalidate('.$data['id'].')" type="button"  class="btn btn-danger btn-sm"><i class="fas fa-close"></i> Refuser</button>';
echo 
                  "
                      <tr class='item'>
                          <td><b>" . $data['username'] . "</b></td>
                          <td><b>" . $data['id'] . "</b></td>
                          <td><b>" . htmlspecialchars($data['discord_id']) . "</b></td>
                          <td><b>" . htmlspecialchars($data['ip']) . "</b></td>
                          <td><b>" . $buttonn . "</b></td>
                          <td><b>" . $buttonn2 . "</b></td>
                      </tr>
                  ";
}
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
                  <th scope="col">Discord id</th>
                  <th scope="col">Banned</th>
                  <th scope="col">Rank</th>
                  <?php   if(IsAdmin($_SESSION['id'])) { ?>
                  <th scope="col">Dellet</th>
                  <?php } ?>
                  <th scope="col">Action</th>
                  </tr>
                  </thead>
                   <tbody>
                   <?php 
            $all_users_predata = Account::GetAllAccount();
$list = [];

foreach ($all_users_predata as $data)
{ ?>
                        
                            <tr class='item'>
                            
                                <td><b><?php echo $data['username'] ?></b></td>
                                <td><b><?php echo $data['discord_id'] ?></b></td>
                                <td><b><?php echo htmlspecialchars($data['banned']) ?></b></td>
                                <td><b><?php echo $data['rank'] ?></b></td>
                                <?php   if(IsAdmin($_SESSION['id'])) { ?>
                                <td><b><a class="btn btn-danger" onclick="deleteUser(<?php echo $data["id"]; ?>)" href="#">Supprimer</a></b></td>
                                <?php } ?>
                                <td><b><a class="btn btn-primary" href="profile.php?user=<?php echo $data['id']; ?>"> Aller a la page </a></b></td>
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


<script>
      function validate(id)
    {
        $.ajax({
          url: "core/ajax/validate.php?d=1&id=" + id 
        });
    }
    function nonvalidate(id)
    {
        $.ajax({
          url: "core/ajax/validate.php?d=0&id=" + id 
        });
    }

    function deleteUser(id)
{
    $.ajax({
      url: "core/ajax/del-user.php?id=" + id
    });
}
    </script>




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
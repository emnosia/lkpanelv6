<?php
include 'core/class/include.php';
$ip = $_SERVER['REMOTE_ADDR'];
    if(BanIP::IsBanned($_SERVER["REMOTE_ADDR"]))
  {
    die("Vous êtes banni IP, venez sur le discord pour vous faire debannir https://discord.gg/FUf4yUb");
  }
  
  if(IsFREE($_SESSION['id'])) 
  {
    header('Location: premium.php');
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

<link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min1.css">



    <link rel="stylesheet" type="text/css" href="assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/plugins/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pages/data-list-view.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->


        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />


    <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

<section id="data-list-view" class="data-list-view-header">


  <!-- DataTable starts -->
  <div class="table-responsive">
    <table style="color: #ffffff;" class="table data-list-view">
      <thead>
        <tr>
          <th></th>
          <th>Name</th>
          <th>Adress IP</th>
          <th>Discord id</th>
   
        </tr>
      </thead>


      
      <tbody>

      <?php 
            $all_users_predata = Account::GetAllAccount();
$list = [];

foreach ($all_users_predata as $data)
{    

    echo 
                        "
                            <tr style='color: #fff; background-color: #" . $ussr['color'] . ";' class='item'>
                            
                            <td><b></b></td>
                                <td><b>" . $data['username'] . "</b></td>
                                <td><b>" . $data['ip'] . "</b></td>
                                <td><b>" . $data['discord_id'] . "</b></td>
                            </tr>
                        ";
}
            ?>
       
      </tbody>
    </table>
  </div>
  <!-- DataTable ends -->

 
    </div>
  </div>
  <!-- add new sidebar ends -->
</section>
<!-- Data list view end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>



    <!-- BEGIN: Vendor JS-->
    <script src="assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="assets/js/core/app-menu.min.js"></script>
    <script src="assets/js/core/app.min.js"></script>
    <script src="assets/js/scripts/components.min.js"></script>
    <script src="assets/js/scripts/customizer.min.js"></script>
    <script src="assets/js/scripts/footer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/js/scripts/ui/data-list-view.min7.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/demo/vuexy-html-bootstrap-admin-template/html/ltr/vertical-menu-template-dark/data-list-view.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 19:59:44 GMT -->
</html>
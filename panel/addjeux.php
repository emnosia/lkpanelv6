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






  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

  <div class="row">

 
            <div class="col-8 grid-margin">
              <div class="card">
              <div class="card-body">
              <form method="POST">
              <div class="form-group">
                <textarea class="form-control" rows="30" id="chat-text2" placeholder=""></textarea>
              </div>
              <textarea class="form-control" rows="1" id="chat-name" placeholder=""></textarea>
              
              

             <center> <button type="submit" onclick="AddJeux()" class="btn btn-success"><i class="fa fa-bolt"></i>&nbsp;Publier</button></center>

            
              </form>   
         </div>
     </div>
 </div>
           
              
                         <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">

                <table class="table table-hover-animation mb-0">
              <thead>
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
                                                <td> <?= ($AfficheServer['id']) ?></td>
                                                <td> <?= ($AfficheServer['date']) ?></td>
                                                <td><b><a href='editdox.php?user=<?php echo $AfficheServer['id'] ?>' class='sidebar-link btn '><span class='btn btn-primary'>éditer</span></a></b></td>
                                              </tr>
                                            <?php
                                          } 
                                      
                              ?> 
               </tbody>
            </table>   

			  </div>
			</div>
    </div>
        




        <!-- partial -->
      </div>
      <!-- main-panel ends -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min1.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min1.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/datatables.bootstrap.min.js"></script>
<script src="js/custom12.js"></script>
<script>
  function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
</html>
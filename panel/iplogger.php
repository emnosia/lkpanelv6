<?php
include 'core/class/include.php';
$ip = $_SERVER['REMOTE_ADDR'];
if (BanIP::IsBanned($_SERVER["REMOTE_ADDR"])) {
  die("Vous êtes banni IP, venez sur le discord pour vous faire debannir https://discord.gg/FUf4yUb");
}

if (!Account::isAuthentified()) {
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

      <div class="card">
        <div class="card-body">
          <div class="panel panel-default">
            <div class="panel-heading">
              <center>
                <h2> <strong>BEST IP Logger</strong></h2>
              </center>
              <div class="panel-actions">
                <a href="ipping.php" class="btn-setting"><i class="fa fa-rotate-right"></i></a>

              </div>
            </div>
            <?php
            if (isset($_POST['resolve'])) {
              $username = $_POST['username'];
              strtolower($username);
              if ($username == null) {
                echo "Insérer une Adress IP!";
              } else
                // This is blacklist:
                if ($username == "" || $username == "just-down.fr" || $username == "" || $username == "") { // When adding blacklisted username, use lowercase letters.
                  echo " Blacklist";
                } else {
                  $ip = @file_get_contents("https://lkpanel.me/api.php?key=M9HNW-VBJYB-WXW02-O9I8D&action=iplogger&string=&logger={$username}"); // Put own API link with Key in here.
                  echo "<div class='alert'><center> <font color='#fff'>$ip</font></center></div>";
                }
            }
            ?>
            <form method="POST">
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Exemple : youtube.com">
              </div>

              <button type="submit" name="resolve" class="btn btn-block btn-primary">logger</button>
            </form>
            </center>
            </form>
          </div>
        </div>

        </main>



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
        <script src="assets/js/pages/sweet-alerts.init.js"></script>

        </html>
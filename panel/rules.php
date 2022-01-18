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

  <body class="">
  
  <div class="main-content">

<div class="page-content">
    <div class="container-fluid">

              <div class="card">
                <div class="card-body">
    <div class="col-12">
        <div class="text-center">
            
            <i style="font-size: 34px; color: rgb(252, 122, 122);" class="fa fa-gavel"></i><br><br>
            <h3 style="color: rgb(252, 122, 122);" class="mb-3">Règlement</h3>
            <p class="text-muted">Tout non respect du règlement ce résulterat d'un bannisement permanent.</p>
        </div>
    </div>
</div>

<div class="row pt-5">
    <div class="col-lg-5 offset-lg-1">
        <div>
            <h4 style="color: rgb(252, 122, 122);" class="faq-question" data-wow-delay=".1s">Est-ce que je peux donner, vendre ou prêter mon compte LKpanel ?</h4>
            <p class="faq-answer mb-4">Non le partage, la vente ou le prêt de son compte LKpanel est strictement interdit.</p>
        </div>
        <div>
 <br>
            <h4 style="color: rgb(252, 122, 122);" class="faq-question">Mauvaise utilisation de LKpanel</h4>
            <p class="faq-answer mb-4">Toute utilisation du panel LKpanel ayant pour but d'affecter le site, les machines du panel, le panel, les admins du panel ou les acheteurs du panel LKpanel de façon négative est interdite et se résultera par un bannissement.</p>
        </div>
        <div>
 <br>
            <h4 style="color: rgb(252, 122, 122);" class="faq-question">Est-ce que j'ai le droit de me servir de LKpanel pour me faire de l'argent ?</h4>
            <p class="faq-answer mb-4">Non la vente de service liée à LKpanel est interdite.</p>
        </div>
        <br>
        <div>
 
            <h4 style="color: rgb(252, 122, 122);" class="faq-question" data-wow-delay=".1s">L'utilisation de double comptes ?</h4>
            <p class="faq-answer mb-4">Il est interdit d'utiliser des doubles comptes.</p>
        </div>
    </div>

    <div class="col-lg-5">
        <div>
 
            <h4 style="color: rgb(252, 122, 122);" class="faq-question">LKpanel propose t'il un programme de <a href="https://fr.wikipedia.org/wiki/Bug_bounty" target="_newblank">Bug bounty</a> ?</h4>
            <p class="faq-answer mb-4">Toute personne rapportant des bugs/exploits sur LKpanel sera récompensée en fonction de la gravité du bug/exploit s'il ne détruit pas LKpanel avec. (Il est possible que le bug soit tout petit et qu'il n'y est aucune récompense, car pas assez important).</p>
        </div>
        <br>
        <div>
 
            <h4 style="color: rgb(252, 122, 122);" class="faq-question">Règlement Social</h4>
            <p class="faq-answer mb-4">Toute alliance avec une équipe, une écurie, une armée, un arsenal, une bande, une brigade, un camp, un collectif, un escadron, une escouade, une formation, un laboratoire, un peloton, un régiment, une team, une troupe et/ou une union de personnes hostiles à LKpanel et/ou le site, les machines du panel, le panel, les admins du panel ou les acheteurs du panel LKpanel se résultera par un bannissement.</p>
        </div>
        <br>
        <div>
 
            <h4 style="color: rgb(252, 122, 122);" class="faq-question" data-wow-delay=".1s">J'ai le droit de récupérer les html de LKpanel ?</h4>
            <p class="faq-answer mb-4">Non il vous est totalement interdit de récuperer les html du panel LKpanel.</p>
        </div>

    </div>
</div>        </div>
    </div>
</div>

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
    <!-- END: Page JS-->

</body>


<!-- Mirrored from www.bootstrapdash.com/demo/vanta/template/demo/Emerald/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 11 Jun 2020 19:20:06 GMT -->
</html>
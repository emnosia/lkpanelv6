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
 


<?php
function ContainsStr($stack, $needle)
{
	if (strpos($stack, $needle) !== false) {
	    return true;
	}
	return false;
}
function ContainsRegex($stack, $needle)
{
	return preg_match('/'.preg_quote($needle).'/', $stack) != 0;
}
function ContainsFolder($path, $folder)
{
	return preg_match('/'.$folder.'\\//', $path) != 0;
}
function IsAutorun($path)
{
	return ContainsFolder($path, "autorun");
}
if(isset($_FILES['addonfile']))
{
	$file = $_FILES['addonfile']['tmp_name'];
	$zip = new ZipArchive;
	$notif = [];
	$treatlevel = 0;
	if ($zip->open($file))
	{
	     for($i = 0; $i < $zip->numFiles; $i++)
	     {  
	     	$name = $zip->getNameIndex($i);
	        	$data = $zip->getFromIndex($i);
            if(ContainsStr($data, "RunString") || ContainsStr($data, "CompileString"))
            {
              $notif[] = "----------------------------------------------------------<div class='oranges'>🟧 RunString/CompileString (possible backdoor code)</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "SetUserGroup") || ContainsStr($data, "\"adduserid\",") || ContainsStr($data, "\"adduser\","))
            {
              $notif[] = "----------------------------------------------------------<div class='oranges'>🟧 Backdoor auto-rôle</div>--> $name";
              $treatlevel = $treatlevel + 2;
            }
            if(ContainsStr($data, "file.Read(\"cfg/server.cfg\""))
            {
              $notif[] = "----------------------------------------------------------<div class='greens'>🟩 Reading server.cfg</div>--> $name";
              $treatlevel = $treatlevel + 5;
            }
            if(ContainsStr($data, "_G[") || ContainsStr($data, "getfenv()["))
            {
              $notif[] = "----------------------------------------------------------<div class='oranges'>🟧  _G (Possibilité d'Obfuscation)</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "http.Fetch") || ContainsStr($data, "http.Post"))
            {
              $notif[] = "----------------------------------------------------------<div class='oranges'>🟧 HTTP.FETCH/POST</div>--> $name";
              $treatlevel = $treatlevel + 1;
              
            }
            if(ContainsStr($data, ".cz") || ContainsStr($data, "emnosia"))
            {
              $notif[] = "----------------------------------------------------------<div class='oranges'>🟧 .cz Link</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "lkpanel") || ContainsStr($data, "emnosia"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 lkpanel Inféction</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "encodetbl") || ContainsStr($data, "RunHASHOb"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 Gvac Obfusqation</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "DUCK") || ContainsStr($data, "RunningDuck"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 Canard Obfusqation</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "function(fck)") || ContainsStr($data, "BillIsHere"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 BillCipher Backdoor</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "core") || ContainsStr($data, "stage"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 Gbackdoor infection</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "kvac") || ContainsStr($data, "wadixix"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 Kvacdoor infection</div>--> $name";
              $treatlevel = $treatlevel + 1;
            }
            if(ContainsStr($data, "bit.bxor"))
            {
              $notif[] = "----------------------------------------------------------<div class='red'>🟥 Bxor (possibility backdoor)</div>--> $name";
              $treatlevel = $treatlevel + 1;

            }
	     }
	}
}
?>





  <?php include 'object/navbar.php'; ?>

  <link href="assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css">

  <!-- Bootstrap Css -->
  <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
  <!-- Icons Css -->
  <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
  <!-- App Css-->
  <link href="assets/css/app-dark.min.css" id="app-style" rel="stylesheet" type="text/css">

<div class="main-content">

  <div class="page-content">
      <div class="container-fluid">

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
<center>

              <div>
                <form enctype="multipart/form-data" action="" method="post" class="">
                      <div class="fallback">
                      </div>
                      <div class="dz-message needsclick">
                          <div class="mb-3">
                              <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                          </div>
                          
                          <h4>Drop files here or click to upload.</h4>
                          <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                          <input class="dropzone col-12" name="addonfile" type="file" />

                      </div>
              </div>
            </center>
              <div class="text-center mt-4">
                <input class="btn btn-primary waves-effect waves-light" class="btn " type="submit" value="Envoyer" />
          </div>
      </div>
  </div> <!-- end col -->
</div> <!-- end row -->
</form>
</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<div style="margin-left: 37.8pc;" class="row">
  <div class="col-6">
      <div class="card">
          <div class="card-body">
<center>

  <br>
  <?php
  if(isset($notif))
  {
    $colo = "green";
    if($treatlevel > 3)
    {
      $colo = "orange";
    }
    if($treatlevel > 6)
    {
      $colo = "red";
    }
    echo "<div class='$colo' style='color: $colo;'>Logs for ".$_FILES['addonfile']['name']." (Level: $treatlevel): </div>";
    foreach ($notif as $key => $value) {
      echo "$value <br />";
    }
  }
  ?>
  
  </center>
</div>
</div>
</div>
</div>

<style>
#backdoor-footer{
	color: white!important;
	background-color: rgba(0, 0, 0, 0)!important;
}
.oranges {
	color: orange!important;
}
.reds {
	color: red!important;
}
.red {
	color: red!important;
}
.greens {
	color: green!important;
}
</style>



        </div>
    </div>
</div>
</form>

</center>
</div>
</div>
</div>
</div> 
</div>



<script type="text/javascript">
  document.querySelector("html").classList.add('js');

// initialisation des variables
var fileInput  = document.querySelector( ".input-file" ),  
button     = document.querySelector( ".input-file-trigger" ),
the_return = document.querySelector(".file-return");

// action lorsque la "barre d'espace" ou "Entrée" est pressée
button.addEventListener( "keydown", function( event ) {
  if ( event.keyCode == 13 || event.keyCode == 32 ) {
    fileInput.focus();
  }
});

// action lorsque le label est cliqué
button.addEventListener( "click", function( event ) {
 fileInput.focus();
 return false;
});

// affiche un retour visuel dès que input:file change
fileInput.addEventListener( "change", function( event ) {  
  the_return.innerHTML = this.value;  
});
</script>

</body>

<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>

<!-- Plugins js -->
<script src="assets/libs/dropzone/min/dropzone.min.js"></script>

<script src="assets/js/app.js"></script>
    <!-- END: Page JS-->
</html>
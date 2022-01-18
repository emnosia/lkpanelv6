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


    <div class="checkout-tabs">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-gen-ques-tab" data-toggle="pill" href="#v-pills-gen-ques" role="tab" aria-controls="v-pills-gen-ques" aria-selected="true">
                                            <i class="bx bx-question-mark d-block check-nav-icon mt-4 mb-2"></i>
                                            <p class="font-weight-bold mb-4">Documentation</p>
                                        </a>
                                        <a class="nav-link" id="v-pills-privacy-tab" data-toggle="pill" href="#v-pills-privacy" role="tab" aria-controls="v-pills-privacy" aria-selected="false"> 
                                            <i class="bx bx-check-shield d-block check-nav-icon mt-4 mb-2"></i>
                                            <p class="font-weight-bold mb-4">Privacy Policy</p>
                                        </a>
                                        <a class="nav-link" id="v-pills-support-tab" data-toggle="pill" href="#v-pills-support" role="tab" aria-controls="v-pills-support" aria-selected="false">
                                            <i class="bx bx-cog bx-spin d-block check-nav-icon mt-4 mb-2"></i>
                                            <p class="font-weight-bold mb-4">Settings</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-gen-ques" role="tabpanel" aria-labelledby="v-pills-gen-ques-tab">
                                                   <center> <h4 class="card-title mb-5">Documentation</h4></center>

        
                                                   <center>    <iframe width="560" height="315" src="https://www.youtube.com/embed/62Si7NvdUcg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </center>
<br>
<br>

        <div id="accordion" class="mb-3" align="center">
        <div class="card mb-1">
                <div class="card-header" id="headingOne">
                    <h5 class="m-0">
						<a class="text-red collapsed" data-toggle="collapse" href="#newip" aria-expanded="false">
							<i class="fa fa-exclamation mr-1 text-primary"></i>
							New IP logger 
                           
						</a>
					</h5>
                </div>

                <div id="newip" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                    <div class="card-body">
                    <center>    <iframe width="560" height="315" src="https://www.youtube.com/embed/nGS23sWvzk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </center>
                        
                    <div align="right">
                        <footer class="blockquote-footer" style="font-size: 100%;margin-bottom: 10px;margin-right: 10px;">Tutoriel par <cite>Emnosia</cite></footer>
                    </div>
                </div>
            </div>

            <div class="card mb-1">
                <div class="card-header" id="headingOne">
                    <h5 class="m-0">
						<a class="text-red collapsed" data-toggle="collapse" href="#collapse4" aria-expanded="false">
							<i class="fa fa-exclamation mr-1 text-primary"></i>
							Comment utiliser le Backdoor Finder ?
						</a>
					</h5>
                </div>

                <div id="collapse4" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                <div class="card-body">
                        <h4>Pour utiliser le Backdoor Finder rien de plus simple !</h4> Vous avez juste a mettre votre addons que vous voulez désinfecter dans un fichier
                        <FONT size="5"><U>.zip</U></FONT> (si c'est un fichier en .rar ça ne marchera pas) et vous le glissez sur le bouton "Parcourir" voilà maintenant en dessous du bouton parcourir il y aura une liste de fichier qui sont potentiellement backdoor avec quel type de backdoor qui peut avoir dans les fichiers. Vous avez juste a ouvrir le fichier lua et a trouvé la ligne où il y a la potentielle backdoor (Plus simple avec le CTRL+F) </div>
                    <div align="right">
                        <footer class="blockquote-footer" style="font-size: 100%;margin-bottom: 10px;margin-right: 10px;">Tutoriel par <cite>Emnosia</cite></footer>
                    </div>
                </div>
            </div>

            <div class="card mb-1">
                <div class="card-header" id="headingOne">
                    <h5 class="m-0">
						<a class="text-red collapsed" data-toggle="collapse" href="#collapse5" aria-expanded="false">
							<i class="fa fa-exclamation mr-1 text-primary"></i>
							Comment sécuriser mon compte ?
						</a>
					</h5>
                </div>

                <div id="collapse5" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                    <div class="card-body">
                        <h3>Activer l'authentification à deux facteurs</h3> Vous avez peur de vous faire voler votre compte par une team de haxor ?
                        <br> Il existe une solution qui peut sauver votre compte LKpanel et Discord 😃
                        <br> Il suffit simplement d'activer le double authentificateur sur votre compte. </div>
                    <div align="right">
                        <footer class="blockquote-footer" style="font-size: 100%;margin-bottom: 10px;margin-right: 10px;">Tutoriel par <cite>Youssef</cite></footer>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>




                                                <div class="tab-pane fade" id="v-pills-privacy" role="tabpanel" aria-labelledby="v-pills-privacy-tab">
                                                   <center> <h4 class="card-title mb-5">Privacy Policy</h4></center>
                                                    
                                                    <div class="faq-box media mb-4">

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


                                                <div class="tab-pane fade" id="v-pills-support" role="tabpanel" aria-labelledby="v-pills-support-tab">
                                                    
                                                    <center><h4 class="card-title mb-5">Settings</h4></center>
                                                
                                                    <div class="faq-box media">
                                                        <div class="media-body">
                                                        <h5 class="font-size-15">Couleur</h5>
                                                            <form action="" method="post">
                                                            <div class="input-group mb-3">
                                                            <input class="form-control" type="color" name="color" value="#<?php echo Account::GetUser($_SESSION['id'])['color']; ?>">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>

                                                     <br>

                                                    <div class="faq-box media">
                                                        <div class="media-body">
                                                        <h5 class="font-size-15">Mode Anonyme 

                                                        <?php if($ussr["anonymax"] == "") { ?>
           
              
            <span style="background-color: red;" class="badge badge-info"> Non Activé ! </span>
              
          
            <?php } ?>
                    <?php if($ussr["anonymax"] != "") { ?>

        
            
            <span style="background-color: green;" class="badge badge-info"> Activé ! </span>
              
            

            <?php } ?>
            </h5>
      
                                                            <form action="" method="post">
                                                            <div class="input-group mb-3">
                                                            <input class="form-control" type="text" name="anonymax" maxlength="20" value="<?php echo Account::GetUser($_SESSION['id'])['anonymax']; ?>">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>
                                                 
                                                     <?php if(IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                                     <br>
                                                    
                                                    <div class="faq-box media">
                                                        <div class="media-body">
                                                        <h5 class="font-size-15">Votre IP</h5>
                                                            <form action="" method="post">
                                                            <div class="input-group mb-3">
                                                            <input class="form-control" type="text" name="ip" value="<?php echo Account::GetUser($_SESSION['id'])['ip']; ?>">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     </form>
                                                     <?php } ?>


                                                
                                                  <br>

                                                    <div class="faq-box media">
                                                        <div class="media-body">
                                                        <h5 class="font-size-15">Théme</h5>
                                                            <form action="" method="post">
                                                            <div class="input-group mb-3">


                                                                <select name="theme" class="form-control custom-select">
                                                                    <option name="theme" value="<?php echo Account::GetUser($_SESSION['id'])['theme']; ?>"><?php echo Account::GetUser($_SESSION['id'])['theme']; ?></option>

                                                                    <?php if($ussr["theme"] == "dark") { ?>
                                                                        <?php } else { ?>
                                                                            <option name="theme"  value="dark">dark</option>
                                                                        <?php } ?>

                                                                        <?php if($ussr["theme"] == "white") { ?>
                                                                            <?php } else { ?>
                                                                                <option name="theme"  value="white">white</option>
                                                                            <?php } ?>
                                                                            
                                                                        <?php if($ussr["theme"] == "noel") { ?>
                                                                            <?php } else { ?>
                                                                                <option name="theme"  value="noel">Noël</option>
                                                                            <?php } ?>

                                                                            <?php if($ussr["theme"] == "noel red") { ?>
                                                                                <?php } else { ?>
                                                                                    <option name="theme"  value="noel red">Noël Red</option>
                                                                                <?php } ?>

                                                                                <?php if($ussr["theme"] == "noel green") { ?>
                                                                                    <?php } else { ?>
                                                                                        <option name="theme"  value="noel green">Noël Green</option>
                                                                                    <?php } ?>

                                                                                    <?php if($ussr["theme"] == "noel blue") { ?>
                                                                                        <?php } else { ?>
                                                                                            <option name="theme"  value="noel blue">Noël Blue</option>
                                                                                        <?php } ?>

                                                                                        <?php if($ussr["theme"] == "Red") { ?>
                                                                                        <?php } else { ?>
                                                                                            <option name="theme"  value="Red">Red</option>
                                                                                        <?php } ?>

                                                                                        <?php if($ussr["theme"] == "Green") { ?>
                                                                                        <?php } else { ?>
                                                                                            <option name="theme"  value="Green">Green</option>
                                                                                        <?php } ?>

                                                                                        <?php if($ussr["theme"] == "Blue") { ?>
                                                                                        <?php } else { ?>
                                                                                            <option name="theme"  value="Blue">Blue</option>
                                                                                        <?php } ?>
                                                                </select>
                                                                
                                                        
                                                        
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     </form>
                                                
                                                     

                                                     <?php if(IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                                  <br>

                                                    <div class="faq-box media">
                                                        <div class="media-body">
                                                        <h5 class="font-size-15">Votre Discord Webhook</h5>
                                                            <form action="" method="post">
                                                            <div class="input-group mb-3">
                                                            <input class="form-control" type="text" name="webhook" value="<?php echo Account::GetUser($_SESSION['id'])['webhook']; ?>">
                                                            <div class="input-group-append">
                                                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                                                           </div>
                                                         </div>
                                                       </div>
                                                     </div>
                                                     </form>
                                                     <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
</html>

<?php
if(isset($_POST['color'])){
        $clr = substr($_POST['color'], 1);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['color' => $clr]);
    } 
    ?>

<?php
if(isset($_POST['description'])){
        $clr2 = substr($_POST['description'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['description' => $clr2]);
    } 
    ?>

<?php
if(isset($_POST['reglement'])){
        $clr2 = substr($_POST['reglement'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['reglement' => $clr2]);
    } 
    ?>

<?php
if(isset($_POST['ip'])){
        $clr3 = substr($_POST['ip'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['ip' => $clr3]);
    } 
    ?>

<?php
if(isset($_POST['anonymax'])){
        $clr3 = substr($_POST['anonymax'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['anonymax' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['youtube'])){
        $clr3 = substr($_POST['youtube'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['youtube' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['github'])){
        $clr3 = substr($_POST['github'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['github' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['twitch'])){
        $clr3 = substr($_POST['twitch'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['twitch' => $clr3]);
    } 
    ?>
<?php
if(isset($_POST['webhook'])){
        $clr3 = substr($_POST['webhook'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['webhook' => $clr3]);
    } 
    ?>

<?php
if(isset($_POST['theme'])){
        $clr3 = substr($_POST['theme'], 0);
        $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['theme' => $clr3]);
    } 
    ?>
    <?php
if(isset($_POST['webhookspam'])){
    $clr3 = substr($_POST['webhookspam'], 0);
    $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['webhookspam' => $clr3]);
} 
?>
<?php
if(isset($_POST['messagespam'])){
    $clr3 = substr($_POST['messagespam'], 0);
    $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['messagespam' => $clr3]);
} 
?>
<?php
if(isset($_POST['adult2'])){
    $clr3 = substr($_POST['adult2'], 0);
    $GLOBALS['DB']->Update('users', ['id' => $_SESSION['id']], ['adult' => $clr3]);
} 
?>


<?php   

if($ussr['verif'] == 0)
  {
    header('Location: ../unverif.php');
  
    exit();
  } 
  ?>

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
<title>LKpanel</title>

   
<link rel="shortcut icon" href="./assets/img/brand/favicon1.png">

    <link rel="shortcut icon" href="images/favicon.png" />


    <?php if($ussr["theme"] == "dark") { ?>

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
  
    <?php } else {
                if($ussr["theme"] == "white") { ?>
 
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min5.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <?php } else { 
                if($ussr["theme"] == "noel") { ?>

            <link href="assets/css/neige58.css" rel="stylesheet" type="text/css" />
                    <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />

    <?php } else { 
        if($ussr["theme"] == "noel red") { ?>

            <link href="assets/css/neige58.css" rel="stylesheet" type="text/css" />
                    <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
       
        <?php } else { 
            if($ussr["theme"] == "noel green") { ?>
    
                <link href="assets/css/neige58.css" rel="stylesheet" type="text/css" />
                        <!-- Bootstrap Css -->
            <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
            <!-- App Css-->
            <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
           
            <?php } else { 
                if($ussr["theme"] == "noel blue") { ?>
        
                    <link href="assets/css/neige58.css" rel="stylesheet" type="text/css" />
                            <!-- Bootstrap Css -->
                <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
                <!-- App Css-->
                <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />
               
        <?php } else { ?>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" />

    <?php } } } } } }?>


    
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />


  </head>

<style>
  
#page-topbar {
    background-color: #<?php echo $ussr["color"]; ?> !important;
    background: #<?php echo $ussr["color"]; ?> !important;
    border-color: #<?php echo $ussr["color"]; ?> !important;
    box-shadow: #<?php echo $ussr["color"]; ?> !important;
}  

.navbar-header{
  background-color: #<?php echo $ussr["color"]; ?> !important;
  
}

.rounded-circle{
  background: #<?php echo $ussr["color"]; ?> !important;
  border-color: #<?php echo $ussr["color"]; ?> !important;
  box-shadow: #<?php echo $ussr["color"]; ?> !important;
}

.bg-soft-primary{
  background: #<?php echo $ussr["color"]; ?> !important;
  border-color: #<?php echo $ussr["color"]; ?> !important;
  box-shadow: #<?php echo $ussr["color"]; ?> !important;
}

.dropdown-menu{
  color: #<?php echo $ussr["color"]; ?> !important;
}


.btn-primary {
  background: #<?php echo $ussr["color"]; ?>;
  border-color: #<?php echo $ussr["color"]; ?>;
}

.btn-primary {
  background: #<?php echo $ussr["color"]; ?> !important;
  border-color: #<?php echo $ussr["color"]; ?> !important;
  box-shadow: #<?php echo $ussr["color"]; ?> !important;

a {
  color: #<?php echo $ussr["color"]; ?>;
  text-decoration: none;
  background-color: transparent; ;
}

</style>



<?php if($ussr["theme"] == "noel") { ?>

    <style>

        .topnav {
            background-color: rgba(0, 0, 0, 0.473) !important;
            background:  rgba(0, 0, 0, 0.473) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 

        .footer {
            background-color: rgba(0, 0, 0, 0.473) !important;
            background: rgba(0, 0, 0, 0.473) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 

        .card {
            background-color: rgba(0, 0, 0, 0.473) !important;
            background: rgba(0, 0, 0, 0.473) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 
        
            </style>
            
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

<?php if($ussr["theme"] == "noel red") { ?>

<style>

    .topnav {
        background-color: rgba(0, 0, 0, 0.473) !important;
        background:  rgba(0, 0, 0, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 

    .footer {
        background-color:rgba(184, 79, 79, 0.473) !important;
        background: rgba(184, 79, 79, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 

    .card {
        background-color: rgba(184, 79, 79, 0.473) !important;
        background: rgba(184, 79, 79, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 
    
        </style>

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

<?php if($ussr["theme"] == "Red") { ?>

<style>

    .topnav {
        background-color: rgba(0, 0, 0, 0.473) !important;
        background:  rgba(0, 0, 0, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 

    .footer {
        background-color:rgba(184, 79, 79, 0.473) !important;
        background: rgba(184, 79, 79, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 

    .card {
        background-color: rgba(184, 79, 79, 0.473) !important;
        background: rgba(184, 79, 79, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 
    
        </style>

<?php } ?>

<?php if($ussr["theme"] == "noel green") { ?>

    <style>
    
        .topnav {
            background-color: rgba(0, 0, 0, 0.473) !important;
            background:  rgba(0, 0, 0, 0.473) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 
    
        .footer {
            background-colorr: rgba(104, 218, 75, 0.473) !important;
            background: rgba(104, 218, 75, 0.473) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 
    
        .card {
            background-color:rgba(104, 218, 75, 0.473) !important;
            background: rgba(104, 218, 75, 0.473) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 
        
            </style>
    
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

    <?php if($ussr["theme"] == "Green") { ?>

        <style>
    
    .topnav {
        background-color: rgba(0, 0, 0, 0.473) !important;
        background:  rgba(0, 0, 0, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 

    .footer {
        background-colorr: rgba(104, 218, 75, 0.473) !important;
        background: rgba(104, 218, 75, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 

    .card {
        background-color:rgba(104, 218, 75, 0.473) !important;
        background: rgba(104, 218, 75, 0.473) !important;
        border-color: rgb(88, 102, 230) !important;
        box-shadow: rgb(88, 102, 230) !important;
    } 
    
        </style>

<?php } ?>

    <?php if($ussr["theme"] == "noel blue") { ?>

        <style>
        
            .topnav {
                background-color: rgba(88, 102, 230, 0.719) !important;
                background: rgba(88, 102, 230, 0.719) !important;
                border-color: rgb(88, 102, 230) !important;
                box-shadow: rgb(88, 102, 230) !important;
            } 
        
            .footer {
                background-color: rgba(88, 102, 230, 0.719) !important;
                background: rgba(88, 102, 230, 0.719) !important;
                border-color: rgba(88, 102, 230, 0.719) !important;
                box-shadow: rgba(88, 102, 230, 0.719) !important;
            } 
        
            .card {
                background-color: rgba(88, 102, 230, 0.719) !important;
                background: rgba(88, 102, 230, 0.719) !important;
                border-color: rgb(88, 102, 230) !important;
                box-shadow: rgb(88, 102, 230) !important;
            } 
            
                </style>
        
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

        <?php if($ussr["theme"] == "Blue") { ?>

            <style>
        
        .topnav {
            background-color: rgba(88, 102, 230, 0.719) !important;
            background: rgba(88, 102, 230, 0.719) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 
    
        .footer {
            background-color: rgba(88, 102, 230, 0.719) !important;
            background: rgba(88, 102, 230, 0.719) !important;
            border-color: rgba(88, 102, 230, 0.719) !important;
            box-shadow: rgba(88, 102, 230, 0.719) !important;
        } 
    
        .card {
            background-color: rgba(88, 102, 230, 0.719) !important;
            background: rgba(88, 102, 230, 0.719) !important;
            border-color: rgb(88, 102, 230) !important;
            box-shadow: rgb(88, 102, 230) !important;
        } 
        
            </style>

<?php } ?>


    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">


        <header id="page-topbar">
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

        <?php if($ussr["theme"] == "noel red") { ?> 
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

            <?php if($ussr["theme"] == "noel green") { ?> 
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

                <?php if($ussr["theme"] == "noel blue") { ?> 
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
        
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">

                            <a href="" class="logo logo-light">
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light2.png" alt="" height="19">
                                </span>
                            </a>
                           
                        </div>

                        
                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>



                        <div style="margin-left: 78pc;" class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">


                                    <?php

if(Account::GetUser($_SESSION['id'])['anonymax'] != "")

{
  ?>

<img class="rounded-circle header-profile-user" src="https://avatarfiles.alphacoders.com/198/198394.jpg?size=128"  style="" width="40" height="40" class="rounded-circle header-profile-user" alt="Header Avatar">


  <?php
}

?>

<?php

if(Account::GetUser($_SESSION['id'])['anonymax'] == "")

{
  ?>

<img class="rounded-circle header-profile-user" src="https://cdn.discordapp.com/avatars/<?php echo Account::GetUser($_SESSION['id'])['discord_id']; ?>/<?php echo Account::GetUser($_SESSION['id'])['discord_avatar']; ?>.png?size=128"  style="" width="40" height="40" class="rounded-circle header-profile-user" onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/000/440/531/non_2x/question-mark-vector-icon.jpg'" alt="Header Avatar">

<?php
}

?>

                                <span class="d-none d-xl-inline-block ml-1">
                                  <?php
                  
                  if($ussr["anonymax"] != "")
                  
                  {
                  
                    echo $ussr["anonymax"];
                  
                  }
                  
                  else
                  {
                    echo $_SESSION["discord_socket"]->username;
                  }
                  
                  ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="myprofile.php"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>

                  <?php if(IsVIP($_SESSION['id']) || IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#iplogger"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> IP logger</a>
                                <?php } ?>

                                <?php if(IsFREE($_SESSION['id'])) { ?>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target=""><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> IP logger</a>
                                <?php } ?>

                                <a class="dropdown-item" href=""><i class="bx bx-support font-size-16 align-middle mr-1"></i> Support</a>

                                <?php if(IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id'])) { ?>
                                <a class="dropdown-item" href="https://lkpanel.me/panel/lock.php"><i class="bx bx-shield-alt-2 font-size-16 align-middle mr-2"></i> Administration</a>
                                <?php } ?>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <a href="https://lkpanel.me/panel/doc.php">
                            <button type="button" class="btn header-item noti-icon">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                            </a>
                        </div>
                                
                    </div>
                </div>
            </header>
    
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link " href="dashboard.php">
                                        <i class="bx bx-home-circle mr-2"></i>Dashboard
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-customize mr-2"></i>Web Tool <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">
                                        <a href="iploca.php"   class="dropdown-item" >IP Localisation </a>
                                        <a href="iplogger.php" class="dropdown-item" >IP Logger </a>
                                        <a href="accountgen.php" class="dropdown-item" >Accounts Gen </a>
                                        <a href="proxy.php" class="dropdown-item" >Proxys Gen </a>
                                        <a href="youtubeconverter.php" class="dropdown-item" >Youtube Converter </a>
                                        <a href="spamwebhook.php" class="dropdown-item" >Webhook Spammer </a>
                                        <a href="image.php" class="dropdown-item">édit Image</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-planet mr-2"></i>Leaks <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">

                                    <a href="addon.php"   class="dropdown-item" >Addons </a>

                                    <a href="jeux.php"   class="dropdown-item" >Jeux </a>

                                    <?php if(IsFREE($_SESSION['id'])) { ?>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> TOOL </a>
                                    <?php } ?>

                                    <?php if(IsVIP($_SESSION['id']) || IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                    <a href="tool.php"   class="dropdown-item">TOOL </a>
                                    <?php } ?>
                                    
                                    </div>
                                </li>


                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-prem" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-search mr-2"></i>Resolver <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-prem">

                                    <?php if(IsFREE($_SESSION['id'])) { ?>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> CloodFlare Resolver </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> DNS Resolver </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Website Resolver </a>
                                    <?php } ?>

                                    <?php if(IsVIP($_SESSION['id']) || IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                    <a href="cloudf.php"   class="dropdown-item">CloodFlare Resolver </a>
                                    <a href="dns.php"   class="dropdown-item">DNS Resolver </a>
                                    <a href="websiteresolver.php"   class="dropdown-item">Website Resolver </a>
                                    <?php } ?>

                                    <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Skype <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-map">

                                    <?php if(IsFREE($_SESSION['id'])) { ?>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Skype Resolver </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Resolve Database </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> IP to Skype </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Email to Skype </a>
                                    <?php } ?>

                                    <?php if(IsVIP($_SESSION['id']) || IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                    <a href="Skyperesolver.php"   class="dropdown-item">Skype Resolver </a>
                                    <a href="resolvedatabase.php"   class="dropdown-item">Resolve Database </a>
                                    <a href="iptoskype.php"   class="dropdown-item">IP to Skype </a>
                                    <a href="emailskype.php"   class="dropdown-item">Email to Skype </a>
                                    <?php } ?>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-plus mr-2"></i>Extras <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">

                                    <?php if(IsFREE($_SESSION['id'])) { ?>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Backdoor Finder </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Stresser </a>
                                    <a href="youtube.php"   class="dropdown-item" >Youtube Channel</a>
                                    <a href="twitch.php"   class="dropdown-item" >Twitch Channel </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Xray </a>
                                    <?php } ?>

                                    <?php if(IsVIP($_SESSION['id'])) { ?>
                                    <a href="finder.php"   class="dropdown-item" >Backdoor Finder </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Stresser </a>
                                    <a href="youtube.php"   class="dropdown-item" >Youtube Channel</a>
                                    <a href="twitch.php"   class="dropdown-item" >Twitch Channel </a>
                                    <a href="premium.php"   class="dropdown-item" onclick="return false"><i class="bx bxs-lock-alt"></i> Xray </a>
                                    <?php } ?>

                                    <?php if(IsAdmin($_SESSION['id']) || IsSuport($_SESSION['id']) || IsVendeur($_SESSION['id'])) { ?>
                                    <a href="finder.php"   class="dropdown-item" >Backdoor Finder </a>
                                    <a href="stress.php"   class="dropdown-item" >Stresser </a>
                                    <a href="youtube.php"   class="dropdown-item" >Youtube Channel</a>
                                    <a href="twitch.php"   class="dropdown-item" >Twitch Channel </a>
                                    <a href="xray.php"   class="dropdown-item" >Xray </a>
                                    <?php } ?>

                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-charts" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-collection mr-2"></i>Autres <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-charts">

                                        <a href="rules.php"   class="dropdown-item" >Règles </a>
                                    <a href="doc.php"   class="dropdown-item" >Documentation </a>

                                    <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="suporte"
                                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Support <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="suporte">

                                    <a href="support1.php"   class="dropdown-item">Signalé un Utilisateur</a>
                                    <a href="support.php"   class="dropdown-item">Signalé un bug</a>
                      

                                            </div>
                                        </div>

                                    <a href="membre.php"   class="dropdown-item" >Membres </a>
                                    </div>
                                </li>

                                <?php if(($ussr['adult'] == "no")) { ?>
                                   
                                   <li class="nav-item">
                                        <a class="nav-link " style="text-shadow: 0px 0px 10px rgb(247, 0, 255)" href="#" data-toggle="modal" data-target="#nonadult">🔞Wall Off Adult🔞</a>
                                    </li>

                                    <?php } else if(($ussr['adult'] == "")) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link " style="text-shadow: 0px 0px 10px rgb(247, 0, 255)" href="#" data-toggle="modal" data-target="#nonadult">🔞Wall Off Adult🔞</a>
                                    </li>

                                    <?php } else if(($ussr['adult'] == "yes")) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link " style="text-shadow: 0px 0px 10px rgb(247, 0, 255)" href="-18.php">🔞Wall Off Adult🔞</a>
                                    </li>
                                    <?php } ?>

                                    <li class="nav-item">
                                        <a class="nav-link " style="text-shadow: 0px 0px 10px red" href="premium.php">✨Boutique✨</a>
                                    </li>
                                    
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                2021 © lkpanel.me
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    by Σʍиø§ɪΔ
                </div>
            </div>
        </div>
    </div>
</footer>





      <div class="modal fade" id="iplogger" tabindex="-1" role="dialog" aria-labelledby="luarun-backdoorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="fa fa-code"></i> IP logger</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <center><h4>IP logger Général</h4></center>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="copyfetch" value='https://lkpanel.me/panel.php' readonly>
                        <div class="input-group-append">
                            <!--<button class="btn btn-primary" type="button">Voir</button>-->
                            <button class="btn btn-primary" onclick="fetchurlcopy();" type="button">Copy</button>
                        </div>
                    </div>
                </div>
             
                <div class="modal-body">
                <center><h4>IP logger Personel</h4></center>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" id="copyfetch2"
                        
                        <?php if($ussr["webhook"] != "") { ?>
                                        
                                        value='https://lkpanel.me/site.php?user=<?php echo $ussr[id]; ?>'
                                        
                                       <?php } else { ?>

                                        value='Enregistré un Webhook Discord !!!'

                                      <?php  } ?>
                        
                        
                        readonly>
                        <div class="input-group-append">
                            <!--<button class="btn btn-primary" type="button">Voir</button>-->
                            <button class="btn btn-primary" onclick="fetchurlcopy2();" type="button">Copy</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="youtube" tabindex="-1" role="dialog" aria-labelledby="luarun-backdoorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"></i>Entrée votre Youtube ID</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="youtube" value="<?php echo Account::GetUser($_SESSION['id'])['youtube']; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="github" tabindex="-1" role="dialog" aria-labelledby="luarun-backdoorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"></i>Entrée votre Pseudo Github</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="github" value="<?php echo Account::GetUser($_SESSION['id'])['github']; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="nonadult" tabindex="-1" role="dialog" aria-labelledby="luarun-backdoorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
            <form action="" method="post">
                <div class="modal-body">
                <center> <h1></i>Avez-vous 18 ans ?</h1></center>

                <center> <p></i>Cette page offre du contenu réservé aux adultes.
Vous devez avoir 18 ans ou plus pour entrer.</p></center>

<br>
<center>
<div class="preview-block">
    <div class="custom-control custom-radio">
        <input type="radio" id="adult23" name="adult2" value="yes" class="custom-control-input">
        <label class="custom-control-label" for="adult23">J'ai 18ans ou plus !</label>
    </div>
</div>
</center>
<br>
<center>
<div class="col-md-3 col-sm-6">
    <div class="preview-block">
        <div class="custom-control custom-radio">
            <input type="radio" id="adult23" name="adult2" checked="" value="no" class="custom-control-input">
            <label class="custom-control-label" for="adult23">Je n'ai pas 18ans !</label>
        </div>
    </div>
</div>
</center>

                </div>
                <br>
                <center>
                    <button class="btn btn-secondary waves-effect waves-light" type="submit" name="submit">Validé</button>
                </center>
                <br>
            </div>
        </div>
    </div>

    <div class="modal fade" id="twitch" tabindex="-1" role="dialog" aria-labelledby="luarun-backdoorLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title"></i>Entrée votre Pseudo Twitch</h5>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" name="twitch" value="<?php echo Account::GetUser($_SESSION['id'])['twitch']; ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" name="submit">édit</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@widgetbot/crate@3" async defer>
        new Crate({
        server: '713692960419610714', // lkpanel - Services
        channel: '747881741007716432' // 📢-annonces-générales
        })
        </script>
    
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

<?php 

echo "
        <script>

    function fetchurlcopy()
{
    if ($('#copyfetch').val() != 'https://lkpanel.me/panel.php'){
        $('#copyfetch').val('https://lkpanel.me/panel.php');
    let copyText = document.getElementById('copyfetch' );
    copyText.select();
    document.execCommand('copy');
    $('#copyfetch').val('HIDDEN LINK');
    }else{
        let copyText = document.getElementById('copyfetch' );
    copyText.select();
    document.execCommand('copy');
    }
}

        </script> "
        
; ?>



<?php 

$rawa = $ussr[id];


echo "
        <script>

    function fetchurlcopy2()
{
    if ($('#copyfetch2').val() != 'https://lkpanel.me/site.php?user=$rawa'){
        $('#copyfetch2').val('https://lkpanel.me/site.php?user=$rawa');
    let copyText = document.getElementById('copyfetch2' );
    copyText.select();
    document.execCommand('copy');
    $('#copyfetch').val('HIDDEN LINK');
    }else{
        let copyText = document.getElementById('copyfetch2' );
    copyText.select();
    document.execCommand('copy');
    }
}

        </script> "
        
; ?>

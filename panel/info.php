<?php
include 'core/class/include.php';



?>

<?php $p = $_GET['p'];
    if(empty($_GET['p']))
            {$p = "home";}
             if($p == "home")

{include("info/user.php");}  ?>




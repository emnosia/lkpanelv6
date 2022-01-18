<?php
$key = "cle_api";

if(isset($_GET['length']) && isset($_GET['key'])){

    if(is_numeric($_GET['length'])){

        if($_GET['key'] == $key){

            if($_GET['length'] >= 8 && $_GET['length'] <= 32){

                    $str = "abcdefghijklmnopqrstuvwxyz123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    $str = str_shuffle($str);
                    echo substr($str, 0, $_GET['length']);
                    
             }
        }else{

            echo "La clé d'api n'est pas bonne";

        }
    }
}
?>
<html> <head> <meta charset="utf-8"> </head> </html>
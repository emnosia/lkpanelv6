<?php
if(isset($_GET['code']) && isset($_GET['key']) && isset($_GET['value'])){
if($_GET['key'] >= 3948267513464756141357 && $_GET['key'] <= 3948267513464756841357){
      switch($_GET['code']){
                case ($_GET['code'] == base64):
                echo base64_encode($_GET['value']);
                break;
                case ($_GET['code'] == utf8):
                echo utf8_encode($_GET['value']);
                break;
                case ($_GET['code'] == socks4):
                echo "$socks4";
                break;
      }
            }
    }else{
        echo 'error';
    }
?>

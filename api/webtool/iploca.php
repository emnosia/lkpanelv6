<?php
$username = $_GET['iploca'];
?>


<?php
if (isset($_GET['iploca']) && isset($_GET['key'])) {
    if ($_GET['key'] >= 3948267513464756141357 && $_GET['key'] <= 3948267513464756841357) {
        switch ($_GET['iploca']) {
            case ($_GET['iploca']):
                $ip = @file_get_contents("https://lkpanel.me/api.php?key=M9HNW-VBJYB-WXW02-O9I8D&action=geoip&string={$username}");
                echo ($ip);
                break;
        }
    }
} else {
    echo 'error';
}
?>

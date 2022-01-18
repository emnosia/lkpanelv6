<?php
$username = $_GET['logger'];
?>


<?php
if (isset($_GET['logger']) && isset($_GET['key'])) {
    if ($_GET['key'] >= 3948267513464756141357 && $_GET['key'] <= 3948267513464756841357) {
        switch ($_GET['logger']) {
            case ($_GET['logger']):
                $ip = @file_get_contents("https://lkpanel.me/api.php?key=M9HNW-VBJYB-WXW02-O9I8D&action=iplogger&string=&logger={$username}");
                echo ($ip);
                break;
        }
    }
} else {
    echo 'error';
}
?>

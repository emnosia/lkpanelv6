<?php
$username = $_GET['website'];
?>


<?php
if (isset($_GET['website']) && isset($_GET['key'])) {
    if ($_GET['key'] >= 3948267513464756141357 && $_GET['key'] <= 3948267513464756841357) {
        if ($username == "https://lkpanel.me" || $username == "https://emnosia.fr" || $username == "emnosia.fr" || $username == "lkpanel.me" || $username == "https://lkpanel.cz" || $username == "lkpanel.cz" || $username == "https://lkpanel.fr" || $username == "lkpanel.fr") {
            echo "Blacklist";
        } else {
            switch ($_GET['website']) {
                case ($_GET['website']):
                    $ip = @file_get_contents("https://lkpanel.me/api.php?key=M9HNW-VBJYB-WXW02-O9I8D&action=header&string={$username}");
                    echo ($ip);
                    break;
            }
        }
    }
} else {
    echo 'error';
}
?>

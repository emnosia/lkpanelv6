<?php
include 'core/class/include.php';
$ip = $_SERVER['REMOTE_ADDR'];
if (BanIP::IsBanned($_SERVER["REMOTE_ADDR"])) {
    die("Vous êtes banni IP, venez sur le discord pour vous faire debannir https://discord.gg/FUf4yUb");
}

if (!Account::isAuthentified()) {
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

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-body">
                    <div class="panel panel-default">
                        <div class="panel-heading">




                            <div class="faq-box media">
                                <div class="media-body">
                                    <h5 class="font-size-15">New API Key</h5>



                                    <center>


                                        <?php if (isset($_POST['resolve'])) {
                                            $content = $_POST['content'];
                                            $site = $_POST['site'];
                                            $lang = $_POST['lang'];
                                            strtolower($content);
                                            if ($content == null) { ?>
                                                <p style="color: red;">Insérer du text</p>
                                            <?php   } else { ?>

                                                <?php

                                                if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                                                    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                                                }


                                                $timestamp = date("c", strtotime("now"));

                                                $username = Account::GetUser($_SESSION['id'])['username'];
                                                $avatar = Account::GetUser($_SESSION['id'])['discord_avatar'];
                                                $iddis = Account::GetUser($_SESSION['id'])['discord_id'];

                                                $json_data = json_encode([
                                                    // Message
                                                    "content" => "",

                                                    // Username
                                                    "username" => "Webhook Support by Σʍиø§ɪΔ#5270",

                                                    // Embeds Array
                                                    "embeds" => [
                                                        [
                                                            // Embed Title
                                                            "title" => "",

                                                            // Embed Type
                                                            "type" => "rich",



                                                            // Timestamp of embed must be formatted as ISO8601
                                                            "timestamp" => $timestamp,

                                                            // Embed left border color in HEX
                                                            "color" => hexdec("ff9933"),

                                                            // Footer
                                                            "footer" => [
                                                                "text" => "$username",
                                                                "icon_url" => "https://cdn.discordapp.com/avatars/$iddis/$avatar.png"
                                                            ],


                                                            // Author
                                                            "author" => [],

                                                            // Field array of objects
                                                            "fields" => [
                                                                // Field 1
                                                                [
                                                                    "name" => "Message",
                                                                    "value" => "$content",
                                                                    "inline" => false
                                                                ],
                                                                // Field 2
                                                                [
                                                                    "name" => "Site Web",
                                                                    "value" => "$site",
                                                                    "inline" => false
                                                                ],

                                                                [
                                                                    "name" => "Langage",
                                                                    "value" => "$lang",
                                                                    "inline" => false
                                                                ],

                                                                [
                                                                    "name" => "Posted by",
                                                                    "value" => "<@$iddis>",
                                                                    "inline" => false
                                                                ],
                                                                // Field 3
                                                                [
                                                                    "name" => "Mention Admin",
                                                                    "value" => "||<@375941491081871361>|| ||<@454651858552750101>||",
                                                                    "inline" => false
                                                                ]

                                                            ]
                                                        ]
                                                    ]


                                                ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);


                                                $ch = curl_init("");
                                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
                                                curl_setopt($ch, CURLOPT_POST, 1);
                                                curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                                                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                                                curl_setopt($ch, CURLOPT_HEADER, 0);
                                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                                                $response = curl_exec($ch);
                                                curl_close($ch);


                                                ?>

                                        <?php }
                                        } ?>


                                    </center>



                                    <form action="" method="post">

                                        <center>
                                            <p>Pourquoi Voulez vous une API Key ?</p>
                                        </center>
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" name="content" placeholder="Votre text">

                                            <br>
                                        </div>

                                        <center>
                                            <p>Votre Site Web</p>
                                        </center>
                                        <div class="input-group mb-3">

                                            <input type="text" class="form-control" name="site" placeholder="Web Site">

                                            <br>
                                        </div>

                                        <center>
                                            <p>Qu'elle langage utilisez vous ?</p>
                                        </center>
                                        <select name="lang" class="form-control custom-select">

                                            <option value="PHP">PHP</option>
                                            <option value="JS">JS</option>
                                            <option value="JSON">JSON</option>
                                            <option value="JSONC">JSONC</option>
                                            <option value="Python">Python</option>
                                            <option value="C">C</option>
                                            <option value="C#">C#</option>
                                            <option value="C++">C++</option>

                                        </select>

                                </div>
                            </div>
                            <br>


                            <center><button type="submit" name="resolve" class="btn btn-block btn-primary">Envoyer</button></form>
                                </form>
                            </center>

                        </div>
                    </div>



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
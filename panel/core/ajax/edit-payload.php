<?php
include('../class/include.php');
if (!Account::isAuthentified() || !CSRF::isAjaxRequest())
{
    die("Bad request");
}

if(IsAdmin($_SESSION["id"], $userid))
        {

            if($_SESSION["id"] != 23)
            {


            $content = str_replace("<NEWLINE>", "\n", $_POST['content']);
			Payload::EditPayload($_GET['id'], htmlspecialchars($_POST['name']), htmlspecialchars($_POST['comment']), $_POST['cate'], $content, $_POST['side']);


        }else{
            if($_GET['id'] == 129 || $_GET['id'] == 100)
            {
                die("non");
            }else{
                $content = str_replace("<NEWLINE>", "\n", $_POST['content']);
				Payload::EditPayload($_GET['id'], htmlspecialchars($_POST['name']), htmlspecialchars($_POST['comment']), $_POST['cate'], $content, $_POST['side']);
            }
        }

        }else{
        	$rre = $GLOBALS['DB']->GetContent("payload", ["id" => $_GET['id']])[0];

             if(html_entity_decode($rre["userid"]) == $_SESSION['id'])
             {
             	$content = str_replace("<NEWLINE>", "\n", $_POST['content']);
				Payload::EditPayload($_GET['id'], htmlspecialchars($_POST['name']), htmlspecialchars($_POST['comment']), $_POST['cate'], $content, $_POST['side']);
			}else{
				die("Sa ne t'appartient pas mec :/");
			}

        }
?>
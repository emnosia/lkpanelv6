

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
 
  <?php if(!isset($_GET['id'])){die();} include 'object/navbar.php'; ?>


            <?php if($_GET['id'] == 'createpayload'){ ?>


              <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->


  <div class="row">

 
            <div class="col-8 grid-margin">
              <div class="card">
              <div class="card-body">
              <form method="POST">
              <div class="form-group">


<br>
<textarea class="form-control" type="text" name="code" id="payload-text" placeholder="Text du lkbin" style="height: auto;width: 100%;height: 500px"></textarea><br>
        <div class="form-group">
        <input type="text" autocomplete="off" id="payload-name" name="NomPayload" class="form-control" placeholder="Nom du lkbin" maxlength="40">
        </div>
        <div class="form-group">
        <center> <label style="color: #000">Posted by :</label> </center> 
          <select name="payload-cate" id="payload-cate" class="form-control">
          <option value="<?php echo $ussr["username"]; ?>" selected="selected"><?php echo $ussr["username"]; ?></option>
          <option value="Anonyme">Anonyme</option>
          </select>
        </div>
<br>
<center><button type="button" onclick="createPayloads()" data-toggle="modal" data-target="#createpayload-modal" class="btn btn-success">Publier</button></center>
</form>
</center>
  
         </div>
     </div>
 </div>
 </div>
 
           
              
                         <div class="col-md-4 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">

                <table class="table table-hover-animation mb-0">
              <thead>
                  <tr>
                  <th scope="col">Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                  </tr>
                  </thead>
                   <tbody>
                              <?php
                              $all_payload_predata = Payload::GetAllPayload();
                              $list = [];

                              $pah = 0;
                                      // Print Output
                                      foreach ($all_payload_predata as $data)
                                            { 
                                              $userid = $data["userid"];
                                                if (IsAdmin($_SESSION["id"], $userid))
                                                {
                                              if($pah != 8) {
                                      $pah = $pah + 1; ?>

                                              <tr>
                                                <td> <?= ($data['payload_name']) ?></td>
                                                <td> <?= ($data['date']) ?></td>
                                                <td><b><a href='https://lkpanel.me/panel/editpayload.php?id=<?php echo $data['id'] ?>' class='sidebar-link btn '><span class='btn btn-primary'>éditer</span></a></b></td>
                                              </tr>
                                            <?php
                                          } 
                                        }
                                      }
                                      
                              ?> 
               </tbody>
            </table>   

			  </div>
			</div>
    </div>
            
            <?php }else{ ?>

              <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->


  <div class="row">

 
            <div class="col-8 grid-margin">
              <div class="card">
              <div class="card-body">
              <form method="POST">
              <div class="form-group">
              <select class="form-control" id="payload-selector">
     <?php
     $all_payload_predata = Payload::GetAllPayload();
$list = [];

foreach ($all_payload_predata as $data)
{
$userid = $data["userid"];
  if(IsAdmin($_SESSION["id"], $userid))
      {

          if($_SESSION["id"] != 23)
          {


          $ismade = false;


      }else{
          if($data["id"] == 129 || $data["id"] == 100)
          {
              echo 
                      "
                      ";
         $ismade = true;
          }else{
              $ismade = false;
          }
      }

      }else{

          echo 
                      "
                      ";
         $ismade = true;

      }
      if($ismade == false)
      {
  if($data["userid"] == 0)
    $createdby = "Public";
  else

   echo 
                      "
                              <option value='" . $data['id'] . "'>" . htmlspecialchars($data['payload_name']) . "</option>
                      ";
}}
     ?>
</select>
</div>
        <div class="form-group" id="ppn">
          <input type="text"  class="form-control" id="edit-payload-name" placeholder="Nom du payload">
        </div>
        <div class="form-group">
          <textarea  class="form-control" rows="20" id="edit-payload-text" placeholder="Votre codes LUA ici"></textarea>
        </div>
        <div class="form-group">
        <center> <label style="color: #000">Posted by :</label> </center> 
          <select name="payload-cate" id="payload-cate" class="form-control">
          <option value="<?php echo $ussr["username"]; ?>" selected="selected"><?php echo $ussr["username"]; ?></option>
          <option value="Anonyme">Anonyme</option>
          </select>
        </div>
        <button id="payload-edit" class="btn btn-outline-info" onclick="editPayloads()"><i class="fas fa-edit"></i> Modifier</button> <button class="btn btn-outline-danger" onclick="deletePayloads()"><i class="fas fa-trash"></i> Supprimer</button>
    </div>
      </div>
  </div>
</div>
<?php } ?>
</center>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="assets/js/izitoast/js/iziToast.min.js"></script>
<script>
const selector = document.getElementById("payload-selector");
const editText = document.getElementById("payload-edit-text");

var _0x3a54=['val','#edit-payload-cate','#payload-comment','payload_content','#edit-payload-name','getElementById','#payload-text','value','log','options','success','<NEWLINE>','core/ajax/edit-payload.php?id=','core/ajax/get-payload-content.php?id=','ajax','#payload-name','#edit-payload-text','Payload\x20crée\x20avec\x20succès\x20!','done','POST','selectedIndex','replace','payload-cate','payload_comment','checked','Succès','core/ajax/add-payload.php','#edit-payload-comment','topRight','edit-payload-cate'];(function(_0x61f992,_0x3a5413){var _0x1977c6=function(_0x245beb){while(--_0x245beb){_0x61f992['push'](_0x61f992['shift']());}};_0x1977c6(++_0x3a5413);}(_0x3a54,0x7d));var _0x1977=function(_0x61f992,_0x3a5413){_0x61f992=_0x61f992-0x0;var _0x1977c6=_0x3a54[_0x61f992];return _0x1977c6;};function createPayloads(){var _0x1a5389=$(_0x1977('0xa'))[_0x1977('0x19')]();var _0x3daae6=$(_0x1977('0x1b'))[_0x1977('0x19')]();var _0x582486=$(_0x1977('0x1'))[_0x1977('0x19')]()[_0x1977('0x10')]('\x0a',_0x1977('0x6'));;var _0x3884e4=$('#payload-public')['prop'](_0x1977('0x13'));var _0x39c7c3=document[_0x1977('0x0')](_0x1977('0x11'));var _0x472beb=_0x39c7c3['options'][_0x39c7c3[_0x1977('0xf')]]['value'];$[_0x1977('0x9')]({'method':_0x1977('0xe'),'url':_0x1977('0x15'),'data':{'name':_0x1a5389,'comment':_0x3daae6,'cate':_0x472beb,'content':_0x582486,'public':_0x3884e4}});iziToast[_0x1977('0x5')]({'title':_0x1977('0x14'),'message':_0x1977('0xc'),'position':_0x1977('0x17')});}function editPayloads(){var _0x485a8e=$('#edit-payload-name')['val']();var _0x132f7f=$(_0x1977('0x16'))[_0x1977('0x19')]();var _0x5a0b7b=$(_0x1977('0xb'))[_0x1977('0x19')]()[_0x1977('0x10')]('\x0a',_0x1977('0x6'));;var _0x1ece11=document[_0x1977('0x0')](_0x1977('0x18'));var _0x5ed920=_0x1ece11[_0x1977('0x4')][_0x1ece11[_0x1977('0xf')]]['value'];$[_0x1977('0x9')]({'method':_0x1977('0xe'),'url':_0x1977('0x7')+selector[_0x1977('0x2')],'data':{'name':_0x485a8e,'comment':_0x132f7f,'cate':_0x5ed920,'content':_0x5a0b7b}});iziToast[_0x1977('0x5')]({'title':_0x1977('0x14'),'message':'Payload\x20modifié\x20avec\x20succès','position':_0x1977('0x17')});}function deletePayloads(){$['ajax']({'url':'core/ajax/del-payload.php?id='+selector['value']})[_0x1977('0xd')](function(){});iziToast[_0x1977('0x5')]({'title':_0x1977('0x14'),'message':'Payload\x20supprimé\x20avec\x20succès','position':_0x1977('0x17')});}function onPayloadChange(){action_payload_id=selector[_0x1977('0x2')];$[_0x1977('0x9')]({'url':_0x1977('0x8')+selector[_0x1977('0x2')]})[_0x1977('0xd')](function(_0x3fb843){console[_0x1977('0x3')](_0x3fb843);$(_0x1977('0x1d'))[_0x1977('0x19')](_0x3fb843['payload_name']);$(_0x1977('0x16'))[_0x1977('0x19')](_0x3fb843[_0x1977('0x12')]);$(_0x1977('0xb'))[_0x1977('0x19')](_0x3fb843[_0x1977('0x1c')]);$(_0x1977('0x1a'))['val'](_0x3fb843['cate']);});}

var _0x11b9=['#edit-payload-comment','log','payload_content','getElementById','payload_comment','payload_name','value','addEventListener','done','click','core/ajax/get-payload-content.php?id=','val','#edit-payload-name','payload-edit','#edit-payload-text','cate','#edit-payload-cate'];(function(_0x429323,_0x11b9ab){var _0x3daa3f=function(_0x239e63){while(--_0x239e63){_0x429323['push'](_0x429323['shift']());}};_0x3daa3f(++_0x11b9ab);}(_0x11b9,0x17b));var _0x3daa=function(_0x429323,_0x11b9ab){_0x429323=_0x429323-0x0;var _0x3daa3f=_0x11b9[_0x429323];return _0x3daa3f;};onPayloadChange();selector[_0x3daa('0x2')]('change',onPayloadChange);document[_0x3daa('0xf')](_0x3daa('0x8'))[_0x3daa('0x2')](_0x3daa('0x4'),()=>{action_payload_id=selector[_0x3daa('0x1')];$['ajax']({'url':_0x3daa('0x5')+selector['value']})[_0x3daa('0x3')](function(_0x2e6e7c){console[_0x3daa('0xd')](_0x2e6e7c);$(_0x3daa('0x7'))['val'](_0x2e6e7c[_0x3daa('0x0')]);$(_0x3daa('0xc'))[_0x3daa('0x6')](_0x2e6e7c[_0x3daa('0x10')]);$(_0x3daa('0x9'))[_0x3daa('0x6')](_0x2e6e7c[_0x3daa('0xe')]);$(_0x3daa('0xb'))[_0x3daa('0x6')](_0x2e6e7c[_0x3daa('0xa')]);});});

</script>

</div>
</div>
<!-- OVERLAY -->


<!-- FOOTER -->

<script>

const checkboxs = document.getElementsByClassName("alt-checkbox");
for (let i = checkboxs.length - 1; i >= 0; --i)
{
checkboxs[i].addEventListener("click", () => {
  checkboxs[i].children[0].checked = !checkboxs[i].children[0].checked;
});
}

</script>




</html>
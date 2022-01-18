

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


  <?php include 'object/navbar.php'; ?>


<link rel="stylesheet" href="assets/js/izitoast/css/iziToast.min.css">
<body >

<center>
<div class="main-content">
            <div class="page-content">
               <div class="container-fluid">
                  <br>
                  <div class="row">
                     <div class="col-lg-12">
                        <div class="table-responsive">
                           <div class="card">
                              <div class="card-body">
                                 <div class="text-right"><a href="editpayload.php?id=createpayload"><button type="button" class="btn btn-success"><i class="fas fa-plus"></i> Create Payload</button></a></div>
                                 <center>
                                    <h2 class="card-title mb-4"><i class="fas fa-code"></i> Vos Payloads</h2>
                                 </center>
                                 <div class="row">
                                    <table class="table table-dark mb-0">
                                       <thead>
                                          <tr>
                                             <th scope="col">ID</th>
                                             <th scope="col">Name</th>
                                             <th scope="col">Content</th>
                                                                                      <th scope="col">Action</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        
                                        <?php
                                            $all_payload_predata = Payload::GetAllPayload();
                                            $list = [];

                                            foreach ($all_payload_predata as $data)
                                            {
                                                $userid = $data["userid"];
                                                if (IsAdmin($_SESSION["id"], $userid))
                                                { ?>
                                                  
                                                  <tr>
                                            <td class="text-primary">
                                            <?= $data['id']; ?>  
                                             </td>
                                             <td class="text-primary">
                                                <code> <?= $data['payload_name']; ?> </code>
                                             </td>
                                             <td>
                                                <b><?= $data['payload_comment']; ?></b>
                                             </td>
                                             <td>
                                                <a href="editpayload.php?id=<?= $data['id']; ?> "><button type="button" class="btn btn-warning"><i class="fas fa-tools"></i> Editer</button></a>
                                             </td>
                                                  
                                                <?php }else{ ?>
                                                  <td class="text-primary">
                                            <?= $data['id']; ?>  
                                             </td>
                                             <td class="text-primary">
                                                <code> <?= $data['payload_name']; ?> </code>
                                             </td>
                                             <td>
                                                <b><?= $data['payload_comment']; ?></b>
                                             </td>
                                             <td>
                                                <a href="editpayload.php?id=<?= $data['id']; ?> "><button type="button" class="btn btn-warning"><i class="fas fa-tools"></i> Editer</button></a>
                                             </td>
                                                </tr>
                                                  <?php
                                                } } ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="assets/js/izitoast/js/iziToast.min.js"></script>
<script>
const selector = document.getElementById("payload-selector");
const editText = document.getElementById("payload-edit-text");

var _0x137d=['#payload-text','core/ajax/add-payload.php','#payload-name','replace',':checked','getElementById','payload\x20crée\x20avec\x20succès','checked','succès','topRight','#clientorserver','#payload-comment','prop','success','payload-cate','server','value','POST','selectedIndex','val','options'];(function(_0x64efa1,_0x137d50){var _0x127aa3=function(_0x3afcbb){while(--_0x3afcbb){_0x64efa1['push'](_0x64efa1['shift']());}};_0x127aa3(++_0x137d50);}(_0x137d,0x7e));var _0x127a=function(_0x64efa1,_0x137d50){_0x64efa1=_0x64efa1-0x0;var _0x127aa3=_0x137d[_0x64efa1];return _0x127aa3;};function createPayloads(){var _0x50c592=$(_0x127a('0x2'))['val']();var _0x230ebe=$(_0x127a('0xb'))[_0x127a('0x13')]();var _0x552a43=$(_0x127a('0x0'))['val']()[_0x127a('0x3')]('\x0a','<NEWLINE>');;var _0x46f661=$('#payload-public')[_0x127a('0xc')](_0x127a('0x7'));var _0x2d603f=document[_0x127a('0x5')](_0x127a('0xe'));var _0xad9662=_0x2d603f[_0x127a('0x14')][_0x2d603f[_0x127a('0x12')]][_0x127a('0x10')];if($(_0x127a('0xa'))['is'](_0x127a('0x4'))){var _0x4b1558=_0x127a('0xf');}else{var _0x4b1558='client';}$['ajax']({'method':_0x127a('0x11'),'url':_0x127a('0x1'),'data':{'name':_0x50c592,'comment':_0x230ebe,'cate':_0xad9662,'content':_0x552a43,'public':_0x46f661,'side':_0x4b1558}});iziToast[_0x127a('0xd')]({'title':_0x127a('0x8'),'message':_0x127a('0x6'),'position':_0x127a('0x9')});}

var _0x19c9=['succès','#clientorserveredit','payload\x20édité\x20avec\x20succès','<NEWLINE>','#edit-payload-comment','#edit-payload-text','core/ajax/edit-payload.php?id=','POST','server','success','selectedIndex','value','val','getElementById','topRight','options','replace','client'];(function(_0x393375,_0x19c9d6){var _0x2169dc=function(_0x18948f){while(--_0x18948f){_0x393375['push'](_0x393375['shift']());}};_0x2169dc(++_0x19c9d6);}(_0x19c9,0x154));var _0x2169=function(_0x393375,_0x19c9d6){_0x393375=_0x393375-0x0;var _0x2169dc=_0x19c9[_0x393375];return _0x2169dc;};function editPayloads(){var _0x5a68bb=$('#edit-payload-name')[_0x2169('0xe')]();var _0x1acc50=$(_0x2169('0x6'))[_0x2169('0xe')]();var _0x595b84=$(_0x2169('0x7'))[_0x2169('0xe')]()[_0x2169('0x0')]('\x0a',_0x2169('0x5'));;var _0x1f27dd=document[_0x2169('0xf')]('edit-payload-cate');var _0x3ec502=_0x1f27dd[_0x2169('0x11')][_0x1f27dd[_0x2169('0xc')]][_0x2169('0xd')];if($(_0x2169('0x3'))['is'](':checked')){var _0xe5503a=_0x2169('0xa');}else{var _0xe5503a=_0x2169('0x1');}$['ajax']({'method':_0x2169('0x9'),'url':_0x2169('0x8')+selector['value'],'data':{'name':_0x5a68bb,'comment':_0x1acc50,'cate':_0x3ec502,'content':_0x595b84,'side':_0xe5503a}});iziToast[_0x2169('0xb')]({'title':_0x2169('0x2'),'message':_0x2169('0x4'),'position':_0x2169('0x10')});}

var _0x36ab=['ajax','core/ajax/del-payload.php?id=','success','payload\x20supprimé\x20avec\x20succès','succès','value'];(function(_0x3c418b,_0x36abfc){var _0x48f175=function(_0x1224af){while(--_0x1224af){_0x3c418b['push'](_0x3c418b['shift']());}};_0x48f175(++_0x36abfc);}(_0x36ab,0x161));var _0x48f1=function(_0x3c418b,_0x36abfc){_0x3c418b=_0x3c418b-0x0;var _0x48f175=_0x36ab[_0x3c418b];return _0x48f175;};function deletePayloads(){$[_0x48f1('0x1')]({'url':_0x48f1('0x2')+selector[_0x48f1('0x0')]})['done'](function(){});iziToast[_0x48f1('0x3')]({'title':_0x48f1('0x5'),'message':_0x48f1('0x4'),'position':'topRight'});}

function onPayloadChange() {
  action_payload_id = selector.value;
    $.ajax({
      url: "core/ajax/get-payload-content.php?id=" + selector.value
    }).done(function(data){
        console.log(data);
        $("#edit-payload-name").val(data.payload_name);
        $("#edit-payload-comment").val(data.payload_comment);
        $("#edit-payload-text").val(data.payload_content);
        $("#edit-payload-cate").val(data.cate);
    });
}

onPayloadChange();
selector.addEventListener("change", onPayloadChange);

document.getElementById("payload-edit").addEventListener("click", () => {
    action_payload_id = selector.value;
    $.ajax({
      url: "core/ajax/get-payload-content.php?id=" + selector.value
    }).done(function(data){
        console.log(data);
        $("#edit-payload-name").val(data.payload_name);
        $("#edit-payload-comment").val(data.payload_comment);
        $("#edit-payload-text").val(data.payload_content);
        $("#edit-payload-cate").val(data.cate);
    });
});

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

<!-- Logout Modal-->

</html>
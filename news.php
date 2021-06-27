<?php

$pageTitle = "News";
$index     = "";
$index_js = "";
include("init.php");
$nonavbar="";

function get_news(){
  $stmt =$conn->prepare("SELECT *   from News");
  $stmt ->execute();
  $fetc = $stmt ->fetchAll();
}
?>

<div class="container">
  <h1 class="text-center"><?php echo lang("news") ?></h1>
  <div class="conent">
    <div class="row">
      <div class="col-sm-12">

        <div class="row">
          <div class="col-8">
hhhhhhhhhhhhhhhhhhhhhhhh
          </div>
          <div class="col-4">
mmmmmmmmmmmmmmmmmmmmmm
          </div>

        </div>

      </div>

    </div>

  </div>

</div>
<?php

?>

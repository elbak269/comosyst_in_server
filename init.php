<?php
$template = "include/"; // template directory
$js = "theme/js/"; // js directory
$css = "theme/css/";// css directory
$img = "theme/image/";
$language ="config/languages/"; // language directory
$database = include("config/connect.php"); // connect database directory
$functions = "functions/";
$nodejs = "http://192.168.1.5:7070";
$nonavbar="";


         // Include the important file
include($functions."functions.php");
include($language."lang.php");
include($template ."header.php");
if (!isset($notheader)) {
  include($template ."navbar.php"); //include header
}



?>

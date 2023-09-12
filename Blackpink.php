<?php
$imgcount = 8;
 require_once "templates/headtemplate.php";
 //echo include_once (dirname(__FILE__) . '/templates/pa_antiadblock_2996741.php');
 ?>

 <script>
 $(document).ready(function() {
     $('div.hidden').fadeIn(2500).removeClass('hidden');
 });
 $(document).ready(function() {
     $('div.hidden2').fadeIn(4500).removeClass('hidden');
 });
  </script>
  <style type="text/css">
 /* background image */
 .Blackpink {
     background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("resources/pics/Blackpink/bg<?php echo mt_rand(1, $imgcount); ?>.jpg") center;
 }
 
 
 .Members {
     background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("resources/pics/Blackpink/bg<?php echo mt_rand(1, $imgcount); ?>.jpg") center;
 }
  </style>
<?php
require_once "templates/headerstyletemplate.php";
require_once "templates/headertemplate.php";
require_once "templates/headercontenttemplate.php";
require_once "templates/pagecontent/Blackpinkcontent.php";
require_once "templates/footertemplate.php";

?>


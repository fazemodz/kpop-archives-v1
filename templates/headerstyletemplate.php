<?php
error_reporting(0);
if($extentioncheck =="index.php")$title == "Home";
$extentioncheck =basename($_SERVER["SCRIPT_FILENAME"], '.php');
$title = $extentioncheck;
echo '<title>', $title, "</title>";
echo '<style type="text/css">
/* background image */
.',$title, '{
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("resources/pics/',$title,'/bg', mt_rand(1, $imgcount), '.jpg") center;
}
</style>';

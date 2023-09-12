<?php
error_reporting(0);
$file_extenetion = basename($_SERVER["SCRIPT_FILENAME"], '.php');
$owo = array(
    index => array('Explore the new music genre<br> that took the world by storm'),
    Blackpink => array('The queens of K-Pop.'),
    RedVelvet => array('Best friends of Blackpink.'),
    Loona => array('The ones that did things differently.'),
    Twice => array('shy shy shy.'),
    Ateez => array(''),
    Everglow => array('Goodbye, au revoir, adios'),
    );
    
$meta_tags_description = $owo[$file_extenetion][0];
?>
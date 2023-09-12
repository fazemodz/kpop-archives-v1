<?php
$title2 = basename($_SERVER["SCRIPT_FILENAME"], '.php');
echo'
    <meta name="_pagemode" content="release">
    
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <!-- Crawl bots so all pages show up (Naver is at the bottom so it stays with the Naver category of code-->
    <meta name="robots" content="',$title2,',follow">
    <meta name="googlebot" content="',$title2,',follow">
    <link href="http://kpoparchives.com" rel="canonical">
    <meta name="subject" content="',$title2,'">
    <meta name="description" content="', $meta_tags_description,'">
    <!-- Keywords for the search engine to pick up, both in english and korean (Korean for naver or google)-->
    <meta name="keywords" content="Blackpink,blackpink,Twice,twice,loona,Loona,Redvelvet,redvelvet,Ateez,ateez,블랙핑크,트와이스,이달의 소녀,레드벨벳,에이티즈">
    
    <meta name="copyright" content="©Copyright Company, 2020.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://kpoparchives.com/">
    <meta property="og:title" content="'; $title2; echo'">
    <meta property="og:description" content="', $meta_tags_description,'">
    <meta property="og:site_name" content="kpoparchives">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://twitter.com/hike821">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:domain" content="">
    <!-- Naver stuff so this website shows up on naver.(A korean search engine)-->
    <meta name="naver" content="',$title2,', follow">
    <meta name="naver-site-verification" content="d9351e925272514b8b1bca673b3f1a26125b079c"/>
    ';?>
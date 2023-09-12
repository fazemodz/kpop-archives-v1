<?php
  $imgcount = 11;
?>
<html lang="ko">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="../css/Header.css">
    <link rel="stylesheet" href="css/scroller.css">
    <link rel="stylesheet" href="https://cdn1.kpoparchives.com/css/main.css">
    <link rel="stylesheet" href="https://cdn1.kpoparchives.com/css/Navbar.css">
    <link rel="stylesheet" href="https://cdn1.kpoparchives.com/css/footer.css">
    <link rel="stylesheet" href="https://cdn1.kpoparchives.com/css/Header.css">
    <link rel="stylesheet" href="https://cdn1.kpoparchives.com/css/Animation.css">
    <link href="https://cdn1.kpoparchives.com/eggpage-resources/yellow3-blessed2-1.0.0.min.css" rel="stylesheet">
    <link href="https://cdn1.kpoparchives.com/eggpage-resources/yellow3-blessed1-1.0.0.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<style>

    .home {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("../pics/Index/bg<?php echo mt_rand(1, $imgcount); ?>.jpg") center;
    }
    .footer{
        min-height: 100px;
        min-width: 100%;
        position: relative;
    }
   .egg-template-body:hover{
       color: white;
       border: white;
   }
    </style>    
    <div class="Navbar1">  
    <span style="font-size:30px;cursor:pointer;color:white;position:center;padding-left:10px;padding-top:20px;" onclick="openNav()">&#9776;</span>
       
      
          
       
        
    </div>
    
</head>
<body>
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">Home</a>
        <a href="blackpink.php">BlackPink</a>
        <a href="gidle.php">(G)I-DLE</a>
        <a href="redvelvet.php">RedVelvet</a>
        <a href="loona.php">Loona</a>
        <a href="twice.php">Twice</a>
        <a href="acknowledgements.php">Acknowledgements</a> 
       
</div>
<!-- Everything in this div so it moves when the side menu is opening-->
<div id="main">
 <p class="owo"  onclick="OpenInfoMenu()">owo</p>
</div>
<script>
    function OpenInfoMenu() {
        
    }
</script>
<div class="egg-template-body">
<footer id="idk" class="footer footer-secondary footer-not-center " style="background-color : rgba(47, 47, 47, 1);">
    <div class="footerContainer container inner-top-xs inner-bottom-xs">
        <div class="footer-Text-Border">
            <div class="col-md-12">
                <div class="footer-info">
                    <div class="footer-info-text">
                        <div class="footer-info-text-body">
                            <div class="text-body">
                                <p class="text" style="color: #888888;"> Contact us here: <a href="mailto:contact@kpoparchives.com">contact@kpoparchives.com</p></a>
                            </div>
                            <p class="copyright">
                                ©Copyright Kpoparchives 2020.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="footer-sns">
                    <div class="footer-sns-body">
                        <ul class="list-unstyled list-inline">
                            <ul class="list-unstyled list-inline"> 
                                <li> <a target="_blank" href="https://twitter.com/loonatheworld" class="link-twitter" title="Twitter"><i class="icon-fa-twitter"></i></a> </li> 
                                <li> <a target="_blank" href="https://www.facebook.com/loonatheworld" class="link-facebook" title="Facebook"><i class="icon-fa-facebook"></i></a> </li> 
                                <li> <a target="_blank" href="https://www.instagram.com/loonatheworld/" class="link-instagram" title="Instagram"><i class="icon-fa-instagram"></i></a> </li> 
                                <li> <a target="_blank" href="https://www.youtube.com/c/loonatheworld" class="link-youtube" title="Youtube"><i class="icon-fa-youtube"></i></a> </li> 
                                <li> <a target="_blank" href="https://post.naver.com/my.nhn?memberNo=39258591" class="link-naver" title="Naver Blog"><i class="icon-egg002-naverblog"></i></a> </li> 
         
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
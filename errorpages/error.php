 <?php
        $imgcount = 11;
        
    require_once "phpowo/errorcodes.php";
 
echo'<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title>'.$title.'</title>
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/Neet.css">
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/headers.css">
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/Navbar.css">
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/pictures.css">
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/buttons.css">

<style type="text/css">
    /* background image */
    .error {
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url("../pics/Index/bg';?><?php echo mt_rand(1, $imgcount);?><?php
echo'.jpg") center;
    }
</style>

<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/fade.css">
<link rel="stylesheet" href="https://www.kpoparchives.com/en/errorpages/css/responsive.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


<meta name="description" content="K-Pop Archives a place to find allot of songs.">
<meta name="keywords"content="BlackPink,RedVelvet.Mamamoo,Momoland,Twice,BTS,Psy,YGEntertainment,YG.SMTown,1theK,JYP,JYPEntertainment,Jenniekimm,Jennie">
<meta name="author" content="K-Pop Archives">
<meta property="og:title" content="K-Pop archives" />
<meta property="og:description" content="K-Pop Archives, a place to find allot of K-Pop songs." />
<meta property="og:url" content="https://kpoparchives.com" />
<meta property="og:image" content="" />

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<header class= "header error main">
    <div class="topnav">
        <a href="https://www.kpoparchives.com/en/index.php">Home</a>
        <a href="https://www.kpoparchives.com/en/blackpink.php">BlackPink</a>
        <a href="https://www.kpoparchives.com/en/gidle.php">(G)I-DLE</a>
        <a href="https://www.kpoparchives.com/en/redvelvet.php">RedVelvet</a>
        <a href="https://www.kpoparchives.com/en/loona.php">Loona</a>
        <a href="https://www.kpoparchives.com/en/twice.php">Twice</a>
        <a href="https://www.kpoparchives.com/en/acknowledgements.php">Acknowledgements</a>
    </div>
    <div class="pagecontent">';           

    echo
        '<h1 class="title">'.$title.'</h1>
        <h1 class="Subtitle">'.$message.'</h1>
       
       
        <a href="#" onclick="history.back();" class="btnStack">Back to previous Page.</a>
        <a href="../index.php" class="btnStack">Or go back to the home page</a>
         <a href="https://client.brixly.uk/aff.php?aff=365" class="btnStack">My Web Host</a>
          <a href="https://discord.gg/kpop" class="btnStack">Official K-Pop archives discord server</a>
        
    </div>
    <div class="owo">
    </div>
</header>

<body></body>
</html>';?>
<?php
$title = basename($_SERVER["SCRIPT_FILENAME"], '.php');

echo'
<title>',$title,'</title>
<link rel="stylesheet" href="https://www.kpoparchives.com/en/prototypes/css/navbar.css">
<link rel="stylesheet" href="https://cdn1.kpoparchives.com/css/main.css">
  <div class="Navbar1">  
    <!--<span style="font-size:30px;cursor:pointer;color:white;position:center;padding-left:10px;padding-top:20px;" onclick="openNav()">&#9776;</span>-->
       
      
          
       
        
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
       
</div>';
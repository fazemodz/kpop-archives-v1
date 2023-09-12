<?php
echo'
<style>
* {
  box-sizing: border-box;
}

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

ul li {
  margin-top: -1px; 
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;
  position: relative;
  text-align: center;
}


.close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  padding: 12px 16px;
  transform: translate(0%, -50%);
}

.close:hover {background: #bbb;}
</style>

<ul>
  <li>Note this is a old version of kpoparchives so somethings might not work. #BlackLivesMatter<span class="close">&times;</span></li>
</ul>
<script>
var closebtns = document.getElementsByClassName("close");
var i;
for (i = 0; i < closebtns.length; i++) {
    closebtns[i].addEventListener("click", function() {
        this.parentElement.style.display = ',"'none'",'
    });
}
</script>
</head>
';

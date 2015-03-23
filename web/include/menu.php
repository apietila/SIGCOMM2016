<div id="leftnav" role="panel" data-position="left" data-display="overlay" data-theme="a">
  <?php
     $mypage = current_pagename();
   ?>
  <a href="index.php"><img src="images/logo.png" alt="ACM SIGCOMM 2016, August 2016, Salvador, Brazil" /></a>

  <ul class="navlist" data-role="listview" data-inset="true" data-theme="a" data-divider-theme="a">
    <li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>
    <li data-icon="false" <?php if ($mypage=="local.php") echo 'class="navselected"' ?> ><a href="local.php">Local Information</a></li>
    <li data-icon="false" <?php if ($mypage=="organization.php") echo 'class="navselected"' ?> ><a href="organization.php">Organization Committee</a></li>
  </ul>
  
</div>

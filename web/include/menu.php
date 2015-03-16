<?php
  $mypage = current_pagename();
?>
<div id="left-column">
<a href="index.php"><img class="center conflogo" src="images/logo.png" alt="ACM SIGCOMM 2016, August 2016, Salvador, Brazil" /></a>

<!-- <a href="#" onclick="$.mobile.silentScroll(0)" class="ui-btn-right" data-icon="grid"><h2 class="hcls">Site Menu</h2></a> -->

<ul class="navlist" data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b">
  <li data-icon="false" <?php if ($mypage=="index.php") echo 'class="navselected"' ?> ><a href="index.php">Home</a></li>
  <li data-icon="false" <?php if ($mypage=="local.php") echo 'class="navselected"' ?> ><a href="local.php">Local Information</a></li>
  <li data-icon="false" <?php if ($mypage=="organization.php") echo 'class="navselected"' ?> ><a href="organization.php">Organization Committee</a></li>
</div>
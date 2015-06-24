<div class="leftnav" role="panel" data-position="left" data-display="overlay" data-theme="a">
  <?php
     $mypage = current_pagename();
     if ($mypage == "")
        $mypage = "index.php";
   ?>
  <a href="index.php"><img src="images/logo.png" alt="ACM SIGCOMM 2016, August 2016, Salvador, Brazil" /></a>
  
  <ul data-role="listview" data-inset="true" data-theme="a" data-divider-theme="a">
    <li <?php if ($mypage=="index.php") echo('class="navselected"') ?> data-icon="false">
      <a href="index.php">Home</a>
    </li>
    <li <?php if ($mypage=="pc.php") echo('class="navselected"') ?>data-icon="false">
      <a href="pc.php">Program Committee</a>
    </li>
    <li <?php if ($mypage=="cft.php") echo('class="navselected"') ?>data-icon="false">
      <a href="cft.php">Call for Tutorials</a>
    </li>
    <li <?php if ($mypage=="local.php") echo('class="navselected"') ?> data-icon="false">
      <a href="local.php">Local Information</a>
    </li>
    <li <?php if ($mypage=="organization.php") echo('class="navselected"') ?>data-icon="false">
      <a href="organization.php">Organization Committee</a>
    </li>
    <li <?php if ($mypage=="policies.php") echo('class="navselected"') ?> data-icon="false">
      <a href="policies.php">Policies</a>
    </li>
  </ul>  
</div>

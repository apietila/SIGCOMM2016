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

    <li <?php if ($mypage=="cfp.php") echo('class="navselected"') ?>data-icon="false">
      <a href="cfp.php">Call for Papers</a>
    </li>

    <li class="notlast <?php if ($mypage=="cft.php") echo('navselected') ?>" data-icon="false">
      <a href="cft.php">Call for Tutorials</a>
    </li>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="workshops.php" || $mypage=="cfwp.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Workshops</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="cfwp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfwp.php">Call for Workshops</a>
        </li>
        <li class="subnav <?php if ($mypage=="workshops.php") echo('navselected') ?>" data-icon="false">
          <a href="workshops.php">Accepted Proposals</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="local.php" || $mypage=="hotel.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Local Information</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="local.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Venue</a>
        </li>
        <li class="subnav <?php if ($mypage=="hotel.php") echo('navselected') ?>" data-icon="false">
          <a href="hotel.php">Hotels and Travel</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="organization.php" || $mypage=="policies.php") echo('data-collapsed="false"') ?> class="navgroup listlast">
      <h4>Organization</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="organization.php") echo('navselected') ?>" data-icon="false">
          <a href="organization.php">Organization Committee</a>
        </li>

        <li class="subnav <?php if ($mypage=="policies.php") echo('navselected') ?>" data-icon="false">
          <a href="policies.php">Policies</a>
        </li>
      </ul>
    </div>

  </ul>  

  <div class="border ui-corner-all ui-shadow socialbuttons">
    <iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
  </div>

</div>

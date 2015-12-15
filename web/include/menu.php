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

    <li class="notlast <?php if ($mypage=="supporters.php") echo('navselected') ?>" data-icon="false">
      <a href="supporters.php">Supporters</a>
    </li>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="cfp.php" || $mypage=="program.php" || $mypage=="demos.php" || $mypage=="posters.php" || $mypage=="idemos.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Conference</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="cfp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfp.php">Call for Papers</a>
        </li>
        <!--
        <li class="subnav <?php if ($mypage=="program.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Program</a>
        </li>
        <li class="subnav <?php if ($mypage=="posters.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Posters</a>
        </li>
        <li class="subnav <?php if ($mypage=="demos.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Demos</a>
        </li>
        <li class="subnav <?php if ($mypage=="idemos.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Industrial Demos</a>
        </li>
        -->
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="cfwp.php" || $mypage=="workshops.php" || $mypage=="gaia.php" || $mypage=="hotmiddlebox.php" || $mypage=="qoe.php" || $mypage=="lancomm.php" || $mypage=="netpl.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Workshops</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="workshops.php") echo('navselected') ?>" data-icon="false">
          <a href="workshops.php">Accepted Proposals</a>
        </li>

        <li class="subnav <?php if ($mypage=="gaia.php") echo('navselected') ?>" data-icon="false">
          <a href="gaia.php">GAIA</a>
        </li>
        <li class="subnav <?php if ($mypage=="hotmiddlebox.php") echo('navselected') ?>" data-icon="false">
          <a href="hotmiddlebox.php">HotMiddlebox</a>
        </li>
        <li class="subnav <?php if ($mypage=="qoe.php") echo('navselected') ?>" data-icon="false">
          <a href="qoe.php">Internet-QoE</a>
        </li>
        <li class="subnav <?php if ($mypage=="lancomm.php") echo('navselected') ?>" data-icon="false">
          <a href="lancomm.php">LANCOMM</a>
        </li>
        <li class="subnav <?php if ($mypage=="netpl.php") echo('navselected') ?>" data-icon="false">
          <a href="netpl.php">NetPL</a>
        </li>
        
        <li class="subnav <?php if ($mypage=="cfwp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfwp.php">Call for Workshops</a>
        </li>

       </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="cft.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Tutorials</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="cft.php") echo('navselected') ?>" data-icon="false">
          <a href="cft.php">Call for Tutorials</a>
        </li>
        <!-- TODO: add tutorial pages -->
      </ul>
    </div>

    <!--
    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="reception.php" || $mypage=="dinner.php" || $mypage=="banquet.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Social Events</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="reception.php") echo('navselected') ?>" data-icon="false">
          <a href="reception.php">Welcome Reception</a>
        </li>
        <li class="subnav <?php if ($mypage=="dinner.php") echo('navselected') ?>" data-icon="false">
          <a href="reception.php">Student Dinner</a>
        </li>
        <li class="subnav <?php if ($mypage=="banquet.php") echo('navselected') ?>" data-icon="false">
          <a href="reception.php">Banquet</a>
        </li>
      </ul>
    </div>
    -->

    <!--
    <li <?php if ($mypage=="registration.php") echo('class="navselected"') ?>data-icon="false">
      <a href="registration.php">Registration</a>
    </li>
    -->

    <!--
    <li <?php if ($mypage=="travelgrants.php") echo('class="navselected"') ?>data-icon="false">
      <a href="travelgrants.php">Travel Grants</a>
    </li>
    -->

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="local.php" || $mypage=="travel.php" || $mypage=="visa.php" || $mypage=="kids.php") echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Local Information</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="local.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Venue</a>
        </li>

        <!--
        <li class="subnav <?php if ($mypage=="visa.php") echo('navselected') ?>" data-icon="false">
          <a href="visa.php">Visa</a>
        </li>
        -->

        <li class="subnav <?php if ($mypage=="travel.php") echo('navselected') ?>" data-icon="false">
          <a href="travel.php">Hotels and Travel</a>
        </li>

        <!--
        <li class="subnav <?php if ($mypage=="kids.php") echo('navselected') ?>" data-icon="false">
          <a href="kids.php">Support for Children</a>
        </li>
        -->
      </ul>
    </div>

    <li class="notlast <?php if ($mypage=="pc.php") echo('navselected') ?>" data-icon="false">
      <a href="pc.php">Program Committee</a>
    </li>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if ($mypage=="organization.php" || $mypage=="policies.php") echo('data-collapsed="false"') ?> class="navgroup listlast">
      <h4>Organization</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="organization.php") echo('navselected') ?>" data-icon="false">
          <a href="organization.php">Organization Committee</a>
        </li>

        <!-- TODO: is this still required ? If not, move the organisation.php to top level menuitem. -->
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

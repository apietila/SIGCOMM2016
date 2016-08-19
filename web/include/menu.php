<div class="leftnav" role="panel" data-position="left" data-display="overlay" data-theme="a">
  <?php
     $mypage = current_pagename();
     if ($mypage == "")
        $mypage = "index.php";
     
     // reorganizing menu items
     $conferenceItems = array("program.php", "pc.php", "papers.php", "posterprogram.php", "demoprogram.php", "src.php", "industrialdemoprogram.php", "maintrackposterprogram.php", "preview.php", "mentoring.php", "socialevents.php");
     $workshopItems = array ("gaia.php", "hotmiddlebox.php", "qoe.php", "lancomm.php", "netpl.php", "workshops.php");
     $tutorialItems = array("tutorial-im.php", "tutorial-wimobnet.php", "tutorial-iptv.php", "tutorial-p4.php", "tutorial-sdnnfv5g.php", "tutorials.php");
     $localItems = array ("local.php", "restaurants.php", "travel.php", "arrival.php", "visa.php", "hotel.php", "roomshare.php", "tourism.php", "advisory.php"); //, "poll.php"
     $organizationItems = array ("organization.php", "policies.php");
     $cfpItems = array("cfp.php", "submission.php", "postersdemos.php", "industrialdemos.php", "cfwp.php", "cft.php", "travelgrants.php", "n2women.php", "n2women-award.php");
     
?>
  <a href="index.php"><img src="images/logo.png" alt="ACM SIGCOMM 2016, August 2016, Florian&oacute;polis, Brazil" /></a>
  
  <ul data-role="listview" data-inset="true" data-theme="a" data-divider-theme="a">

    <li <?php if ($mypage == "index.php") echo('class="navselected"') ?> data-icon="false">
      <a href="index.php">Home</a>
    </li>

    <li class="notlast <?php if ($mypage=="supporters.php") echo('navselected') ?>" data-icon="false">
      <a href="supporters.php">Supporters</a>
    </li>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $conferenceItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Conference</h4>
      <ul data-role="listview" data-inset="false">
         <li class="subnav <?php if ($mypage=="program.php") echo('navselected') ?>" data-icon="false">
           <a href="program.php">Program</a>
        </li>
         <li class="subnav <?php if ($mypage=="pc.php") echo('navselected') ?>" data-icon="false">
           <a href="pc.php">Program Committee</a>
        </li>
        <li class="subnav <?php if ($mypage=="posterprogram.php") echo('navselected') ?>" data-icon="false">
          <a href="posterprogram.php">Posters</a>
        </li>
        <li class="subnav <?php if ($mypage=="demoprogram.php") echo('navselected') ?>" data-icon="false">
          <a href="demoprogram.php">Demos</a>
        </li>
        <li class="subnav <?php if ($mypage=="src.php") echo('navselected') ?>" data-icon="false">
          <a href="src.php">ACM SRC</a>
        </li>
        <li class="subnav <?php if ($mypage=="industrialdemoprogram.php") echo('navselected') ?>" data-icon="false">
          <a href="industrialdemoprogram.php">Industrial Demos</a>
        </li>
        <li class="subnav <?php if ($mypage=="maintrackposterprogram.php") echo('navselected') ?>" data-icon="false">
          <a href="maintrackposterprogram.php">Posters/Demos from Main Track</a>
        </li>
        <li class="subnav <?php if ($mypage=="preview.php") echo('navselected') ?>" data-icon="false">
          <a href="preview.php">Topic Preview</a>
        </li>
        <li class="subnav <?php if ($mypage=="mentoring.php") echo('navselected') ?>" data-icon="false">
          <a href="mentoring.php">Mentoring</a>
        </li>
        <li class="subnav <?php if ($mypage=="socialevents.php") echo('navselected') ?>" data-icon="false">
           <a href="socialevents.php">Social Events</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $workshopItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Workshops</h4>
      <ul data-role="listview" data-inset="false">
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
       </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $tutorialItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Tutorials</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="tutorial-wimobnet.php") echo('navselected') ?>" data-icon="false">
          <a href="tutorial-wimobnet.php">Enabling Research in Future WiMobNet</a>
        </li>
        <li class="subnav <?php if ($mypage=="tutorial-im.php") echo('navselected') ?>" data-icon="false">
          <a href="tutorial-im.php">Internet Measurements</a>
        </li>
        <li class="subnav <?php if ($mypage=="tutorial-iptv.php") echo('navselected') ?>" data-icon="false">
          <a href="tutorial-iptv.php">IPTV and Over-the-Top Video</a>
        </li>
        <li class="subnav <?php if ($mypage=="tutorial-p4.php") echo('navselected') ?>" data-icon="false">
          <a href="tutorial-p4.php">P4</a>
        </li>
        <li class="subnav <?php if ($mypage=="tutorial-sdnnfv5g.php") echo('navselected') ?>" data-icon="false">
          <a href="tutorial-sdnnfv5g.php">SDN, NFV and Their Role in 5G</a>
        </li>
      </ul>
    </div>

    <li class="notlast <?php if ($mypage=="registration.php") echo('navselected') ?>" data-icon="false">
      <a href="https://www.regonline.com/acmsigcomm2016" rel="external">Registration</a>
    </li>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $localItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Local Information</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="assistance.php") echo('navselected') ?>" data-icon="false">
          <a href="assistance.php">Before Departure</a>
        </li>

        <li class="subnav <?php if ($mypage=="travel.php") echo('navselected') ?>" data-icon="false">
          <a href="travel.php">Venue and Travel</a>
        </li>

        <li class="subnav <?php if ($mypage=="restaurants.php") echo('navselected') ?>" data-icon="false">
          <a href="restaurants.php">Pubs &amp; Restaurants</a>
        </li>

        <li class="subnav <?php if ($mypage=="visa.php") echo('navselected') ?>" data-icon="false">
          <a href="visa.php">Visa</a>
        </li>

        <li class="subnav <?php if ($mypage=="hotel.php") echo('navselected') ?>" data-icon="false">
          <a href="hotel.php">Accommodation</a>
        </li>

        <li class="subnav <?php if ($mypage=="roomshare.php") echo('navselected') ?>" data-icon="false">
          <a href="roomshare.php">Room Share</a>
        </li>

        <li class="subnav <?php if ($mypage=="tourism.php") echo('navselected') ?>" data-icon="false">
          <a href="tourism.php">Tourism</a>
        </li>

        <li class="subnav <?php if ($mypage=="advisory.php") echo('navselected') ?>" data-icon="false">
          <a href="advisory.php">Advice for Travellers</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array($mypage, $organizationItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Organization</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="organization.php") echo('navselected') ?>" data-icon="false">
          <a href="organization.php">Organization Committee</a>
        </li>

        <?php // TODO: is this still required ? If not, move the organisation.php to top level menuitem. ?>
        <li class="subnav <?php if ($mypage=="policies.php") echo('navselected') ?>" data-icon="false">
          <a href="policies.php">Policies</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array($mypage, $cfpItems)) echo('data-collapsed="false"') ?> class="navgroup listlast">
      <h4>Calls</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="cfp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfp.php">Call for Papers</a>
        </li>
        <li class="subnav <?php if ($mypage=="submission.php") echo('navselected') ?>" data-icon="false">
          <a href="submission.php">Paper Submission</a>
        </li>
        <li class="subnav <?php if ($mypage=="postersdemos.php") echo('navselected') ?>" data-icon="false">
          <a href="postersdemos.php">Call for Posters &amp; Demos</a>
        </li>
        <li class="subnav <?php if ($mypage=="industrialdemos.php") echo('navselected') ?>" data-icon="false">
          <a href="industrialdemos.php">Call for Industrial Demos</a>
        </li>
        <li class="subnav <?php if ($mypage=="cfwp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfwp.php">Call for Workshops</a>
        </li>
        <li class="subnav <?php if ($mypage=="cft.php") echo('navselected') ?>" data-icon="false">
          <a href="cft.php">Call for Tutorials</a>
        </li>
        <li class="subnav <?php if ($mypage=="travelgrants.php") echo('navselected') ?>" data-icon="false">
          <a href="travelgrants.php">Travel Grants</a>
        </li>
        <li class="subnav <?php if ($mypage=="n2women.php") echo('navselected') ?>" data-icon="false">
          <a href="n2women.php">N2Women Fellowship</a>
        </li>
        <li class="subnav <?php if ($mypage=="n2women-award.php") echo('navselected') ?>" data-icon="false">
          <a href="n2women-award.php">N2Women Travel Grant</a>
        </li>
      </ul>
    </div>
    
  </ul>  

  <div class="border ui-corner-all ui-shadow socialbuttons">
    <iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
  </div>

</div>

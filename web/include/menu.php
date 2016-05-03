<div class="leftnav" role="panel" data-position="left" data-display="overlay" data-theme="a">
  <?php
     $mypage = current_pagename();
     if ($mypage == "")
        $mypage = "index.php";
     
     // $homeItems  = array("index.php", "message.php");
     $travelgrantItems = array("n2women.php", "travelgrants.php");
     $conferenceItems = array("cfp.php", "submission.php", "program.php", "pc.php", "papers.php");
     $workshopItems = array ("gaia.php", "hotmiddlebox.php", "qoe.php", "lancomm.php", "netpl.php", "cfwp.php", "workshops.php");
     $socialEventItems = array ("reception.php", "dinner.php", "banquet.php");
     $localInfoItems = array ("local.php", "travel.php", "visa.php", "kids.php", "advisory.php"); //, "poll.php"
     $organizationItems = array ("organization.php", "policies.php");
     $demoItems = array("postersdemos.php", "industrialdemos.php");
     $tutorialItems = array("cft.php", "tutorials.php", "tutorial-im.php", "tutorial-wimobnet.php", "tutorial-iptv.php", "tutorial-p4.php", "tutorial-sdnnfv5g.php");
     $extraItems = array("preview.php", "mentoring.php");
     
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
         <li class="subnav <?php if ($mypage=="papers.php") echo('navselected') ?>" data-icon="false">
           <a href="papers.php">Accepted Papers</a>
        </li>
         <li class="subnav <?php if ($mypage=="pc.php") echo('navselected') ?>" data-icon="false">
           <a href="pc.php">Program Committee</a>
        </li>
        <li class="subnav <?php if ($mypage=="cfp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfp.php">Call for Papers</a>
        </li>
        <li class="subnav <?php if ($mypage=="submission.php") echo('navselected') ?>" data-icon="false">
          <a href="submission.php">Paper Submission</a>
        </li>
        <?php /*
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
        */ ?>
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
        
        <li class="subnav <?php if ($mypage=="cfwp.php") echo('navselected') ?>" data-icon="false">
          <a href="cfwp.php">Call for Workshops</a>
        </li>
        <!-- li class="subnav <?php if ($mypage=="workshops.php") echo('navselected') ?>" data-icon="false">
          <a href="workshops.php">Accepted Proposals</a>
        </li -->

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
        <!-- li class="subnav <?php if ($mypage=="tutorials.php") echo('navselected') ?>" data-icon="false">
          <a href="tutorials.php">Accepted Tutorials</a>
        </li -->
        <li class="subnav <?php if ($mypage=="cft.php") echo('navselected') ?>" data-icon="false">
          <a href="cft.php">Call for Tutorials</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $demoItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Posters &amp; Demos</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="postersdemos.php") echo('navselected') ?>" data-icon="false">
          <a href="postersdemos.php">Call for Posters &amp; Demos</a>
        </li>
        <li class="subnav <?php if ($mypage=="industrialdemos.php") echo('navselected') ?>" data-icon="false">
          <a href="industrialdemos.php">Call for Industrial Demos</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $extraItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Topic Preview &amp; Mentoring</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="preview.php") echo('navselected') ?>" data-icon="false">
          <a href="preview.php">Topic Preview</a>
        </li>
        <li class="subnav <?php if ($mypage=="mentoring.php") echo('navselected') ?>" data-icon="false">
          <a href="mentoring.php">Mentoring</a>
        </li>
      </ul>
    </div>
    
    <?php /*
    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $socialEventItems)) echo('data-collapsed="false"') ?> class="navgroup">
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
    */ ?>

    <li class="notlast <?php if ($mypage=="registration.php") echo('navselected') ?>" data-icon="false">
      <a href="registration.php">Registration</a>
    </li>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $travelgrantItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Travel Grants</h4>
      <ul data-role="listview" data-inset="false">
        <li class="subnav <?php if ($mypage=="travelgrants.php") echo('navselected') ?>" data-icon="false">
          <a href="travelgrants.php">ACM SIGCOMM Travel Grants</a>
        </li>
        <li class="subnav <?php if ($mypage=="n2women.php") echo('navselected') ?>" data-icon="false">
          <a href="n2women.php">N2Women Fellowship</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array ($mypage, $localInfoItems)) echo('data-collapsed="false"') ?> class="navgroup">
      <h4>Local Information</h4>
      <ul data-role="listview" data-inset="false">
        <!--<li class="subnav <?php if ($mypage=="poll.php") echo('navselected') ?>" data-icon="false">
          <a href="poll.php">Poll</a>
        </li>-->

        <li class="subnav <?php if ($mypage=="local.php") echo('navselected') ?>" data-icon="false">
          <a href="local.php">Venue</a>
        </li>

        <?php /*
        <li class="subnav <?php if ($mypage=="visa.php") echo('navselected') ?>" data-icon="false">
          <a href="visa.php">Visa</a>
        </li>
        */ ?>

        <li class="subnav <?php if ($mypage=="travel.php") echo('navselected') ?>" data-icon="false">
          <a href="travel.php">Hotels and Travel</a>
        </li>

        <?php /*
        <li class="subnav <?php if ($mypage=="kids.php") echo('navselected') ?>" data-icon="false">
          <a href="kids.php">Support for Children</a>
        </li>
        */ ?>

        <li class="subnav <?php if ($mypage=="advisory.php") echo('navselected') ?>" data-icon="false">
          <a href="advisory.php">Advice for Travellers</a>
        </li>
      </ul>
    </div>

    <div data-role="collapsible" data-theme="a" data-content-theme="a" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right"
         <?php if (in_array($mypage, $organizationItems)) echo('data-collapsed="false"') ?> class="navgroup listlast">
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

  </ul>  

  <div class="border ui-corner-all ui-shadow socialbuttons">
    <iframe src="include/socialbtn.php" scrolling="no" height="21" width="100%" frameborder="0" marginheight="0" marginwidth="0"></iframe>
  </div>

</div>

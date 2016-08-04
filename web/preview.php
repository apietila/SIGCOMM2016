<?php
    $page_title="Topic Preview Sessions";
    include("include/header.php");
?>

<h1>Topic Preview Sessions</h1>

<p>Are you new to SIGCOMM? Are you an expert on data centers but have not dabbled
in wireless or privacy topics? Do you want to learn how to navigate the alphabet soup
of acronyms (CDN, DCN, SDN?) Join us for the SIGCOMM preview sessions in which
experts will give short introductions on a variety of topics to enhance your understanding
of this year's paper presentations.</p>

<h2>Program</h2>

<div id="prog_ctrl" data-role="navbar">
        <ul>
                <li><a href="#" onClick="filter('monday');" class="roundleft">Monday</a></li>
                <li><a href="#" onClick="filter('wednesday');">Wednesday</a></li>
                <li><a href="#" onClick="filter('all');" class="ui-btn-active ui-state-persist roundright">All</a></li>
        </ul>
</div>

<?php include("include/program/topicpreview.php"); ?>

<h2>Contact</h2>

<p>Questions? Do not hesitate to contact us!</p>

<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Topic Preview Chairs</li>
  <?php
    add_listitem("&Iacute;talo Cunha", "UFMG, Brazil", "http://homepages.dcc.ufmg.br/~cunha/");
    add_listitem("Ethan Katz-Bassett", "University of Southern California, USA", "http://www-bcf.usc.edu/~katzbass/");
    add_listitem("Maria Kazandjieva", "Netflix, USA", "");
  ?>
</ul>

<?php include ("include/footer.php"); ?>

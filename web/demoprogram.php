<?php
    $page_title="Demo Sessions";
    include("include/header.php");
?>

<h1>Demo Sessions</h1>

<h2>Location</h2>

<p>The demo sesssions will take place in the Room Agata.</p>

<h2>Technical Program</h2>

<div id="prog_ctrl" data-role="navbar">
        <ul>
                <li><a href="#" onClick="filter('tuesday');" class="roundleft">Tuesday - Session 1</a></li>
                <li><a href="#" onClick="filter('wednesday');">Wednesday - Sesssion 2</a></li>
                <li><a href="#" onClick="filter('all');" class="ui-btn-active ui-state-persist roundright">All</a></li>
        </ul>
</div>

<?php include("include/program/demos.php"); ?>

<?php include ("include/footer.php"); ?>

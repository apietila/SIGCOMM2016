<?php
    $page_title="Poster Sessions";
    include("include/header.php");
?>

<h1>Poster Sessions</h1>

<h2>Technical Program</h2>

<div id="prog_ctrl" data-role="navbar">
        <ul>
                <li><a href="#" onClick="filter('tuesday');" class="roundleft">Tuesday - Session 1</a></li>
                <li><a href="#" onClick="filter('wednesday');">Wednesday - Session 2</a></li>
                <li><a href="#" onClick="filter('all');" class="ui-btn-active ui-state-persist roundright">All</a></li>
        </ul>
</div>

<?php include("include/program/posters.php"); ?>

<?php include ("include/footer.php"); ?>

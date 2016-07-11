<?php
    $page_title="Conference Program";
    include("include/header.php");
?>

<h1>Conference Program</h1>

<div id="prog_ctrl" data-role="navbar">
        <ul>
                <li><a href="#" onClick="filter('monday');" class="roundleft">Monday</a></li>
                <li><a href="#" onClick="filter('tuesday');">Tuesday</a></li>
                <li><a href="#" onClick="filter('wednesday');">Wednesday</a></li>
                <li><a href="#" onClick="filter('thursday');">Thursday</a></li>
                <li><a href="#" onClick="filter('all');" class="ui-btn-active ui-state-persist roundright">All</a></li>
        </ul>
</div>

<?php include("include/program/sigcomm.php"); ?>

<?php include ("include/footer.php"); ?>

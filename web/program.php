<?php
    $page_title="Conference Program";

    $og_tags_page = array ("og:description" => "<meta property=\"og:description\" content=\"We are delighted to announce the ACM SIGCOMM 2016 main conference program. ".
                                               "It includes a technical program featuring 39 full-length papers, social events, and more!\" />");

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

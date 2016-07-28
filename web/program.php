<?php
    $page_title="Conference Program";

    $og_tags_page = array ("og:description" => "<meta property=\"og:description\" content=\"We are delighted to announce the ACM SIGCOMM 2016 main conference program. ".
                                               "It includes a technical program featuring 39 full-length papers, social events, and more!\" />");

    include("include/header.php");
?>

<h1>Conference Program</h1>

<p>Kindly note that the schedule below is tentative and subject to updates. You may also subscribe to the <a href="https://calendar.google.com/calendar/embed?title=ACM%20SIGCOMM%20Agenda&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=fgkdoih822v80dfk304pt56fjo%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FSao_Paulo">SIGCOMM conference schedule</a> on Google calendar.</p>

<p>&nbsp;</p>

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

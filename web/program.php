<?php
    $page_title="Conference Program";
    include("include/header.php");
?>

<h1>Conference Program</h1>

<div id="prog_ctrl" data-role="navbar">
        <ul>
                <li><a href="#" onClick="filterProgram('.prog-monday');" class="roundleft">Monday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-tuesday');">Tuesday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-wednesday');">Wednesday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-thursday');">Thursday</a></li>
                <li><a href="#" onClick="filterProgram('.prog-all');" class="ui-btn-active ui-state-persist roundright">All</a></li>
        </ul>
</div>

<div id="program">

<?php include("include/program/sigcomm.php"); ?>

</div>

<?php include ("include/footer.php"); ?>

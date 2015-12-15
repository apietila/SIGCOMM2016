<?php
    $page_title="Program Committee";
    include("include/header.php");
?>
<h1>Program Committee</h1>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Program Committee Chairs</li>
  <?php
	add_listitem("Amin Vahdat", "UCSD and Google, USA", "http://cseweb.ucsd.edu/~vahdat/");
	add_listitem("Sachin Katti", "Stanford University, USA", "http://stanford.edu/~skatti/");
  ?>
  <!--
  <li data-role="list-divider">Program Committee Members</li>
  <?php
  ?>
-->
</ul>

<?php include ("include/footer.php"); ?>
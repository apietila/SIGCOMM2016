<?php
    $page_title="ACM SIGCOMM 2016";
    include("include/header.php");
?>

<h1>Welcome to Salvador</h1>

<p>The organizing committee is delighted to invite you to ACM SIGCOMM 2016, to be held in Salvador, Brazil, in August, 2016.</p>

<p>SIGCOMM is the flagship annual conference of the ACM Special Interest Group on Data Communication (SIGCOMM) on the applications, technologies, architectures, and protocols for computer communication.</p>

<h2>News</h2>
<ul data-role="listview" data-inset="true" data-theme="a" class="datetbl">
<?php
      include("include/news.php");
?>
</ul>

<script>
$(".newslibtn").siblings().slice(6).hide();
</script>

<h2>Important Dates</h2>

<ul data-role="listview" data-inset=true data-theme="a" class="datetbl">
<?php
      include("include/dates.php");
?>
</ul>

<h2>Sponsors</h2>
<a href="//www.acm.org/"><img src="images/acm.png" alt="Association for Computing Machinery" class="sponsor"/></a>
<a href="//www.sigcomm.org/"><img src="images/sig.png" alt="ACM SIGCOMM" class="sponsor"/></a>
<br/>

<?php
    include ("include/footer.php");
?>
<?php
    $page_title="ACM SIGCOMM Student Research Competition";
    include("include/header.php");
?>

<h1>ACM Student Research Competition (SRC)</h1>

<h2>Winners</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">1 &mdash; Anne Edmundson (Princeton University)</li>
    <li data-icon="false"><p><b>A First Look into Transnational Routing Detours</b></p></li>
</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">2 &mdash; Rachee Singh (UMass Amerhest)</li>
    <li data-icon="false"><p><b>PathCache: A Path Prediction Toolkit</b></p></li>
</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">3 &mdash; Elverton Fazzion (Universidade Federal de Minas Gerais)</li>
    <li data-icon="false"><p><b>Efficient Remapping of Internet Routing Events</b></p></li>
</ul>

<h2>Judges</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
<?php
    add_listitem("Ana Paula Silva", "UFMG", "");
    add_listitem("Antonio Rocha", "UFF", "");
    add_listitem("Hakim Weatherspoon", "Cornell", "");
    add_listitem("Nick Feamster", "Princeton", "");
    add_listitem("Pablo Rodriguez", "Telefonica", "");
    add_listitem("Robert Ricci", "University of Utah", "");
    add_listitem("Rosa Le&atilde;o", "UFRJ", "");
    add_listitem("Thierry Turletti", "INRIA", "");
    add_listitem("Timur Friedman", "UPMC", "");
    add_listitem("Sergey Gorinsky", "IMDEA Networks", "");
?>
</ul>

<h2>Introduction</h2>

<p>The SIGCOMM poster and demo sessions will also serve as an <a href="http://src.acm.org/index.html">ACM Student Research Competition</a>. Qualified entrants must have current ACM student membership, have graduate or undergraduate student status at the time of submission (May 2016), and be the only student working on the project. If a graduate student is part of a group research project and wishes to participate in an SRC, they can submit and present their individual contribution to the group research project. Following the same spirit, in case of demo submissions, the student contributions should be clearly defined.</p>

<p>While not mandatory, entrants are encouraged to submit a letter from their advisor describing the specific contributions made by the student. Undergraduates and graduate students will be treated in separate divisions (students starting their first year of graduate school at the time of the conference will be considered as undergraduates). A small <a href="http://src.acm.org/students.html">travel supplement</a> is made available to accepted SRC entrants; please also submit <a href="travelgrants.php">applications for travel grant support</a>. Winners will advance to ACM Grand Finals of the Student Research Competition to compete against the winners of other ACM conferences. The SRC is sponsored by Microsoft Research.</p>

<h2>Sponsors</h2>

<div class="sponsors">
  <a href="http://www.microsoft.com"><img src="images/sponsors/microsoft.jpeg" alt="Microsoft" style="width: 260px;"/></a>
</div>

<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Student Research Competition Chairs</li>
  <?php
     add_listitem("Marco Canini", "KAUST, KSA", "http://perso.uclouvain.be/marco.canini/");
     add_listitem("Daniel R Figueiredo", "UFRJ, Brazil", "http://www.land.ufrj.br/~daniel/");
  ?>

</ul>

<?php include ("include/footer.php"); ?>

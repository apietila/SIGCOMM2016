<?php
    $page_title="Accepted Workshop Proposals";
    include("include/header.php");
?>

<h1>Accepted Workshop Proposals</h1>

<p>
	We are delighted to announce the list of accepted workshop proposals:
</p>

<h2><a class="headlink" href="gaia.php">Global Access to the Internet for All (GAIA)</a></h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Arjuna Sathiaseelan", "U. of Cambridge, UK", "https://www.cl.cam.ac.uk/~as2330/");
     add_listitem("J&ouml;rg Ott", "Technische Universit&auml;t M&uuml;nchen, Germany", "http://www.cm.in.tum.de/");
  ?>
</ul>

<h2><a class="headlink" href="hotmiddlebox.php">Hot Topics in Middleboxes and Network Function Virtualization (HotMiddlebox)</a></h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Dongsu Han", "KAIST, Korea", "http://ina.kaist.ac.kr/~dongsuh/");
     add_listitem("Danny Raz", "Bell Labs &amp; Technion, Israel", "http://www.cs.technion.ac.il/~danny/");
  ?>
</ul>

<h2><a class="headlink" href="qoe.php">QoE-based Analysis and Management of Data Communication Networks (Internet-QoE)</a></h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Pedro Casas", "Austrian Institute of Technology, Austria", "http://userver.ftw.at/~pcasas/");
     add_listitem("Fabi&aacute;n Bustamante", "Northwestern University, USA", "http://www.cs.northwestern.edu/~fabianb/");
     add_listitem("Mart&iacute;n Varela", "VTT Technical Research Centre, Finland", "http://www.cnl.fi/mvarela/");
     add_listitem("David Choffnes", "Northeastern University, USA", "http://www.ccs.neu.edu/people/faculty/member/choffnes/");
  ?>
</ul>

<h2><a class="headlink" href="lancomm.php">Fostering Latin-American Research in Data Communication Networks (LANCOMM)</a></h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Rosa M Le&#227;o", "UFRJ, Brazil", "http://www.cos.ufrj.br/index.php/en/corpo-docente-informacoes/details/23/1050");
     add_listitem("Fernando Paganini", "Universidad ORT Uruguay, Uruguay", "http://fi.ort.edu.uy/6491/17/fernando_paganini.html");
     add_listitem("Javier Bustos-Jim&eacute;nez", "Universidad de Chile &amp; NICLabs, Chile", "http://users.dcc.uchile.cl/~jbustos/");
     add_listitem("J. Ignacio Alvarez-Hamelin", "Universidad de Buenos Aires, Argentina", "http://cnet.fi.uba.ar/ignacio.alvarez-hamelin/");
     add_listitem("Pedro Casas", "Austrian Institute of Technology &amp; Grupo ARTES, Austria &amp; Uruguay", "http://userver.ftw.at/~pcasas/");
  ?>
</ul>

<h2><a class="headlink" href="netpl.php">Networking and Programming Languages (NetPL)</a></h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Marco Canini", "Universit&#233; Catholique de Louvain, Belgium", "http://perso.uclouvain.be/marco.canini/");
     add_listitem("Arjun Guha", "University of Massachusetts Amherst, USA", "https://people.cs.umass.edu/~arjun/home/");
     add_listitem("Robert Soul&eacute;", "Universit&agrave; della Svizzera italiana (USI), Switzerland", "http://www.inf.usi.ch/faculty/soule/");
     add_listitem("Nik Sultana", "U. of Cambridge, UK", "http://www.cl.cam.ac.uk/~ns441/");
  ?>
</ul>

<?php include ("include/footer.php"); ?>

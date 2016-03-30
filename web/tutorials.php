<?php
    $page_title="Accepted Tutorials";
    include("include/header.php");
?>

<h1>Accepted Tutorials</h1>

<p>
  We are delighted to announce the list of accepted tutorials:
</p>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Enabling Research in Future Wireless and Mobile Networks</li>
  <?php
     add_listitem("Jacobus Van der Merwe", "University of Utah, USA", "https://www.cs.utah.edu/~kobus/");
     add_listitem("Robert Ricci", "University of Utah, USA", "http://www.flux.utah.edu/users/ricci/");
     add_listitem("Kirk Webb", "University of Utah, USA", "http://www.flux.utah.edu/~kwebb/");
     add_listitem("", "", "");
  ?>
<!--</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">-->
  <li data-role="list-divider">Internet Measurements: A Hands-on Introduction</li>
  <?php
     add_listitem("Renata Teixeira", "INRIA, France", "https://who.rocq.inria.fr/Renata.Teixeira/");
     add_listitem("Timur Friedman", "UPMC Sorbonne, France", "http://www-npa.lip6.fr/~timur/");
     add_listitem("Anna-Kaisa Pietilainen", "INRIA, France", "https://muse.inria.fr/~apietila/");
     add_listitem("", "", "");
  ?>
<!--</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">-->
  <li data-role="list-divider">IPTV and over-the-Top Video: Managed and Unmanaged Video Delivery</li>
  <?php
     add_listitem("Ali Begen", "MediaMelon Inc, USA", "http://www.employees.org/~acbegen/index.php");
     add_listitem("", "", "");
  ?>
<!--</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">-->
  <li data-role="list-divider">NFV, SDN, and their Role in 5G</li>
  <?php
     add_listitem("Katia Obraczka", "UC Santa Cruz, USA", "https://www.soe.ucsc.edu/people/katia");
     add_listitem("Christian Rothenberg", "UNICAMP, Brazil", "http://www.dca.fee.unicamp.br/~chesteve/");
     add_listitem("Ahmad Rostami", "Ericsson Research, Sweden", "");
     add_listitem("", "", "");
  ?>
<!--</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">-->
  <li data-role="list-divider">P4: Programming the Network Dataplane</li>
  <?php
     add_listitem("Changhoon Kim", "Barefoot Networks, USA", "");
     add_listitem("Mihai Budiu", "Barefoot Networks, USA", "");
     add_listitem("Antonin Bas", "Barefoot Networks, USA", "");
     add_listitem("Vladimir Gurevich", "Barefoot Networks, USA", "");
  ?>
</ul>

<?php include ("include/footer.php"); ?>

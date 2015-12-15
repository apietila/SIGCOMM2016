<?php
    $page_title="Organization Committee";
    include("include/header.php");
?>
<h1>Organization Committee</h1>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">General Chairs</li>
  <?php
     add_listitem("Marinho P Barcellos", "UFRGS, Brazil", "http://www.inf.ufrgs.br/~marinho/");
     add_listitem("Jon Crowcroft", "U. of Cambridge, UK", "http://www.cl.cam.ac.uk/~jac22/");
  ?>
	
  <li data-role="list-divider">Local Arrangements Chairs</li>
  <?php
     add_listitem("Fab&#237;ola Greve", "UFBA, Brazil", "http://homes.dcc.ufba.br/~fabiola/");
     add_listitem("Leobino Sampaio", "UFBA, Brazil", "");
  ?>
	
  <li data-role="list-divider">Workshop Chairs</li>
  <?php
     add_listitem("Jussara Almeida","UFMG, Brazil", "http://homepages.dcc.ufmg.br/~jussara/");
     add_listitem("Lars Eggert", "Netapp, Germany", "https://eggert.org/");
   ?>

  <li data-role="list-divider">Poster Chairs</li>
  <?php
     add_listitem("Marco Canini", "Universit&#233; Catholique de Louvain, Belgium", "http://perso.uclouvain.be/marco.canini/");
     add_listitem("Daniel R Figueiredo", "UFRJ, Brazil", "http://www.land.ufrj.br/~daniel/");
  ?>
  
  <li data-role="list-divider">Demo Chairs</li>
  <?php
     add_listitem("Pan Hui", "Hong Kong U. of Science and Technology, Hong Kong", "https://www.cse.ust.hk/~panhui/");
     add_listitem("Christian E Rothenberg", "UNICAMP, Brazil", "http://www.dca.fee.unicamp.br/~chesteve/");
  ?>
	
  <li data-role="list-divider">Tutorial Chair</li>
  <?php
     add_listitem("Raj Jain", "Washington University in St. Louis, USA", "http://www.cse.wustl.edu/~jain/");
   ?>

  <li data-role="list-divider">Publicity Chairs</li>
  <?php
     add_listitem("Ronaldo A Ferreira", "UFMS, Brazil", "http://www.dct.ufms.br/~raf/");
     add_listitem("Hamed Haddadi", "Queen Mary U. of London, UK", "http://www.eecs.qmul.ac.uk/~hamed/");
   ?>

  <li data-role="list-divider">Publication Chairs</li>
   <?php
     add_listitem("Aakanksha Chowdhery", "Microsoft Research, USA", "http://research.microsoft.com/en-us/um/people/ac/");
     add_listitem("Matteo Varvello", "Telefonica, Spain", "http://www.tid.es/research/researchers/matteo-varvello");
   ?>

  <li data-role="list-divider">Registration Chair</li>
  <?php
     add_listitem("Sharon Goldberg", "Boston University, USA", "http://www.cs.bu.edu/~goldbe/");
   ?>

  <li data-role="list-divider">Travel Grant Chairs</li>
  <?php
     add_listitem("Phillipa Gill", "Stony Brook University, USA", "http://www3.cs.stonybrook.edu/~phillipa/");
     add_listitem("Lisandro Z Granville", "UFRGS, Brazil", "http://www.inf.ufrgs.br/~granville/");
     add_listitem("Sue Moon", "KAIST , Korea", "http://an.kaist.ac.kr/~sbmoon/");
     add_listitem("Costin Raiciu", "University Politehnica of Bucharest, Romania", "http://nets.cs.pub.ro/~costin/")
  ?>

  <li data-role="list-divider">Treasurer</li>
  <?php
     add_listitem("Christophe Diot", "Technicolor, France", "http://www.technicolor.com/en/christophe-diot");
  ?>
 
  <li data-role="list-divider">Web Chairs</li>
  <?php
     add_listitem("Weverton Cordeiro", "UFRGS, Brazil", "http://www.inf.ufrgs.br/~wlccordeiro/");
     add_listitem("Anna-Kaisa Pietilainen", "Inria, France", "https://muse.inria.fr/~apietila/");
  ?>

  <li data-role="list-divider">Conference Coordinator</li>
  <?php
     add_listitem("Yashar Ganjali", "U. of Toronto, Canada", "http://www.cs.toronto.edu/~yganjali/");
  ?>
    
</ul>

<?php include ("include/footer.php"); ?>

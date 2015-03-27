<?php
        $page_title="Organization Committee";
        include("include/header.php");
?>

<h1>Organization Committee</h1>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">General Chairs</li>
  <?php
     add_listitem("Jon Crowcroft", "U. of Cambridge, UK", "http://www.cl.cam.ac.uk/~jac22/");
     add_listitem("Marinho P Barcellos", "UFRGS, Brazil", "http://www.inf.ufrgs.br/~marinho/");
  ?>
	
  <li data-role="list-divider">Local Arrangements Chairs</li>
  <?php
     add_listitem("Fabiola Greve", "UFBA, Brazil", "http://homes.dcc.ufba.br/~fabiola/");
     add_listitem("Rosa Maria Meri Leão", "UFRJ, Brazil", "");
  ?>
	
  <li data-role="list-divider">Workshop Chairs</li>
  <?php
     add_listitem("Lars Eggert", "Netapp", "https://eggert.org/");
     add_listitem("Jussara Almeida"," UFMG, Brazil", "http://homepages.dcc.ufmg.br/~jussara/");
   ?>

  <li data-role="list-divider">Poster Chairs</li>
  <?php
     add_listitem("Marco Canini", "Université Catholique de Louvain, Belgium", "http://www.uclouvain.be/marco.canini");
     add_listitem("Daniel Ratton Figueiredo", "UFRJ, Brazil", "http://www.land.ufrj.br/~daniel/");
  ?>
  
  <li data-role="list-divider">Demo Chairs</li>
  <?php
     add_listitem("Pan Hui", "The Hong Kong U. of Science and Technology David R. Choffnes", "https://www.cse.ust.hk/~panhui/");
     add_listitem("Christian E Rothenberg", "UNICAMP, Brazil", "http://www.dca.fee.unicamp.br/~chesteve/");
  ?>
	
  <li data-role="list-divider">Tutorial Chairs</li>
  <?php
     add_listitem("Raj Jain", "Washington University in St. Louis, USA", "http://www.cse.wustl.edu/~jain/");
   ?>

  <li data-role="list-divider">Publicity Chairs</li>
  <?php
     add_listitem("Hamed Haddadi", "Queen Mary U. of London, UK", "http://www.eecs.qmul.ac.uk/~hamed/");
     add_listitem("Ronaldo Ferreira", "UFMS (currently at Princeton, USA), Brazil", "http://www.dct.ufms.br/~raf/");
   ?>

  <li data-role="list-divider">Publication Chair</li>
  <?php
     add_listitem("Matteo Varvello", "Telefonica, Spain", "http://www.tid.es/research/researchers/matteo-varvello");
   ?>

  <li data-role="list-divider">Registration Chair</li>
  <?php
     add_listitem("Sharon Goldberg", "Boston University, USA", "http://www.cs.bu.edu/~goldbe/");
   ?>

  <li data-role="list-divider">Travel Grant Chairs</li>
  <?php
     add_listitem("Phillipa Gill", "Stony Brook University, USA", "http://www3.cs.stonybrook.edu/~phillipa/");
     add_listitem("Andrew Moore", "U. of Cambridge , UK", "http://www.cl.cam.ac.uk/~awm22/");
     add_listitem("Sue Moon", "KAIST , Korea", "http://an.kaist.ac.kr/~sbmoon/");
  ?>

  <li data-role="list-divider">Treasurer</li>
  <?php
     add_listitem("Christophe Diot", "Technicolor, France", "http://www.technicolor.com/en/christophe-diot");
  ?>
 
  <li data-role="list-divider">Web Chair</li>
  <?php
     add_listitem("Anna-Kaisa Pietilainen", "Inria, France", "");
   ?>
    
</ul>

<?php
    include ("include/footer.php");
?>

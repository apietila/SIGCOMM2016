<?php
    $page_title="ACM SIGCOMM Workshop on Hot Topics in Middleboxes and Network Function Virtualization (HotMiddlebox 2016)";
    include("include/header.php");
?>

<h1>ACM SIGCOMM Workshop on Hot Topics in Middleboxes and Network Function Virtualization (HotMiddlebox 2016)</h1>

<p>Co-located with ACM SIGCOMM'16, August 22-26, 2016, Salvador, Brazil.</p>

<h2>Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
    <?php // add_dateitem("December 21, 2015", "Call for papers published"); // publish once we get the pdf file ?>
    <?php add_dateitem("March 11, 2016", "Paper titles and abstracts due"); ?>
    <?php add_dateitem("March 18, 2016", "Complete paper submissions due"); ?>
    <?php add_dateitem("April 30, 2016", "Notification to authors"); ?>
    <?php add_dateitem("May 15, 2016", "Final papers due"); ?>
    <?php // add_dateitem("June, 2016", "Workshop program online"); ?>
    <?php // add_dateitem("August, 2016", "Workshop day"); ?>
</ul>

<!-- <h2>Technical Program</h2> -->

<!-- <?php include("include/program/todo.php"); ?> -->

<h2 id="cfp">Call for Papers</h2>

<p>
  Modern networks heavily rely on advanced network processing functions for a wide 
  spectrum of crucial functions ranging from security through traffic management, 
  all the way to Voice over IP (just to name few). Until recently, these network 
  functions were implemented in dedicated hardware "middleboxes" spread within 
  the network. However, the strive to reduce cost and increase agility is 
  motivating a major shift to a paradigm where software­based processing runs on 
  virtualized, shared platforms built on commodity hardware servers, switches, 
  and storage.
</p>

<p>
This trend towards virtualized middleboxes, called Network Function Virtualization, 
NFV, with the use of Software Defined Networks, SDN to control the network flows 
is gaining popularity in the telecommunication industry as well as in academia. 
Yet this paradigm shift is at a very early stage and many interesting questions 
remain open in this regard. The HotMiddlebox workshop will serve as an avenue to 
showcase and discuss ongoing work from both academic and industry efforts in 
this space and to identify key challenges and potential solutions, with 
the ultimate goal of providing a roadmap for practical deployment in 
operational networks.
</p>

<h3>Topics of Interest</h3>

<p>
We encourage the submission of work-in-progress papers in the area of (virtualized) 
middlebox design, implementation, measurement, management, deployment, as well as 
Internet architecture implications of middleboxes. We look for submissions of 
previously unpublished work on topics including, but not limited to, the following:  
</p>

<ul>
<li>Performance optimizations of network stacks on virtualized systems</li>
<li>Verification of unknown code running on shared middlebox platforms</li>
<li>Security issues regarding middleboxes</li>
<li>Extensible software stacks for rapid implementation of new middlebox functions</li>
<li>Mechanisms for migration of stateful middleboxes</li>
<li>Resource allocation mechanisms for shared/virtualized middlebox platforms</li>
<li>Integrating new software middleboxes into legacy networks</li>
<li>Backend storage/memory architectures for middleboxes</li>
<li>Management abstractions and policy language frameworks for middleboxes</li>
<li>Experiences and best-practices in deploying software-based middleboxes in operational
networks</li>
<li>Deployment and use of middleboxes in the cloud</li>
<li>Measurements of middleboxes in enterprise, ISP, and data center networks</li>
<li>Novel security, performance, and monitoring applications atop middleboxes</li>
<li>Challenges for policy verification in the context of middlebox services</li>
<li>Internet architecture implications of middleboxes</li>
</ul>

<h3 id="sub">Submissions</h3>

<p>Submission instructions will be added soon.</p>

<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Dongsu Han", "KAIST, Korea", "http://ina.kaist.ac.kr/~dongsuh/");
     add_listitem("Danny Raz", "Bell Labs &amp; Technion, Israel", "http://www.cs.technion.ac.il/~danny/");
  ?>
    
  <li data-role="list-divider">Technical Program Commitee</li>
  <?php
     add_listitem("Theophilus Benson", "Duke, USA", "https://users.cs.duke.edu/~tbenson/");
     add_listitem("Jon Crowcroft", "U. of Cambridge, UK", "http://www.cl.cam.ac.uk/~jac22/");
     add_listitem("Colin Dixon", "Brocade, USA", "http://colindixon.com");
     add_listitem("Vijay Gopalakrishnan", "AT&amp;T Labs Research, USA", "http://www.research.att.com/people/Gopalakrishnan_Vijay/");
     add_listitem("Volker Hilt", "Bell Labs, Germany", "https://www.bell-labs.com/usr/volker.hilt");
     add_listitem("Felipe Huici", "NEC, Germany", "");
     add_listitem("JK Lee", "Barefoot Networks, USA", "");
     add_listitem("Boon Thau Loo", "UPenn, USA", "http://www.cis.upenn.edu/~boonloo/");
     add_listitem("Jitendra Padhye", "Microsoft Research, USA", "http://research.microsoft.com/en-us/um/people/padhye/");
     add_listitem("Costin Raiciu", "U. Politehnica of Bucharest, Romania", "http://nets.cs.pub.ro/~costin/");
     add_listitem("Michael Schapira", "Hebrew University of Jerusalem, Israel", "http://www.cs.huji.ac.il/~schapiram/");
     add_listitem("Noa Zilberman", "Cambridge University, UK", "http://www.cl.cam.ac.uk/~nz247/");
  ?>

  <li data-role="list-divider">Steering Committee</li>
  <?php
     add_listitem("Bob Birscoe", "BT, UK", "http://www.google.com");
     add_listitem("Christos Kolias", "Orange, USA", "http://www.google.com");
     add_listitem("Sylvia Ratnasamy", "UC Berkeley, USA", "http://www.google.com");
     add_listitem("Vyas Sekar", "CMU, USA", "http://www.google.com");
  ?>

</ul>

<?php include ("include/footer.php"); ?>
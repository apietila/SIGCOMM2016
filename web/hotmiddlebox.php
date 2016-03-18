<?php
    $page_title="ACM SIGCOMM Workshop on Hot Topics in Middleboxes and Network Function Virtualization (HotMiddlebox 2016)";
    include("include/header.php");
?>

<h1>ACM SIGCOMM Workshop on Hot Topics in Middleboxes and Network Function Virtualization (HotMiddlebox 2016)</h1>

<p>Co-located with ACM SIGCOMM'16, August 22-26, 2016, <s>Salvador</s> Florian&oacute;polis, Brazil.</p>

<h2>Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
    <?php add_dateitem("December 22, 2015", "Call for papers published"); ?>
    <?php add_dateitem("<s>March 18</s> March 25, 2016", "Paper registration deadline <span class=\"highlighttext\">(extended)</span>"); ?>
    <?php add_dateitem("<s>March 25</s> April, 1, 2016", "Paper submission deadline <span class=\"highlighttext\">(extended)</span>"); ?>
    <?php add_dateitem("April 30, 2016", "Notification"); ?>
    <?php add_dateitem("May 15, 2016", "Camera ready"); ?>
    <?php // add_dateitem("June, 2016", "Workshop program online"); ?>
    <?php add_dateitem("August 26, 2016", "Workshop day"); ?>
</ul>

<!-- <h2>Technical Program</h2> -->

<!-- <?php /* include("include/program/todo.php"); */ ?> -->

<h2>Call for Papers</h2>

<p>
  Modern networks heavily rely on advanced in network processing for a wide spectrum of crucial
functions ranging from security through traffic management, all the way to Voice over IP (just to
name few). Until recently, these network functions were implemented in dedicated hardware
&quot;middleboxes&quot; spread within the network. However, the strive to reduce cost and increase
agility is motivating a major shift to a paradigm where software-based
processing is done over
virtualized, shared platforms built on commodity hardware servers, switches, and storage.
</p>

<p>
This trend towards virtualized middleboxes, called Network Function Virtualization, NFV, with
the use of Software Defined Networks, SDN to control the network flows is gaining popularity in
the telecommunication industry as well as in academia. Yet, this paradigm shift is at a very
early stage and many interesting questions remain open in this regard. The HotMiddlebox
workshop will serve as an avenue to showcase and discuss ongoing work in this space from
both academia and industry and to identify key challenges and potential solutions, with the
ultimate goal of providing a roadmap for practical deployment in operational networks.
</p>

<h3>Topics of Interest</h3>

<p>We encourage the submission of work-in-progress
papers in the area of (virtualized) middlebox
design, implementation, measurement, management, deployment, as well as Internet
architecture implications of middleboxes. We look for submissions of previously unpublished
work on topics including, but not limited to, the following:</p>

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
<li>Experiences and best-practices in deploying software-based middleboxes in operational networks</li>
<li>Deployment and use of middleboxes in the cloud</li>
<li>Measurements of middleboxes in enterprise, ISP, and data center networks</li>
<li>Novel security, performance, and monitoring applications atop middleboxes</li>
<li>Challenges for policy verification in the context of middlebox services</li>
<li>Internet architecture implications of middleboxes</li>
</ul>

<h3 id="sub">Submission Instructions</h3>

Submissions must be original, unpublished work, not under consideration at another venue.
Each submission must be a single PDF file no longer than six (6) pages in length (in two-column,
10-point format) including references, following the provided <a href="doc/sig-alternate-10pt.cls" rel="external">LaTeX style file</a>.
Papers should be submitted electronically via the submission site. Papers must include the
author name and affiliation for single-blind peer reviewing by the program committee.
Please upload your submissions to <a href="https://hotmiddlebox16.hotcrp.com/">the workshop submission page</a>.
Accepted papers will be published in the ACM Digital Library. Publication at HotMiddlebox is not
intended to preclude later publication. Authors of accepted papers are expected to present their
papers at the workshop.

<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Dongsu Han", "KAIST, Korea", "http://ina.kaist.ac.kr/~dongsuh/");
     add_listitem("Danny Raz", "Bell Labs &amp; Technion, Israel", "http://www.cs.technion.ac.il/~danny/");
  ?>
    
  <li data-role="list-divider">Steering Committee</li>
  <?php
     add_listitem("Bob Birscoe", "BT, UK", "http://bobbriscoe.net/");
     add_listitem("Christos Kolias", "Orange, USA", "");
     add_listitem("Sylvia Ratnasamy", "UC Berkeley, USA", "https://www.eecs.berkeley.edu/~sylvia/");
     add_listitem("Vyas Sekar", "CMU, USA", "http://users.ece.cmu.edu/~vsekar/");
  ?>

  <li data-role="list-divider">Technical Program Commitee</li>
  <?php
     add_listitem("Theophilus Benson", "Duke University, USA", "https://users.cs.duke.edu/~tbenson/");
     add_listitem("Jeremy Blackburn", "Telefonica, Spain", "http://www.tid.es/research/researchers/j-blackburn");
     add_listitem("Jon Crowcroft", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~jac22/");
     add_listitem("Colin Dixon", "Brocade, USA", "http://colindixon.com");
     add_listitem("Vijay Gopalakrishnan", "AT&amp;T Labs Research, USA", "http://www.research.att.com/people/Gopalakrishnan_Vijay/");
     add_listitem("Volker Hilt", "Bell Labs, Germany", "https://www.bell-labs.com/usr/volker.hilt");
     add_listitem("Felipe Huici", "NEC, Germany", "");
     add_listitem("Hani Jamjoom", "IBM T. J. Watson Research Center, USA", "http://researcher.watson.ibm.com/researcher/view.php?person=us-jamjoom");  
     add_listitem("Keon Jang", "Intel Labs, USA", "");;
     add_listitem("Eric Keller", "University of Colorado Boulder, USA", "https://ngn.cs.colorado.edu/~ekeller/");
     add_listitem("Arvind Krishnamurthy", "University of Washington, USA", "http://www.cs.washington.edu/people/faculty/arvind"); 
     add_listitem("Jeongkeun Lee", "Barefoot Networks, USA", "");
     add_listitem("Boon Thau Loo", "UPenn, USA", "http://www.cis.upenn.edu/~boonloo/");
     add_listitem("Laurent Mathy", "University of Li&egrave;ge, Belgium", "http://www.montefiore.ulg.ac.be/personnel.php?op=detail&id=1099");
     add_listitem("Michele Nogueira", "Federal University of Paran&aacute;, Brazil", "http://www.nr2.ufpr.br/~michele/");
     add_listitem("Jitendra Padhye", "Microsoft Research, USA", "http://research.microsoft.com/en-us/um/people/padhye/");
     add_listitem("Costin Raiciu", "U. Politehnica of Bucharest, Romania", "http://nets.cs.pub.ro/~costin/");
     add_listitem("Michael Schapira", "Hebrew University of Jerusalem, Israel", "http://www.cs.huji.ac.il/~schapiram/");
     add_listitem("Ying Zhang", "Hewlett Packard Labs, USA", "http://www.labs.hpe.com/people/ying_zhang13/");
     add_listitem("Noa Zilberman", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~nz247/");
  ?>

</ul>

<a href="files/workshops/cfp-hotmiddlebox.pdf" rel="external" data-role="button" class="dl-button button">Download this call as a PDF</a>


<?php include ("include/footer.php"); ?>

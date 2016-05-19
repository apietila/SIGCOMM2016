<?php
    $page_title="ACM SIGCOMM Workshop on Networking and Programming Languages (NetPL 2016)";
    include("include/header.php");
?>

<h1>ACM SIGCOMM Workshop on Networking and Programming Languages (NetPL 2016)</h1>

<p>Co-located with ACM SIGCOMM'16, August 22-26, 2016, <s>Salvador</s> Florian&oacute;polis, Brazil.</p>

<h2>Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
    <?php add_dateitem("<s>April 29, 2016</s>", "<s>Deadline</s>"); ?>
    <?php add_dateitem("<s>May 9, 2016</s>", "<s>Speaker notified</s>"); ?>
    <?php add_dateitem("August 22, 2016", "Workshop day"); ?>
</ul>

<!-- <h2>Technical Program</h2> -->

<!-- <?php /* include("include/program/todo.php"); */ ?> -->

<h2>Call for Participation</h2>

<p>The NetPL workshop provides a forum to bring together researchers and
practitioners from the fields of programming languages, formal
methods, and networking.</p>

<p>Recent technological trends, such as Software-Defined Networking,
Network Functions Virtualization and reconfigurable networking
hardware, have created an opportunity for researchers in these
traditionally separate communities to collaborate, applying their
diverse perspectives towards the development of novel networking
applications. It is important to clarify that the scope of this
workshop goes strictly beyond SDN. We aim to enable language
specialists to better understand opportunities in networking, and
networking specialists to better understand opportunities enabled by
specially-designed languages.</p>

<p>The program will include invited talks from experts in the field,
with an emphasis on encouraging engaging technical discussions
amongst the participants.</p>

<!--<p>We are also soliciting contributions from prospective participants in
the form of talk proposals to broaden the research that is discussed
at the workshop. Each accepted talk will get a slot of up to 10 minutes.</p>-->

This is the second NetPL workshop, after
<a href="http://2015.ecoop.org/track/netpl-2015-workshop">last year's
workshop</a> at ECOOP. All talks in the previous edition of the workshop are on
<a href="https://www.youtube.com/channel/UCqU8E2n4MHthZUVb1xK2nRQ">YouTube</a>.

<!-- 
<h3>Topics of Interest</h3>

<p>We give no firm guidelines on topics (go wild but stay within scope!),
however we particularly seek talks that can provoke thought and
discussion.</p>

<h3>Submission Instructions</h3>

<p>Submit an abstract of at most 1 page length, which will be
lightly reviewed. No feedback will be given. Abstracts will not be
published. The submission site is <a href="https://netpl16.hotcrp.com/">https://netpl16.hotcrp.com/</a>.</p>
-->

<h2>NetPL Student Grants</h2>

<p>The NetPL 2016 workshop has limited support for funding students to
attend the workshop. Interested students can apply for a grant
complement through the <a href="travelgrants.php">SIGCOMM travel grants application</a>.</p>

<p>To apply, select the NetPL option during the application, and
motivate your reasons for attending and tell us how you may contribute
to the workshop in a separate section of the application letter.</p>

<h2>Invited Speakers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Confirmed Invited Speakers</li>
  <?php
     add_listitem("Nikolaj Bjorner", "Microsoft Research, USA", "http://research.microsoft.com/en-us/people/nbjorner/");
     add_listitem("Gordon Brebner", "Xilinx Labs, USA", "");
     add_listitem("Rodrigo Fonseca", "Brown University, USA", "http://cs.brown.edu/~rfonseca/");
     add_listitem("Nate Foster", "Cornell, USA", "http://www.cs.cornell.edu/~jnfoster/");
     add_listitem("Changhoon Kim", "Barefoot Networks, USA", "");
     add_listitem("Aurojit Panda", "UC Berkeley, USA", "https://www.eecs.berkeley.edu/~apanda/");
     add_listitem("Haoyu Song", "Huawei, USA", "");
     add_listitem("David Walker", "Princeton, USA", "http://www.cs.princeton.edu/~dpw/");
     add_listitem("Yinben Xia", "Huawei, China", "");
  ?>
</ul>

<h2>Sponsors</h2>

<div class="sponsors">
  <a href="http://www.huawei.com/"><img src="images/sponsors/huawei.png" alt="Huawei" style="width: 100px;"/></a>
  <a href="http://research.microsoft.com"><img src="images/sponsors/msr.png" alt="Microsoft Research" style="width: 260px;"/></a>
</div>

<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Marco Canini", "Universit&#233; Catholique de Louvain, Belgium", "http://perso.uclouvain.be/marco.canini/");
     add_listitem("Arjun Guha", "University of Massachusetts Amherst, USA", "https://people.cs.umass.edu/~arjun/home/");
     add_listitem("Robert Soul&eacute;", "Universit&agrave; della Svizzera italiana (USI), Switzerland", "http://www.inf.usi.ch/faculty/soule/");
     add_listitem("Nik Sultana", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~ns441/");
  ?>
</ul>

<a href="files/workshops/cfp-netpl.pdf" rel="external" data-role="button" class="dl-button button">Download this call as a PDF</a>

<!-- do not edit -->
<?php include ("include/footer.php"); ?>

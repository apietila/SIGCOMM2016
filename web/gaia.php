<?php
    $page_title="ACM SIGCOMM Global Access to the Internet for All (GAIA) Workshop";
    include("include/header.php");
?>

<h1>ACM SIGCOMM Global Access to the Internet for All (GAIA) Workshop</h1>

<p>Co-located with ACM SIGCOMM'16, August 22-26, 2016, Salvador, Brazil.</p>

<h2>Important Dates</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
    <?php add_dateitem("December 15, 2015", "Call for papers published"); ?>
    <?php add_dateitem("<s>March 11</s> March 15, 2016", "Paper registration deadline <font color=\"#ff0000\"><b>(extended)</b></font>"); ?>
    <?php add_dateitem("<s>March 18</s> March 28, 2016", "Paper submission deadline <font color=\"#ff0000\"><b>(extended)</b></font>"); ?>
    <?php add_dateitem("April 29, 2016", "Paper acceptance notification"); ?>
    <?php add_dateitem("Late May, 2016", "Camera-ready deadline"); ?>
    <?php // add_dateitem("June, 2016", "Workshop program online"); ?>
    <?php add_dateitem("August 26, 2016", "Workshop day"); ?>
</ul>

<!-- <h2>Technical Program</h2> -->

<!-- <?php /* include("include/program/todo.php"); */ ?> -->

<h2 id="cfp">Call for Papers</h2>

<p>
The Internet is now an all powerful medium - information has become pervasive, the entire digital economy relies on the Internet, new models for e-governance have emerged, and it runs the ever growing social networking platform which can even change governments.
</p>

<p>
On one end, we have the developed world where access is getting faster and services being developed to utilize faster access. On the other end, there are people who do not have access to the Internet at all. Some may not be able to get it due to lack of infrastructure support (which accounts to the notion of the digital divide problem faced by most people in developed countries). There have been significant initiatives to solve the problem of affordable infrastructure. Crucially, most of these approaches address infrastructural barriers without addressing economic ones. This problem can also be seen in developed countries where many individuals find themselves unable to pass a necessary credit check, or living in circumstances that are too unstable to commit to lengthy broadband contracts. Digital inclusion is important for social equality to ensure access to the many benefits the Internet offers.
</p>

<p>  
This workshop addresses the problem of digital exclusion through networking technology. It will address a range of research questions (feasibility, scalability, security, new privacy challenges, robustness, resource allocation, sustainability, performance etc.). It will create awareness on the technological solutions to digital exclusion and will help the research community to explore the above-mentioned challenges, understand requirements, the potential and the limits of solutions that have been proposed to address in this space. The workshop will overview the state of the art, detect gaps and determine a research roadmap to bridge these gaps.
</p>

<h3>Topics of Interest</h3>

<p>Topics of particular interest include, but are not limited to:</p>

<ul>
<li>Do-it-yourself (DIY) networking (such as community networks) for the developing world</li>
<li>Cost-efficient networked systems appropriate for use in underdeveloped areas</li>
<li>Fault-tolerant resilient networking technologies for the developing world</li>
<li>Rural/remote area wireless solutions (that can work efficiently with resource constraints such as intermittent and unreliable access to power/ networking service)</li>
<li>Simplified network management techniques (including support for heterogeneous service delivery through multiple solutions)</li>
<li>Using cognitive radio technology and 5G standards (with possible native integration of satellites) for GAIA</li>
<li>Techno-economic issues related to development (including development of flexible pricing and incentive structures as well as new spectrum access models for wireless)</li>
<li>Techno-political and cultural issues related to using communications for development</li>
<li>Using emerging networking architectures and future Internet architectures [e.g., cloud computing, fog computing, network functions virtualization (NFV), information-centric networking (ICN), software-defined networking (SDN), and delay-tolerant networking (DTN)] for development</li>
<li>Using wireless access/ distribution technologies (such as the following) for development: TV white spaces (TVWS); satellite communications using advances in geostationary orbit  (GEO) and low-earth orbit (LEO) satellites; low-cost community networks; cellular technologies (such as CDMA 450, the open-source OpenBTS, etc.); wireless mesh and sensor networks; Wi-Fi-Based Long-distance (WiLD) networks; and wireless based wireless regional access networks (WRANs)</li>
<li>Measurements of infrastructures in developing regions</li>
<li>Understanding Internet censorship and solutions to circumvent censorship</li>
</ul>

<h3 id="sub">Submission Instructions</h3>

<p>ACM SIGCOMM GAIA Workshop will consider only original papers that are not currently under review by other workshops, conferences, or journals, and have not been published. All papers submitted will be peer-reviewed (single-blind) and evaluated based on their suitability (i.e., within the workshop scope), novelty, and merit. Submitted papers are limited to 6 pages and should be submitted as a PDF file, including all figures and references.</p>

<p>All submissions should be formatted in standard ACM conference style for publication in the conference proceedings. They must be single-spaced, double-column, with each column 9.25" by 3.33", 0.33" space between columns, use at least a 10pt font, and be correctly formatted to be printed on letter-sized (8.5" by 11") paper. It is required that at least one author of each accepted paper register and attend the ACM SIGCOMM GAIA workshop to present their work to ensure its publication in the ACM SIGCOMM conference proceedings.</p>

<p>To submit your paper to ACM SIGCOMM GAIA Workshop, please visit the <a href="https://sigcomm-gaia16.hotcrp.com/">submission website</a>.</p>

<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Arjuna Sathiaseelan", "University of Cambridge, UK", "https://www.cl.cam.ac.uk/~as2330/");
     add_listitem("J&ouml;rg Ott", "Technische Universit&auml;t M&uuml;nchen, Germany", "http://www.cm.in.tum.de/");
  ?>

  <li data-role="list-divider">Technical Program Commitee</li>
  <?php
//     add_listitem("", "", "");
     add_listitem("Nabil Benemar", "Moulay Ismail University, Morocco", "http://nabilbenamar.ipv6-lab.net/?q=node/14");
     add_listitem("Saleem Bhatti", "University of St Andrews, UK", "https://saleem.host.cs.st-andrews.ac.uk/");
     add_listitem("Scott Burleigh", "JPL/NASA, USA", "");
     add_listitem("Jay Chen", "NYU, UAE", "https://cs.nyu.edu/~jchen/");
     add_listitem("Jon Crowcroft", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~jac22/");
     add_listitem("Nick Feamster", "Princeton University, USA", "http://www.cs.princeton.edu/~feamster/");
     add_listitem("Kannan Govindan", "Samsung Research, India", "https://sites.google.com/site/myucdaviswebsite/");
     add_listitem("Lisandro Z Granville", "UFRGS, Brazil", "http://www.inf.ufrgs.br/~granville/");
     add_listitem("Tristan Henderson", "University of St Andrews, UK", "https://tristan.host.cs.st-andrews.ac.uk/");
     add_listitem("Pan Hui", "Hong Kong U. of Science and Technology, Hong Kong", "https://www.cse.ust.hk/~panhui/");
     add_listitem("Heikki H&auml;mm&auml;inen", "Aalto University, Finland", "https://www.netlab.tkk.fi/u/hammaine/");
     add_listitem("David Johnson", "CSIR, South Africa", "http://ict4d.cs.uct.ac.za/user/47");
     add_listitem("Teemu K&auml;rkk&auml;inen", "Technische Universit&auml;t M&uuml;nchen, Germany", "");
     add_listitem("Anders Lindgren", "SICS, Sweden", "https://www.sics.se/people/anders-lindgren");
     add_listitem("Ant&ocirc;nio F Loureiro", "UFMG, Brazil", "http://homepages.dcc.ufmg.br/~loureiro/");
     add_listitem("Leandro Navarro", "UPC Barcelona, Spain", "http://people.ac.upc.edu/leandro/");
     add_listitem("Veljko Pejovic", "University of Ljubljana, Slovenia", "http://lrss.fri.uni-lj.si/Veljko/");
     add_listitem("Ermanno Pietrosemoli", "ICTP, Italy", "");
     add_listitem("Yiannis Psaras", "University College London, UK", "http://www.ee.ucl.ac.uk/~uceeips/");
     add_listitem("Barath Raghavan", "ICSI, Berkeley, USA", "http://www1.icsi.berkeley.edu/~barath/");
     add_listitem("Maneesha V Ramesh", "Amrita Institute, India", "https://www.amrita.edu/faculty/dr-maneesha-v-ramesh");
     add_listitem("Fernando Ramos", "University of Lisbon, Portugal", "http://fvramos.at.di.fc.ul.pt/");
     add_listitem("Narseo V Rodriguez", "ICSI, Berkeley, USA", "http://www1.icsi.berkeley.edu/~narseo/");
     add_listitem("Christian E Rothenberg", "UNICAMP, Brazil", "http://www.dca.fee.unicamp.br/~chesteve/");
     add_listitem("Nishanth Sastry", "KCL, UK", "http://www.kcl.ac.uk/nms/depts/informatics/people/atoz/sastryn.aspx");
     add_listitem("Aaditeshwar Seth", "IIT Delhi, India", "http://www.cse.iitd.ernet.in/~aseth/");
     add_listitem("Lakshmi Subramanian", "NYU, USA", "https://cs.nyu.edu/~lakshmi/");
     add_listitem("Dirk Trossen", "InterDigital Europe, UK", "http://dalore.me.uk/DOT/");
     add_listitem("Gareth Tyson", "Queen Mary University, UK", "http://www.eecs.qmul.ac.uk/~tysong/");
     add_listitem("Michael Welzl", "Oslo University, Norway", "https://heim.ifi.uio.no/michawe/");
     add_listitem("Adam Wolisz", "TUB, Germany", "http://www2.tkn.tu-berlin.de/~wolisz/wolisz.html");
     add_listitem("Marco Zennaro", "ICTP , Italy", "");
  ?>

</ul>

<a href="files/workshops/cfp-gaia.pdf" rel="external" data-role="button" class="dl-button button">Download this call as a PDF</a>

<?php include ("include/footer.php"); ?>
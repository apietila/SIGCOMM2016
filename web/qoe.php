<?php
    $page_title="ACM SIGCOMM Workshop on QoE-based Analysis and Management of Data Communication Networks (Internet-QoE 2016)";
    include("include/header.php");
?>

<h1>ACM SIGCOMM Workshop on QoE-based Analysis and Management of Data Communication Networks (Internet-QoE 2016)</h1>

<p>Co-located with ACM SIGCOMM'16, August 22-26, 2016, Salvador, Brazil.</p>

<!-- <h2>Technical Program</h2> -->

<!-- <?php include("include/program/todo.php"); ?> -->

<h2>Description</h2>

<p>
  Measuring and analyzing complex networks such as the Internet has been the focus of 
  many research efforts for over two decades now. While this approach has lead to an 
  improved understanding of the Internet and an enhancement of the management and 
  operation of large-scale complex networks, little has been done to understand and 
  manage the traffic and the network from a user-centric perspective. QoE remains 
  a poorly understood domain, currently restricted to small scale lab studies and 
  very far from the analysis of real large scale traffic measurements and networks. 
  Especially in the industry, QoE has become a buzz word, far from its reality within 
  the research community, and partly due to the complexity involved in deploying 
  QoE-based network analysis and management solutions.
</p>

<p>
In addition, network operators and service providers currently struggle to keep 
their increasingly demanding customers happy in an increasingly competitive and 
complex environment, while remaining profitable at the same time. The sheer development 
of novel end-user services demands more and better user-centric quality concepts and 
metrics applied to real world operational networks. We see current and future networks 
becoming more and more end-user experience aware, but there is still a long way to go 
to make of QoE one of the guiding paradigms for network design, management, and 
operation. As a first step, we need to better understand real networks and their 
traffic through the eyes of the end-user.
</p>

<p>
The goal of the Internet-QoE workshop is to scale QoE out of the lab studies context 
and bring it to the design, analysis and operation of real world networks and traffic. 
By fostering an explicit and deep integration of the end-user directly into the 
analysis and management of traffic and networks, we expect to reduce the gap between 
QoE research and its application to future network management paradigms, as well as 
to provide a more targeted end-user perspective to the research on Internet analysis 
and its future development.
</p>

<h3>Topics of Interest</h3>

<ul>
<li>QoE-aware networking</li>
<li>Internet measurements related to QoE</li>
<li>QoE characterization from Internet measurements</li>
<li>QoE metrics for smartphones &amp; mobile networks</li>  
<li>QoE-based traffic monitoring and troubleshooting</li>
<li>Novel algorithms to improve Internet QoE</li>
<li>QoE-based network management and analysis</li>
<li>QoS/QoE mapping, metrics and measurements in the large-scale</li>
<li>Application of QoE models and metrics to network and traffic analysis</li>
<li>Tools and techniques to gather QoE-related Internet measurements</li>
<li>Large-scale field trials shedding light on QoE aspects</li> 
<li>Qualitative measurements for Internet traffic analysis</li>
<li>SDN for QoE-based network management</li>
<li>QoE-based analysis of CDNs and Cloud networks</li>
<li>Large-scale network simulation for QoE analysis</li>
<li>Novel approaches for large-scale QoE crowd-sourcing</li>
</ul>


<h2>Organizers</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Workshop Co-Chairs</li>
  <?php
     add_listitem("Pedro Casas", "Austrian Institute of Technology, Austria", "http://userver.ftw.at/~pcasas/");
     add_listitem("Fabi&aacute;n Bustamante", "Northwestern University, USA", "http://www.cs.northwestern.edu/~fabianb/");
     add_listitem("Mart&iacute;n Varela", "VTT Technical Research Centre, Finland", "http://www.cnl.fi/mvarela/");
     add_listitem("David Choffnes", "Northeastern University, USA", "http://www.ccs.neu.edu/people/faculty/member/choffnes/");
  ?>
    
  <li data-role="list-divider">Program Commitee</li>
  <?php
     add_listitem("Rocky Chang", "The Hong Kong Polytechnic University, Hong Kong", "http://www4.comp.polyu.edu.hk/~csrchang/");
     add_listitem("Sebastian Egger", "Austrian Institute of Technology", "");
     add_listitem("Tobias Ho&szlig;feld", "University of Duisburg-Essen, Germany", "https://www.mas.wiwi.uni-due.de/en/team/tobias-hossfeld/");
     add_listitem("Lucjan Janowski", "AGH University of Science and Technology, Poland", "http://www.kt.agh.edu.pl/~janowski/");
     add_listitem("Patrick Le Callet", "Polytech Nantes, France", "http://www.irccyn.ec-nantes.fr/~lecallet/");
     add_listitem("Morley Mao", "University Michigan, US", "http://web.eecs.umich.edu/~zmao/");
     add_listitem("Maria Papadopouli", "University of Crete/ICS-FORTH, Greece", "http://users.ics.forth.gr/~mgp/");
     add_listitem("Peter Reichel", "University of Vienna, Austria", "https://cs.univie.ac.at//cosy/team/worker/infpers/Peter_Reichl");
     add_listitem("Raimund Schatz", "Telecommunications Research Center Vienna, Austria", "http://userver.ftw.at/~schatz/");
     add_listitem("Lea Skorin-Kapov", "University of Zagreb, Croatia", "http://www.fer.unizg.hr/ztel/en/research/research_groups/netmedia/people/lea_skorin-kapov");
     add_listitem("Florian Wamser", "University of W&uuml;rzburg, Germany", "http://www3.informatik.uni-wuerzburg.de/staff/florian.wamser/");
  ?>

</ul>

<?php include ("include/footer.php"); ?>

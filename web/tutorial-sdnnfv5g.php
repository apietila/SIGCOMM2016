<?php
    $page_title="Tutorial: SDN, NFV and Their Role in 5G";
    include("include/header.php");
?>

<h1>Half-Day Tutorial: SDN, NFV and Their Role in 5G</h1>

<h2>Presenters</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <?php
     add_listitem("Katia Obraczka", "UC Santa Cruz, USA", "https://www.soe.ucsc.edu/people/katia");
     add_listitem("Christian Rothenberg", "UNICAMP, Brazil", "http://www.dca.fee.unicamp.br/~chesteve/");
     add_listitem("Ahmad Rostami", "Ericsson Research, Sweden", "");
  ?>
</ul>

<h2>Location</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
  <li><p>Detailed location information will be released soon.</p></li>
</ul>

<h2>Tutorial Timetable</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
  <li><p>Detailed timetable will be released soon.</p></li>
</ul>

<h2>Summary</h2>

<p>This half-day lecture-format tutorial will explore software defined networking (SDN) and
network function virtualization (NFV) as enabling technologies for future 5G networks and
their applications. We will present notable architectures for SDN and NFV as well as their
synergy in the scope of future 5G network scenarios. We will also discuss challenges and
new research directions through several use cases.
The tutorial targets researchers and industry practitioners interested in understanding the
role of SDN and NFV as a pathway to 5G.</p>

<h2>Motivation</h2>

<p>Fifth generation mobile communication (5G) networks are planned to be commercially
available in a few years. 5G networks are expected to efficiently support a wide range of
applications, such as services based on machine-type communications (MTC) (e.g.,
intelligent transportation systems and highly-reliable low-latency industrial applications).
Supporting these new services requires, among other things, a flexible and programmable
infrastructure, which enables agile service composition and scaling in a cost- and resource
efficient
manner. SDN and NFV are promising technologies with the potential to fulfill the
flexibility and programmability requirements of 5G. While SDN separates the network
control- from the data plane and introduces abstractions and means for network
programmability, NFV decouples network functions from hardware appliances allowing the
realization of network functions on general-purpose processors (i.e., decoupling network
services from platforms). SDN and NFV are complementary approaches which combined
have the potential to foster opportunities for new ways to design, deploy, operate, and
manage networks and their services.</p>

<h2>Topics Covered</h2>

<p>A tentative schedule of what we plan to cover in the tutorial is listed below. We will select a subset of topics for presentation closer to the tutorial date. Type of session (lecture vs. hands-on) for each session is noted in parentheses.</p>

<ul>
  <li><b>Introduction to 5G</b>: we will present a brief overview of 5G including the reference
architecture, opportunities, and challenges.</li>

  <li><b>SDN &amp; NFV Concepts and their role in 5G</b>: We will present SDN and NFV concepts and
how they enable the vision of future 5G networks. Concepts such as network
programmability and abstractions as well as network slicing will be reviewed. In addition, we
will present the challenges of realizing NFV and SDN from the perspective of standard developing
organizations such as ETSI, ONF, and IETF.</li>

  <li><b>SDN &amp; NFV Enabling Technologies</b>: SDN technologies for the control- and data planes will
be presented.. Notable examples of APIs for network abstraction and programmability,
hardware acceleration, as well as NFV-enabling features such as service function chaining
and service personalization will be covered.</li>

  <li><b>Related Projects and Use Cases</b>: We will briefly overview SDN and NFV efforts that target
future 5G networks. We will also present use cases that can benefit from the synergy
between SDN and NFV including dynamic service chaining, such as virtualized
telecommunication services (e.g., vCPE, vIMS, vEPC) as well as mobile edge computing
(MEC) and NFV in radio access networks.</li>

  <li><b>Research Challenges and Future Directions</b>: In addition to the challenges in realizing 5G
networks, we will further discuss research challenges posed by SDN and NFV including
performance monitoring, scalability, management and orchestration, security, portability and
heterogeneous network support.</li>

</ul>


<h2>Expected Audience and Prerequisites</h2>

<p>The tutorial has no specific prerequisites and is geared to networking researchers and
practitioners.</p>

<h2>Biographies</h2>

<p><b>Katia Obraczka</b> received the B.S. and M.S. degrees in electrical and computer engineering
from the Federal University of Rio de Janeiro, Brazil, and the M.S. and Ph.D. degrees in
computer science from the University of Southern California (USC). She is currently
Professor of Computer Engineering at the University of California, Santa Cruz. Before joining
UCSC, she held a research scientist position at USC&#39;s Information Sciences Institute and a
joint faculty appointment at USC&#39;s Computer Science Department. Her research interests
include computer networks, more specifically, network protocol design and evaluation in
wireline- as well as wireless networks, distributed systems, and Internet information systems.
She has been a PI and a co-PI in a number of projects sponsored by government agencies
(NSF, DARPA, NASA) as well as industry. Dr. Obraczka has authored a large number of
technical papers in journals and conferences. She has been part of the organizing
committee of conferences such as IEEE Infocom, ACM Mobicom, ACM Mobihoc, IEEE
SECON, IEEE MASS, to name a few. She is a Fellow of the IEEE.</p>

<p><b>Ahmad Rostami</b> is a senior researcher at Ericsson Research, where he leads activities in
the area of programmable networks, and the orchestration across transport, radio and cloud
technology domains for 5G. Before joining Ericsson in 2014, he worked at the Technical
University of Berlin (TUB) as a senior researcher and lecturer. At the university, his areas of
research covered software defined networking (SDN) technologies. He holds a Ph.D. in
Communication Networks from TUB, and a M.Sc. in Electrical Engineering (Communication
Networks) from Tehran Polytechnic.</p>

<p><b>Christian Esteve Rothenberg</b> is an Assistant Professor at University of Campinas
(UNICAMP), where he received his Ph.D. in Electrical and Computer Engineering in 2010.
From 2010 to 2013, he worked as Senior Research Scientist in the areas of IP systems and
networking at CPqD R&amp;D Center in Telecommunications. At CPqD, he was technical lead of
R&amp;D acitivities in the field of OpenFlow/SDN such as RouteFlow, the OpenFlow 1.3
Ericsson/CPqD softswitch, and the liblfuid ONF Driver. He holds the Telecommunication
Engineering degree from the Technical University of Madrid (ETSIT - UPM), Spain, and the
M.Sc. (Dipl. Ing.) degree in Electrical Engineering and Information Technology from the
Darmstadt University of Technology (TUD), Germany, 2006. Christian has two international
patents and over 70 publications, including scientific journals and top-tier networking
conferences such as SIGCOMM and INFOCOM.</p>

<h2>References</h2>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref1">[1]</a></b> Nunes, B. A., Mendonca, M., Nguyen, X. N., Obraczka, K., &amp; Turletti, T. (2014). A survey of
software-defined networking: Past, present, and future of programmable networks. Communications Surveys &amp; Tutorials, IEEE, 16(3), 1617-1634.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref2">[2]</a></b> Kreutz, D., Ramos, F. M., Esteves Verissimo, P., Esteve Rothenberg, C., Azodolmolky, S., &amp;
Uhlig, S. (2015). Software-defined networking: A comprehensive survey. Proceedings of the IEEE, 103(1), 14-76.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref3">[3]</a></b> Li, Yong, and Min Chen. &quot;Software-Defined Network Function Virtualization: A
Survey.&quot; Access, IEEE 3 (2015): 2542-2553.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref4">[4]</a></b> Mijumbi, R., Serrat, J., Gorricho, J. L., Latr&eacute;, S., Charalambides, M., &amp; Lopez, D. (2016). Management and orchestration challenges in network functions virtualization. Communications Magazine, IEEE, 54(1), 98-105.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref5">[5]</a></b> Ericsson White paper, &quot;5G systems,&quot; 2015.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref6">[6]</a></b> Rostami, A., &quot;The Evolution of Programmable Networks: from Active Networks to Software
Defined Networks (SDN),&quot; Tutorial presented at 26th International Teletraffic Congress (ITC), 2014.</p>

<?php include ("include/footer.php"); ?>

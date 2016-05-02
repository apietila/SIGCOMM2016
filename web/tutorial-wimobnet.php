<?php
    $page_title="Tutorial: Enabling Research in Future Wireless and Mobile Networks";
    include("include/header.php");
?>

<h1>Full-day Tutorial: Enabling Research in Future Wireless and Mobile Networks</h1>

<h2>Friday, August 26th</h2>

<h2>Presenters</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <?php
     add_listitem("Kobus Van der Merwe", "University of Utah, USA", "https://www.cs.utah.edu/~kobus/");
     add_listitem("Robert Ricci", "University of Utah, USA", "http://www.flux.utah.edu/users/ricci/");
     add_listitem("Kirk Webb", "University of Utah, USA", "http://www.flux.utah.edu/~kwebb/");
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

<p>The primary aim of this tutorial is to foster and enhance research in mobile networking. Towards this end we will introduce attendees to core mobile networking concepts in both 4G and 5G, as well as enabling technologies that will form part of the expected future mobile architectures (5G), i.e., software-defined-networking (SDN), network-function-virtualization (NFV) and software-defined-radio (SDR). We will do this by combining lecturing with strong hands-on components, thus not only providing attendees with a deep understanding of the topics, but bootstrapping them with the tools to enable practical research in this domain.</p>

<p>The hands-on part of the tutorial will make use of the PhantomNet <b>[<a data-ajax="false" href="#ref2">2</a>]</b> mobile testbed at the University of Utah. PhantomNet allows (remote) users to dynamically compose mobile network components into a variety of mobile network configurations to enable research (and teaching). Specifically, the infrastructure supports off-the-shelf, SDR-based and emulated versions of radio access network (RAN) technology, it supports the realization of mobile core network elements on either dedicated hardware or virtualized version for NFV experimentation, it supports SDN and cloud functions and also has various network emulation components (e.g., configurable delay nodes).</p>

<h2>Motivation</h2>

<p>The development of various &quot;soft&quot; technologies, i.e., software defined networking, cloud computing, software defined radio, network function virtualization etc., are fundamentally changing the way we do networking. The increasing shift towards a mobile world (continued proliferation of mobile and wearable devices, growth in machine-to-machine (M2M) devices and communication and the emergence of Internet of Things (IoT), Tactile Internet and Smart Cities), suggests that future mobile and wireless networks specifically stand to benefit from exploiting these soft technologies. However, other than research efforts in wireless technologies, the mobile networking domain has historically not benefitted much from the attention of the broader research community, especially the academic research community. (For example, there has been a relative paucity of mobile networking related papers at SIGCOMM conferences, despite the fact that &quot;Wireless, mobile, ad-hoc, and sensor networks&quot; has been an area of interest on the SIGCOMM CFP for at least a decade.)</p>

<p>There are a number of reasons for this state of affairs. First, the mobile networking domain is inherently complicated and has historically been primarily driven by extensive standardization efforts by telecom vendors and providers. Second the relative scarcity of practical research work in this space is the direct result of a lack of access to realistic experimental platforms to enable research and experimentation. Third, historically there has been a lack of open source mobile networking stacks, which effectively constrained research in this space to well funded industrial labs.</p>

<p>We argue that mobile networking research is poised to break out of this traditional model: First, the impact on networking of the various &quot;soft&quot; technologies mentioned before is likely to extend into the mobile networking space. Second, initiatives by funding and regulatory agencies, e.g., by the FCC <b>[<a data-ajax="false" href="#ref3">3</a>]</b> and the NSF <b>[<a data-ajax="false" href="#ref1">1</a>]</b>, are attempting to enable more experimentation and innovation and the realization of new business models in the mobile networking space. Third, over the last couple of years, viable open source mobile networking stacks have emerged which enable experimental work in this space <b>[<a data-ajax="false" href="#ref6">6</a>, <a data-ajax="false" href="#ref4">4</a>]</b>. Finally, experimental testbeds focused on enabling research in the area of mobile networking are available <b>[<a data-ajax="false" href="#ref2">2</a>, <a data-ajax="false" href="#ref1">1</a>]</b>.</p>

<p>To help foster this breakout, in this tutorial we will: (i) familiarize attendees with core mobile networking concepts in both 4G and 5G, (ii) provide attendees with hands-on exposure to the enabling &quot;soft&quot; technologies that are expected to shape future mobile network architectures, (iii) introduce attendees to the PhantomNet mobile networking testbed <b>[<a data-ajax="false" href="#ref2">2</a>]</b> and (iv) use the testbed to give attendees a hands-on introduction to open source mobile networking stacks.</p>

<h2>Topics Covered</h2>

<p>A tentative schedule of what we plan to cover in the tutorial is listed below. We will select a subset of topics for presentation closer to the tutorial date. Type of session (lecture vs. hands-on) for each session is noted in parentheses.</p>

<ul>
  <li>Overview of mobile network architecture. (Lecture) We will describe the salient aspects of mobile networking. This will include exposition on the edge components (mobile devices), and the core network infrastructure (Evolved Packet Core).</li>

  <li>Overview of the PhantomNet mobile testbed. (Lecture) We will introduce the PhantomNet testbed describing key resources and capabilities.</li>

  <li>Create your own 4G mobile network. (Hands-on) Participants will leverage the resources of PhantomNet to create their own individual end-to-end 4G LTE/EPC network using open source (Open Air Interface) software.</li>

  <li>5G architecture and enabling technologies. (Lecture) We will provide an overview of current 5G architecture plans and enabling technologies.</li>

  <li>NFV-based Mobility-as-a-service. (Hand-on) Attendees will create their own mobility-as-a-service infrastructure using a basic network orchestrator and virtualized mobile network elements.</li>

  <li>Software defined networking (SDN) in mobile networking. (Lecture) We will present basics on software-defined-networking, including control and data plane concepts and discuss ways in which SDN can be incorporated into current and proposed mobile core networks.</li>

  <li>How to realize in-network offloading in a mobile network using SDN. (Hands-on) Attendees will set up a cloud-offloading experiment utilizing SDN, based on the SMORE offloading architecture <b>[<a data-ajax="false" href="#ref5">5</a>]</b>. This experiment will demonstrate how SDN can be used to seamlessly interpose on a mobile data bearer, and send portions of the data to nearby resources for better quality of service.</li>

  <li>Software-defined radio (SDR) and SDR in mobile networking. (Lecture) We will delve into how SDR enables the exploration of low-level radio access network ideas, and how such a setup can be combined with commodity mobile core networking elements.</li>

  <li>Roll your own radio access network protocol. (Hands-on) Attendees will allocate software defined radio resources in PhantomNet to produce a fully-functional end-to-end mobile network setup using Open Air Interface (OAI) software and USRP B210 hardware.</li>
</ul>


<h2>Expected Audience and Prerequisites</h2>

<p>For hands-on sessions, attendees will perform scripted exploration of pre-configured PhantomNet experiments to investigate the concepts being introduced. Tutorial attendees will be required to access PhantomNet from their own laptops using ssh and the web.</p>

<h2>Biographies</h2>

<p><b>Jacobus (Kobus) Van der Merwe</b> is the Jay Lepreau Professor in the School of Computing and co-director of the Flux Research Group at the University of Utah. He received a PhD from the Computer Laboratory at Cambridge University in England in 1998 and M. Eng and B. Eng degrees in electronic engineering from the University of Pretoria in South Africa in 1991 and 1989 respectively. He is the principal investigator for the PhantomNet mobile networking testbed.</p>

<p><b>Robert Ricci</b> is a Research Assistant Professor in the University of Utah&#39;s School of Computing and co-director of the Flux Research Group. His primary research interests are in the fields of operating systems and networking. He has been building environments for the evaluation of networked computer systems since 2000, starting with the Emulab testbed and now many of its follow-ups, including PhantomNet and CloudLab. He earned a PhD from the University of Utah in 2010, and an Honors BS in 2001.</p>

<p><b>Kirk Webb</b> is a Research Associate with the Flux Research Group at the University of Utah with 15+ years of research, development, and enterprise computing environment experience. Kirk is a key contributor to the PhantomNet mobile networking testbed. He helped develop and co-present a related tutorial at the IEEE CCNC conference. He also contributes heavily to other Flux Group projects, such as the Emulab network testbed and CloudLab.</p>

<h2>References</h2>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref1">[1]</a></b> 5G Wireless Network Research at NSF. <a rel="external" href="http://www.nsf.gov/cise/5G/">http://www.nsf.gov/cise/5G/</a>.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref2">[2]</a></b> PhantomNet - Mobility Testbed. <a rel="external" href="https://www.phantomnet.org/">https://www.phantomnet.org/</a>.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref3">[3]</a></b> Report and Order on Significant Changes to Experimental Rules. <a rel="external" href="https://www.fcc.gov/document/report-and-order-significant-changes-experimental-rules">https://www.fcc.gov/document/report-and-order-significant-changes-experimental-rules</a>.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref4">[4]</a></b> OpenLTE. <a rel="external" href="http://openlte.sourceforge.net/">http://openlte.sourceforge.net/</a>, 2015.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref5">[5]</a></b> Cho, J., Nguyen, B., Banerjee, A., Ricci, R., Van der Merwe, J., and Webb, K. SMORE: Software-defined Networking Mobile Offloading Architecture. In Proceedings of the 4th Workshop on All Things Cellular: Operations, Applications, &amp; Challenges (2014), AllThingsCellular &#39;14, pp. 21-26.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref6">[6]</a></b> Mobile Communications Department at EURECOM. OpenAirInterface. <a rel="external" href="http://www. openairinterface.org/">http://www. openairinterface.org/</a>, 2015.</p>

<?php include ("include/footer.php"); ?>

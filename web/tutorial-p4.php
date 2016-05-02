<?php
    $page_title="Tutorial: P4: Programming the Network Data Plane";
    include("include/header.php");
?>

<h1>Full-day Tutorial: P4: Programming the Network Data Plane</h1>

<h2>Friday, August 26th</h2>

<h2>Presenters</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <?php
     add_listitem("Changhoon Kim", "Barefoot Networks, USA", "");
     add_listitem("Mihai Budiu", "Barefoot Networks, USA", "");
     add_listitem("Antonin Bas", "Barefoot Networks, USA", "");
     add_listitem("Vladimir Gurevich", "Barefoot Networks, USA", "");
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

<h2>Motivations</h2>

<p>P4 (<a rel="external" href="//www.p4.org">www.p4.org</a>) was created as a common language to describe how packets should be processed by all manner of programmable packet-processing targets, from general-purpose CPUs, NPUs, FPGAs, and to high-performance programmable ASICs <b>[<a data-ajax="false" href="#ref1">1</a>]</b>. P4 was designed with three goals:</p>

<ol>
  <li><b>Protocol independence</b>: Network devices should not be tied to any specific network protocols.</li>
  <li><b>Target independence</b>: Programmers should be able to describe packet-processing functionality independently of the specifics of the underlying hardware.</li>
  <li><b>Re-configurability in the field</b>: Programmers should be able to change the way switches process packets once they are deployed.</li>
</ol>

<p>The P4 community has created &mdash; and continues to maintain and develop &mdash; a language specification, a set of open-source tools (compilers, debuggers, code analyzers, libraries, software P4 switches, etc.), and sample P4 programs with the goal of making it easy for P4 users to quickly and correctly author new data plane behaviors. New ideas are already being authored in P4, prototyped as new forwarding behaviors, and published at top networking conferences. Existing data plane features typically realized in a hard-wired logic are also being authored in P4.</p>

<p>We offered the first P4 tutorial last year at SIGCOMM (<a rel="external" href="http://conferences.sigcomm.org/sigcomm/2015/tutorial-p4.php">http://conferences.sigcomm.org/sigcomm/2015/tutorial-p4.php</a>), and more than 50 attendees actively participated in the full-day program &mdash; lectures, hands-on labs, and panel discussions. Following up on the successful reception of the previous event, we would like to give another full-day tutorial at SIGCOMM&#39;16.</p>

<p>There are a few reasons that we believe this second tutorial will be useful. First, like any other real languages, P4 has been gradually evolving. The language spec has been updated since last tutorial, incorporating constructs to embrace functional and architectural heterogeneity of various targets while keeping the language core simple and clean. The new spec also offers features to improve portability and composability of a P4 program, allowing P4 consumers and target providers to reuse their code. Second, the P4 development environment has also been evolving. The P4 community now has a more powerful compiler, along with an architecture-independent software P4 switch. Third, there are now several P4-programmable targets, including programmable NICs, high-end switching chips, and even software switches such as OVS <b>[<a data-ajax="false" href="#ref2">2</a>]</b> and eBPF <b>[<a data-ajax="false" href="#ref3">3</a>]</b>. Finally, P4 has become an increasingly popular choice for developing novel data plane designs. Examples include P4 programs that realize in-band network telemetry <b>[<a data-ajax="false" href="#ref3">4</a>]</b>, L4 connection load-balancing, path-condition-aware adaptive routing <b>[<a data-ajax="false" href="#ref3">5</a>]</b>, a better NetFlow <b>[<a data-ajax="false" href="#ref3">6</a>]</b>, and even Paxos <b>[<a data-ajax="false" href="#ref3">7</a>]</b>.</p>

<p>Hence, we intend to cover these updates in this second tutorial. The main goal of the tutorial is to enable attendees to use P4 in their research, to prototype their ideas and run them in programmable switches. We also aim to encourage researchers and developers to contribute to the P4 language, and develop new tools (e.g. compilers, debuggers, formal verification tools). Via a hands-on tutorial, we will teach attendees how to write functioning P4 programs to implement existing and new protocols, and to add new functionality in the forwarding plane. By the end of the tutorial attendees will be able to implement novel data plane features in P4, and evaluate their programs in a Mininet emulation framework.</p>

<h2>Outline of the Tutorial</h2>

<p>A full-day event comprised of the followings:</p>

<ul>
  <li>Lecture on P4 (2hr)</li>
  <li>Demonstration of existing and new networking features developed in P4 (1hr)</li>
  <li>Hands-on training of P4 development environment (compiler, debugger, behavioral model, h/w targets, etc.) (2.5hr)</li>
  <li>Mini-workshop (1.5hr)</li>
  <ul>
    <li>Exchanging P4-programming experiences for research &amp; teaching projects</li>
    <li>Panel discussing research topics regarding novel data plane protocols, programming models, and development environment</li>
  </ul>
</ul>

<h2>Expected Audience and Prerequisites</h2>

<p>The tutorial will be useful to researchers, students, and practitioners alike (engineers, network admins, network architects, and developers).</p>

<p>Attendees must bring their own laptops. We will provide a VM image containing all the necessary packages and tools.</p>

<p>The P4 spec is publicly available at <a rel="external" href="//www.p4.org">www.p4.org</a> under an Apache license. Key development tools (front-end compiler and s/w switch capable of running P4 programs) is available as open-source tools, available at <a rel="external" href="http://github.com/p4lang">http://github.com/p4lang</a>.</p>

<p>We have already given or will have given a shorter or longer version of this tutorial at various venues, including the P4 workshop, P4 Bootcamp,  ONS Webniar, etc. Hence, the organizers are experienced in the contents and materials.</p>

<h2>Speakers</h2>

<p><b>Lecturers</b>: Changhoon Kim, Vladimir Gurevich, and Mihai Budiu.</p>

<p><b>Hands-on trainers</b>: Antonin Bas, Vladimir Gurevich, and one or two more PhD students from Stanford.</p>

<p><b>Panelists for the mini workshop</b>: We are currently contacting people in academia, including Nate Foster (Cornell) and Minlan Yu (USC), as well as in industry.</p>

<h2>Biographies</h2>

<p><b>Changhoon Kim</b> is Director of System Architecture at Barefoot Networks and is chairing Language Design Working Group for the P4 Language Consortium (P4.org). Before joining Barefoot, he worked at Windows Azure, Microsoft&#39;s cloud-service division, and led engineering and research projects on the architecture, performance, management, and operation of datacenter and enterprise networks. Changhoon is interested in programmable network data plane, network monitoring and diagnostics, network verification, self-programming/configuring networks, and debugging and diagnosis of large-scale distributed systems. Changhoon received Ph.D. from Princeton University. Many of his R&amp;D contributions &mdash; including VL2, Seawall, EyeQ, Ananta, and SEATTLE &mdash; are adopted in large production networks.</p>

<p><b>Mihai Budiu</b> is a software engineer at Barefoot Networks where he focuses on the design and implementation of the P4 programming language and associated tools. Prior to Barefoot Mihai was a senior researcher at Microsoft Research in Silicon Valley, working on platforms for big data processing, large-scale machine learning and computer security. Mihai has a Ph.D. in computer science from Carnegie Mellon University.</p>

<p><b>Vladimir Gurevich </b> is a Technical Lead at Barefoot Networks. Prior to joining Barefoot Vladimir was a Technical Director at Broadcom, working on the architecture of Broadcom SDK and before that he was a Senior Manager leading the SW Applications Engineering team. He worked as a Software Developer at Cisco Systems and a number of other networking companies in Silicon Valley. Vladimir received his Masters degree in Applied Mathematics at Moscow Institute of Radio Engineering, Electronics and Automation (&#1052;&#1048;&#1056;&#1069;&#1040;).</p>

<h2>References</h2>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref1">[1]</a></b> Pat Bosshart, et al. &quot;P4: Programming protocol-independent packet processors,&quot; ACM SIGCOMM Computer Communication Review 44.3 (2014): 87-95.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref2">[2]</a></b> <a rel="external" href="http://p4.org/p4/p4-and-open-vswitch/">http://p4.org/p4/p4-and-open-vswitch/</a></p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref3">[3]</a></b> <a rel="external" href="https://github.com/blp/ovs-reviews/tree/p4">https://github.com/blp/ovs-reviews/tree/p4</a></p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref4">[4]</a></b> Changhoon Kim, et al. &quot;In-band Network Telemetry via Programmable Dataplanes,&quot; in the demo session at SIGCOMM 2015 and SOSR 2015.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref5">[5]</a></b> Naga Katta, et al. &quot;HULA: Scalable Load Balancing Using Programmable Data-Planes,&quot; Proceedings of the ACM SOSR, 2016.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref6">[6]</a></b> Yuliang Li, et al. &quot;FlowRadar: A Better NetFlow for Data Centers,&quot; to appear in NSDI 2016.</p>

<p style="padding-left: 2.5em; text-indent:-2.5em;"><b style="padding-right: 1em;"><a name="ref7">[7]</a></b> Huynh Tu Dang, et al. &quot;Paxos Made Switch-y,&quot; to appear in ACM SIGCOMM Computer Communication Review.</p>

<?php include ("include/footer.php"); ?>

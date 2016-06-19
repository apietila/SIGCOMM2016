<?php
    $page_title="Tutorial: Internet Measurements: A Hands-on Introduction";
    include("include/header.php");
?>

<h1>Full-Day Tutorial: Internet Measurements: A Hands-on Introduction</h1>

<h2>Monday, August 22nd</h2>

<h2>Location</h2>

<p>The tutorial will take place at Room Topazio 2.</p>

<h2>Presenters</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <?php
     add_listitem("Timur Friedman", "UPMC Sorbonne Universit&eacute;s, France", "http://www-npa.lip6.fr/~timur/");
     add_listitem("Anna-Kaisa Pietilainen", "Inria, France", "https://muse.inria.fr/~apietila/");
     add_listitem("Renata Teixeira", "Inria, France", "https://who.rocq.inria.fr/Renata.Teixeira/");
  ?>
</ul>

<h2>Tutorial Timetable</h2>
<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
  <?php add_dateitem("09:00 &mdash; 10:30", "Tutorial (first part)"); ?>
  <?php add_dateitem("10:30 &mdash; 11:00", "Coffee-break"); ?>
  <?php add_dateitem("11:00 &mdash; 12:30", "Tutorial (second part)"); ?>
  <?php add_dateitem("12:30 &mdash; 14:00", "Lunch break"); ?>
  <?php add_dateitem("14:00 &mdash; 15:30", "Tutorial (third part)"); ?>
  <?php add_dateitem("15:30 &mdash; 16:00", "Coffee-break"); ?>
  <?php add_dateitem("16:00 &mdash; 17:30", "Tutorial (fourth part)"); ?>
</ul>

<h2>Motivation</h2>

<p> The Internet is made up of a large set of networks, each one under the control of a different administrator, with no central plan for how they connect to each other. If we encounter poor network performance, we need to make measurements to figure out what is going wrong. Similarly, if we want to gain a scientific understanding of the network and its behavior, measurements are required. This tutorial looks at three areas of Internet measurements. In &quot;network topology and routes&quot;, we see how to measure the network's structure, and the paths that packets take. The section on &quot;connectivity, losses, and latency&quot; describes how to test whether two points in the network are connected, and to learn how much time it takes for packets to travel from one to the other. For &quot;bandwidth&quot;, we examine how we can determine the capacities of paths in the network, and how much capacity is available for users. This tutorial includes hands-on exercises, in which attendees measure from their own computers using the Fathom Firefox extension as well as from nodes in the PlanetLab Europe network, which is distributed around the Internet. An attendee following this tutorial will emerge with a good basic grounding in Internet measurement.</p>

<h2>Outline</h2>

<p>The tutorial will be divided in four parts:</p>

<ol>
  <b><li>General principles</li></b>
  <ol type="a">
    <li>Types of measurements</li>
    <li>Sound measurement practices</li>
    <li>Ethical issues</li>
    <li>Measurement platforms</li>
    <li>Lab: Introduction to PlanetLab Europe and Fathom</li>
  </ol>
  <br/>
  <b><li>Network topology and routes</li></b>
  <ol type="a">
    <li>BGP updates</li>
    <li>Traceroutes</li>
    <li>Lab</li>
  </ol>
  <br/>
  <b><li>Connectivity, losses, and latency</li></b>
  <ol type="a">
    <li>Ping</li>
    <li>Connectivity</li>
    <li>Losses</li>
    <li>Latency</li>
    <li>Lab</li>
  </ol>
  <br/>
  <b><li>Bandwidth</li></b>
  <ol type="a">
    <li>Definitions of bandwidth metrics</li>
    <li>End-to-end measurement approaches</li>
    <li>Flooding</li>
    <li>Advanced probing</li>
    <li>Lab</li>
  </ol>
</ol>

<h2>Expected Audience and Prerequisites</h2>

<p>The tutorial will be useful to researchers, students, and practitioners alike (engineers, network admins, developers of internet applications or services). As long as you have the sort of understanding of internet technology that would come from an advanced undergraduate course or a first Masters course in networking, you have the necessary background to take this course.</p>

<p>Attendees must bring their own laptops. We&#39;ll request that attendees install the Fathom Firefox extension beforehand. We will also create accounts in <a rel="external" href="http://planet-lab.eu/">PlanetLab Europe</a> for the attendees.</p>

<h2>Biographies</h2>

<p><b>Timur Friedman</b> is on faculty at UPMC Sorbonne Universit&eacute;s (LIP6 and LINCS laboratories), seconded 2014-2016 to Inria Paris. His principal area of research is network measurements. He conducts research in network measurements and heads the PlanetLab Europe testbed.</p>

<p><b>Anna-Kaisa Pietilainen</b> is a junior researcher at Inria Paris. Her research interests are in networked systems and applications, and network performance. She is the main developer of the <a href="https://muse.inria.fr/fathom/" rel="external">Fathom Firefox extension</a>.</p>

<p><b>Renata Teixeira</b> is a senior researcher at Inria Paris. Her research interests are in measurement, analysis, and management of data networks. Renata is currently vice-chair of ACM SIGCOMM and member of the steering committee of the ACM Internet Measurement Conference. She has over ten years of experience in research and teaching Internet routing and measurements.</p>

<p>Together, Renata Teixeira and Timur Friedman are co-authors of the Mooc &quot;<a href="https://www.fun-mooc.fr/courses/inria/41011/session01/about" rel="external">Internet Measurements: a Hands-on Introduction</a>&quot;, available on France Universit&eacute; Num&eacute;rique. They are also co-authors, along with other colleagues, of the Paris Traceroute measurement tool.</p>

<?php include ("include/footer.php"); ?>

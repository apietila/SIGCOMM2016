<?php
    $page_title="Awards";
    include("include/header.php");
?>

<h1>Awards</h1>

<h2>Best Paper Award Winners</h2>

  <div id="sigcomm-awards" class="sigcomm-program">
    <ul class="program" data-role="listview" data-filter="false" data-inset="true" data-theme="d" data-dividertheme="a">
<?php

      tprog_add_paper("paper-1", "Don't Mind the Gap: Bridging Network-wide Objectives and Device-level Configurations", "Ryan Beckett (Princeton University), Ratul Mahajan (Microsoft), Todd Millstein (University of California, Los Angeles), Jitendra Padhye (Microsoft), David Walker (Princeton University)", "We develop Propane, a language and compiler to help network operators with a challenging, error-prone task&mdash;bridging the gap between network-wide routing objectives and low-level configurations of devices that run complex, distributed protocols. The language allows operators to specify their objectives naturally, using high-level constraints on both the shape and relative preference of traffic paths. The compiler automatically translates these specifications to router-level BGP configurations, using an effective intermediate representation that compactly encodes the flow of routing information along policy-compliant paths. It guarantees that the compiled configurations correctly implement the specified policy under all possible combinations of failures. We show that Propane can effectively express the policies of datacenter and backbone networks of a large cloud provider; and despite its strong guarantees, our compiler scales to networks with hundreds or thousands of routers.", "http://dl.acm.org/ft_gateway.cfm?id=2934909", "", "", "");

      tprog_add_paper("paper-2", "Eliminating Channel Feedback in Next-Generation Cellular Networks", "Deepak Vasisht (MIT), Swarun Kumar (CMU), Hariharan Rahul (MIT), Dina Katabi (MIT)", "This paper focuses on a simple, yet fundamental question: ``Can a node infer the wireless channels on one frequency band by observing the channels on a different frequency band?'' This question arises in cellular networks, where the uplink and the downlink operate on different frequencies. Addressing this question is critical for the deployment of key 5G solutions such as massive MIMO, multi-user MIMO, and distributed MIMO, which require channel state information. We introduce R2-F2, a system that enables LTE base stations to infer the downlink channels to a client by observing the uplink channels from that client. By doing so, R2-F2 extends the concept of reciprocity to LTE cellular networks, where downlink and uplink transmissions occur on different frequency bands. It also removes a major hurdle for the deployment of 5G MIMO solutions. We have implemented R2-F2 in software radios and integrated it within the LTE OFDM physical layer. Our results show that the channels computed by R2-F2 deliver accurate MIMO beamforming (to within 0.7~dB of beamforming gains with ground truth channels) while eliminating channel feedback overhead.", "http://dl.acm.org/ft_gateway.cfm?id=2934895", "", "", "");

      tprog_add_paper("paper-3", "Inter-Technology Backscatter: Towards Internet Connectivity for Implanted Devices", "Vikram Iyer (University of Washington), Vamsi Talla (University of Washington), Bryce Kellogg (University of Washington), Shyamnath Gollakota (University of Washington), Joshua Smith (University of Washington)", "We introduce inter-technology backscatter, a novel approach that transforms wireless transmissions from one technology to another, on the air. Specifically, we show for the first time that Bluetooth transmissions can be used to create Wi-Fi and ZigBee-compatible signals using backscatter communication. Since Bluetooth, Wi-Fi and ZigBee radios are widely available, this approach enables a backscatter design that works using only commodity devices. We build prototype backscatter hardware using an FPGA and experiment with various Wi-Fi, Bluetooth and ZigBee devices. Our experiments show we can create 2--11~Mbps Wi-Fi standards-compliant signals by backscattering Bluetooth transmissions. To show the generality of our approach, we also demonstrate generation of standards-complaint ZigBee signals by backscattering Bluetooth transmissions. Finally, we build proof-of-concepts for previously infeasible applications including the first contact lens form-factor antenna prototype and an implantable neural recording interface that communicate directly with commodity devices such as smartphones and watches, thus enabling the vision of Internet connected implanted devices.", "http://dl.acm.org/ft_gateway.cfm?id=2934894", "", "", "");
      
?>
  </ul>
</div>

<h2>Test of Time Award Winners</h2>

    <ul class="program" data-role="listview" data-filter="false" data-inset="true" data-theme="d" data-dividertheme="a">
<?php
      tprog_add_paper("paper-4", "A First-Principles Approach to Understanding the Internet's Router-Level Topology (Proc. SIGCOMM 2004)", "Lun Li (California Institute of Technology), David Alderson (California Institute of Technology), Walter Willinger (California Institute of Technology), John Doyle (California Institute of Technology)", "A detailed understanding of the many facets of the Internet's topological structure is critical for evaluating the performance of networking protocols, for assessing the effectiveness of proposed techniques to protect the network from nefarious intrusions and attacks, or for developing improved designs for resource provisioning. Previous studies of topology have focused on interpreting measurements or on phenomenological descriptions and evaluation of graph-theoretic properties of topology generators. We propose a complementary approach of combining a more subtle use of statistics and graph theory with a first-principles theory of router-level topology that reflects practical constraints and tradeoffs. While there is an inevitable tradeoff between model complexity and fidelity, a challenge is to distill from the seemingly endless list of potentially relevant technological and economic issues the features that are most essential to a solid understanding of the intrinsic fundamentals of network topology. We claim that very simple models that incorporate hard technological constraints on router and link bandwidth and connectivity, together with abstract models of user demand and network performance, can successfully address this challenge and further resolve much of the confusion and controversy that has surrounded topology generation and evaluation.", "http://dl.acm.org/ft_gateway.cfm?id=1015470", "", "", "");
    
      tprog_add_paper("paper-5", "Link-Level Measurements from an 802.11b Mesh Network (Proc. SIGCOMM 2004)", "Daniel Aguayo (M.I.T. Computer Science and Artificial Intelligence Laboratory), John Bicket (M.I.T. Computer Science and Artificial Intelligence Laboratory), Sanjit Biswas (M.I.T. Computer Science and Artificial Intelligence Laboratory), Glenn Judd (Carnegie Mellon University), Robert Morris (M.I.T. Computer Science and Artificial Intelligence Laboratory)", "This paper analyzes the causes of packet loss in a 38-node urban multi-hop 802.11b network. The patterns and causes of loss are important in the design of routing and error-correction protocols, as well as in network planning.The paper makes the following observations. The distribution of inter-node loss rates is relatively uniform over the whole range of loss rates; there is no clear threshold separating &quot;in range&quot; and &quot;out of range.&quot; Most links have relatively stable loss rates from one second to the next, though a small minority have very bursty losses at that time scale. Signal-to-noise ratio and distance have little predictive value for loss rate. The large number of links with intermediate loss rates is probably due to multi-path fading rather than attenuation or interference.The phenomena discussed here are all well-known. The contributions of this paper are an understanding of their relative importance, of how they interact, and of the implications for MAC and routing protocol design.", "http://dl.acm.org/ft_gateway.cfm?id=1015482", "", "", "");
?>
  </ul>

<h2>SIGCOMM Dissertation Award</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">Coflow: A Networking Abstraction for Distributed Data-Parallel Applications</li>
    <li data-icon="false"><p>Mosharaf Chowdhury (Advisor: Ion Stoica, U.C. Berkeley)</p></li>
</ul>

<h2>ACM Student Research Competition Winners</h2>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">1 &mdash; Anne Edmundson (Princeton University)</li>
    <li data-icon="false"><p><b>A First Look into Transnational Routing Detours</b></p></li>
</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">2 &mdash; Rachee Singh (UMass Amherst)</li>
    <li data-icon="false"><p><b>PathCache: A Path Prediction Toolkit</b></p></li>
</ul>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">3 &mdash; Elverton Fazzion (Universidade Federal de Minas Gerais)</li>
    <li data-icon="false"><p><b>Efficient Remapping of Internet Routing Events</b></p></li>
</ul>

<?php include ("include/footer.php"); ?>

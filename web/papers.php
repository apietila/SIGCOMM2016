<?php
    $page_title="Accepted Papers";
    include("include/header.php");
?>

<h1>Accepted Papers</h1>

<p>
  We are delighted to announce the following list of accepted papers for ACM SIGCOMM 2016:
</p>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="paperlist">
  <li data-role="list-divider">ACM SIGCOMM 2016 Accepted Papers</li>
  <?php add_paperlistitem(
      "An Analysis of Traffic Policing in the Web", 
      "Tobias Flach (University of Southern California / Google), Pavlos Papageorge and Andreas Terzis (Google), Luis Pedrosa (University of Southern California), Yuchung Cheng and Tayeb Karim (Google), and Ethan Katz-Bassett and Ramesh Govindan (University of Southern California)")
  ?>
  <?php add_paperlistitem(
      "Top-down Network Management on a Massive Scale",
      "Eric Sung, Xiaozheng Tie, Starsky Wong, and Hongyi Zeng (Facebook)")
  ?>
  <?php add_paperlistitem(
    "OpenBox: A Software-Defined Framework for Developing, Deploying, and Managing Network Functions",
    "Anat Bremler-Barr (The Interdisciplinary Center, Herzliya, Israel) and Yotam Harchol and David Hay (The Hebrew University of Jerusalem, Israel)")
  ?>
  <?php add_paperlistitem(
    "Fast Control Plane Analysis Using an Abstract Representation",
    "Aaron Gember-Jacobson, Raajay Viswanathan, and Aditya Akella (University of Wisconsin-Madison) and Ratul Mahajan (Microsoft Research)")
  ?>
  <?php add_paperlistitem(
    "The Deforestation of L2",
    "James McCauley (UC Berkeley / ICSI), Mingjie Zhao (UESTC / ICSI), Ethan J. Jackson and Sylvia Ratnasamy (UC Berkeley), Barath Raghavan (ICSI), and Scott Shenker (UC Berkeley / ICSI)")
  ?>
  <?php add_paperlistitem(
    "2DFQ: Two-Dimensional Fair Queueing for Multi-Tenant Cloud Services",
    "Jonathan Mace (Brown University), Peter Bodik and Madanlal Musuvathi (Microsoft), Rodrigo Fonseca (Brown University), and Krishnan Varadarajan (Microsoft)")
  ?>
  <?php add_paperlistitem(
    "Trumpet: Timely and Precise Triggers in Data Centers",
    "Masoud Moshref, Minlan Yu, and Ramesh Govindan (University of Southern California) and Amin Vahdat (Google, inc)")
  ?>
  <?php add_paperlistitem(
    "CODA: Toward Automatically Identifying and Scheduling Coflows in the Dark",
    "Hong Zhang, Li Chen, Bairen Yi, and Kai Chen (Hong Kong University of Science and Technology), Mosharaf Chowdhury (University of Michigan), and Yanhui Geng (Huawei Noah's Ark Lab)")
  ?>
  <?php add_paperlistitem(
    "Scalable Symbolic Execution for Modern Networks",
    "Radu Stoenescu, Matei Popovici, Lorina Negreanu, and Costin Raiciu (University Politehnica of Bucharest)")
  ?>
  <?php add_paperlistitem(
    "WebPerf: Evaluating What-If Scenarios for Cloud-hosted Web Applications",
    "Yurong Jiang (University of Southern California), Suman Nath and Lenin Ravindranath Sivalingam (Microsoft Research), and Ramesh Govindan (University of Southern California)")
  ?>
  <?php add_paperlistitem(
    "Jumpstarting BGP Security with Path-End Validation",
    "Avichai Cohen (Hebrew University), Yossi Gilad (Boston University), Amir Herzberg (Bar Ilan University), and Michael Schapira (Hebrew University)")
  ?>
  <?php add_paperlistitem(
    "Taking the Blame Game out of Data Centers Operations with NetPoirot",
    "Behnaz Arzani (University of Pennsylvania), Selim Ciraci (Microsoft), Boon Thau Loo (University of Pennsylvania), Assaf Schuster (Technion - Israel Institute of Technology), and Geoff Outhred (Microsoft)")
  ?>
  <?php add_paperlistitem(
    "Globally Synchronized Time via Datacenter Networks",
    "Ki Suh Lee, Han Wang, Vishal Shrivastav, and Hakim Weatherspoon (Cornell University)")
  ?>
  <?php add_paperlistitem(
    "PISCES: A Programmable, Protocol-Independent Software Switch",
    "Muhammad Shahbaz (Princeton University), Sean Choi (Stanford University), Ben Pfaff (VMware), Changhoon Kim (Barefoot Networks), Nick Feamster (Princeton University), Nick McKeown (Stanford University), and Jennifer Rexford (Princeton University)")
  ?>
  <?php add_paperlistitem(
    "Dataplane Specialization for High-performance OpenFlow Software Switching",
    "L&aacute;szl&oacute; Moln&aacute;r, Gergely Pongr&aacute;cz, G&aacute;bor Enyedi, and Zolt&aacute;n Kis (TrafficLab, Ericsson Research, Hungary) and Levente Csikor, Ferenc Juh&aacute;sz, Attila K&ouml;r&ouml;si, and G&aacute;bor R&eacute;tv&aacute;ri (Department of Telecommunications and Media Informatics, Budapest University of Technology and Economics)")
  ?>
  <?php add_paperlistitem(
    "Scheduling Mix-flows in Commodity Datacenters with Karuna",
    "Li Chen, Kai Chen, and Wei Bai (Hong Kong University of Science and Technology) and Mohammad Alizadeh (MIT)")
  ?>
  <?php add_paperlistitem(
    "Hypervisor-based Algorithmic Virtualization of TCP Congestion Control",
    "Bryce Cronkite-Ratcliff (Stanford), Aran Bergman and Shay Vargaftik (Technion), Madhusudhan Ravi (VMware), Nick McKeown (Stanford), Ittai Abraham (VMware), and Isaac Keslassy (Technion and VMware)")
  ?>
  <?php add_paperlistitem(
    "NUMFabric: Fast and Flexible Bandwidth Allocation in Datacenters",
    "Kanthi Nagaraj and Dinesh Bharadia (Stanford University), Hongzi Mao (M.I.T), Sandeep Chinchali (Stanford University), Mohammad Alizadeh (M.I.T.), and Sachin Katti (Stanford University)")
  ?>
  <?php add_paperlistitem(
    "Evolve or Die: High-Availability Design Principles Drawn from Failures in a Global-Scale Content Provider",
    "Ramesh Govindan (Google, USC) and Ina Minei, Mahesh Kallahalla, Bikash Koley, and Amin Vahdat (Google)")
  ?>
  <?php add_paperlistitem(
    "SNAP: Stateful Network-Wide Abstractions for Packet Processing",
    "Mina Tahmasbi Arashloo and Yaron Koral (Princeton University), Michael Greenberg (Pomona College), and Jennifer Rexford and David Walker (Princeton University)")
  ?>
  <?php add_paperlistitem(
    "Dynamic Pricing and Traffic Engineering for Timely Inter-Datacenter Transfers",
    "Virajith Jalaparti (Microsoft), Ivan Bliznets (St. Petersburg Academic University), and Srikanth Kandula, Brendan Lucier, and Ishai Menache (Microsoft)")
  ?>
  <?php add_paperlistitem(
    "Bringing Backscatter Communication to Commodity Devices",
    "Vikram Iyer, Vamsi Talla, Bryce Kellogg, Shyamnath Gollakota, and Joshua Smith (University of Washington)")
  ?>
  <?php add_paperlistitem(
    "Eliminating Channel Feedback in Next-Generation Cellular Networks",
    "Deepak Vasisht (MIT), Swarun Kumar (CMU), and Hariharan Rahul and Dina Katabi (MIT)")
  ?>
  <?php add_paperlistitem(
    "Neutral Net Neutrality",
    "Yiannis Yiakoumis, Sachin Katti, and Nick McKeown (Stanford University)")
  ?>
  <?php add_paperlistitem(
    "ClickNP: Highly Flexible and High-performance Network Processing with Reconfigurable Hardware",
    "Bojie Li (USTC and Microsoft Research), Kun Tan (Microsoft Research), Layong (Larry) Luo (Microsoft), Yanqing Peng (SJTU and Microsoft Research), Renqian Luo (USTC and Microsoft Research), and Ningyi Xu, Yongqiang Xiong, and Peng Cheng (Microsoft Research)")
  ?>
  <?php add_paperlistitem(
    "CS2P: Improving Video Bitrate Selection and Adaptation with Data-Driven Throughput Prediction",
    "Yi Sun (ICT/CAS), Xiaoqi Yin, Junchen Jiang, and Vyas Sekar (CMU), Fuyuan Lin and Nanshu Wang (ICT/CAS), Tao Liu (iQIYI), and Bruno Sinopoli (CMU)")
  ?>
  <?php add_paperlistitem(
    "Programmable Packet Scheduling",
    "Anirudh Sivaraman and Suvinay Subramanian (MIT CSAIL), Anurag Agrawal (Barefoot Networks), Sharad Chole, Shang-Tse Chuang, and Tom Edsall (Cisco Systems), Mohammad Alizadeh (MIT CSAIL), Sachin Katti and Nick McKeown (Stanford University), and Hari Balakrishnan (MIT CSAIL)")
  ?>
  <?php add_paperlistitem(
    "Packet Transactions: High-level Programming for Line-Rate Switches",
    "Anirudh Sivaraman (MIT CSAIL), Mihai Budiu (Barefoot Networks), Alvin Cheung (University of Washington, Seattle), Changhoon Kim and Steve Licking (Barefoot Networks), George Varghese (Microsoft Research), Hari Balakrishnan and Mohammad Alizadeh (MIT CSAIL), and Nick McKeown (Stanford University)")
  ?>
  <?php add_paperlistitem(
    "Enabling Practical Backscatter Communication for On-body Sensors",
    "Pengyu Zhang, Mohammad Rostami, Pan Hu, and Deepak Ganesan (University of Massachusetts Amherst)")
  ?>
  <?php add_paperlistitem(
    "Braidio: An Integrated Active-Passive Radio for Mobile Devices with Asymmetric Energy Budgets",
    "Pan Hu, Pengyu Zhang, Mohammad Rostami, and Deepak Ganesan (University of Massachusetts Amherst)")
  ?>
  <?php add_paperlistitem(
    "AC/DC TCP: Virtual Switch-based Congestion Control Enforcement for Datacenter Networks",
    "Keqiang He (University of Wisconsin-Madison), Eric Rozner (IBM Research), Kanak Agarwal, Yu (Jason) Gu, Wes Felter, and John Carter (IBM), and Aditya Akella (University of Wisconsin-Madison)")
  ?>
  <?php add_paperlistitem(
    "Optimizing Bulk Transfers with Software-Defined Optical WAN",
    "Xin Jin (Princeton University), Yiran Li and Da Wei (Tsinghua University), Siming Li and Jie Gao (Stony Brook University), Lei Xu (Sodero Networks), Guangzhi Li (AT&T Labs), Wei Xu (Tsinghua University), and Jennifer Rexford (Princeton University)")
  ?>
  <?php add_paperlistitem(
    "Real-time Distributed MIMO Systems",
    "Ezzeldin Hamed, Hariharan Rahul, Mohammed A. Abdelghany, and Dina Katabi (Massachusetts Institute of Technology)")
  ?>
  <?php add_paperlistitem(
    "One Sketch to Rule Them All: Rethinking Network Flow Monitoring with UnivMon",
    "Zaoxing Liu (Johns Hopkins University), Antonis Manousis (Carnegie Mellon University), Greg Vorsanger (Johns Hopkins University), Vyas Sekar (Carnegie Mellon University), and Vladimir Braverman (Johns Hopkins University)")
  ?>
  <?php add_paperlistitem(
    "Via: Improving Internet Telephony Call Quality Using Predictive Relay Selection",
    "Junchen Jiang (Microsoft Research / CMU), Rajdeep Das, Ganesh Ananthanarayanan, Philip A. Chou, and Venkata Padmanabhan (Microsoft Research), Vyas Sekar (CMU), Esbjorn Dominique, Marcin Goliszewski, Dalibor Kukoleca, and Renat Vafin (Microsoft), and Hui Zhang (CMU)")
  ?>
  <?php add_paperlistitem(
    "RDMA over Commodity Ethernet at Scale",
    "Chuanxiong Guo (Microsoft Research), Haitao Wu, Zhong Deng, Gaurav Soni, and Jianxi Ye (Microsoft), Jitu Padhye (Microsoft Research), and Marina Lipshteyn (Microsoft)")
  ?>
  <?php add_paperlistitem(
    "Don't Mind the Gap: Bridging Network-wide Objectives and Device-level Configurations",
    "Ryan Beckett (Princeton University), Ratul Mahajan and Jitu Padhye (Microsoft), Todd Millstein (University of California, Los Angeles), and David Walker (Princeton University)")
  ?>
  <?php add_paperlistitem(
    "The Good, the Bad, and the Differences: Better Network Diagnostics with Differential Provenance",
    "Ang Chen, Yang Wu, and Andreas Haeberlen (University of Pennsylvania), Wenchao Zhou (Georgetown University), and Boon Thau Loo (University of Pennsylvania)")
  ?>
  <?php add_paperlistitem(
    "ProjecToR: Agile Reconfigurable Datacenter Interconnect",
    "Monia Ghobadi, Ratul Mahajan, and Amar Phanishayee (Microsoft Research), Houman Rastegarfar, Pierre-Alexandre Blanche, Madeleine Glick, and Daniel Kilper (University of Arizona), and Janardhan Kulkarni, Gireeja Ranade, and Nikhil Devanur (Microsoft Research)")
  ?>  
</ul>

<?php include ("include/footer.php"); ?>

<?php
    $page_title="Live Streaming Troubleshooting";
    include("include/header.php");
?>

<h1>Live Streaming Troubleshooting</h1>

<p>We recommend Google Chrome for viewing the conference live streaming. In case you have any issues, please consider the information below.</p>

<h2>HTML5 and Flash Player</h2>

<p>The live streaming player was developed considering both HTML5 and Flash. The streaming player is run on Flash when it is active on the browser; otherwise, it is run on HTML5. In other words, the browser will give priority to Flash, if it is installed and running. In case your browser is not compatible with HTML5 for some reason, then you will need <a href="https://get.adobe.com/flashplayer/">Flash Player</a> to run it. Otherwise, we recommend disabling flash if your browser supports HTML5.</p>

<h2>Unsupported Systems</h2>

<p>We carried out several experiments to assess the live streaming player functionality, considering a combination of a variety of desktop and smartphone systems (e.g. Windows versions 10, 8.1, 7, and XP; GNU/Linux OpenSuse Leap 42.1, Ubuntu 16.04, and Debian 8.5; MAC X Yosemite and el Capitan; iPhone iOS 9.34; Android versions 4 and 6; etc.), and browsers (Edge, IE, Firefox, Chrome).</p>

<p>In a handful of cases (e.g. IE on Windows 7 and 8.1; and Firefox on MAC el Capitan, iPhone iOS 9.34, and Android), the live streaming player did not work properly. In these cases, we recommend that you use Google Chrome to run the live streaming player.</p>

<h2>Firewall</h2>

<p>In case you are behind a firewall, you might need to ask your network administrator to allow ports 1935 and 8081 on your network, and/or the following IP addresses:</p>

<ul>
  <li>192.252.223.5</li>
  <li>45.56.126.6</li>
  <li>104.131.174.21</li>
  <li>104.236.73.100</li>
  <li>104.236.121.209</li>
  <li>169.57.142.115</li>
</ul>

<h2>Contact Us</h2>

<p>If your live streaming issue is not solved after considering the information shown above, you may contact us to report it. Please observe if you are using a supported device, OS, and browser before <a href="mailto:weverton.cordeiro@inf.ufrgs.br">reporting an issue</a>. We kindly ask you to include as much information as possible (e.g. OS, browser, and other information you might consider useful) to help us tackle your issue.</p>

<?php include("include/footer.php"); ?>

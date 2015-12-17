<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
  <?php add_dateitem("December 17, 2015", "The call for papers for <a href=\"lancomm.php\">LANCOMM</a> and <a href=\"qoe.php\">Internet-QoE</a> workshops are online") ?>
  <?php add_dateitem("December 15, 2015", "GAIA Workshop <a href=\"gaia.php\">call for papers</a> online") ?>
  <?php add_dateitem("December 9, 2015", "List of <a href=\"workshops.php\">accepted workshop proposals</a> announced") ?>
  <?php add_dateitem("September 1, 2015", "<a href=\"cfwp.php\">Call for workshop proposals online</a>") ?>
  <?php add_dateitem("August 17, 2015", "<a href=\"cfp.php\">Call for papers online</a>") ?>
  <?php add_dateitem("June 24, 2015", "<a href=\"http://cseweb.ucsd.edu/~vahdat/\" target=\"_blank\">Amin Vahdat</a> and <a href=\"http://stanford.edu/~skatti/\" target=\"_blank\">Sachin Katti</a> are the TPC co-chairs of SIGCOMM 2016") ?>
  <?php add_dateitem("June 16, 2015", "<a href=\"cft.php\">Call for tutorials online</a>") ?>
  <?php add_dateitem("June 3, 2015", "&#34;<a href=\"local.php\">Bahia Othon Palace</a>&#34; selected as the conference venue") ?>
  <?php add_dateitem("March 31, 2015", "Web site online") ?>
  <?php
    // the active newslibtn code is longer (and very ugly too), but it solves a minor problem related to the plus/minus sign, which does not change when news are expanded/collapsed --weverton
    // <li class="newslibtn" data-icon="plus" data-theme="a" onclick="showall();"><a>Older News</a></li>
  ?>
  <li class="newslibtn ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-last-child ui-btn-hover-c" data-icon="plus" data-theme="a" onclick="showall();" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div" data-iconpos="right"><div class="ui-btn-inner ui-li"><a class="ui-link-inherit">Older News</a><span class="ui-icon ui-btn-icon-right ui-icon-plus ui-icon-shadow">&nbsp;</span></div></li>
</ul>

<script>
  $(".newslibtn").siblings().slice(5).hide();
</script>

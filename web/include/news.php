<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
  <?php add_dateitem("September 1, 2015", 'Call for workshop proposals online.') ?>
  <?php add_dateitem("August 17, 2015", 'Call for papers online.') ?>
  <?php add_dateitem("June 24, 2015", 'Amin Vahdat and Sachin Katti are the TPC co-chairs of SIGCOMM 2016.') ?>
  <?php add_dateitem("June 16, 2015", 'Call for tutorials online.') ?>
  <?php add_dateitem("June 3, 2015", '"Bahia Othon Palace" selected as the conference venue.') ?>
  <?php add_dateitem("March 31, 2015", 'Web site online.') ?>
  <li class="newslibtn ui-btn ui-btn-icon-right ui-li-has-arrow ui-li ui-last-child ui-btn-hover-c" data-icon="plus" data-theme="a" onclick="showall();" data-corners="false" data-shadow="false" data-iconshadow="true" data-wrapperels="div" data-iconpos="right"><div class="ui-btn-inner ui-li"><a class="ui-link-inherit">Older News</a><span class="ui-icon ui-btn-icon-right ui-icon-plus ui-icon-shadow">&nbsp;</span></div></li>
  <!-- li class="newslibtn" data-icon="plus" data-theme="a" onclick="showall();"><a>Older News</a></li -->
</ul>

<script>
  $(".newslibtn").siblings().slice(5).hide();
</script>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
  <?php add_dateitem("March 31, 2015", 'Web site online.') ?>
  <li class="newslibtn" data-icon="plus" data-theme="a" onclick="showall();"><a>Older News</a></li>
</ul>

<script>
  $(".newslibtn").siblings().slice(6).hide();
</script>

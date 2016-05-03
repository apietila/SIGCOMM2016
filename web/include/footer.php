</div> <!-- content-primary -->
  <?php include ("menu.php"); ?>
</div> <!-- content -->
</div> <!-- page -->

<!-- SIGCOMM'16 script code for collecting visit statistics --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-30942101-4', 'auto');
  ga('send', 'pageview');

</script>
</body></html><?php
  # Transparently convert normal ASCII quotes into typographic punctuation HTML entities.
  # http://michelf.com/projects/php-smartypants/
  # Anna: do we need this ?
  # print SmartyPants(ob_get_clean());
?>

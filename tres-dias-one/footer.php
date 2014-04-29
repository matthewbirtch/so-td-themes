	<?php wp_footer(); ?>
  <!-- JavaScript at the bottom for fast page loading -->
  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javaScript"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.11.0.min.js"><\/script>')</script>
  <script src='<?php echo get_template_directory_uri(); ?>/js/libs/jquery-ui-1.10.4.custom.js' type='text/javascript'></script>
  <script src='<?php echo get_template_directory_uri(); ?>/js/scripts.js' type="text/javaScript"></script>
  <script src='<?php echo get_template_directory_uri(); ?>/js/ajax-login.js' type="text/javaScript"></script>
  <!-- end scripts -->
  <!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      
    ga('create', 'UA-3323495-7', 'so-td.org');
    ga('send', 'pageview');
  </script>
</body>
</html>
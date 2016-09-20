<?php 
  $about_link_title   = get_field('about_link_title', 22);
  $about_link_address = get_field('about_link_address', 22);
?>

<footer>
	
    <?php if( !empty($about_link_title) ) : ?>
	   
      <p><small><a href="
        
      <?php if( !empty($about_link_address) ) : ?>
        
        <?php echo $about_link_address; ?>
      
      <?php endif; ?>  
      
      "><?php echo $about_link_title; ?></a></small></p>
      
    <?php endif; ?>
  
	<p>
      <small>
        <a href="//www.iubenda.com/privacy-policy/7913195" class="iubenda-white iubenda-embed" title="Privacy Policy">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src = "//cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
      </small>
    </p>
  
	<p><small>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></small></p>

</footer>

<?php wp_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

</body>
</html>
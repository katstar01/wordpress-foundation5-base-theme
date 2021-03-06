<?php
/**
 * The template for displaying the footer.
 *
 */
?>

<div id="footer">
  <div class="row">
    <div class="small-12 columns">
      <?php if (dynamic_sidebar('footer')) : else : endif; ?>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns" id="theme-design">
      Wordpress Foundation 5 Base Theme by Gareth Cooper &copy;2014
    </div>
  </div>
  
</div>

<?php wp_footer(); ?>

<script>
  // Foundation5
  jQuery(document).foundation();
</script>

</body>
</html>

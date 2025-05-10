</main>
<footer class="cg-footer">
  <div class="cg-footer-upper">
    <div class="container">
      <div class="cg-footer-upper-logo">
        <?php $logoW = get_field('site_logo_white', 'option')?>
        <img src="<?php echo $logoW['url'] ?>" alt="<?php echo bloginfo()?>" width="185" height="46">
      </div>
      <div class="cg-footer-upper-menu">
        <?php wp_nav_menu([
          'theme_location' => 'Footer',
          'container' => false
        ]); ?>
      </div>
    </div>
  </div>
  <div class="cg-footer-lower">
    <div class="container">
      <div class="cg-footer-lower-credit">
        <?php the_field('credit_text', 'option') ?>
      </div>
      <div class="cg-footer-lower-menu">
        <?php wp_nav_menu([
          'theme_location' => 'Bottom',
          'container' => false
        ]); ?>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
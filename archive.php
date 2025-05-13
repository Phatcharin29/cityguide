<?php get_component('/header.php') ?>
<section>
  <div class="container py-3 lg:py-4">
    <nav class="cg-archive-nav">
      <h1 class="cg-archive-nav-header">Happenings</h1>
      <ul>
        <li><a href="#">Festivals</a></li>
        <li><a href="#">Events</a></li>
        <li><a href="#">Online</a></li>
      </ul>
    </nav>
  </div>
</section>
<section class="cg-archive-main">
  <div class="container">
    <?php $bannerArgs = array(
        'post_type'      => 'post',
        'posts_per_page' => 8, // or set a number
        'category__in'   => get_queried_object()->term_id, // your category ID
        'meta_key'       => 'feature_enabled',
        'orderby'        => 'meta_value',
        'order'          => 'DESC', // true comes first
        'meta_query'     => array(
            array(
                'key'     => 'feature_enabled',
                'value'   => '1', // assuming 'true' is stored as '1'
                'compare' => 'EXISTS'
            )
        )
    );

    $bannerQuery = new WP_Query($bannerArgs);
    if($bannerQuery->have_posts()) { ?>
      <div class="swiper cg-archive-banner-swiper">
        <div class="swiper-wrapper !h-auto">
          <?php while($bannerQuery->have_posts()){
            $bannerQuery->the_post(); ?>
            <div class="swiper-slide">
              <?php get_component('/card/card-banner.php'); ?>
            </div>
          <?php } ?>
        </div>
      </div>
      <?php wp_reset_postdata(  );
    }?>
    <?php if(have_posts()) :?>
    <div class="py-10 pb-12 flex flex-col gap-2 lg:gap-6">
      <?php
      $postCount = 0;
      $postCards = [];
      while(have_posts()) :
        the_post();
        $postCards[] = get_component('/card/card-secondary.php', null, true);
      endwhile; ?>
      <div class="2-columns flex gap-[10px]">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 lg:gap-6">
          <?php while($postCount <= (8 - 1)) :
            if(isset($postCards[$postCount])) {
              echo $postCards[$postCount];
            } else {
              break;
            };
            $postCount++;
          endwhile; ?>
        </div>
        <div class="max-lg:hidden"><?php get_component('/cta-mini.php'); ?></div>
      </div>
      <?php if(count($postCards) > (8 - 1)) :?>
      <div class="3-columns">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 lg:gap-[24px_16px]">
          <?php while($postCount <= (14 - 1)) :
            if(isset($postCards[$postCount])) {
              echo $postCards[$postCount];
            } else {
              break;
            };
            $postCount++;
          endwhile; ?>
        </div>
      </div>
      <?php endif; if (count($postCards) > (14 - 1)) :?>
      <div class="4-columns">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-2 lg:gap-[24px_8px]">
        <?php while($postCount <= (26 - 1)) :
            if(isset($postCards[$postCount])) {
              echo $postCards[$postCount];
            } else {
              break;
            };
            $postCount++;
          endwhile; ?>
        </div>
      </div>
      <?php endif; ?>
      <div class="cg-archive-pagination">
        <?php wp_pagenavi(); ?>
      </div>

    </div>
    <?php endif; ?>
  </div>
</section>
<section class="lg:hidden">
  <?php get_component('/cta.php'); ?>
</section>

<?php get_component('/footer.php') ?>
<?php
$relatedPostArg = [
  'post_type' => 'post',
  'posts_per_page' => 4,
  'post__not_in' => [get_the_ID()],
];

if(have_rows('relationship')) {
  while(have_rows('relationship')) {
    the_row();
    if(get_sub_field('related_posts')) {
      $relatedPostField = get_sub_field('related_posts');
      foreach($relatedPostField as $e) {
        $relatedPostID[] = $e->ID;
      }

      $relatedPostArg['post__in'] = $relatedPostID;
      break; 
    }
  }
}

$relatedPost = new WP_Query($relatedPostArg);

if ($relatedPost->have_posts()) : ?>
  <section class="bg-2 py-9">
    <div class="container">
      <div class="mb-5">
        <div class="cg-section-subtitle">Activites</div>
        <div class="cg-section-title">You may also like....</div>
      </div>
      <div class="swiper cg-section-topic-swiper-content !overflow-visible">
        <div class="swiper-wrapper">
          <?php while ($relatedPost->have_posts()) :
            $relatedPost->the_post()?>
            <div class="swiper-slide !w-auto">
              <?php get_component('/card/card-secondary.php'); ?>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_component('/header.php') ?>
<div class="swiper cg-banner-swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><?php get_component('/banner.php')?></div>
    <div class="swiper-slide"><?php get_component('/banner.php')?></div>
    <div class="swiper-slide"><?php get_component('/banner.php')?></div>
  </div>
</div>

<?php $topics = get_field('topic_display', 'option');
if($topics) :
    $cats = get_categories([
      'include' => $topics,
      'hide_empty' => true
    ]);
    $sectionCount = 0;

    foreach($cats as $cat) :

    $sectionCount++;

    $topicArgs = array(
      'post_type'      => 'post',
      'posts_per_page' => 8, // or set a number
      'category__in'   => array($cat->term_id), // your category ID
      'meta_key'       => 'feature_enabled',
      'orderby'        => 'meta_value',
      'order'          => 'DESC', // true comes first
    );
    
    $topicQuery = new WP_Query($topicArgs);

    $featured_posts = [];
    $normal_posts   = [];

    if($topicQuery->have_posts()) :?>

      <section class="cg-section-topic overflow-hidden <?php if($sectionCount % 3 === 2) { echo 'alt-1'; }?>">
        <div class="cg-section-topic-head">
          <div class="container">
            <h2><?php echo $cat->name ?></h2>
          </div>
        </div>
        <?php while($topicQuery->have_posts()) :
          $topicQuery->the_post();
          if(get_field('feature_enabled')) {
            $featured_posts[] = get_post();
          } else {
            $normal_posts[] = get_post();
          }
        endwhile;
        wp_reset_postdata(  ); ?>
        <div class="cg-section-topic-body">
          <div class="container">
            <div class="cg-section-topic-grid">
              <?php if(!empty($featured_posts)) :
              $countFeaturedPost = 0 ?>
              
              
              <div class="swiper cg-section-topic-swiper-feature !overflow-visible">
                <div class="swiper-wrapper">
                  <?php foreach($featured_posts as $post) : 
                    $countFeaturedPost++; ?>
                    <div class="swiper-slide">
                    <?php setup_postdata( $post );
                    if($countFeaturedPost === 1) {
                      get_component('/card/card-primary.php') ;
                    } else {
                      get_component('/card/card-featured.php') ;
                    }
                    ?>
                    </div>
                  <?php endforeach; wp_reset_postdata();?>
                </div>
              </div>
              <?php endif; ?>
              <?php if(!empty($normal_posts)) :
              $countNormalPost = 0?>
              <div class="swiper cg-section-topic-swiper-content !overflow-visible">
                <div class="swiper-wrapper">
                  <?php foreach($normal_posts as $post) : 
                    $countNormalPost++;?>
                    <div class="swiper-slide !w-auto">
                    <?php setup_postdata( $post );
                    if($countNormalPost <= 4) {
                      get_component('/card/card-secondary.php') ;
                    }
                    ?>
                    </div>
                  <?php endforeach; wp_reset_postdata();?>
                </div>
              </div>
              <?php endif; ?>
            </div>
            <?php if($sectionCount === 1) :?>
            <a href="#" class="cg-btn mt-4 text-[20px]">
              Sign up for Free Newsletters
            </a>
            <?php endif; ?>
          </div>
        </div>
      </section>
    <?php endif;
    endforeach;
endif; ?>

<?php get_component('/cta.php')?>

<?php get_component('/footer.php') ?>
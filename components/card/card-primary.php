
<a href="<?php the_permalink()?>" class="cg-card-primary">
  <div class="cg-card-image">
    <?php if(have_rows('feature')) {
      while(have_rows('feature')) {
        the_row();
        $image = get_sub_field('feature_thumbnail');
        if($image) {
          echo wp_get_attachment_image($image['ID'], 'full');
        } else {
          the_post_thumbnail();
        }
      }
    }; ?>
  </div>
  <div class="cg-card-text">
    <div class="cg-card-badge">
      <?php if(get_field('video') && get_field('video') !== '') :?>
      <div class="video"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm40.55,110.58-52,36A8,8,0,0,1,104,164V92a8,8,0,0,1,12.55-6.58l52,36a8,8,0,0,1,0,13.16Z"></path></svg></div>
      <?php endif; ?>
      <?php if(have_rows('relationship')) {
        while(have_rows('relationship')) {
          the_row();
          $des = get_sub_field('related_destination');
          if ($des) {
          ?>
            <div class="tag"><?php echo esc_html($des->post_title) ?></div>
          <?php }
        }
      }; ?>
    </div>
    <?php $tags = get_the_tags(); // Gets tags for the current post

    if ($tags) : ?>
      <div class="cg-card-tags">
        <?php foreach ($tags as $tag) : ?>
          <div class="tag"><?php echo esc_html($tag->name); ?></div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

    <div class="cg-card-content">
      <div class="headline line-clamp-2">
        <?php if(have_rows('feature')) {
          while(have_rows('feature')) {
            the_row();
            if(get_sub_field('feature_title')) {
              the_sub_field('feature_title');
            } else {
              the_title();
            }
          }
        }; ?>
      </div>
      <p class="line-clamp-2">
      <?php if(have_rows('feature')) {
          while(have_rows('feature')) {
            the_row();
            if(get_sub_field('feature_description')) {
              the_sub_field('feature_description');
            } else {
              the_excerpt(  );
            }
          }
        }; ?>
      </p>
    </div>
    <div class="cg-card-meta">
      <!-- <div class='meta-like'>
        <svg width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
          <path d="M15 6.37512C15 10.7501 8.51312 14.2914 8.23687 14.4376C8.16406 14.4768 8.08268 14.4973 8 14.4973C7.91732 14.4973 7.83594 14.4768 7.76312 14.4376C7.48688 14.2914 1 10.7501 1 6.37512C1.00116 5.34776 1.40979 4.36281 2.13624 3.63636C2.86269 2.90991 3.84764 2.50128 4.875 2.50012C6.16563 2.50012 7.29562 3.05512 8 3.99325C8.70438 3.05512 9.83438 2.50012 11.125 2.50012C12.1524 2.50128 13.1373 2.90991 13.8638 3.63636C14.5902 4.36281 14.9988 5.34776 15 6.37512Z"
                fill="currentColor" />
        </svg>
        10,278
      </div>
      <div class="meta-bookmark">
        <svg width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
          <path d="M11.5 2.00012H4.5C4.23478 2.00012 3.98043 2.10548 3.79289 2.29302C3.60536 2.48055 3.5 2.73491 3.5 3.00012V14.0001C3.50004 14.0894 3.52397 14.1769 3.56929 14.2538C3.6146 14.3307 3.67967 14.394 3.75772 14.4373C3.83578 14.4805 3.92399 14.5021 4.01319 14.4997C4.10239 14.4973 4.18933 14.4712 4.265 14.4239L8 12.0895L11.7356 14.4239C11.8113 14.471 11.8982 14.4971 11.9873 14.4993C12.0764 14.5016 12.1645 14.48 12.2424 14.4368C12.3204 14.3936 12.3854 14.3303 12.4307 14.2535C12.4759 14.1767 12.4999 14.0893 12.5 14.0001V3.00012C12.5 2.73491 12.3946 2.48055 12.2071 2.29302C12.0196 2.10548 11.7652 2.00012 11.5 2.00012Z"
                fill="currentColor" />
        </svg>
        999
      </div> -->
      <div class="meta-reading">
        <?php $minutes;
        if(get_field('reading_length')) {
          $minutes = get_field('reading_length');
        } else {
          $content = get_the_content();
          $content = strip_shortcodes($content);          // Remove shortcodes
          $content = wp_strip_all_tags($content);         // Remove HTML tags
          $word_count = str_word_count($content);
          
          $words_per_minute = 200;                        // You can change to 250 if you prefer
          $minutes = ceil($word_count / $words_per_minute);
        }
        
        echo "{$minutes} min. read";
        ?>
      </div>
    </div>
  </div>
</a>
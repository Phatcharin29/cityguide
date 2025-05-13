<?php get_component('/header.php') ?>

<section class="py-9">
  <div class="container <?php if(have_rows('relationship')) :
      while(have_rows('relationship')) :
        the_row(); 
        if(!get_sub_field('related_places') && !get_sub_field('related_package') && !get_sub_field('related_itinerary')) {
          echo 'max-w-[900px]';
        }
      endwhile;
    endif;
    ?>">
    <div class="mb-3">
      <div class="cg-breadcrumb">
        <svg width="20"
              height="20"
              viewBox="0 0 20 20"
              fill="none"
              xmlns="http://www.w3.org/2000/svg">
          <path d="M13.1633 15.5868C13.3394 15.763 13.4383 16.0018 13.4383 16.2509C13.4383 16.5 13.3394 16.7388 13.1633 16.915C12.9871 17.0911 12.7483 17.19 12.4992 17.19C12.2501 17.19 12.0112 17.0911 11.8351 16.915L5.58513 10.665C5.49773 10.5779 5.42838 10.4744 5.38106 10.3604C5.33374 10.2465 5.30939 10.1243 5.30939 10.0009C5.30939 9.87751 5.33374 9.75533 5.38106 9.64138C5.42838 9.52742 5.49773 9.42393 5.58513 9.33683L11.8351 3.08683C12.0112 2.91071 12.2501 2.81177 12.4992 2.81177C12.7483 2.81177 12.9871 2.91071 13.1633 3.08683C13.3394 3.26295 13.4383 3.50182 13.4383 3.75089C13.4383 3.99997 13.3394 4.23884 13.1633 4.41496L7.57809 10.0001L13.1633 15.5868Z"
                fill="#B50017" />
        </svg>

        <a href="#"
            class="cg-breadcrumb-item">
          Activites
        </a>
      </div>
      <h1 class="cg-single-title">
        <?php the_title()?>
      </h1>
      <?php if(have_rows('relationship')) :
          while(have_rows('relationship')) :
            the_row(); 
            ?>
            <a href="<?php echo home_url( '/destination/'.get_sub_field('related_destination')->post_name )?>" class="cg-single-subtitle">
            <?php echo get_sub_field('related_destination')->post_title; ?>
            </a>
          <?php endwhile;
        endif;?>
    </div>
    <div class="cg-single-content">
      <div class="cg-single-content-inner">
        <div class="cg-single-feature-image">
          <?php the_post_thumbnail()?>
        </div>
        <div class="cg-single-video"><?php echo get_field('video'); ?></div>
        <?php the_content(); ?>
      </div>

      <?php if(have_rows('relationship')) :
          while(have_rows('relationship')) :
            the_row(); ?>
            <div class="cg-single-content-sidebar">
              <?php if(get_sub_field('related_places')) :
                $places = get_sub_field('related_places');
                ?>
              <div class="sidebar">
                <div class="sidebar-title">
                  In this post
                </div>

                <?php foreach($places as $place) :
                  $data = get_post($place->ID)?>
                <?php get_component('/card/card-location.php', $data)?>
                <?php endforeach; ?>

              </div>
              <?php endif; ?>

              <?php if(get_sub_field('related_package')) :
                
                $package = get_post(get_sub_field('related_package')->ID);
                ?>
              <div class="sidebar">
                <div class="sidebar-title">
                  Book a tour
                </div>
                <div class="sidebar-body">
                  <div class="flex flex-col gap-2">
                    <p class="text-sm font-bold"><?php echo get_the_title($package);?></p>
                    <p class="line-clamp-3"><?php echo get_the_excerpt($package);?></p>
                    <a href="<?php echo get_permalink( $package )?>"><?php echo get_the_post_thumbnail( $package, 'medium_large' ) ?></a>
                  </div>

                  <form action="">
                    <input type="text"
                            placeholder="Name - Lastname"
                            name=""
                            id="">
                    <input type="email"
                            placeholder="Email"
                            name=""
                            id="">
                    <input type="tel"
                            placeholder="Tel"
                            name=""
                            id="">
                    <input type="date"
                            placeholder="Select tour date"
                            name=""
                            id="">
                    <button type="submit">Submit</button>
                  </form>
                </div>
              </div>
              <?php endif; ?>

              <?php if(get_sub_field('related_itinerary')) :
                print_r(get_sub_field('related_itinerary'));?>
              <div class="sidebar">
                <div class="sidebar-title">
                  <div>
                    ITINERARY
                  </div>
                  <a href="#" class="btn-more">
                    SEE ALL
                  </a>
                </div>

                <div class="sidebar-body">
                  <p>
                    <strong>
                      Duration:1 Day | Time: 8:00 AM - 6:30 PM
                    </strong>
                  </p>
                  <p>Morning: Exploring the Iconic Temples </p>

                  <p>
                    8:00 AM – Pickup & DepartureMeet at your hotel or designated pickup point and begin
                    the journey to Bangkok’s most revered temples.
                  </p>
                  <p>
                    8:30 AM – Wat Phra Kaew & Grand Palace
                  </p>
                  <ul>
                    <li>The Emerald Buddha Temple, Thailand’s most sacred temple.</li>
                    <li>Marvel at the intricate architecture and golden spires.</li>
                    <li>Visit the Grand Palace, once the official residence of Thai kings.</li>
                  </ul>
                  <p>
                    10:00 AM – Wat Pho (Temple of the Reclining Buddha)
                  </p>
                  <ul>
                    <li>Home to the famous 46-meter-long Reclining Buddha.</li>
                    <li>Experience a traditional Thai massage at the birthplace of Thai massage.</li>
                  </ul>
                  <p>
                    11:00 AM – Wat Arun (Temple of Dawn)
                  </p>
                  <ul>
                    <li>Iconic riverside temple with towering prangs.</li>
                    <li>Climb the central tower for stunning Chao Phraya River views.</li>
                    <li>Midday: Lunch & Cultural Exploration.</li>
                  </ul>
                  <p>
                    12:00 PM – Lunch at a Riverside Restaurant
                  </p>
                  <ul>
                    <li>authentic Thai cuisine with a scenic riverside view.</li>
                  </ul>
                  <p>
                    Afternoon: Hidden Gems & Spiritual Experience
                  </p>
                  <ul>
                    <li>1:30 PM – Wat Rakhang (Temple of Bells).</li>
                    <li>A peaceful temple known for its old bells and serene atmosphere.</li>
                  </ul>
                  <p>
                    2:00 PM – Wat Kalayanamit

                  </p>
                  <ul>
                    <li>Houses one of the largest sitting Buddha statues in Bangkok.</li>
                  </ul>
                  <p>
                    2:30 PM – Wat Prayurawongsawat

                  </p>
                  <ul>
                    <li>for its unique white chedi and turtle pond.</li>
                  </ul>
                  <p>
                    3:00 PM – Wat Suthat & The Giant Swing

                  </p>
                  <ul>
                    <li>Famous for its giant red swing and beautiful murals.</li>
                  </ul>
                  <p>Evening: Sunset & Blessings

                  </p>
                  <ul>
                    <li>4:00 PM – Wat Saket (Golden Mount Temple).</li>
                    <li>Climb 344 steps for panoramic views of Bangkok at sunset.</li>
                  </ul>
                  <p>
                    5:30 PM – Wat Traimit (Temple of the Golden Buddha)

                  </p>
                  <ul>
                    <li>Home to the world’s largest solid gold Buddha statue.</li>
                    <li>Receive a final blessing for good fortune.</li>
                  </ul>
                  <p>
                    6:30 PM – Return to HotelDrop-off at your hotel or chosen location,
                    concluding a day of spiritual and cultural exploration.
                  </p>

                </div>
              </div>
              <?php endif; ?>
            </div>

      <?php endwhile;
        endif;?>
    </div>
  </div>
</section>
<?php get_component('/related-post.php')?>

<?php get_component('/footer.php') ?>
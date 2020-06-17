  <?php get_header() ?>
  <div data-w-id="6061e404-14f7-89e6-4a4b-89c3d17c5b07" class="div-block-31 main-section">
    <div data-w-id="eb526739-0925-9d30-682a-07e009164873" class="postcard-modal">
      <h3 class="heading-62 postcard-title"><strong class="bold-text-3">Postcard of Hanoi</strong></h3>
      <img src="" width="724"  sizes="100vw" alt="" class="image-10">
      <p class="paragraph-18 modal-postcard-content"></p>
      <h4 class="heading-63">Pictures From Top Clockwise:</h4>
      <ol class="list-4 modal-postcard-parts">
      </ol>
    </div>
  </div>
  <div class="container-main">
    <div class="container-2 w-container">
      <h1 class='page_title'>Postcards</h1>
      <p class="mds-plr-10">In the Postcards section, you can find all the personalized postcards from our first Vietnam road trip. We started from the capital Hanoi, and slowly started making our way south to Saigon.<br></p>
      <p class="mds-plr-10">On the way to Saigon, there is a lot of natural and artificial beauty to observe and experience. Some places are spoiled by mass tourism, while some are literally untouched by us foreigners.<br></p>
      <p class="mds-plr-10">We wanted to pay justice to all the destinations we visited on our first road trip and created postcards for each of the stops we made. From the local, busy vibe of Hanoi, to the relaxing beach vibes of Da Nang to challenging, yet rewarding and authentic Central Highways, there are a lot of spices to taste in Vietnam.<br></p>
      <p class="mds-plr-10">Stay tuned for more postcards from our Cambodia road trip! Until then, we hope that you enjoy the current designs! Let us know what is your favorite one in the comment section below!<br></p>
      <div class="html-embed-5 w-embed">
        <hr>
      </div>
      <?php
        $args =array('post_type' => 'postcard', 'posts_per_page' => -1);
        $loop = new WP_Query( $args );
        $i = 0;
        $count = wp_count_posts( "postcard" )->publish;
        ?> 
        <div class='postcard_grid'>
        <?php while( $loop->have_posts() ): 
          $loop->the_post();
        ?>   
          <div class="m-10 postcard-container image-postcard postcard-card postcard_animation" data-postcard-id='<?php the_ID() ?>'>
            <img src=<?php echo get_field('postcard-image') ?>  alt="" class="image-postcard link-image">
            <h4 class="link-heading postcard_heading"><?php the_title() ?></h4>
            <div class="postcard-content" hidden><?php the_content() ?></div>
              <p class="postcard-parts" hidden><?php echo get_field('postcard_parts')  ?></p>
            </div>
          <a href=<?php the_permalink() ?> class="m-10 postcard-container image-postcard postcard-card postcard_link">
           <div class="m-10 postcard-container" data-postcard-id='<?php the_ID() ?>'>
              <img src=<?php echo get_field('postcard-image') ?>  alt="" class="image-postcard link-image">
              <h4 class="link-heading postcard_heading"><?php the_title() ?></h4>
              <div class="postcard-content" hidden><?php the_content() ?></div>
              <p class="postcard-parts" hidden><?php echo get_field('postcard_parts')  ?></p>
            </div>
        </a>
        <?php endwhile; ?>              
      </div>
    </div>
  </div>
<?php get_footer(); ?>
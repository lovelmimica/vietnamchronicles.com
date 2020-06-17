  <?php get_header() ?>
  <div class="container-5 w-container container-main main-section">
      <h2 class="heading-41 page_title"><?php the_title() ?></h2>
      <img src=<?php echo get_field('postcard-image') ?> />
      <p><?php echo get_post()->post_content ?></p>
      <h5 class="heading-63">Pictures From Top Clockwise:</h5>
      <ol class="list-3">
        <?php 
          $partsArr = explode('.', get_post_custom()['postcard_parts'][0]);
          foreach($partsArr as $part): 
            if(strlen($part) > 3) echo '<li>'. $part . '</li>';
          endforeach;
        ?>
      </ol>
    
  </div>
  <?php get_footer() ?>
<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="article">
            <div class="article-title">
              <?php the_title(); ?>
            </div>
            <div class="single--article--details">
              <span class="article-author">
                <i class="far fa-user-circle"></i>
                <?php the_author_posts_link(); ?>
              </span>
              <span class="article-timestamp">
                <i class="far fa-clock"></i>            
                <?php the_time('n.j.y'); ?>
              </span>
            </div>
        
            <article class="article-text">
              <?php the_content(); ?>
            </article>
          </div>
        </div>
      </div>
    </div>
  <?php }

  get_footer();

?>

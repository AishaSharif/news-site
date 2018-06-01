<?php get_header(); ?>
<div class="container">
<div class="row">
  <!-- TOP STORIES -->
  <div class="col-sm-4">
    <div class="top-stories-title">Top Stories</div>
    <section class="top-stories">
        <?php
          while(have_posts()){ ?>
            <div class="top-story">
             <?php the_post(); ?> 
             <a class="top-story-title" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a>
             
            </div>
          <?php
          }
        ?>
      </div>
    </section>
      <!-- <div class="top-story">
        <img src="https://images.unsplash.com/photo-1507637246364-d8fce4a9850a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=00dbdf5c6801d1b76bf753ae9569cbca&auto=format&fit=crop&w=750&q=80" alt="" class="top-story-img">
        <div class="top-story-title">
        Lorem, ipsum dolor sit amet consectetur elit.
        </div>
      </div>
      <div class="top-story">
        <img src="https://images.unsplash.com/photo-1506642328232-1ea4d3b6ba6f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d3f6516fdad9709738200ea5727d5cf6&auto=format&fit=crop&w=750&q=80" alt="" class="top-story-img">
        <div class="top-story-title">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
        </div>
      </div>
      <div class="top-story">
        <img src="https://images.unsplash.com/photo-1499702111052-d63bd11c766a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4629c4f7aa584a9ca963ad052c73c1cd&auto=format&fit=crop&w=667&q=80" alt="" class="top-story-img">
        <div class="top-story-title">
        Lorem, ipsum dolor sit amet consectetur elit. Repudiandae, blanditiis?
        </div>
      </div>
      <div class="top-story">
        <img src="https://images.unsplash.com/photo-1520420097861-e4959843b682?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7a76802ff83a847d60d945e4f44cd241&auto=format&fit=crop&w=750&q=80" alt="" class="top-story-img">
        <div class="top-story-title">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, blanditiis?
        </div>
      </div>
    </section>
  </div> -->
  <!-- MAIN ARTICLE -->
  <div class="col-sm-6">
    <div class="main-stories-title">Main Story</div>
    <div class="main-story">
      <div class="main-story-image">
        <img src="https://images.unsplash.com/photo-1497271679421-ce9c3d6a31da?ixlib=rb-0.3.5&s=fb2bf45324ffdbe8780fc90bb813a35e&auto=format&fit=crop&w=751&q=80" alt="" class="main-story-img">
      </div>
      <div class="main-story-details">
          <div class="main-story-title">
              It is Amazing how Complete is the Delusion that Beauty is Goodness, Leo Tolstoy
          </div>
          <!-- <div class="author">Mike Ross</div> -->
          <div class="timestamp">
            <i class="far fa-clock"></i>
            30 minutes ago
          </div>
      </div>
    </div>
  </div>

  <!-- SECTION THREE -->
  <div class="col-sm">
    <div class="adverts">
      <div class="adverts-title">Advertisements</div>
      <div class="advert">
        <div class="advert-image">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magni fugit laudantium molestias ducimus molestiae laboriosam rerum culpa nesciunt blanditiis.
        </div>
        <div class="advert-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit tenetur voluptas recusandae, tempore maxime vero eveniet mollitia quidem corporis soluta aperiam inventore aliquam, ab at ex sunt accusantium necessitatibus?
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- ------VIDEO SECTION EXPLORE---- -->
<div class="container">
<div class="section-title">
  LATEST VIDEOS
</div>
<div class="row">
  <!-- VIDEO ONE -->
  <div class="col-sm-3 s-video">
    <div class="section-video">
      <iframe width="280" height="150" src="https://www.youtube.com/embed/5tNzh_anCqM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video-iframe"></iframe>
      <div class="video--text">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, quo!
      </div>
      <div class="timestamp video-timestamp">
        <i class="far fa-clock"></i>
        30 minutes ago
      </div>
    </div>
  </div>
  <!-- VIDEO TWO -->
  <div class="col-sm-3 s-video">
    <div class="section-video">
      <iframe width="280" height="150" src="https://www.youtube.com/embed/5tNzh_anCqM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video-iframe"></iframe>
      <div class="video--text">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, quo!
      </div>
      <div class="timestamp video-timestamp">
        <i class="far fa-clock"></i>
        30 minutes ago
      </div>
    </div>
  </div>
  <!-- VIDEO THREE -->
  <div class="col-sm-3 s-video">
    <div class="section-video">
      <iframe width="280" height="150" src="https://www.youtube.com/embed/5tNzh_anCqM?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="video-iframe"></iframe>
      <div class="video--text">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, quo!
      </div>
      <div class="timestamp video-timestamp">
        <i class="far fa-clock"></i>
          30 minutes ago
      </div>
    </div>
  </div>

  <!-- SECTION THREE -->
  <div class="col-sm">
    <div class="adverts">
      <div class="adverts-title">Advertisements</div>
      <div class="advert">
        <div class="advert-image">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magni fugit laudantium molestias ducimus molestiae laboriosam rerum culpa nesciunt blanditiis.
        </div>
        <div class="advert-text">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit tenetur voluptas recusandae, tempore maxime vero eveniet mollitia quidem corporis soluta aperiam inventore aliquam, ab at ex sunt accusantium necessitatibus?
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- ----SECTION SOMALI POLITICS---- -->
<div class="container">
  <div class="section-title">
    SOMALI POLITICS
  </div>
  <div class="row">
    <!-- ARTICLE ONE -->
    <div class="col-sm-3 articles-section">
      <div class="article-section">
        <div class="article-image">
          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Mohamed_Abdullahi_Farmajo_%28cropped%29.jpg" alt="Somalia President">
        </div>
        <div class="article-details">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et culpa, facilis harum 
        </div>
        <div class="timestamp article-timestamp">
          <i class="far fa-clock"></i>
          30 minutes ago
        </div>
      </div>
    </div>
    <!-- ARTICLE ONE -->
    <div class="col-sm-3 articles-section">
      <div class="article-section">
        <div class="article-image">
          <img src="https://images.unsplash.com/photo-1506642328232-1ea4d3b6ba6f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d3f6516fdad9709738200ea5727d5cf6&auto=format&fit=crop&w=750&q=80" alt="" class="top-story-img">
        </div>
        <div class="article-details">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et culpa
        </div>
        <div class="timestamp article-timestamp">
          <i class="far fa-clock"></i>
          30 minutes ago
        </div>
      </div>
    </div>
    <!-- ARTICLE ONE -->
    <div class="col-sm-3 articles-section">
      <div class="article-section">
        <div class="article-image">
          <img src="https://upload.wikimedia.org/wikipedia/commons/e/e0/Mohamed_Abdullahi_Farmajo_%28cropped%29.jpg" alt="Somalia President">
        </div>
        <div class="article-details">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et culpa, facilis harum odio
        </div>
        <div class="timestamp article-timestamp">
          <i class="far fa-clock"></i>
          30 minutes ago
        </div>
      </div>
    </div>

    <!-- SECTION THREE -->
    <div class="col-sm">
      <div class="adverts">
        <div class="adverts-title">Advertisements</div>
        <div class="advert">
          <div class="advert-image">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magni fugit laudantium molestias ducimus molestiae laboriosam rerum culpa nesciunt blanditiis.
          </div>
          <div class="advert-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam odit tenetur voluptas recusandae, tempore maxime vero eveniet mollitia quidem corporis soluta aperiam inventore aliquam, ab at ex sunt accusantium necessitatibus?
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row"></div>
  <div class="section-title">
      IN THE NEWS
    </div>
    <div class="col-sm-10">
      <section class="other-news-stories">
        <div class="other-news-story">
          <img src="https://images.unsplash.com/photo-1507637246364-d8fce4a9850a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=00dbdf5c6801d1b76bf753ae9569cbca&auto=format&fit=crop&w=750&q=80" alt="" class="other-news-story-img">
          <div class="other-news-story-title">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
          </div>
          <div class="other-news-story-subtitle">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto eum nam aspernatur, facilis a tenetur.
          </div>
          <div class="other-news-source">British Journal</div>
        </div>
        <div class="other-news-story">
            <img src="https://images.unsplash.com/photo-1520420097861-e4959843b682?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=7a76802ff83a847d60d945e4f44cd241&auto=format&fit=crop&w=750&q=80" alt="" class="other-news-story-img">
          <div class="other-news-story-title">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
          </div>
          <div class="other-news-story-subtitle">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto eum nam aspernatur, facilis a tenetur.
          </div>
          <div class="other-news-source">British Journal</div>
        </div>
        <div class="other-news-story">
          <img src="https://images.unsplash.com/photo-1499702111052-d63bd11c766a?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4629c4f7aa584a9ca963ad052c73c1cd&auto=format&fit=crop&w=667&q=80" alt="" class="other-news-story-img">
          <div class="other-news-story-title">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
          </div>
          <div class="other-news-story-subtitle">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto eum nam aspernatur, facilis a tenetur.
          </div>
          <div class="other-news-source">British Journal</div>
        </div>
        <div class="other-news-story">
          <img src="https://images.unsplash.com/photo-1506642328232-1ea4d3b6ba6f?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d3f6516fdad9709738200ea5727d5cf6&auto=format&fit=crop&w=750&q=80" alt="" class="other-news-story-img">
          <div class="other-news-story-title">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae
          </div>
          <div class="other-news-story-subtitle">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto eum nam aspernatur, facilis a tenetur.
          </div>
          <div class="other-news-source">British Journal</div>
        </div>
      </section>
    </div>
</div>

<?php get_footer(); ?>
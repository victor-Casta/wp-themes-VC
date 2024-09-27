<main class="blog-main">
    <section class="post-container">
    <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          ?>
          <article>
            <span class="category"><?php the_category(); ?></span>
            <div class="banner-post">
              <?php the_post_thumbnail(); ?>
            </div>
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?></h2>
            </a>
            <div class="icons">
              <div class="left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/like.svg" alt="like">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/comment.svg" alt="comment">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/send.svg" alt="send">
              </div>
              <div class="right">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/mark.svg" alt="save">
              </div>
            </div>
          </article>
          <?php
        }
      }
    ?>
    </section>
  </main>
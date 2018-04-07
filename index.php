<?php get_header(  ) ?>
 <?php while(have_posts()){
     if(have_posts()){
         the_post() ?>
    <div class="col-md-6">
        <?php the_content(  ) ?>
    </div>
   <?php } } ?>

<?php get_footer(  ) ?>


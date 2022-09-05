<?php 
/*
* The template for displaying pages
*/

get_header(); ?>

<section id="body-area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">

      <?php get_template_part('template-part/post_setup'); ?>

      </div>
      <div class="col-md-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
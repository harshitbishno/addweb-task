 
<?php
/*Template Name: resources*/
get_header();
query_posts(array(
   'post_type' => 'resources'
)); ?>
<?php
while (have_posts()) : the_post(); ?>
<div class="row">
  <div class="col-sm-6 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
        <p class="card-text"><?php the_excerpt(); ?></p>
        <a href="#" class="btn btn-primary">Read</a>
      </div>
    </div>
  </div>
</div>
<?php endwhile;
get_footer();





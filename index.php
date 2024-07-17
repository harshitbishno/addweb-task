<?php get_header(); ?>

<div class="container">
  <h1>Custom taxonomies</h1>
  <?php
$res=get_terms(['taxonomy'=>'resource_type', 'hide_empty'=>false]);

// loop for show Taxonomy
foreach ($res as $restex){
?>  

<h5><?php echo $restex->name; ?></h5>

<?php } ?>

</div>


<?php get_footer(); ?>



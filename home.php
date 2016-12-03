<?php get_header(); ?>
<div class="container warper">
<div class="row">
  <div class="col-md-9">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-md-12 post-content">
<h6><?php the_title(); ?></h6>
<span class="label datetime" ><?php the_time('F jS, Y') ?></span>
<p><?php echo substr(strip_tags($post->post_content), 0, 300);?></p>
</div>
<hr> <?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php endif; ?>

  </div>

<div class="col-md-3">.col-md-1</div>
  </div>
</div>
<?php get_footer(); ?>
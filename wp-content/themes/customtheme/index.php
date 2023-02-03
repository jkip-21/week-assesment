<?php
get_header();
?> 
<div class="col-1"><?php
$arguments = array(
    'type'=> 'post',
    'posts_per_page'=> 2,
    'offset'=>1
);
$last = new WP_Query('type=post&post_per_page=1');
if($last->have_posts()):
    while($last->have_posts()): $last->the_post();
?>
<?php get_template_part('content', get_post_format()); ?>
<?php 
endwhile;
else:
    echo '<p>No posts found.</p>';
endif;
wp_reset_postdata();
?>
</div>
<div class="sidebar"><?php get_sidebar();?></div>

<?php get_footer();?>
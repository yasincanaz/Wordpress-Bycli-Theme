<?php get_header();?>
<div class="container-blog">
    <div class="row">
        <div class="text-head">
        <span><?php the_title()?></span>
        <hr>
        </div>
    <?php if(have_posts()):while(have_posts()):the_post() ?>
<?php the_content();?>
<?php endwhile;endif;?>

    </div>
</div>
<?php get_footer();?>
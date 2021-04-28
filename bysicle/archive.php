<?php get_header();?>
<div class="containers">
<div class="row">
    <span><span>Our Blog</span></span>
<?php if(have_posts()):while(have_posts()):the_post() ?>
<div class="colmn">
    <div class="resim">
    <?php
    if(has_post_thumbnail()):?>
    <img src="<?php the_post_thumbnail_url('small');?>" width="100%" alt="" class="img-fluid">
    <?php endif;?>
    </div>
    <div class="text-box">
            <span class="tag"><?php the_tags();?></span>
    <h1><?php the_title();?></h1>
    <p><?php the_excerpt();?></p>
    <a href="<?php the_permalink();?>" class="btn btn-danger">Devamını Okuyun</a><br>
    <hr>
    <?php echo "BY "; the_author(); ?>
    <span class="date"><?php echo get_the_date (); ?></span>
    </div>
    </div>
    <?php endwhile;endif;?>
</div>
</div>
<?php get_footer();?>
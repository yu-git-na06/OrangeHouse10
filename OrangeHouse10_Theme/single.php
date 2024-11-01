<?php get_header(); ?>
<?php
if(have_posts()):
    while(have_posts()):
        the_post();
?>

<section>
    <div class="detail-page-block">
        <div class="detail-page-text">
            <h1>News</h1>
        </div>  
        <div class="detail-page-img">
            <img src="<?=get_template_directory_uri(); ?>/img/single.jpg" alt="玄関">
        </div>
    </div>
    <div class="detail-page-inner">
        <div  class="detail-page-title">
            <h2><?php the_title(); ?></h2>
        </div>
        <div  class="detail-page-content">
            <p><?php the_content(); ?></p>
        </div>
    </div>
</section>

<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>
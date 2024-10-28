<?php get_header() ?>
<!-- loading -->
<div id="loading">
    <img src="<?=get_template_directory_uri(); ?>/img/logo.png" id="spin" alt="spin">
</div>
<!-- loading -->

<!-- fv -->
<section class="fv">
    <div class="fv-img">
        <img src="<?=get_template_directory_uri(); ?>/img/fv.jpg" alt="ファーストビュー">
    </div>
</section>
<!-- fv -->

<!-- about -->
<section class="about">
    <div class="common-wrapper">
        <h1 id="about">About</h1>
        <div class="about-block">
            <div class="about-block-text">
                <h2>目の前が海のゲストハウス</h2>
                <p>1階は古民家をリノベーションして快適な空間<br>キッチンや浴室も綺麗で快適<br>2階の寝室は、旅館のような和室で<br>ゆっくりとくつろげて旅の疲れを癒してくれます。</p>
            </div>
            <div class="about-block-img">
                <img src="<?=get_template_directory_uri(); ?>/img/about.JPG" alt="内観">
            </div>
        </div>
    </div>
</section>
<!-- about -->

<!-- gallary -->
<section class="gallary">
    <div class="gallary-inner common-wrapper">
        <h1 id="gallary"><span>Gallary</span></h1>
        <div class="gallary-block">
            <div class="gallary-left">
                <div class="gallary-main">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary1.jpg" id="main" alt="外観">
                </div>
            </div>
            <div class="gallary-right"> 
                <div class="gallary-list">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary1.jpg" class="thumb-img" alt="室内1">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary2.JPG" class="thumb-img" alt="室内2">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary3.JPG" class="thumb-img" alt="室内3">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary4.JPG" class="thumb-img" alt="室内4">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary5.JPG" class="thumb-img" alt="室内5">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary6.JPG" class="thumb-img" alt="室内6">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary7.JPG" class="thumb-img" alt="室内7">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary8.JPG" class="thumb-img" alt="室内8">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary9.jpg" class="thumb-img" alt="室内9">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary10.JPG" class="thumb-img" alt="室内10">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary11.JPG" class="thumb-img" alt="室内11">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary12.JPG" class="thumb-img" alt="室内12">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary13.JPG" class="thumb-img" alt="室内13">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary14.JPG" class="thumb-img" alt="室内14">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary15.jpg" class="thumb-img" alt="室内15">
                </div>
            </div>
        </div>
        <div class="caption" id="text">
            <p>広々した玄関先も自由に使える！（BBQ、花火etc...）</p>
        </div>
    </div>
</section>
<!-- gallary -->

<!-- news -->
<section class="news">
    <div class="news-inner common-wrapper">
        <h1 id="news">News</h1>
        <div class="news-block">
            <?php $query = new WP_Query( 'cat=-4' ); ?>
            <?php query_posts('posts_per_page='); ?> 
            <?php if($query -> have_posts()):
                while($query -> have_posts()): $query -> the_post(); ?>
                        <article>
                            <a href="<?php the_permalink(); ?>" class="news-block-list">
                                <time class="news-block-time"><?=get_the_date();?></time>
                                <h3 class="news-block-text"><?php the_title() ?></h3>
                            </a>
                        </article>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- news -->

<!-- price -->
<section class="price">
    <div class="price-inner common-wrapper">
        <h1 id="price">Price</h1>
        <div class="price-block">
            <table class="price-block-table">
                <tr>
                    <th>客室（1泊）</th>
                    <th>一棟貸し</th>
                </tr>
                <tr>
                    <td>大人：5,500円<br>小学生：1,500円<br>小学生未満：無料</td>
                    <td>27,000円</td>
                </tr>
            </table>
            <div class="price-block-text">
                <p>※チェックイン：17:00-20:00,チェックアウト：11:00<br>※キャンセル料：（当日、前日）100%、（3日前）50%</p>
            </div>
        </div>
    </div>
</section>
<!-- price -->

<!-- reservation -->
<section class="reservation">
    <div class="reservation-inner common-wrapper">
        <h1 id="reservation">Reservation</h1>
        <article class="page-parts__article">
            <?php 
            $query = new WP_Query( 'cat=4' ); 
            if ( $query->have_posts() ) : 
                while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; 
                wp_reset_postdata(); 
            else : ?>
            <?php endif; ?>
        </article>
    </div>
</section> 
<!-- reservation -->

<!-- access -->
<section class="access">
    <div class="access-inner common-wrapper">
        <h1 id="access">Access</h1>
        <div class="access-map">
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d213320.74842467732!2d132.34788164791738!3d33.34137846276217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3545893cd6602c47%3A0xca14e62cd60457c9!2sOrange%20House10!5e0!3m2!1sja!2sjp!4v1727451167937!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        </div>
    </div>
</section>
<!-- access -->

<?php get_footer() ?>
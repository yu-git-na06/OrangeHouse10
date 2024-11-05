<?php get_header() ?>
<!-- loading -->
<div id="loading">
    <picture>
        <!-- ブラウザ幅最大～800pxまでsample3の画像が表示 -->
        <source srcset="<?=get_template_directory_uri(); ?>/img/logo.png" media="(min-width: 800px)" type="image/jpg" id="spin" alt="spin">
        <!-- ブラウザ幅800px～から最小幅までsample2の画像が表示 -->
        <img src="<?=get_template_directory_uri(); ?>/img/logo-sp.png" alt=”spin”>
    </picture>
    <!-- <img src="<?=get_template_directory_uri(); ?>/img/logo.png" id="spin" alt="spin"> -->
</div>
<!-- loading -->

<!-- fv -->
<section class="fv">
    <div class="fv-img">
    <picture>
        <!-- ブラウザ幅最大～800pxまでsample3の画像が表示 -->
        <source srcset="<?=get_template_directory_uri(); ?>/img/fv.jpg" media="(min-width: 800px)" type="image/jpg" alt="ファーストビュー">
        <!-- ブラウザ幅800px～から最小幅までsample2の画像が表示 -->
        <img src="<?=get_template_directory_uri(); ?>/img/fv-sp.jpg" alt=”ファーストビュー”>
    </picture>
        <!-- <img src="<?=get_template_directory_uri(); ?>/img/fv.jpg" alt="ファーストビュー"> -->
    </div>
</section>
<!-- fv -->

<!-- about -->
<section class="about">
    <div class="common-wrapper">
        <h1 id="about">About</h1>
        <div class="about-block">
            <div class="about-block-text">
                <h2>海の絶景とみかんの香りに包まれる<br>癒しのゲストハウス</h2>
                <p>愛媛県西予市明浜町に新たにオープンした「Orange House10」は、静かな町に佇む特別な宿。
                    <br>目の前には広がる青い海、そして町全体を包み込むみかんの甘い香りが、心を和ませてくれます。
                    <br>古民家をリノベーションしたこの空間は、温もりと居心地の良さが魅力。
                    <br>大人数のグループでも、一人旅の方でも、心ゆくまでくつろげるひとときを提供します。
                    <br>旅の疲れを癒し、心に残る思い出を作るために、
                    <br>ぜひお気軽にお越しください。
                </p>
            </div>
            <div class="about-block-img">
                <img src="<?=get_template_directory_uri(); ?>/img/about3.JPG" alt="明浜町">
            </div>
        </div>
    </div>
</section>
<!-- about -->

<!-- gallary -->
<section class="gallary">
    <div class="gallary-inner">
        <h1 id="gallary"><span>Gallary</span></h1>
        <div class="gallary-block">
            <div class="gallary-left">
                <div class="gallary-main">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary1.jpg" id="main" alt="外観">
                </div>
            </div>
            <div class="gallary-right"> 
                <div class="gallary-list">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary1.jpg" class="thumb-img" alt="ゲストハウス Orange House10">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary5.JPG" class="thumb-img" alt="友達との旅に最適">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary2.JPG" class="thumb-img" alt="古民家風の室内">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary11.JPG" class="thumb-img" alt="リビング">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary3.JPG" class="thumb-img" alt="清潔感ある洗面台">
                    <img src="<?=get_template_directory_uri(); ?>/img/sea2.JPG" class="thumb-img" alt="海岸でお散歩">
                    <img src="<?=get_template_directory_uri(); ?>/img/sea.JPG" class="thumb-img" alt="目の前は釣りの名所">
                    <img src="<?=get_template_directory_uri(); ?>/img/buss.JPG" class="thumb-img" alt="バスのりばも目の前">
                    <img src="<?=get_template_directory_uri(); ?>/img/dining.JPG" class="thumb-img" alt="ダイニングで乾杯">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary15.jpg" class="thumb-img" alt="縁側で非日常を味わう">
                    <img src="<?=get_template_directory_uri(); ?>/img/about.JPG" class="thumb-img" alt="旅館のような室内">
                    <img src="<?=get_template_directory_uri(); ?>/img/dining2.JPG" class="thumb-img" alt="自由に使えるLDK">
                    <img src="<?=get_template_directory_uri(); ?>/img/room.JPG" class="thumb-img" alt="ドライフラワーに囲まれて">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary9.jpg" class="thumb-img" alt="本棚">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary10.JPG" class="thumb-img" alt="花柄の食器">
                    <img src="<?=get_template_directory_uri(); ?>/img/living2.JPG" class="thumb-img" alt="キッチン">
                    <img src="<?=get_template_directory_uri(); ?>/img/syokki.JPG" class="thumb-img" alt="食器完備">
                    <img src="<?=get_template_directory_uri(); ?>/img/chouri.JPG" class="thumb-img" alt="調理器具完備">
                    <img src="<?=get_template_directory_uri(); ?>/img/senmen.JPG" class="thumb-img" alt="洗濯機も使える">
                    <img src="<?=get_template_directory_uri(); ?>/img/shower.JPG" class="thumb-img" alt="浴室">
                    <img src="<?=get_template_directory_uri(); ?>/img/kaidan.JPG" class="thumb-img" alt="2階の寝室へ">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary8.JPG" class="thumb-img" alt="寝室前の廊下">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary14.JPG" class="thumb-img" alt="大部屋">
                    <img src="<?=get_template_directory_uri(); ?>/img/gallary12.JPG" class="thumb-img" alt="個室も使える">
                </div>
            </div>
        </div>
        <div class="caption" id="text">
            <p>ゲストハウス Orange House10</p>
        </div>
    </div>
</section>
<!-- gallary -->

<!-- news -->
<section class="news">
    <div class="news-inner common-wrapper">
        <h1 id="news">News</h1>
        <div class="news-block">
            <?php $query = new WP_Query( 'cat=-13' ); ?>
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
        <div class="reservation-btn">
            <a href="/reservation">宿泊予約はこちら</a>
        </div>
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
<?php //@include '../../function/init.php'; ?> 
<!-- Main -->
<div id="main">
    <section>
        <article class="">
            <div class="title" style="text-align: center"><h2>Article</h2></div>
            <div class="row" style="text-align: center">
                <?php foreach (Article() as $art) : ?>
                <?php $date = str_replace('/', '-', $art['date']); ?>
                    <div style="width: 33.333333%; margin-top: 40px">
                        <header>
                            <h3><a href="#"><?php print_r($art['title']) ?></a></h3>
                        </header>
                        <a href="#" class="image"><img style="width: 100%" src="<?php print_r('http://app.jcgc-developpeur.com'.$art['img_url']); ?>" alt="" /></a>
                        
                    </div>
                <?php endforeach; ?>
                <!--<div style="width: 33.333333%; margin-top: 40px">
                    <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                    </header>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    <hr/>
                </div>
                <div style="width: 33.333333%; margin-top: 40px">
                    <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                    </header>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    <hr/>
                </div>
                <div style="width: 33.333333%; margin-top: 40px">
                    <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                    </header>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    <hr/>
                </div>
                <div style="width: 33.333333%; margin-top: 40px">
                    <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                    </header>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    <hr/>
                </div>-->
            </div>
        </article>
    </section>
</div>
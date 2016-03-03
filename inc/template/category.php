<?php //@include '../../function/init.php';     ?> 
<!-- Main -->
<div id="main">
    <section>
        <article class="">
            <div class="title" style="text-align: center"><h2>Category</h2></div>
            <div class="row" style="text-align: center">
                <?php foreach (Category() as $art) : ?>
                    <div style="width: 13%; margin-top: 40px">
                        <header>
                            

                        </header>

                        <a href="#" class="image"><img style="width: 100%" src="<?php print_r('http://app.jcgc-developpeur.com' . $art['img_url']); ?>" alt="" /></a>
                        <div style="width: 100%; background-color: white; height: 50px;margin-top: -7px;">
                            <a href="">
                                <h3 style="padding-top: 13px;"><a href="#"><?php print_r($art['nom']) ?></a></h3>
                                <div class="author" style="background-color: <?php print_r('#'.$art['color']) ?>; width: 30px; height: 30px; z-index: 100000000; border-radius: 50px; float: right; margin-top: -40px; margin-right: 10px;">

                                </div>
                            </a>
                        </div>
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
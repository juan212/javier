<?php include '../function/init.php'; ?> 
<?php add('header'); ?>

    <?php add('menu'); ?>
    <?php $art = ArticleLast();?>
    <?php $date = str_replace('/', '-', $art[0]['date']); ?>
<body>

    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#"><?php print_r($art[0]['title']) ?></a></h2>
                    <h3><?php print_r($art[0]['subtitle']) ?></h3>
                    <p></p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01"><?php print_r($date) ?></time>
                    <a href="#" class="author"><span class="name"><?php print_r($art[0]['creator']) ?></span><img src="images/avatar.jpg" alt="" /></a>
                </div>
            </header>
            <a href="#" class="image featured"><img src="<?php print_r('http://app.jcgc-developpeur.com'.$art[0]['img_url']); ?>" alt="" /></a>
            <p><?php print_r(utf8_encode($art[0]['content'])); ?></p>
            <footer>
                <ul class="actions">
                    <li><a href="#" class="button big">Lire plus</a></li>
                </ul>
                <ul class="stats">
                    <!--<li><a href="#">General</a></li>-->
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <!--<li><a href="#" class="icon fa-comment">128</a></li>-->
                </ul>
            </footer>
        </article>

        <!-- About -->
        <section class="post">
            <h1>About</h1>
            <p>Ivritane est un projet qui a comme but promouvoir l'apprentissage de l'hébreu avec l'aide d'outils innovants et ludiques.</p>

            <p>Notre idée est de créer une plateforme de référence pour tout les étudiants d'hébreu en France et dans le monde entier, l'étudiant étant une partie active du projet !</p>

            <p>Le premier outil mis en ligne sera le journal « iton kal », un journal en hébreu simplifié, écrit par des étudiants d'hébreu avancés.</p>

            <p>Les étudiants rédigerons leurs articles une fois par semaine.</p>

            <p>Ces articles seront corrigés par de professeurs d'hébreu professionnels puis mises en ligne avec une liste de vocabulaire et un fichier MP3 pour faciliter le travail des lecteurs.</p>

            <p>C'est une manière de motiver d'un côté les étudiants avancés et leur permettre d'utiliser la langue avec un but pédagogique et utile à la fois, et d'un autre côté permettre aux étudiants moins avancés l'accès à un outil de travail intéressant et pratique.</p>

            <p>Les articles porteront sur l'actualité israélienne, française et mondiale ainsi que des articles d'intérêt culturel.</p>

            <p>Sur le site vous pouvez aussi trouver les informations sur les autres activités que nous proposons tels comme des stages d'hébreu à travers la musique israélienne, séjours linguistiques alternatifs en Israël, promenades thématiques à Paris et d'autres !   Le site ne vient dans aucun cas remplacer les cours face à face, l'idée étant plutôt de fournir un outil supplémentaire que chaque élève pourra exploiter chez lui, à son rythme.</p>
        </section>

        <section class="post">
            <article class="">
                <div class="title"><h2>chanson de la semaine</h2></div>
                <div class="row" style="">
                    <div style="width: 49%;">
                        <header>
                            <h3><a href="#">Vitae sed condimentum</a></h3>
                        </header>
                        <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                    </div>
                    <div style="width: 49%;">
                        <header>
                            <h3><a href="#">Description</a></h3>
                        </header>
                        <p>Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.</p>
                    </div>
                </div>
                <ul class="actions">
                    <li><a href="#" class="button big">Lire plus</a></li>
                </ul>
            </article>
            <hr/>
            <audio controls style="width: 100%;">
                <source src="horse.ogg" type="audio/ogg">
                <source src="horse.mp3" type="audio/mpeg">
            </audio>
        </section>

        <!-- Post -->
        <!--
                <article class="post">
                        <header>
                                <div class="title">
                                        <h2><a href="#">Elements</a></h2>
                                        <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                                </div>
                                <div class="meta">
                                        <time class="published" datetime="2015-10-18">October 18, 2015</time>
                                        <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg" alt="" /></a>
                                </div>
                        </header>

                        <section>
                                <h3>Text</h3>
                                <p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
                                This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
                                This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
                                <hr />
                                <p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
                                <hr />
                                <h2>Heading Level 2</h2>
                                <h3>Heading Level 3</h3>
                                <h4>Heading Level 4</h4>
                                <hr />
                                <h4>Blockquote</h4>
                                <blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
                                <h4>Preformatted</h4>
                                <pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
                        </section>

                        <section>
                                <h3>Lists</h3>
                                <div class="row">
                                        <div class="6u 12u$(medium)">
                                                <h4>Unordered</h4>
                                                <ul>
                                                        <li>Dolor pulvinar etiam.</li>
                                                        <li>Sagittis adipiscing.</li>
                                                        <li>Felis enim feugiat.</li>
                                                </ul>
                                                <h4>Alternate</h4>
                                                <ul class="alt">
                                                        <li>Dolor pulvinar etiam.</li>
                                                        <li>Sagittis adipiscing.</li>
                                                        <li>Felis enim feugiat.</li>
                                                </ul>
                                        </div>
                                        <div class="6u$ 12u$(medium)">
                                                <h4>Ordered</h4>
                                                <ol>
                                                        <li>Dolor pulvinar etiam.</li>
                                                        <li>Etiam vel felis viverra.</li>
                                                        <li>Felis enim feugiat.</li>
                                                        <li>Dolor pulvinar etiam.</li>
                                                        <li>Etiam vel felis lorem.</li>
                                                        <li>Felis enim et feugiat.</li>
                                                </ol>
                                                <h4>Icons</h4>
                                                <ul class="icons">
                                                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                                        <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
                                                </ul>
                                        </div>
                                </div>
                                <h3>Actions</h3>
                                <div class="row">
                                        <div class="6u 12u$(medium)">
                                                <ul class="actions">
                                                        <li><a href="#" class="button">Default</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                </ul>
                                                <ul class="actions small">
                                                        <li><a href="#" class="button small">Small</a></li>
                                                        <li><a href="#" class="button small">Small</a></li>
                                                        <li><a href="#" class="button small">Small</a></li>
                                                </ul>
                                                <ul class="actions vertical">
                                                        <li><a href="#" class="button">Default</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                        <li><a href="#" class="button">Default</a></li>
                                                </ul>
                                                <ul class="actions vertical small">
                                                        <li><a href="#" class="button small">Small</a></li>
                                                        <li><a href="#" class="button small">Small</a></li>
                                                        <li><a href="#" class="button small">Small</a></li>
                                                </ul>
                                        </div>
                                        <div class="6u 12u$(medium)">
                                                <ul class="actions vertical">
                                                        <li><a href="#" class="button fit">Default</a></li>
                                                        <li><a href="#" class="button fit">Default</a></li>
                                                </ul>
                                                <ul class="actions vertical small">
                                                        <li><a href="#" class="button small fit">Small</a></li>
                                                        <li><a href="#" class="button small fit">Small</a></li>
                                                </ul>
                                        </div>
                                </div>
                        </section>

                        <section>
                                <h3>Table</h3>
                                <h4>Default</h4>
                                <div class="table-wrapper">
                                        <table>
                                                <thead>
                                                        <tr>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                                <th>Price</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <td>Item One</td>
                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                <td>29.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Two</td>
                                                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                                <td>19.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Three</td>
                                                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                                                <td>29.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Four</td>
                                                                <td>Vitae integer tempus condimentum.</td>
                                                                <td>19.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Five</td>
                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                <td>29.99</td>
                                                        </tr>
                                                </tbody>
                                                <tfoot>
                                                        <tr>
                                                                <td colspan="2"></td>
                                                                <td>100.00</td>
                                                        </tr>
                                                </tfoot>
                                        </table>
                                </div>

                                <h4>Alternate</h4>
                                <div class="table-wrapper">
                                        <table class="alt">
                                                <thead>
                                                        <tr>
                                                                <th>Name</th>
                                                                <th>Description</th>
                                                                <th>Price</th>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                                <td>Item One</td>
                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                <td>29.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Two</td>
                                                                <td>Vis ac commodo adipiscing arcu aliquet.</td>
                                                                <td>19.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Three</td>
                                                                <td> Morbi faucibus arcu accumsan lorem.</td>
                                                                <td>29.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Four</td>
                                                                <td>Vitae integer tempus condimentum.</td>
                                                                <td>19.99</td>
                                                        </tr>
                                                        <tr>
                                                                <td>Item Five</td>
                                                                <td>Ante turpis integer aliquet porttitor.</td>
                                                                <td>29.99</td>
                                                        </tr>
                                                </tbody>
                                                <tfoot>
                                                        <tr>
                                                                <td colspan="2"></td>
                                                                <td>100.00</td>
                                                        </tr>
                                                </tfoot>
                                        </table>
                                </div>
                        </section>

                        <section>
                                <h3>Buttons</h3>
                                <ul class="actions">
                                        <li><a href="#" class="button big">Big</a></li>
                                        <li><a href="#" class="button">Default</a></li>
                                        <li><a href="#" class="button small">Small</a></li>
                                </ul>
                                <ul class="actions fit">
                                        <li><a href="#" class="button fit">Fit</a></li>
                                        <li><a href="#" class="button fit">Fit</a></li>
                                        <li><a href="#" class="button fit">Fit</a></li>
                                </ul>
                                <ul class="actions fit small">
                                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                                        <li><a href="#" class="button fit small">Fit + Small</a></li>
                                </ul>
                                <ul class="actions">
                                        <li><a href="#" class="button icon fa-download">Icon</a></li>
                                        <li><a href="#" class="button icon fa-upload">Icon</a></li>
                                        <li><a href="#" class="button icon fa-save">Icon</a></li>
                                </ul>
                                <ul class="actions">
                                        <li><span class="button disabled">Disabled</span></li>
                                        <li><span class="button disabled icon fa-download">Disabled</span></li>
                                </ul>
                        </section>

                        <section>
                                <h3>Form</h3>
                                <form method="post" action="#">
                                        <div class="row uniform">
                                                <div class="6u 12u$(xsmall)">
                                                        <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                                </div>
                                                <div class="6u$ 12u$(xsmall)">
                                                        <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                                </div>
                                                <div class="12u$">
                                                        <div class="select-wrapper">
                                                                <select name="demo-category" id="demo-category">
                                                                        <option value="">- Category -</option>
                                                                        <option value="1">Manufacturing</option>
                                                                        <option value="1">Shipping</option>
                                                                        <option value="1">Administration</option>
                                                                        <option value="1">Human Resources</option>
                                                                </select>
                                                        </div>
                                                </div>
                                                <div class="4u 12u$(small)">
                                                        <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                                        <label for="demo-priority-low">Low</label>
                                                </div>
                                                <div class="4u 12u$(small)">
                                                        <input type="radio" id="demo-priority-normal" name="demo-priority">
                                                        <label for="demo-priority-normal">Normal</label>
                                                </div>
                                                <div class="4u$ 12u$(small)">
                                                        <input type="radio" id="demo-priority-high" name="demo-priority">
                                                        <label for="demo-priority-high">High</label>
                                                </div>
                                                <div class="6u 12u$(small)">
                                                        <input type="checkbox" id="demo-copy" name="demo-copy">
                                                        <label for="demo-copy">Email me a copy</label>
                                                </div>
                                                <div class="6u$ 12u$(small)">
                                                        <input type="checkbox" id="demo-human" name="demo-human" checked>
                                                        <label for="demo-human">Not a robot</label>
                                                </div>
                                                <div class="12u$">
                                                        <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                                </div>
                                                <div class="12u$">
                                                        <ul class="actions">
                                                                <li><input type="submit" value="Send Message" /></li>
                                                                <li><input type="reset" value="Reset" /></li>
                                                        </ul>
                                                </div>
                                        </div>
                                </form>
                        </section>

                        <section>
                                <h3>Image</h3>
                                <h4>Fit</h4>
                                <div class="box alt">
                                        <div class="row uniform">
                                                <div class="12u$"><span class="image fit"><img src="images/pic02.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                                                <div class="4u$"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                                                <div class="4u$"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic05.jpg" alt="" /></span></div>
                                                <div class="4u"><span class="image fit"><img src="images/pic06.jpg" alt="" /></span></div>
                                                <div class="4u$"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
                                        </div>
                                </div>
                                <h4>Left &amp; Right</h4>
                                <p><span class="image left"><img src="images/pic07.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                                <p><span class="image right"><img src="images/pic04.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
                        </section>

                </article>
        -->

        <!-- Pagination -->
        <ul class="actions pagination">
            <li><a href="" class="button big">Inscription</a></li>
            <!--<li><a href="#" class="button big next">Next Page</a></li>-->
        </ul>

    </div>

    <!-- Sidebar -->
    <section id="sidebar">

        <!-- Intro -->
        <section id="intro">
            <a href="#" class="logo"><img src="images/lambda.png" alt="" /></a>
            <header>
                <h2>Actualité</h2>
            </header>
        </section>

        <!-- Mini Posts -->
        <section>
            <div class="mini-posts">

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Vitae sed condimentum</a></h3>
                        <time class="published" datetime="2015-10-20">October 20, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Rutrum neque accumsan</a></h3>
                        <time class="published" datetime="2015-10-19">October 19, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Odio congue mattis</a></h3>
                        <time class="published" datetime="2015-10-18">October 18, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
                </article>

                <!-- Mini Post -->
                <article class="mini-post">
                    <header>
                        <h3><a href="#">Enim nisl veroeros</a></h3>
                        <time class="published" datetime="2015-10-17">October 17, 2015</time>
                        <a href="#" class="author"><img src="images/avatar.jpg" alt="" /></a>
                    </header>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                </article>

            </div>
        </section>

        <!-- Posts List -->
        <section id="intro">
            <header>
                <h2>Derniere Articles</h2>
            </header>
        </section>
        <section>
            
            <ul class="posts">
                <?php foreach (Article() as $art): ?>
                    <?php $date = str_replace('/', '-', $art['date']); ?>
                    <li>
                        <article>
                            <header>
                                <h3><a href="#"><?php print_r($art['title']) ?></a></h3>
                                <time class="published" datetime="2015-10-20"><?php print_r($date); ?></time>
                                <a href="">
                                    <div class="author" style="background-color: blue; width: 30px; height: 30px; z-index: 100000000; border-radius: 50px; float: right; margin-top: -50px; margin-right: 20px;">
                                    
                                    </div>
                                </a>
                            </header>
                            <a href="#" class="image"><img src="<?php print_r('http://app.jcgc-developpeur.com'.$art['img_url']); ?>" alt="" /></a>
                        </article>
                    </li>
                <?php endforeach; ?>
            </ul>
            <!--<li>
                    <article>
                        <header>
                            <h3><a href="#">Lorem ipsum fermentum ut nisl vitae</a></h3>
                            <time class="published" datetime="2015-10-20">October 20, 2015</time>
                        </header>
                        <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Convallis maximus nisl mattis nunc id lorem</a></h3>
                            <time class="published" datetime="2015-10-15">October 15, 2015</time>
                        </header>
                        <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Euismod amet placerat vivamus porttitor</a></h3>
                            <time class="published" datetime="2015-10-10">October 10, 2015</time>
                        </header>
                        <a href="#" class="image"><img src="images/pic10.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Magna enim accumsan tortor cursus ultricies</a></h3>
                            <time class="published" datetime="2015-10-08">October 8, 2015</time>
                        </header>
                        <a href="#" class="image"><img src="images/pic11.jpg" alt="" /></a>
                    </article>
                </li>
                <li>
                    <article>
                        <header>
                            <h3><a href="#">Congue ullam corper lorem ipsum dolor</a></h3>
                            <time class="published" datetime="2015-10-06">October 7, 2015</time>
                        </header>
                        <a href="#" class="image"><img src="images/pic12.jpg" alt="" /></a>
                    </article>
                </li>
            </ul> -->
        </section>


        <?php add('footer'); ?>
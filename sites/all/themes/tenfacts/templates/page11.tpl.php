<?php global $base_url; ?>
<!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<div class="tfa-container">
    <header>
        <div class="tfa-header-info">
            <h1 class="hide">Ten Facts Alive .com</h1>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand" href="#">Brand</a>
                    </div>
                    <div class="col-lg-9">
                        <div class="tfa-add tfa-add-728 pull-right">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-add-728X90.png" alt="">
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <div class="tfa-navbar">
            <nav class="navbar navbar-default" role="navigation">
                <h2 class="hide">Navigation</h2>
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, fotfa, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#">Entertainment</a></li>
                            <li class="active"><a href="#">Technology</a></li>
                            <li><a href="#">Nature</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">History</a></li>
                            <li><a href="#">Crime</a></li>
                        </ul>
                        <ul class="nav navbar-nav tfa-navbar-default tfa-social pull-right">
                            <li><a href="#" class="tfa-social-icon tfa-social-icon-fb" title="Facebook"></a></li>
                            <li><a href="#" class="tfa-social-icon tfa-social-icon-tw" title="Twitter"></a></li>
                            <li><a href="#" class="tfa-social-icon tfa-social-icon-li" title="Linkedin"></a></li>
                            <li><a href="#" class="tfa-social-icon tfa-social-icon-gp" title="Google Plus"></a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
            </nav>
        </div>
    </header>
    <section class="tfa-content">
        <div class="container">
            <div class="row">
                <section class="col-lg-9">
                    <div class="tfa-title">
                        <h2>Breaking the Surface (Casting)</h2>
                        <span>By <a href="#" title="">Robert Yuen</a> on <a href="#" title="">12 Dec, 2014</a></span>
                    </div>
                    <div class="tfa-article-pagination">
                        <div class="row">
                            <div class="col-lg-2">
                                <a href="#" class="tfa-prev pull-left" title="Prev"><span class="tfa-icon tfa-icon-link-arrow-left"></span> Prev</a>
                            </div>
                            <div class="col-lg-8">
                                <p><strong>0</strong>-8</p>
                            </div>
                            <div class="col-lg-2">
                                <a href="#" class="tfa-next pull-right" title="Next">Next <span class="tfa-icon tfa-icon-link-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="tfa-title tfa-subtitle">
                        <h2>1. Blind Welcomes Interactive Director Jason Headly</h2>
                        <span>By <a href="#" title="">Robert Yuen</a> on <a href="#" title="">12 Dec, 2014</a></span>
                    </div>
                    <div class="tfa-page-content">
                        <figure class="tfa-page-thumbnail">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img-large.png" alt="">
                        </figure>
<!--                        <div class="tfa-block tfa-block-ad">
                            <figure>
                                <img src="http://localhost/tfa/dev/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                                <figcaption>
                                    Advertisement
                                </figcaption>
                            </figure>
                        </div>-->
                        <?php print render($page['content']); ?>
                        <div class="tfa-block tfa-share">
                            <h3>Share it on:</h3>
                        </div>
                        <div class="tfa-block tfa-discuss">
                            <h3>Discussions:</h3>
                        </div>
                        <div class="tfa-block tfa-block-popular">
                            <h3>Related Articles</h3>
                            <div class="row">
                                <div class="col-lg-4">
                                    <article>
                                        <figure>
                                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                                        </figure>
                                        <div class="tfa-block-content">
                                            <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                            <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4">
                                    <article>
                                        <figure>
                                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                                        </figure>
                                        <div class="tfa-block-content">
                                            <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                            <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-lg-4">
                                    <article>
                                        <figure>
                                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                                        </figure>
                                        <div class="tfa-block-content">
                                            <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                            <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            <div class="tfa-seemore">
                                <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </section>
                <aside class="col-lg-3">
                    <div class="tfa-block">
                        <h3>From The Categories</h3>
                        <div id="tfa-owl" class="owl-carousel">
                            <div class="item">
                                <article class="tfa-block tfa-block-article">
                                    <figure>
                                        <div class="tfa-article-link-overlay">
                                            <a href="#" class="tfa-icon tfa-icon-link"> </a>
                                        </div>
                                        <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                                    </figure>
                                    <div class="tfa-block-content">
                                        <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                        <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="item">
                                <article class="tfa-block tfa-block-article">
                                    <figure>
                                        <div class="tfa-article-link-overlay">
                                            <a href="#" class="tfa-icon tfa-icon-link"> </a>
                                        </div>
                                        <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                                    </figure>
                                    <div class="tfa-block-content">
                                        <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                        <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="tfa-seemore">
                            <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>
                        </div>
                    </div>
                    <div class="tfa-block tfa-block-popular">
                        <h3>Popular on <strong>Tenfactsalive</strong></h3>
                        <article>
                            <figure>
                                <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                            </figure>
                            <div class="tfa-block-content">
                                <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                            </div>
                        </article>
                        <article>
                            <figure>
                                <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                            </figure>
                            <div class="tfa-block-content">
                                <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                            </div>
                        </article>
                        <article>
                            <figure>
                                <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                            </figure>
                            <div class="tfa-block-content">
                                <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>
                                <h4><a href="#" title="Breaking the Surface">Breaking the Surface</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>
                            </div>
                        </article>
                        <div class="tfa-seemore">
                            <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>
                        </div>
                    </div>
                    <div class="tfa-block tfa-block-ad">
                        <figure>
                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">
                            <figcaption>
                                Advertisement
                            </figcaption>
                        </figure>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <p>(c) Copyright 2014 @ <strong><a href="#" title="ENFACTSALIVE.com">TENFACTSALIVE.com</a></strong></p>
                </div>
                <div class="col-lg-4">
                    <nav class="navbar navbar-default">
                        <ul class="nav navbar-nav tfa-navbar-default pull-right">
                            <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
                            <li><a href="#" title="Contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</div>
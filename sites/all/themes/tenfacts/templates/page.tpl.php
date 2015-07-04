<?php global $base_url; ?>
<!--[if lt IE 7]>

    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>

<![endif]-->



<!-- Add your site or application content here -->

<div class="tfa-container">

    <header>

        <div class="tfa-header-info">

            <h1 class="hide">Ten Facts Alive</h1>

            <div class="container">

                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-4">

                        <!-- Brand and toggle get grouped for better mobile display -->

                        <a class="navbar-brand" href="<?php echo $base_url; ?>">Brand</a>

                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-8">

                        <div class="tfa-add tfa-add-728 pull-right" style="width:100%;">

                   <?php if ($page['ad_leaderboard']): ?>
                   <?php print render($page['ad_leaderboard']); ?>
                   <?php endif; ?>
                        </div>

                    </div>

                </div>

            </div><!-- /.container-fluid -->

        </div>

        <div class="tfa-navbar">

            <nav class="navbar navbar-default" role="navigation">

                <h2 class="hide">Navigation</h2>

                <div class="container">

                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-4">
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

                            <div class="collapse navbar-collapse">

                                <ul class="nav navbar-nav" id="tfa-main-nav">

                                                        <?php
                                $menu = menu_navigation_links('main-menu');

                                                        foreach($menu as $man) {
                                                          $class = array();
                                                          echo "<li>". l($man['title'], $man['href'], array('attributes' => array('class' => $class)))."</li>";	

                                                         } ?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-3 hidden-sm col-xs-8">
                            <ul class="nav navbar-nav tfa-navbar-default tfa-social pull-right">
                                <li><a href="http://facebook.com/tenfactsalive" target="_blank" class="tfa-social-icon tfa-social-icon-fb" title="Facebook"></a></li>
                                <li><a href="https://twitter.com/tenfactsalive" target="_blank" class="tfa-social-icon tfa-social-icon-tw" title="Twitter"></a></li>
                                <li><a href="http://linkedin.com" target="_blank" class="tfa-social-icon tfa-social-icon-li" title="Linkedin"></a></li>
                                <li><a href="http://plus.google.com" target="_blank" class="tfa-social-icon tfa-social-icon-gp" title="Google Plus"></a></li>
                            </ul>
                        </div>
                    </div>

                  </div><!-- /.container-fluid -->

            </nav>

        </div>

    </header>

    <section class="tfa-content">

        <div class="container">

            <div class="row">

                <section class="col-lg-9 col-sm-8">

                   <?php if ($page['masonry']): ?>
                   <?php print render($page['masonry']); ?>
                   <?php endif; ?>
                 
                 <?php if ($page['top_ad']): ?>
                   <?php print render($page['top_ad']); ?>
                   <?php endif; ?>
                 
                   
                   <div class="tfa-title">
                   
                       <h2><?php print render($title) ?></h2>
                       <?php if($node->type == 'list_parent_article') {
						   $user = user_load($node->uid)
						    ?>
                        <span>By <?php echo l($user->name, 'user/'.$user->uid); ?></span>
                        <?php } ?>
                        
                        <?php if($tabs): ?>
                        <?php print render($tabs);  ?>
                        <?php endif; ?>
                    </div>
                    <?php print render($page['content']); ?>

                </section>

                <aside class="col-lg-3 col-sm-4">

 <?php if ($page['ad_rihgtbar']): ?>
                   <?php print render($page['ad_rihgtbar']); ?>
                   <?php endif; ?><br />


                   <?php if ($page['random']): ?>
                   <?php print render($page['random']); ?>
                   <?php endif; ?>

                    <div class="tfa-block tfa-block-popular">

                        <h3>Popular on <strong>Tenfactsalive</strong></h3>

                        <?php if ($page['popular']): ?>
					   <?php print render($page['popular']); ?>
                       <?php endif; ?>

                        <!--<div class="tfa-seemore">

                            <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>

                        </div>-->

                    </div>

                    <div class="tfa-block tfa-block-ad">

                        <!--<figure>

                            <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                            <figcaption>

                                Advertisement

                            </figcaption>

                        </figure>-->

                    </div>

                </aside>

            </div>

        </div>

    </section>

    <footer>

        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-sm-8">

                    <p>Copyright <?php echo date('Y'); ?> @ <strong><a href="<?php echo $base_url; ?>" title="ENFACTSALIVE.com">TENFACTSALIVE.com</a></strong></p>

                </div>

                <div class="col-lg-4 col-sm-4">

                    <nav class="navbar navbar-default">

                        <ul class="nav navbar-nav tfa-navbar-default">

                              <li><?php echo l('Contact us', 'node/68'); ?></li>

                            <li><?php echo l('Privacy Policy', 'node/69'); ?></li>

                        </ul>

                    </nav>

                </div>

            </div>

        </div>

    </footer>

</div>

<?php if(arg(0) == 'node') { 
?>
<script type="text/javascript">
jQuery(function(){
	
	if(jQuery('li.pager-next a').length){
			
	}else{
	 //alert("hello");
	  jQuery('li.pager-next').html('<a title="Go to next page" href="<?php echo get_next_random_link(arg(1)); ?>">next</a>');	
	}
})
</script>
<?php } ?>
<?php 
if(count($vars) > 0){ ?>

    <div class="row" id="tfa-masnory">
				
                  <?php 
				  foreach($vars as $var) { 
				  		$node = node_load($var->nid);
						
						$files = field_get_items('node', $node, 'field_parent_list_slide_image');
						if (!empty($files)) {
						
										foreach ($files as $keys => $value):
						
						
											$imageOutput = field_view_value('node', $node, 'field_parent_list_slide_image', $files[$keys], array(
												'type' => 'image',
												'settings' => array(
												'image_style' => 'main_factsthumb', //place your image style here					
												'image_link' => 'content',
												),
											));
										endforeach;
									}
       
						
				  ?>
                  
                        <div class="col-lg-4 col-md-4 col-sm-6 tfa-masnory-item">

                            <article class="tfa-block tfa-block-article">

                                <figure>

                                    <div class="tfa-article-link-overlay">

                                        <!--<a href="#" class="tfa-icon tfa-icon-link"> </a>-->
										<?php echo l('', 'node/'.$node->nid,  array('attributes' => array('class' => 'tfa-icon', 'tfa-icon-link'))) ?>
                                    </div>

                                    <?php print render($imageOutput);  ?>

                                </figure>

                                <div class="tfa-block-content">

                                    <span class="author">By <?php  echo l(user_load($var->uid)->name, 'user/'.$var->uid); ?></span>

                                    <h3><?php echo l($node->title, 'node/'.$var->nid) ?></h3>

                                    <p><?php echo strip_tags(substr($node->field_list_description['und'][0]['value'], 0, 100)); ?>..</p>

                                </div>

                            </article>

                        </div>
                        
                 <?php }  ?>

<div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <div class="tfa-block tfa-block-ad">

                                <figure>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Masonry custom fit screen -->
<ins class="adsbygoogle"
     style="display:inline-block;width:262px;height:360px"
     data-ad-client="ca-pub-5754004360155485"
     data-ad-slot="9569334851"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
                                   
                                </figure>

                            </div>

                        </div>

                      <!--  <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <article class="tfa-block tfa-block-article">

                                <figure>

                                    <div class="tfa-article-link-overlay">

                                        <a href="#" class="tfa-icon tfa-icon-link"> </a>

                                    </div>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                </figure>

                                <div class="tfa-block-content">

                                    <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>

                                    <h3><a href="#" title="Breaking the Surface">Breaking the Surface</a></h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>

                                </div>

                            </article>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <div class="tfa-block tfa-block-ad">

                                <figure>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                    <figcaption>

                                        Advertisement

                                    </figcaption>

                                </figure>

                            </div>

                        </div>-->

                      <!--  <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <article class="tfa-block tfa-block-article">

                                <figure>

                                    <div class="tfa-article-link-overlay">

                                        <a href="#" class="tfa-icon tfa-icon-link"> </a>

                                    </div>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                </figure>

                                <div class="tfa-block-content">

                                    <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>

                                    <h3><a href="#" title="Breaking the Surface">Breaking the Surface</a></h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>

                                </div>

                            </article>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <article class="tfa-block tfa-block-article">

                                <figure>

                                    <div class="tfa-article-link-overlay">

                                        <a href="#" class="tfa-icon tfa-icon-link"> </a>

                                    </div>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                </figure>

                                <div class="tfa-block-content">

                                    <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>

                                    <h3><a href="#" title="Breaking the Surface">Breaking the Surface</a></h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>

                                </div>

                            </article>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <article class="tfa-block tfa-block-article">

                                <figure>

                                    <div class="tfa-article-link-overlay">

                                        <a href="#" class="tfa-icon tfa-icon-link"> </a>

                                    </div>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                </figure>

                                <div class="tfa-block-content">

                                    <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>

                                    <h3><a href="#" title="Breaking the Surface">Breaking the Surface</a></h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>

                                </div>

                            </article>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <div class="tfa-block tfa-block-ad">

                                <figure>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                    <figcaption>

                                        Advertisement

                                    </figcaption>

                                </figure>

                            </div>

                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4 tfa-masnory-item">

                            <article class="tfa-block tfa-block-article">

                                <figure>

                                    <div class="tfa-article-link-overlay">

                                        <a href="#" class="tfa-icon tfa-icon-link"> </a>

                                    </div>

                                    <img src="http://tenfactsalive.com/sites/all/themes/tenfacts/img/tfa-article-img.png" alt="">

                                </figure>

                                <div class="tfa-block-content">

                                    <span class="author">By <a href="#" title="Robert Yuen">Robert Yuen</a></span>

                                    <h3><a href="#" title="Breaking the Surface">Breaking the Surface</a></h3>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>

                                </div>

                            </article>

                        </div>-->

                    </div>

                  <!--  <div class="pagination">-->
				<?php
                     echo $pager;
                ?>

                   <!-- </div>-->
                  <?php } else {
						echo "<em>No articles has assigned to this category yet.</em>"; 
					}
				   ?>
                    
                    
                    
                    
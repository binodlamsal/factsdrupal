<?php global $base_url; ?>
<!--<div class="tfa-article-pagination">
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
                    </div>-->
                    <!--<div class="tfa-title tfa-subtitle">
                        <h2>1. Blind Welcomes Interactive Director Jason Headly</h2>
                        <span>By <a href="#" title="">Robert Yuen</a> on <a href="#" title="">12 Dec, 2014</a></span>
                    </div>-->
                    <div class="tfa-page-content">
                       <!-- <figure class="tfa-page-thumbnail">
                            <img src="<?php echo $base_url; ?>/sites/all/themes/tenfacts/img/tfa-article-img-large.png" alt="">
                        </figure>-->
                        
                        
                        
                        <div class="tfa-block tfa-share">
                            <h3>Share it on:</h3>
                            <!-- Go to www.addthis.com/dashboard to customize your tools -->
							<div class="addthis_sharing_toolbox"></div>
                            <?php //print render($content['sharethis']); ?>
                        </div>
                       <!-- <div class="tfa-block tfa-discuss">
                            <h3>Discussions:</h3>
                            <?php //print render($content['disqus']); ?>
                        </div>-->
                         <div class="tfa-block tfa-discuss">
                           <!--<h3>Discussions:</h3>-->
                            <div id="contentad46812"></div>
<script type="text/javascript">
    (function() {
        var params =
        {
            id: "f6563c36-cef8-4862-870a-13817deb97bf",
            d:  "dGVuZmFjdHNhbGl2ZS5jb20=",
            wid: "46812",
            cb: (new Date()).getTime()
        };

        var qs="";
        for(var key in params){qs+=key+"="+params[key]+"&"}
        qs=qs.substring(0,qs.length-1);
        var s = document.createElement("script");
        s.type= 'text/javascript';
        s.src = "http://api.content.ad/Scripts/widget.aspx?" + qs;
        s.async = true;
        document.getElementById("contentad46812").appendChild(s);
    })();
</script>
                        </div>
                        <div class="tfa-block tfa-block-popular">
                            <h3>Related Articles</h3>
                            <div class="row">
                              
                              <?php foreach (get_related_articles() as $articles) {
								  $node = node_load($articles->nid);
								  $files = field_get_items('node', $node, 'field_parent_list_slide_image');
						if (!empty($files)) {
						
										foreach ($files as $keys => $value):
						
						
											$imageOutput = field_view_value('node', $node, 'field_parent_list_slide_image', $files[$keys], array(
												'type' => 'image',
												'settings' => array(
												'image_style' => 'popular_thumb', //place your image style here					
												'image_link' => 'content',
												),
											));
										endforeach;
									}
								  
								  ?>
                              
                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                    <article>
                                        <figure>
                                            <?php print render($imageOutput);  ?>
                                        </figure>
                                        <div class="tfa-block-content">
                                           <!--<span class="author">By <?php  echo l(user_load($node->uid)->name, 'user/'.$var->uid); ?></span>-->
                                            <h4><?php echo l($node->title, 'node/'.$node->nid) ?></h4>
                                            <!--<p><?php  echo substr($node->field_list_description['und'][0]['value'], 0, 80) ?>..</p>-->
                                        </div>
                                    </article>
                                </div>
                                
                                <?php } ?>
                              
                            </div>
                            <!--<div class="tfa-seemore">
                                <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>
                            </div>-->
                        </div>
                    </div>
               
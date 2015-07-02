
  <div class="tfa-block">
					
                        <h3>Random From Categories</h3>

                        <div id="tfa-owl" class="owl-carousel">
							
                            <?php foreach($vars as $var) { 
								  
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
                            <div class="item">

                                <article class="tfa-block tfa-block-article">

                                    <figure>

                                        <div class="tfa-article-link-overlay">

                                            <?php echo l('', 'node/'.$node->nid,  array('attributes' => array('class' => array('tfa-icon', 'tfa-icon-link')))) ?>

                                        </div>

                                        <?php print render($imageOutput); ?>

                                    </figure>

                                    <div class="tfa-block-content">

                                         <!--<span class="author">By <?php  echo l(user_load($var->uid)->name, 'user/'.$var->uid); ?></span>-->

                                       <h4><?php echo l($node->title, 'node/'.$var->nid) ?></h4>

                                    <p><?php echo strip_tags(substr($node->field_list_description['und'][0]['value'], 0, 100)); ?>..</p>

                                    </div>

                                </article>

                            </div>

                           <?php } ?>
                        </div>

                       <div class="tfa-seemore">

                           <!-- <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>-->

                        </div>

                    </div>


                     <?php foreach($vars as $var) { 
					  	
						$node = node_load($var->nid);
						
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
                      
                        <article>

                            <figure>

                                <?php print render($imageOutput);  ?>

                            </figure>

                            <div class="tfa-block-content">

                               <!-- <span class="author">By <?php  echo l(user_load($var->uid)->name, 'user/'.$var->uid); ?></span>-->

                                <h4><?php echo l($node->title, 'node/'.$var->nid) ?></h4>

                              <!--  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut magna aliqua.</p>-->

                            </div>

                        </article>
                        
                       <?php } ?> 
                       
                        <div class="tfa-seemore">

                          <!--  <a href="#" title="See All">See More <span class="tfa-icon tfa-icon-link-arrow"></span></a>-->

                        </div>
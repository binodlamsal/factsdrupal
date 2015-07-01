<?php

global $base_url;

/**

 * @file

 * template.php

 */



//Theme URLs

define("PATH_CSS", $base_url."/".path_to_theme() . "/css/");

define("PATH_JS", $base_url."/".path_to_theme() . "/js/");

define("PATH_THIRDPARTY", $base_url."/".path_to_theme() . "/thirdparty/");



/*

 * Preprocess function for html.tpl.php 

 */

function tenfacts_preprocess_html(&$vars) {

    

    //Stylesheets

    //Global Stylesheets

    drupal_add_css( 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic', array(

        'scope' => 'header',

        'weight' => 0

    ));

	

	 /* drupal_add_css( 'http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext', array(

        'scope' => 'header',

        'weight' => 0

    ));*/

	

    drupal_add_css(PATH_CSS . 'tfa-theme.css', array('group' => CSS_THEME, 'type' => 'external', 'weight' => '100'));
	drupal_add_css(PATH_CSS . 'custom.css', array('group' => CSS_THEME, 'type' => 'external', 'weight' => '101'));

    



    //Javascript

   /* drupal_add_js(PATH_THIRDPARTY.'jquery/js/jquery-1.10.2.min.js', array(

        'scope' => 'footer',

        'weight' => 100

    ));*/

    

    //Masnory

    drupal_add_js(PATH_THIRDPARTY.'masonry/js/imagesloaded.pkgd.min.js', array(

        'scope' => 'footer',

        'weight' => 101

    ));

    drupal_add_js(PATH_THIRDPARTY.'masonry/js/masonry.pkgd.min.js', array(

        'scope' => 'footer',

        'weight' => 102

    ));

    drupal_add_js(PATH_THIRDPARTY.'jpanel-menu/js/jquery.jpanelmenu.js', array(

        'scope' => 'footer',

        'weight' => 103

    ));

    drupal_add_js(PATH_JS . 'tfa-theme.js', array(

        'scope' => 'footer',

        'weight' => 200

    ));

    

    //Owl Slider

    drupal_add_css(PATH_THIRDPARTY . 'owl-carousel/owl.carousel.css', array('scope' => 'header', 'type' => 'external', 'weight' => '200'));

    drupal_add_css(PATH_THIRDPARTY . 'owl-carousel/owl.theme.css', array('scope' => 'header', 'type' => 'external', 'weight' => '201'));

    

    drupal_add_js(PATH_THIRDPARTY . 'owl-carousel/owl.carousel.js', array(

        'scope' => 'footer',

        'weight' => 105

    ));
	
	
	if(arg(0) == 'node'){
	$n = arg(1);
	$node = node_load($n);
	$title = $node->title;
	 /* echo "<pre>";
	  print_r($node);*/
	  if($node->type == 'list_parent_article'){
		  
		//This is the changes made for making the meta tags proper//
		  /*echo "<pre>";
		  print_r($node); exit;*/
		  if(isset($_GET['page'])){
			  $page = $_GET['page'];
			  $query = db_select('node', 'n');
			  $query->fields('n');
			  $query->leftJoin('field_data_field_parent_article_reference', 'c', '(n.nid = c.entity_id )');
			  $query->condition('n.type', 'list_child_article', '=');
			  $query->condition('n.status', '0', '=');
			  $query->condition('c.field_parent_article_reference_nid', $n);
			  
			  $result = $query
						//->limit(10)
						->execute()
						->fetchAll(); 
			  $keyarray = array();
			  foreach($result as $res){
					$node = node_load($res->nid);
				    $keyarray[$node->weight_weight] = $node->nid;
			  }	
			  
			  ksort($keyarray);
			 
			  $i = 0;
			  foreach($keyarray as $key){
				
				 if($i == $page){
					
					$valueforseo = $key; 	 
				 } 
				  $i++;
			  }
			  
			 
			$vars['head_title'] = node_load($valueforseo)->field_slide_short_description['und'][0]['value']." | ".$title;
			
			
		  }
	  }
   }

}



//Hooks

function tenfacts_js_alter(&$javascript) {

    //change bootstrap.js path.

    $javascript['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js']['scope'] = 'footer';

    $javascript['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js']['group'] = 100;

    $javascript['//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js']['weight'] = 0.0055;

}



function tenfacts_preprocess_page(&$vars){

	if((arg(0)=='taxonomy') && (arg(1) == 'term')) {

		$vars['theme_hook_suggestions'][] = 'page__taxonomyterm';

	}

}



function get_related_articles($catId){

  $query = db_select('node', 'n');

  $query->fields('n');

  $query->condition('n.type', 'list_parent_article', '=');

  $query->condition('n.status', '1', '=');

  $result = $query->range(0,3)

            ->orderBy('n.nid', 'DESC')

			->execute()

            ->fetchAll();

  

  return $result;

}


/**
 * Implement hook_html_head_alter().
 */
function tenfacts_html_head_alter(&$head) {
  // Simplify the meta tag for character encoding.
  if(arg(0) == 'node'){
	$n = arg(1);
	$node = node_load($n);
	
	  if($node->type == 'list_parent_article'){
		  
		//This is the changes made for making the meta tags proper//
		  
		  //$head['metatag_canonical']['#value'] = $head['metatag_canonical']['#value'];
		  if(isset($_GET['page'])){
			  $page = $_GET['page'];
			  $query = db_select('node', 'n');
			  $query->fields('n');
			  $query->leftJoin('field_data_field_parent_article_reference', 'c', '(n.nid = c.entity_id )');
			  $query->condition('n.type', 'list_child_article', '=');
			  $query->condition('n.status', '0', '=');
			  $query->condition('c.field_parent_article_reference_nid', $n);
			  
			  $result = $query
						//->limit(10)
						->execute()
						->fetchAll(); 
						
			 
			  $keyarray = array();
			  foreach($result as $res){
				  
					$node1 = node_load($res->nid);
				  
				    $keyarray[$node1->weight_weight] = $node1->nid;
			  }	
			  
			  
			  ksort($keyarray);
			  
			  /*echo "<pre>";
			  print_r($keyarray); exit;*/
			 
			  $i = 0;
			  foreach($keyarray as $key){
				
				//echo node_load($key)->title."-";
				 if($i == $page){
					
					$valueforseo = $key; 	 
				 } 
				  $i++;
			  }
			  
			  
			   
			 $head['metatag_description'] = array(
				'#theme' => 'metatag',
				'#tag'   => 'meta',
				'#id'    => 'metatag:description',
				'#name'  => 'description',
				'#value' => substr(strip_tags(node_load($valueforseo)->field_slide_body_text['und'][0]['value']), 0, 200),
				'#type' => 'html_tag'	
		     );
			 
			  $head['metatag_abstract'] = array(
				'#theme' => 'metatag',
				'#tag'   => 'meta',
				'#id'    => 'metatag:abstract',
				'#name'  => 'abstract',
				'#value' => node_load($valueforseo)->field_slide_short_description['und'][0]['value'],
				'#type' => 'html_tag'	
		     );
			 
			 $canonical = $_SERVER['HTTP_HOST'] . request_uri();
			// echo $canonical; 
			 $head['metatag_canonical']['#value'] = "http://".$canonical; 
			 
	    $head['metatag_og:title']['#value'] = node_load($valueforseo)->field_slide_short_description['und'][0]['value']." | ".$node->title;
		$head['metatag_og:image'] = array(
			'#theme' => 'metatag_opengraph',
			'#tag'   => 'meta',
			'#id'    => 'metatag_og:image',
			'#name'  => 'og:image',
            '#value' => image_style_url('open_graph', node_load($valueforseo)->field_slide_image['und'][0]['uri']),
            '#type' => 'html_tag'	
		);
		
		$head['metatag_og:description'] = array(
			'#theme' => 'metatag_opengraph',
			'#tag'   => 'meta',
			'#id'    => 'metatag_og:description',
			'#name'  => 'og:description',
            '#value' => substr(strip_tags(node_load($valueforseo)->field_slide_body_text['und'][0]['value']), 0, 200),
            '#type' => 'html_tag'	
		);
			 
			 
			
		  } else {
		   
	 	  
	  	$head['metatag_og:title']['#value'] = $node->field_parent_list_short_title['und'][0]['value'];
		$head['metatag_og:image'] = array(
			'#theme' => 'metatag_opengraph',
			'#tag'   => 'meta',
			'#id'    => 'metatag_og:image',
			'#name'  => 'og:image',
            '#value' => image_style_url('open_graph', $node->field_parent_list_slide_image['und'][0]['uri']),
            '#type' => 'html_tag'	
		);
		
		$head['metatag_og:description'] = array(
			'#theme' => 'metatag_opengraph',
			'#tag'   => 'meta',
			'#id'    => 'metatag_og:description',
			'#name'  => 'og:description',
            '#value' => substr(strip_tags($node->field_list_description['und'][0]['value']), 0, 200),
            '#type' => 'html_tag'	
		);
		}
	  }  else if($node->type == 'article'){
		$head['metatag_og:title']['#value'] = $node->field_short_title['und'][0]['value'];
		$head['metatag_og:image'] = array(
			'#theme' => 'metatag_opengraph',
			'#tag'   => 'meta',
			'#id'    => 'metatag_og:image',
			'#name'  => 'og:image',
            '#value' => image_style_url('open_graph', $node->field_image_summary['und'][0]['uri']),
            '#type' => 'html_tag'	
		);
		
		$head['metatag_og:description'] = array(
			'#theme' => 'metatag_opengraph',
			'#tag'   => 'meta',
			'#id'    => 'metatag_og:description',
			'#name'  => 'og:description',
            '#value' => substr(strip_tags($node->field_article_text['und'][0]['value']), 0, 200),
            '#type' => 'html_tag'	
		);
	 
	  }
	 
  }
  if (isset($head['system_meta_content_type']['#attributes']['content'])) {
    $head['system_meta_content_type']['#attributes'] = array('charset' => str_replace('text/html; charset=', '',    $head['system_meta_content_type']['#attributes']['content']));
  }
}


function get_next_random_link($id){
  global $base_url;

  $arg = $id;
  $node = node_load($arg);
  $tax = array();
  if($node->type == 'list_parent_article') {
  foreach($node->field_categories['und'] as $und){
	$tax[] = $und['tid'];	  
  }
  if(count($tax) > 0) {
  if((arg(0) == 'node') && is_numeric($arg)){
	 
	 $query = db_select('node', 'n');
     $query->fields('n');
     $query->leftJoin('field_data_field_categories', 'o', '(n.nid = o.entity_id )');
	 $query->condition('n.nid', $arg, '<>');
	 $query->condition('n.status', 1);
	 $query->condition('o.field_categories_tid', $tax, 'IN');
	 $result = $query
            ->range(0,1)
            ->orderRandom()
            ->execute()
            ->fetchAll();
			
  }	
 // print_r($result); exit;
  return $base_url."/node/".$result[0]->nid;
  
  }
  }
}
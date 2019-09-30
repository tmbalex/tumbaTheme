<?php

function load_stylesheets()
{
  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_scripts()
{
  wp_register_script('jqueryjs', get_template_directory_uri() . '/js/jquery.min.js', '', 1, true);
  wp_enqueue_script('jqueryjs');

  wp_register_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', '', 1, true);
  wp_enqueue_script('bootstrapjs');

  wp_register_script('customjs', get_template_directory_uri() . '/js/main.js', '', 1, true);
  wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'load_scripts');

function register_custom_menus() {
  register_nav_menus(
    array(
      'footer-menu' => __( 'Footer Menu' ),
      'mid_section-menu' => __( 'Mid Section Menu' )
    )
  );
}
add_action( 'init', 'register_custom_menus' );

// custom menu example @ https://digwp.com/2011/11/html-formatting-custom-menus/
function clean_custom_menus() {
	$menu_name = 'mid_section-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

    $category_index = 1;
    $subcategory_index = 1;
		foreach ((array) $menu_items as $key => $menu_item) {

      if($menu_item->menu_item_parent == 0){
        $categories_tabs_value .=
    		 '<li class="nav-item col">
    		    <a class="cat_tab nav-link' . (($category_index == 1) ? ' active' : '') . '" id="categories_tab_' . $category_index . '" data-toggle="tab" href="#categories_content_' . $category_index . '" role="tab" aria-controls="category_' . $category_index . '" aria-selected="true">' . $menu_item->title . '</a>
    		  </li>';
        $category_index ++;
        $subcategory_index = 1;
      }
      else{
        $subcategory_tabs_value[$menu_item->menu_item_parent] .= '
        <li class="nav-item col">
         <a class="subcat_tab nav-link' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_tab_' . $category_index . '_' . $subcategory_index . '" data-toggle="tab" href="#subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tab" aria-controls="subcategory_' . $category_index . '_' . $subcategory_index . '" aria-selected="true">
           ' . $menu_item->title . '
         </a>
        </li>';

        $subcategory_content_value[$menu_item->menu_item_parent] .= '
          <div class="subcat_content tab-pane fade show' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tabpanel" aria-labelledby="subcategory_' . $category_index . '_' . $subcategory_index . '-tab">
            ' . get_post_field('post_content', get_post_meta( $menu_item->ID, '_menu_item_object_id', true )) . '
          </div>';
        $subcategory_index++;
      }

		}

    $category_index = 1;
    foreach($subcategory_tabs_value as $index => $subcat_tab_elem){
      $categories_content_value .= '
      <div class="tab-pane fade show' . (($category_index == 1) ? ' active' : '') . '" id="categories_content_' . $category_index . '" role="tabpanel" aria-labelledby="category_' . $category_index . '-tab">
           <ul class="nav nav-tabs mid-nav-ul col-12 row" id="subcategories_tabs_' . $category_index . '" role="tablist">
             ' . $subcat_tab_elem . '
           </ul>

           ' . (($category_index == 1) ? '
           <div id="stones_holder" onclick="setState()">
             <div id="stones">
               <img id="stone_a" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_a.png"/>
               <img id="stone_b" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_b.png"/>
               <img id="stone_c" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_c.png"/>
               <img id="stone_d" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_d.png"/>
               <img id="stone_e" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_e.png"/>
               <img id="stone_f" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_f.png"/>
             </div>
           </div>' : '') . '

           <div class="tab-content col-12" id="subcategories_content_' . $category_index . '">
             ' . $subcategory_content_value[$index] . '
           </div>
      </div>';
      $category_index++;
    }





    $menu_list = '
    <!-- Mid section -->
      <div id="mid_section_toper" class="col-12"></div>
      <div id="mid_section" class="content-section">
        <div class="container text-center">
         <div class="row">

            <ul class="nav nav-tabs col-5 row" id="categories_tabs" role="tablist">
              ' . $categories_tabs_value . '
            </ul>

            <div class="tab-content col-12" id="categories_content">
              ' . $categories_content_value . '
            </div>

         </div>
         <script src="' . get_template_directory_uri() . '/js/mid_section_module_handler.js"></script>
        </div>
      </div>
      <div id="mid_section_bottom" class="col-12"></div>';

	} else {
		 $menu_list = '<!-- no list defined -->';
	}
	echo $menu_list;
}

// Short code for main menu
function mmenu_shortcode( $atts, $content = null){

  $menu_name = 'mid_section-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

    $category_index = 1;
    $subcategory_index = 1;
		foreach ((array) $menu_items as $key => $menu_item) {

      if($menu_item->menu_item_parent == 0){
        $categories_tabs_value .=
    		 '<li class="nav-item col">
    		    <a class="cat_tab nav-link' . (($category_index == 1) ? ' active' : '') . '" id="categories_tab_' . $category_index . '" data-toggle="tab" href="#categories_content_' . $category_index . '" role="tab" aria-controls="category_' . $category_index . '" aria-selected="true">' . $menu_item->title . '</a>
    		  </li>';
        $category_index ++;
        $subcategory_index = 1;
      }
      else{
        $subcategory_tabs_value[$menu_item->menu_item_parent] .= '
        <li class="nav-item col-12 col-md pl-5 pr-5 p-md-1 mid_section_page_headline row">
         <img src="' . get_template_directory_uri() . '/imgs/pile.png" class="mid_section_page_headline_image col-4 col-md-0" />
         <a class="subcat_tab nav-link col-8 col-md-12 mid_section_page_headline_text' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_tab_' . $category_index . '_' . $subcategory_index . '" data-toggle="tab" href="#subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tab" aria-controls="subcategory_' . $category_index . '_' . $subcategory_index . '" aria-selected="true">
           ' . $menu_item->title . '
         </a>
        </li>';

        $subcategory_content_value[$menu_item->menu_item_parent] .= '
          <div class="subcat_content tab-pane fade show' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tabpanel" aria-labelledby="subcategory_' . $category_index . '_' . $subcategory_index . '-tab">
            ' . get_post_field('post_content', get_post_meta( $menu_item->ID, '_menu_item_object_id', true )) . '
          </div>';
        $subcategory_index++;
      }

		}

    $category_index = 1;
    foreach($subcategory_tabs_value as $index => $subcat_tab_elem){
      $categories_content_value .= '
      <div class="tab-pane fade show' . (($category_index == 1) ? ' active' : '') . '" id="categories_content_' . $category_index . '" role="tabpanel" aria-labelledby="category_' . $category_index . '-tab">
           <ul class="nav nav-tabs mid-nav-ul col-12 row" id="subcategories_tabs_' . $category_index . '" role="tablist">
             ' . $subcat_tab_elem . '
           </ul>

           ' . (($category_index == 1) ? '
           <div id="stones_holder" onclick="setState()">
             <div id="stones">
               <img id="stone_a" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_a.png"/>
               <img id="stone_b" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_b.png"/>
               <img id="stone_c" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_c.png"/>
               <img id="stone_d" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_d.png"/>
               <img id="stone_e" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_e.png"/>
               <img id="stone_f" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_f.png"/>
             </div>
           </div>' : '') . '

           <div class="tab-content col-12" id="subcategories_content_' . $category_index . '">
             ' . $subcategory_content_value[$index] . '
           </div>
      </div>';
      $category_index++;
    }





    $menu_list = '
    <!-- Mid section -->
      <div id="mid_section_toper" class="col-12"></div>
      <div id="mid_section" class="content-section">
        <div class="container text-center">
         <div class="row">

            <ul class="nav nav-tabs col-10 col-md-5 row" id="categories_tabs" role="tablist">
              ' . $categories_tabs_value . '
            </ul>

            <div class="tab-content col-12" id="categories_content">
              ' . $categories_content_value . '
            </div>

         </div>
         <script src="' . get_template_directory_uri() . '/js/mid_section_module_handler.js"></script>
        </div>
      </div>
      <div id="mid_section_bottom" class="col-12"></div>';

	} else {
		 $menu_list = '<!-- no list defined -->';
	}
	return $menu_list;

  /*
  $args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => 34,
	    'order'          => 'ASC',
	    'orderby'        => 'menu_order'
	);
	$parent = new WP_Query( $args );

  $category_index = 1;
  $categories_tabs_value = '';
  $categories_content_value = '';
	if ( $parent->have_posts() ) :  while ( $parent->have_posts() ) : $parent->the_post();

		$categories_tabs_value .=
		 '<li class="nav-item col">
		    <a class="cat_tab nav-link' . (($category_index == 1) ? ' active' : '') . '" id="categories_tab_' . $category_index . '" data-toggle="tab" href="#categories_content_' . $category_index . '" role="tab" aria-controls="category_' . $category_index . '" aria-selected="true">' . get_the_title() . '</a>
		  </li>';

		$args2 = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => get_the_ID(),
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		);
		$parent2 = new WP_Query( $args2 );

    $subcategory_index = 1;
    $subcategory_tabs_value = "";
    $subcategory_content_value = "";
		if ( $parent2->have_posts() ) :  while ( $parent2->have_posts() ) : $parent2->the_post();

        $subcategory_tabs_value .= '
          <li class="nav-item col">
           <a class="subcat_tab nav-link' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_tab_' . $category_index . '_' . $subcategory_index . '" data-toggle="tab" href="#subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tab" aria-controls="subcategory_' . $category_index . '_' . $subcategory_index . '" aria-selected="true">
             ' . get_the_title() . '
           </a>
          </li>';

        $subcategory_content_value .= '
          <div class="subcat_content tab-pane fade show' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tabpanel" aria-labelledby="subcategory_' . $category_index . '_' . $subcategory_index . '-tab">
            ' . get_the_content() . '
          </div>';

      $subcategory_index++;
		endwhile;
		endif;

    $categories_content_value .= '

    <div class="tab-pane fade show' . (($category_index == 1) ? ' active' : '') . '" id="categories_content_' . $category_index . '" role="tabpanel" aria-labelledby="category_' . $category_index . '-tab">

         <ul class="nav nav-tabs mid-nav-ul col-12 row" id="subcategories_tabs_' . $category_index . '" role="tablist">
           ' . $subcategory_tabs_value . '
         </ul>

         ' . (($category_index == 1) ? '
         <div id="stones_holder" onclick="setState()">
           <div id="stones">
             <img id="stone_a" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_a.png"/>
             <img id="stone_b" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_b.png"/>
             <img id="stone_c" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_c.png"/>
             <img id="stone_d" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_d.png"/>
             <img id="stone_e" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_e.png"/>
             <img id="stone_f" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_f.png"/>
           </div>
         </div>' : '') . '

         <div class="tab-content col-12" id="subcategories_content_' . $category_index . '">
           ' . $subcategory_content_value . '
         </div>
    </div>';

    $category_index++;
	endwhile;
	endif;
  return '
    <!-- Mid section -->
      <div id="mid_section_toper" class="col-12"></div>
      <section id="mid_section" class="content-section">
        <div class="container text-center">
         <div class="row">

            <ul class="nav nav-tabs col-5 row" id="categories_tabs" role="tablist">
              ' . $categories_tabs_value . '
            </ul>

            <div class="tab-content col-12" id="categories_content">
              ' . $categories_content_value . '
            </div>

         </div>
         <script src="' . get_template_directory_uri() . '/js/mid_section_module_handler.js"></script>
        </div>
      </section>
      <div id="mid_section_bottom" class="col-12"></div>
    ';
    */
}
add_shortcode("mmenu", "mmenu_shortcode");

// Short code for outsiders
function outsiders_shortcode( $atts, $content = null){

  return '
    <!-- Another section -->
    <section class="content-section careers_section">
      <div class="container text-center">
        <div class="row text-white">
          <div class="col-12">
            <h2>Outsiders, come in</h2>
            <p><i class="fa fa-arrow-right"></i>CAREERS</p>
          </div>
        </div>
      </div>
    </section>
    ';
}
add_shortcode("outsiders", "outsiders_shortcode");



// Add Header text Section
function frontpage_headlines($wp_customize){
  $wp_customize->add_section('frontpage-headline-section', array(
    'title' => "Frontpage Settings"
  ));

  $wp_customize->add_setting('frontpage-top-headline', array(
    'default' => "Default Text for the top headline"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-top-headline-control', array(
    'label' => 'Top Headline',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-top-headline',
    'type' => 'textarea'
  )));

  $wp_customize->add_setting('frontpage-bottom-headline', array(
    'default' => "Default Text for the bottom headline"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-bottom-headline-control', array(
    'label' => 'Bottom Headline',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-bottom-headline',
    'type' => 'textarea'
  )));
}
add_action('customize_register', 'frontpage_headlines');

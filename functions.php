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

// Short code for main menu
function mmenu_shortcode( $atts, $content = null){

  $menu_name = 'mid_section-menu'; // specify custom menu slug
	if (($locations = get_nav_menu_locations()) && isset($locations[$menu_name])) {

		$menu = wp_get_nav_menu_object($locations[$menu_name]);
		$menu_items = wp_get_nav_menu_items($menu->term_id);

    $category_index = 1;
    foreach ((array) $menu_items as $key => $menu_item) {

      if($menu_item->menu_item_parent == 0){
        $categories_tabs_value .=
    		 '<li class="nav-item col">
    		    <a class="cat_tab nav-link' . (($category_index == 1) ? ' active' : '') . '" id="categories_tab_' . $category_index . '" data-toggle="tab" href="#categories_content_' . $category_index . '" role="tab" aria-controls="category_' . $category_index . '" aria-selected="true">' . $menu_item->title . '</a>
          </li> ';

        $category_stones_arangement[$category_index] = get_post_field('post_content', get_post_meta( $menu_item->ID, '_menu_item_object_id', true ));

        $category_index ++;
        $subcategory_index = 1;
      }
      else{
        $subcategory_tabs_value[$menu_item->menu_item_parent] .=
        '<div class="subcategory col-12 col-md-6" style="padding: 10px;">
          <a href="" style="margin-bottom: 10px;">' . $menu_item->title . '</a>
          <div>'
           . get_post_field('post_content', get_post_meta( $menu_item->ID, '_menu_item_object_id', true )) . '
          </div>
        </div>';
      }
    }

    $category_index = 1;
    foreach($subcategory_tabs_value as $index => $subcat_tab_elem){
      $categories_content_value .= '
      <div class="cat_tab tab-pane fade show' . (($category_index == 1) ? ' active' : '') . '" id="categories_content_' . $category_index . '" role="tabpanel" aria-labelledby="category_' . $category_index . '-tab">
           ' . $category_stone_arrangement . '

           <ul class="nav nav-tabs mid-nav-ul col-12 row" id="subcategories_tabs_' . $category_index . '" role="tablist">
             ' . $subcat_tab_elem . '
           </ul>

           <div class="tab-content col-12" id="subcategories_content_' . $category_index . '">
             ' . $subcategory_content_value[$index] . '
           </div>

           ' . $category_stones_arangement[$category_index] . '
      </div>';
      $category_index++;
    }

    // $category_index = 1;
		// foreach ((array) $menu_items as $key => $menu_item) {
    //
    //   if($menu_item->menu_item_parent == 0){
    //     $categories_tabs_value .=
    // 		 '<li class="nav-item col">
    // 		    <a class="cat_tab nav-link' . (($category_index == 1) ? ' active' : '') . '" id="categories_tab_' . $category_index . '" data-toggle="tab" href="#categories_content_' . $category_index . '" role="tab" aria-controls="category_' . $category_index . '" aria-selected="true">' . $menu_item->title . '</a>
    // 		  </li>';
    //     $category_index ++;
    //     $subcategory_index = 1;
    //   }
    //   else{
    //     $subcategory_tabs_value[$menu_item->menu_item_parent] .= '
    //     <li class="nav-item col-12 col-md pl-5 pr-5 p-md-1 mid_section_page_headline row">
    //      <img src="' . get_template_directory_uri() . '/imgs/pile.png" class="mid_section_page_headline_image col-4 col-md-0" />
    //      <a class="subcat_tab nav-link col-8 col-md-12 mid_section_page_headline_text' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_tab_' . $category_index . '_' . $subcategory_index . '" data-toggle="tab" href="#subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tab" aria-controls="subcategory_' . $category_index . '_' . $subcategory_index . '" aria-selected="true">
    //        ' . $menu_item->title . '
    //      </a>
    //     </li>';
    //
    //     $subcategory_content_value[$menu_item->menu_item_parent] .= '
    //       <div class="subcat_content tab-pane fade show' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tabpanel" aria-labelledby="subcategory_' . $category_index . '_' . $subcategory_index . '-tab">
    //         ' . get_post_field('post_content', get_post_meta( $menu_item->ID, '_menu_item_object_id', true )) . '
    //       </div>';
    //     $subcategory_index++;
    //   }
    //
		// }







    $menu_list = '
    <!-- Mid section -->
      <div id="mid_section_toper" class="col-12"></div>
      <div id="mid_section" class="content-section">
        <div class="container text-center">
         <div class="row">

            <div class="col-12">
              <ul class="nav nav-tabs col-10 row" id="categories_tabs" role="tablist">
                ' . $categories_tabs_value . '
              </ul>
            </div>

            <div id="stones_holder" style="margin: 0 auto;" onclick="setState()">
              <div id="stones">
                <img id="stone_a" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_a.png"/>
                <img id="stone_b" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_b.png"/>
                <img id="stone_c" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_c.png"/>
                <img id="stone_d" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_d.png"/>
                <img id="stone_e" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_e.png"/>
                <img id="stone_f" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_f.png"/>
              </div>
            </div>


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
}
add_shortcode("mmenu", "mmenu_shortcode"); //[mmenu]

// Short code for outsiders
function outsiders_shortcode( $atts, $content = null){

  return '
    <!-- Another section -->
    <section class="content-section careers_section">
      <div class="container text-center">
        <div class="row text-white">
          <div class="col-12">
            <h2>Outsiders, come in</h2>
            <a href="http://192.168.86.60/wrdprss/?page_id=339"><i class="fa fa-arrow-right"></i>CAREERS</a>
          </div>
        </div>
      </div>
    </section>
    ';
}
add_shortcode("outsiders", "outsiders_shortcode");



// Add Header text Section
function frontpage_headlines($wp_customize){


  //Section
  $wp_customize->add_section('frontpage-headline-section', array(
    'title' => "Frontpage Settings"
  ));

  //Under logo text
  $wp_customize->add_setting('frontpage-underlogo-text', array(
    'default' => "Default Text for the underlogo"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage--underlogo-text-control', array(
    'label' => 'Under logo Text',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-underlogo-text',
    'type' => 'textarea'
  )));

  //Top headline text
  $wp_customize->add_setting('frontpage-top-headline', array(
    'default' => "Default Text for the top headline"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-top-headline-control', array(
    'label' => 'Top Headline',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-top-headline',
    'type' => 'textarea'
  )));

  //Top headline link text
  $wp_customize->add_setting('frontpage-top-headline-link', array(
    'default' => "WHY TUMBA?"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-top-headline-link-control', array(
    'label' => 'Top Headline Link Text',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-top-headline-link',
    'type' => 'text'
  )));

  //Top headline link href
  $wp_customize->add_setting('frontpage-top-headline-link-href', array(
    'default' => "http://tumba.solutions"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-top-headline-link-href-control', array(
    'label' => 'Top Headline Link Location',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-top-headline-link-href',
    'type' => 'text'
  )));


  //Botom headline text
  $wp_customize->add_setting('frontpage-bottom-headline', array(
    'default' => "Default Text for the bottom headline"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-bottom-headline-control', array(
    'label' => 'Bottom Headline',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-bottom-headline',
    'type' => 'textarea'
  )));

  //Bottom headline link text
  $wp_customize->add_setting('frontpage-bottom-headline-link', array(
    'default' => "MANIFESTO"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-bottom-headline-link-control', array(
    'label' => 'Bottom Headline Link Text',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-bottom-headline-link',
    'type' => 'text'
  )));

  //Bottom headline link href
  $wp_customize->add_setting('frontpage-bottom-headline-link-href', array(
    'default' => "http://tumba.solutions"
  ));

  $wp_customize->add_control(new WP_Customize_control($wp_customize, 'frontpage-bottom-headline-link-href-control', array(
    'label' => 'Bottom Headline Link Location',
    'section' => 'frontpage-headline-section',
    'settings' => 'frontpage-bottom-headline-link-href',
    'type' => 'text'
  )));
}
add_action('customize_register', 'frontpage_headlines');

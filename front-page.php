<?php get_header(); ?>

 <!-- Header -->
  <!-- <header class="masthead d-flex p-5">

  </header> -->

  <?php //if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>

  <div class="thold">
    <section class="front-page-headline-section" style="max-width: none; text-shadow: 2px 2px 10px #00000033">
      <div style="max-width: 1280px; margin: 0 auto; padding: 60px;">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_inverted.png">
        </div>
        <p class="frontpage-top-headline-text" style="padding: 240px 200px; font-size: 52px; text-align: center;">
          <?php echo get_theme_mod('frontpage-underlogo-text')?>
        </p>
      </div>
    </section>
    <div id="scrlr"></div>
  </div>

  <section class="content-section front-page-section"  style="text-shadow: 2px 2px 10px #00000033">
    <div id="mid_section_toper_green" class="col-12" style="height: 60px;"></div>
      <div class="col-12" style="background: #00EDAE; z-index: 2; margin: 0 auto; padding: 0;">
        <div class="row" style="max-width: 1280px; margin: 0 auto; font-size: 36px; font-weight: bold; padding: 100px 20px 0; color: white;">
            <div class="col-3" style="text-align: center;">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/fb_icon.png" />
              <p style="font-weight: bold; padding: 0; font-size: 100px; line-height: 100px; margin-top: 60px;">10</p>
              <p style="font-size: 18px">Fortune 500 clients</p>
            </div>
            <div class="col-3" style="text-align: center;">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/fb_icon.png" />
              <p style="font-weight: bold; padding: 0; font-size: 100px; line-height: 100px; margin-top: 60px;">80</p>
              <p style="font-size: 18px">% loyal clients</p>
            </div>
            <div class="col-3" style="text-align: center;">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/fb_icon.png" />
              <p style="font-weight: bold; padding: 0; font-size: 100px; line-height: 100px; margin-top: 60px;">48</p>
              <p style="font-size: 18px">% business growth</p>
            </div>
            <div class="col-3" style="text-align: center;">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/fb_icon.png" />
              <p style="font-weight: bold; padding: 0; font-size: 100px; line-height: 100px; margin-top: 60px;">11</p>
              <p style="font-size: 18px">years of average on IT practice</p>
            </div>
        </div>
        <div style="max-width: 1280px; margin: 0 auto; font-size: 36px; padding: 50px 50px 100px; text-align: center;">
            <?php echo get_theme_mod('frontpage-top-headline')?>
            <a href="<?php echo get_theme_mod('frontpage-top-headline-link-href')?>">
              <?php echo get_theme_mod('frontpage-top-headline-link')?>
            </a>
        </div>
      </div>

    <?php
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
              <a href="http://192.168.86.60/wrdprss/?page_id=280"  style="margin-bottom: 10px;">' . $menu_item->title . '</a>
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
    	echo $menu_list;
    ?>

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

    <?php //if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php //the_content(); ?>
    <?php //endwhile; endif; ?>
  </section>



  <section class="front-page-bottom-headline-section" style="text-shadow: 2px 2px 10px #00000033">
    <div class="siema" style="width: 100%; max-width: 960px; margin: 100px auto;">
      <div style="background: url('<?php echo get_template_directory_uri() ?>/imgs/car_ind_icon.png') no-repeat top left 70px">
        <p style="display: block; margin: 0 auto; padding: 100px 0 0; width: 600px; font-size: 44px; font-weight: bold;">Let's talk about autonomous vehicles</p>
        <a style="padding: 10px 180px" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT</a>
      </div>
      <div style="background: url('<?php echo get_template_directory_uri() ?>/imgs/car_ind_icon.png') no-repeat top left 70px">
        <p style="display: block; margin: 0 auto; padding: 100px 0 0; width: 600px; font-size: 44px; font-weight: bold;">Let's talk about autonomous vehicles 2</p>
        <a style="padding: 10px 180px" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT</a>
      </div>
      <div style="background: url('<?php echo get_template_directory_uri() ?>/imgs/car_ind_icon.png') no-repeat top left 70px">
        <p style="display: block; margin: 0 auto; padding: 100px 0 0; width: 600px; font-size: 44px; font-weight: bold;">Let's talk about autonomous vehicles 3</p>
        <a style="padding: 10px 180px" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT</a>
      </div>
      <div style="background: url('<?php echo get_template_directory_uri() ?>/imgs/car_ind_icon.png') no-repeat top left 70px">
        <p style="display: block; margin: 0 auto; padding: 100px 0 0; width: 600px; font-size: 44px; font-weight: bold;">Let's talk about autonomous vehicles 4</p>
        <a style="padding: 10px 180px" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT</a>
      </div>
      <div style="background: url('<?php echo get_template_directory_uri() ?>/imgs/car_ind_icon.png') no-repeat top left 70px">
        <p style="display: block; margin: 0 auto; padding: 100px 0 0; width: 600px; font-size: 44px; font-weight: bold;">Let's talk about autonomous vehicles 5</p>
        <a style="padding: 10px 180px" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT</a>
      </div>
    </div>
  </section>

  <!-- <section class="content-section front-page-section">
    <?php wp_nav_menu( array( 'theme_location' => 'mid_section-menu', 'container_class' => 'new_menu_class' ) ); ?>
  </section> -->

  <!-- <section class="front-page-headline-section front-page-section">
    <p>
      <?php //echo get_theme_mod('frontpage-bottom-headline')?>
    </p>
  </section> -->

<?php get_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/js/siema.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      new Siema();
    });
    // $(function(){
    //   var maxMargin = $('#mid_section_toper').offset().top;
    //   var scrolled = false;
    //   $(window).scroll(function(){
    //     if($(document).scrollTop() < maxMargin ){
    //       $('header').css('margin-top', $(document).scrollTop() + "px");
    //       $('#mid_section_toper').css('margin-top', "-" + $(document).scrollTop() + "px");
    //     }
    //     else{
    //       $('.careers_section').css('margin-top', $('#mid_section_bottom').offset().top - $('.careers_section').outerHeight() - $(window).scrollTop()  + "px");
    //     }
    //   });
    // });

    //Scroll over effects
    // $( document ).ready(function() {
    //   frontpageTopHeadlineHeight = $(".front-page-headline-section").outerHeight();
    //   $("#scrlr").css("height", frontpageTopHeadlineHeight + "px");
    //   $("#scrlr").css("margin-bottom", -frontpageTopHeadlineHeight + "px");
    // });
</script>

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

// Short code for main menu
function mmenu_shortcode( $atts, $content = null){

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
		    <a class="nav-link' . (($category_index == 1) ? ' active' : '') . '" id="categories_tab_' . $category_index . '" data-toggle="tab" href="#categories_content_' . $category_index . '" role="tab" aria-controls="category_' . $category_index . '" aria-selected="true">' . get_the_title() . '</a>
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
           <a class="nav-link' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_tab_' . $category_index . '_' . $subcategory_index . '" data-toggle="tab" href="#subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tab" aria-controls="subcategory_' . $category_index . '_' . $subcategory_index . '" aria-selected="true">
             ' . get_the_title() . '
           </a>
          </li>';

        $subcategory_content_value .= '
          <div class="tab-pane fade show' . (($subcategory_index == 1) ? ' active' : '') . '" id="subcategories_content_' . $category_index . '_' . $subcategory_index . '" role="tabpanel" aria-labelledby="subcategory_' . $category_index . '_' . $subcategory_index . '-tab">
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

         <button id="move">GO</button>
         <canvas id="canvas" width="400" height="400" style="background: #000000; margin: 50px 20px 20px;"></canvas>
         <script type="text/javascript">
             function drawStones() {
                 var ctx = document.getElementById("canvas");
                 if (ctx.getContext) {


                     ctx = ctx.getContext("2d");

                     //Loading of the home test image - img1
                     var img1 = new Image();
                     var img2 = new Image();
                     var img3 = new Image();
                     var img4 = new Image();
                     var img5 = new Image();
                     var img6 = new Image();

                     //drawing of the test image - img1
                     img1.onload = function () {
                         //draw background image
                         ctx.drawImage(img1, 0, 10);
                     };

                     //drawing of the test image - img2
                     img2.onload = function () {
                         //draw background image
                         ctx.drawImage(img2, 80, 10);
                     };

                     //drawing of the test image - img3
                     img3.onload = function () {
                         //draw background image
                         ctx.drawImage(img3, 130, 10);
                     };

                     //drawing of the test image - img4
                     img4.onload = function () {
                         //draw background image
                         ctx.drawImage(img4, 240, 10);
                     };

                     //drawing of the test image - img5
                     img5.onload = function () {
                         //draw background image
                         ctx.drawImage(img5, 320, 10);
                     };

                     //drawing of the test image - img6
                     img6.onload = function () {
                         //draw background image
                         ctx.drawImage(img6, 370, 10);
                     };

                     img1.src = "' . get_template_directory_uri() . '/imgs/stone_a.png";
                     img2.src = "' . get_template_directory_uri() . '/imgs/stone_b.png";
                     img3.src = "' . get_template_directory_uri() . '/imgs/stone_c.png";
                     img4.src = "' . get_template_directory_uri() . '/imgs/stone_d.png";
                     img5.src = "' . get_template_directory_uri() . '/imgs/stone_e.png";
                     img6.src = "' . get_template_directory_uri() . '/imgs/stone_f.png";
                 }
             }

             var canvas = document.getElementById("canvas");
             var ctx = canvas.getContext("2d");

             //Loading of the home test image - img1
             var img1 = new Image();
             img1.src = "' . get_template_directory_uri() . '/imgs/stone_a.png";

             function drawStones2() {
                 var ctx = document.getElementById("canvas");
                 if (ctx.getContext) {

                     ctx = ctx.getContext("2d");

                     //Loading of the home test image - img1
                     var img1 = new Image();

                     //drawing of the test image - img1
                     img1.onload = function () {
                         //draw background image
                         ctx.drawImage(img1, 0, 10);
                     };

                     img1.src = "' . get_template_directory_uri() . '/imgs/stone_a.png";
                 }
             }

             var x = 100;
             var y = 50;
             var r = 20;
             var duration = 1000; // in ms
             var nextX, nextY;
             var startTime;

             function anim(time) {
               if (!startTime) // its the first frame
                 startTime = time || performance.now();

                 // deltaTime should be in the range [0 ~ 1]
                 var deltaTime = (time - startTime) / duration;
                 // currentPos = previous position + (difference * deltaTime)
                 var currentX = x + ((nextX - x) * deltaTime);
                 var currentY = y + ((nextY - y) * deltaTime);

                 if (deltaTime >= 1) { // this means we ended our animation
                   x = nextX; // reset x variable
                   y = nextY; // reset y variable
                   startTime = null; // reset startTime
                   draw(x, y); // draw the last frame, at required position
                 } else {
                   draw(currentX, currentY);
                   requestAnimationFrame(anim); // do it again
                 }
              }

              move.onclick = e => {
                nextX = 250 // +x_in.value || 0;
                nextY = 350 // +y_in.value || 0;
                anim();
              }

              // OPs code

              var WIDTH = 600;
              var HEIGHT = 400;

              function clear() {
                ctx.clearRect(0, 0, WIDTH, HEIGHT);
              }

              function draw(x, y) {
                clear(WIDTH, HEIGHT);
                ctx.drawImage(img1, x, y);
              }

              draw(x, y);

             //drawStones2();
         </script>

         <div class="tab-content col-12" id="subcategories_content_' . $category_index . '">
           ' . $subcategory_content_value . '
         </div>
    </div>';

    $category_index++;
	endwhile;
	endif;
  return '
    <!-- Mid section -->
      <section id="mid_section" class="content-section p-5" style="background: black;">
        <div class="container text-center">
         <div class="row">

            <span class="col-3"></span>
            <ul class="nav nav-tabs col-6 row" id="categories_tabs" role="tablist">
              ' . $categories_tabs_value . '
            </ul>
            <span class="col-3"></span>

            <div class="tab-content col-12" id="categories_content">
              ' . $categories_content_value . '
            </div>

         </div>
        </div>
      </section>
    ';
}
add_shortcode("mmenu", "mmenu_shortcode");

// Short code for outsiders
function outsiders_shortcode( $atts, $content = null){

  return '
    <!-- Another section -->
    <section class="content-section" style="padding: 400px; background: url(\'' . get_template_directory_uri() . '/imgs/recroom.png\');background-size:cover;">
      <div class="container text-center">
        <div class="row text-white">
          <div class="col-12">
            <h2>Outsiders, come in</h2>
          </div>
          <div class="col-12">
            <p><i class="fa fa-arrow-right"></i>CAREERS</p>
          </div>
        </div>
      </div>
    </section>
    ';
}
add_shortcode("outsiders", "outsiders_shortcode");

<?php get_header(); ?>

 <!-- Header -->
  <!-- <header class="masthead d-flex p-5">

  </header> -->

  <?php //if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>
  <style>

    .fixed_logo_icon_holder{
      width: 100%;
      max-width: 1280px;
      padding-left: 40px;
      margin: 0px auto -230px;
      z-index: 9999;
    }

    #fixed_logo_icon{
      position: fixed;
      z-index: 9999;
      top: 43px;
    }

    .logo{
      padding-left: 70px;
      padding-top: 40px;
    }

    .inverted{
      filter: brightness(0%);
    }

    .frontpage-top-headline-text{
      font-family: "Gothic A1";
      max-width: 1080px;
      margin: 0 auto;
      font-size: 49px;
      font-weight: bold;
      line-height: 1.2em;
      height: 93vh;
      padding: 30vh 10vw;
      font-size: 52px;
      text-align: center;
    }

    #scrlr{
      height: 100vh;
      margin-bottom: -100vh;
      margin-top: 15vh;
    }

    .stat_field_value{
      font-weight: bold;
      padding: 0;
      font-size: 100px;
      line-height: 100px;
      margin-top: 20px;
    }

    .stat_field_label{
      font-size: 18px;
    }

    @media (max-width: 770px){

      .fixed_logo_icon_holder{
        padding-left: 20px;
      }

      #fixed_logo_icon{
        top: 23px;
      }

      .logo{
        padding-left: 50px;
        padding-top: 20px;
      }

      .frontpage-top-headline-text{
        font-size: 38px;
        height: 95vh;
      }

      .stat_field_value{
        font-size: 60px;
        line-height: 60px;
        margin-top: 10px;
        margin-bottom: 10px;
      }

      .stat_field_label{
        font-size: 18px;
        margin-bottom: 40px;
      }
    }

    .spot{
      transform: rotate(0deg);
    }

    .backspot{
      margin-right: -63px;
      transform: rotate(0deg);
      transition: 1s;
      /*transition-timing-function: linear;*/
      -webkit-filter: drop-shadow( 0px 0px 2px rgba(0, 0, 0, .3));
      filter: drop-shadow( 0px 0px 2px rgba(0, 0, 0, .3));
    }

  </style>
  <script>
    function docReady(fn) {
          // see if DOM is already available
          if (document.readyState === "complete" || document.readyState === "interactive") {
              // call on next available tick
              setTimeout(fn, 1);
          } else {
              document.addEventListener("DOMContentLoaded", fn);
          }
      }

      function updateLogoColor() {
          var scroll = $(window).scrollTop(); // how many pixels you've scrolled
          var os = $('#mid_section_toper_green').offset().top; // pixels to the top of div1
          var ht = $('#mid_section_toper_green').height() + $('#mid_section_green').height(); // height of div1 in pixels
          // if you've scrolled further than the top of div1 plus it's height
          // change the color. either by adding a class or setting a css property
          if(scroll < os)
            $('#fixed_logo_icon').removeClass('inverted');
          if(scroll > os + ht)
            $('#fixed_logo_icon').removeClass('inverted');
          else if(scroll > os)
            $('#fixed_logo_icon').addClass('inverted');

          if(scroll > $("#grudge_bottom_green").offset().top)
            $('#fixed_logo_icon').addClass('inverted');
      }

      function updateSpotRotation(){
        $(".backspot").each(function(){
          $(this).css("transform", "rotate(" + Math.random() * (360 - 0) + 0 + "deg)");
        })
      }

      function animateValue(id, start, end, duration) {
          var range = end - start;
          var current = start;
          var increment = end > start? 1 : -1;
          var stepTime = Math.abs(Math.floor(duration / range));
          var obj = id;
          var timer = setInterval(function() {
              current += increment;
              id.innerHTML = current;
              if (current == end) {
                  clearInterval(timer);
              }
          }, stepTime);
      }

      function countUpToValues(){
        $(".stat_field_value").each(function(){
          animateValue(this, 0, $(this).data("target"), 1000);
        });
      }

      var countedUpStats = false;

      // This is then function used to detect if the element is scrolled into view
      function elementScrolled(elem)
      {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();
        var elemTop = $(elem).offset().top;
        return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
      }

      docReady(function() {
        $(window).scroll(updateLogoColor);
        updateLogoColor();
        setInterval(function(){updateSpotRotation()}, 1000);

        $(window).scroll(function(){

          // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element
          if(!countedUpStats && elementScrolled('.stat_field_value')) {
            setTimeout(countUpToValues, 500);
            countedUpStats = true;
          }
        });

        if(!countedUpStats && elementScrolled('.stat_field_value')) {
          setTimeout(countUpToValues, 500);
          countedUpStats = true;
        }

      });


  </script>
  <div class="fixed_logo_icon_holder">
    <img id="fixed_logo_icon" src="<?php echo get_template_directory_uri(); ?>/imgs/logo_icon.svg">
  </div>
  <div class="thold">
    <section class="front-page-headline-section" style="max-width: none; text-shadow: 0px 0px 3px #00000033">
      <div style="max-width: 1280px; margin: 0 auto;">
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_word.svg">
        </div>
        <p class="frontpage-top-headline-text">
          <?php echo get_theme_mod('frontpage-underlogo-text')?>
        </p>
      </div>
    </section>
    <div id="scrlr"></div>
  </div>

  <section class="content-section front-page-section"  style="text-shadow: 2px 2px 4px #00000033">
    <div id="mid_section_toper_green" class="col-12" style="height: 80px; margin-bottom: -1px;"></div>
    <div id="mid_section_green" class="col-12" style="min-height: 80vh; padding:0; background: #00EDAE; z-index: 2; margin: 0 auto -1px;">
      <div class="row" style="max-width: 1280px; margin: 0 auto; font-size: 36px; font-weight: bold; padding: 18vh 40px 0; color: white;">
          <div class="col-6 col-md-3" style="text-align: center;">
            <img class="backspot" src="<?php echo get_template_directory_uri(); ?>/imgs/back_spot.svg" />
            <img class="spot" src="<?php echo get_template_directory_uri(); ?>/imgs/clients_icon.svg" />
            <p class="stat_field_value" data-curval="0" data-target="10">0</p>
            <p class="stat_field_label">Fortune 500 clients</p>
          </div>
          <div class="col-6 col-md-3" style="text-align: center;">
            <img class="backspot" src="<?php echo get_template_directory_uri(); ?>/imgs/back_spot.svg" />
            <img class="spot" src="<?php echo get_template_directory_uri(); ?>/imgs/loyal_icon.svg" />
            <p class="stat_field_value" data-curval="0"  data-target="80">0</p>
            <p class="stat_field_label">% loyal clients</p>
          </div>
          <div class="col-6 col-md-3" style="text-align: center;">
            <img class="backspot" src="<?php echo get_template_directory_uri(); ?>/imgs/back_spot.svg" />
            <img class="spot" src="<?php echo get_template_directory_uri(); ?>/imgs/growth_icon.svg" />
            <p class="stat_field_value" data-curval="0"  data-target="48">0</p>
            <p class="stat_field_label">% business growth</p>
          </div>
          <div class="col-6 col-md-3" style="text-align: center;">
            <img class="backspot" src="<?php echo get_template_directory_uri(); ?>/imgs/back_spot.svg" />
            <img class="spot" src="<?php echo get_template_directory_uri(); ?>/imgs/years_icon.svg" />
            <p class="stat_field_value" data-curval="0"  data-target="11">0</p>
            <p class="stat_field_label">years of average on IT practice</p>
          </div>
      </div>
      <div style="color: white; max-width: 1280px; margin: 0 auto; font-size: 38px; padding: 50px 60px 100px; text-align: center;">
          <?php echo get_theme_mod('frontpage-top-headline')?>
          <a style="white-space: nowrap; color: black;" href="<?php echo get_theme_mod('frontpage-top-headline-link-href')?>">
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

                <div style="width:80vw; margin: 0 auto; overflow: hidden;">
                  <ul class="nav nav-tabs row" id="categories_tabs" role="tablist">
                    ' . $categories_tabs_value . '
                  </ul>
                </div>

                <div id="stones_holder" style="margin: 0 auto;" onclick="setState()">
                  <div id="stones">
                    <img id="stone_a" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_a.svg"/>
                    <img id="stone_b" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_b.svg"/>
                    <img id="stone_c" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_c.svg"/>
                    <img id="stone_d" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_d.svg"/>
                    <img id="stone_e" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_e.svg"/>
                    <img id="stone_f" class="stone" src="' . get_template_directory_uri() . '/imgs/stone_f.svg"/>
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
            <h2 style="font-weight: bold;">Outsiders, come in</h2>
            <a style="color: #00EDAE;" href="http://192.168.86.60/wrdprss/?page_id=339">CAREERS <i class="fa fa-arrow-right"></i></a>
          </div>
        </div>
      </div>

      <div id="grudge_bottom_green" class="col-12"></div>
    </section>

    <?php //if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php //the_content(); ?>
    <?php //endwhile; endif; ?>
  </section>

  <style>
    .carousel_holder{
        background: url('<?php echo get_template_directory_uri() ?>/imgs/car_ind_icon.svg') no-repeat top left 30px;
        max-width: 100%;
    }

    .carousel_text{
        display: block;
        margin: 0 auto;
        padding: 100px  0 0 140px;
        width: 100%;
        font-size: 44px;
        font-weight: bold;
        line-height: 48px;
    }

    .carousel_link{
        padding: 10px 0 10px 140px;
    }

    @media (max-width: 540px){

      .carousel_text{
        font-size: 30px;
        line-height: 34px;
        overflow: hidden;
      }

      .carousel_link{
        font-size: 14px;
        overflow: hidden;
      }

      .stone{
        margin-left: -60px;
      }
    }


  </style>

  <section class="front-page-bottom-headline-section" style="text-shadow: 2px 2px 10px #00000033">
    <div class="siema" style="width: 100%; max-width: 760px; margin: 100px auto 0;">
      <div class="carousel_holder">
        <p class="carousel_text">Let's talk about autonomous vehicles</p>
        <a class="carousel_link" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT</a>
      </div>
      <div class="carousel_holder">
        <p class="carousel_text">Let's talk about autonomous vehicles</p>
        <a class="carousel_link" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT 2</a>
      </div>
      <div class="carousel_holder">
        <p class="carousel_text">Let's talk about autonomous vehicles</p>
        <a class="carousel_link" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT 3</a>
      </div>
      <div class="carousel_holder">
        <p class="carousel_text">Let's talk about autonomous vehicles</p>
        <a class="carousel_link" href="http://192.168.86.60/wrdprss/?page_id=280">SEE OUR LATEST PROJECT 4</a>
      </div>
    </div>
    <div id="siema_pagination" style="margin-bottom: 150px;">
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



<style>
  .slider_dot{
    width: 8px;
    height: 8px;
    background: #6d6d6d;
    float: left;
    margin: 30px 10px;
    border-radius: 100%;
    transition: 0.2s;
    cursor: pointer;
  }

  .slider_dot_selected{
  background: #1d1d1d;
    width: 10px;
    height: 10px;
    margin: 29px 8px;
  }
</style>
<script src="<?php echo get_template_directory_uri() ?>/js/siema.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){


      // New siema instance
      const mySiema = new Siema({
        duration: 200,
        easing: 'ease-out',
        perPage: 1,
        startIndex: 0,
        draggable: true,
        multipleDrag: true,
        threshold: 20,
        loop: true,
        rtl: false,
        onChange: updateDots
      });

      function updateDots() {
        $("#slider-techs").children().each(function() {
            $(this).removeClass("slider_dot_selected");
        });
        $("#slider-techs").children().eq(this.currentSlide).addClass("slider_dot_selected");
      }

      // Add a function that generates pagination to prototype
      Siema.prototype.addPagination = function() {
        const dots = document.createElement('div');
        $(dots).attr('id', 'slider-techs');
        $(dots).css("width", this.innerElements.length * 30 + "px");
        $(dots).css("margin", "0 auto");
        for (let i = 0; i < this.innerElements.length; i++) {
          const dot = document.createElement('div');
          $(dot).addClass("slider_dot");
          if(i == 0){
            $(dot).addClass("slider_dot_selected");
          }
          dot.addEventListener('click', () => {
            this.goTo(i);
          });
          dots.appendChild(dot);
        }
        //this.selector.appendChild(dots);
        $("#siema_pagination").append(dots);
      }

      // Trigger pagination creator
      mySiema.addPagination();


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

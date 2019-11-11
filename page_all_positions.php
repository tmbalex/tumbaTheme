<?php
  function get_all_position_pages(){

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => 339,  // page_id
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
     );

     $links_array = [];
     $counter = 0;


     $parent = new WP_Query( $args );

     if ( $parent->have_posts() ) :
        while ( $parent->have_posts() ) : $parent->the_post();
               $links_array[$counter]['name'] = get_the_title();
               $links_array[$counter]['link'] = get_the_permalink();
               $counter++;
        endwhile;
     endif;
    //wp_reset_postdata();

    return $links_array;
  }
?>

  <style>
    .fixed_logo_icon_holder{
      width: 100%;
      max-width: 1280px;
      padding-left: 40px;
      margin: 0px auto;
      z-index: 9999;
    }

    #fixed_logo_icon{
      position: fixed;
      z-index: 9999;
      top: 43px;
    }

    .logo{
      padding-left: 55px;
      padding-top: 40px;
    }

    @media (max-width: 770px){
      .fixed_logo_icon_holder{
        padding-left: 20px;
      }

      #fixed_logo_icon{
        top: 23px;
      }

      .logo {
          padding-left: 35px;
          padding-top: 20px;
      }
    }

    .inverted{
      filter: brightness(0%);
    }
  </style>

  <!-- Header -->
  <header class="masthead">
    <div class="fixed_logo_icon_holder">
      <a href="/wrdprss/">
        <img id="fixed_logo_icon" src="http://localhost/wrdprss/wp-content/themes/tumbaTheme/imgs/logo_icon.svg" class="inverted">
      </a>
    </div>

    <div class="container text-left my-auto" style="max-width: 1280px; margin: 0 auto;">
      <div class="logo">
        <a href="/wrdprss/">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_word.svg" class="inverted">
        </a>
      </div>
    </div>
  </header>

  <style>

    #page_header{
      width: 100%;
      color: white;
    }

    #page_header h1{
      max-width: 960px;
      margin: 90px auto 20px;
      padding: 0 60px;
      font-size: 44px;
      font-weight: bold;
      text-shadow: 2px 2px 10px #00000033;
    }

    .open_positions_link a{
      max-width: 960px;
      margin: 0 auto 120px;
      display: block;
      color: black;
      font-size: 16px;
    }


    @media (max-width: 770px){
      #page_header h1{
        font-size: 34px;
        margin: 90px auto 0;
      }


      .open_positions_link a{
        max-width: 960px;
        margin: 0 auto 120px;
        display: block;
        color: black;
        padding: 0 60px;
        font-size: 16px;
      }
    }



    #our_reality_section{
      background: black;
      padding: 0 40px 80px;
    }

    .black_cutout_top{
      width: 100%;
    }

    .black_cutout_bottom{
      width: 100%;
      transform: rotate(180deg);
      margin-top: -1px;
    }

    #perks_holder{
      background: url('<?php echo get_template_directory_uri(); ?>/imgs/perks_background.png') no-repeat;
      background-size: cover;
      width: 100%;
      margin: 0;
      margin-top: -70px;
      padding: 150px 0;
    }

    #perks{
      max-width: 960px;
      margin: 0 auto;
      color: white;
    }

    #perks h3{
      font-size: 45px;
    }

    .perk{
      padding: 40px;
      display: block;
      font-size: 24px;
      color: #00EDAE;
      font-weight: bold;
      overflow: hidden;
    }

    @media (max-width: 770px){
      #perks{
        padding: 0 50px;
      }

      #perks h3{
        font-size: 26px;
      }

      .perk{
        font-size: 24px;
        padding: 10px 20px;
      }
    }

    #quote_holder{
      max-width: 960px;
      margin: 100px auto;
      color: white;
      text-shadow: 2px 2px 10px #00000033;
    }

    #quote_holder p{
      font-size: 45px;
      line-height: 52px;
      margin: 0;
    }

    #quote_holder a{
      font-size: 16px;
      color: black;
    }

    @media (max-width: 770px){
      #quote_holder p{
        font-size: 32px;
        line-height: 36px;
        padding: 0 60px;
      }
    }

    #open_positions_holder{
      max-width: 960px;
      margin: 100px auto;
      color: white;
    }

    .open-positions_title{
      font-size: 45px;
      width: 100%;
      margin: 0;
      padding: 0;
    }

    .open_position{
      padding: 20px;
    }

    .open_position p{
      margin: 0px;
      font-size: 30px;
    }

    @media (max-width: 770px){
      #open_positions_holder {
        padding: 0 60px;
      }

      .open-positions_title{
        font-size: 32px;
      }
    }

    .video_holder{
      min-height: 400px;
    }

    .images_holder {
    }

    .images_holder img{
      margin: 5px 4px 5px 5px;
      float: right;
    }

    @media (max-width: 770px){
      .images_holder img{
        margin: 8px 8px 8px 8px;
      }
    }

  </style>




  <div id="page_header">
    <h1><?php echo $content_array[0] ?></h1>
    <div class="open_positions_link" href="#">
      <a href="#"><i class="fa fa-arrow-down"></i> SEE OPEN POSITIONS</a>
    </div>
  </div>

  <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="filter: brightness(0%); object-fit: cover; height: 80px; margin-bottom: -2px;">

  <section id="our_reality_section">
    <div class="row" style="padding-top: 50px; margin: 0 auto; max-width: 960px;">
      <div class="col-12">
        <p style="font-size: 30px; color: #ffffff;"><img src="<?php echo get_template_directory_uri(); ?>/imgs/jobs_pile.png"/> Our reality</p>
      </div>
      <div class="video_holder col-12 col-md-7">
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/a1uOyMezyi0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="images_holder col-21 col-md-5">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/cart.png"/>
      </div>
    </div>

  </section>
  <img class="black_cutout_bottom" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="filter: brightness(0%); object-fit: cover; height: 80px; margin-top: -2px;">
  <div id="perks_holder" class="row">
    <div id="perks" class="row">
      <h3 class="col-12">Office perks & activities</h3>
      <div class="perk col-12 col-md-4"><?php echo $content_array[1] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[2] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[3] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[4] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[5] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[6] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[7] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[8] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[9] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[10] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[11] ?></div>
      <div class="perk col-12 col-md-4"><?php echo $content_array[12] ?></div>
    </div>
  </div>

  <div id="quote_holder">
    <?php echo $content_array[13] ?>
    <?php echo $content_array[14] ?>
  </div>

  <div id="open_positions_holder" class="row">
    <p class="open-positions_title" style="text-shadow: 2px 2px 10px #00000033;">Open positions</p>

    <?php
      $titles = get_all_position_pages();
      foreach( $titles as $title){
        echo "<div class=\"open_position col-12 col-md-6\" style=\"color: black;\">
          <img src=\"" . get_template_directory_uri() . "/imgs/career_icon.svg\"/>
          <p style=\"text-shadow: 2px 2px 10px #00000033; font-weight: bold; color: white;\">" . $title['name'] . "</p>
          <i class=\"fa fa-arrow-right\"></i><a style=\"color: black;\" href=\"" . $title['link'] . "\">Details and application form</a>
        </div>";
      }
    ?>

  </div>


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
            var os = $('.black_cutout_top').offset().top; // pixels to the top of div1
            var ht = $('.black_cutout_top').height() + $('#our_reality_section').height() + $('#perks').height() + ($('.black_cutout_bottom:first').height() * 2); // height of div1 in pixels
            // if you've scrolled further than the top of div1 plus it's height
            // change the color. either by adding a class or setting a css property
            if(scroll < os)
              $('#fixed_logo_icon').addClass('inverted');
            if(scroll > os + ht)
              $('#fixed_logo_icon').addClass('inverted');
            else if(scroll > os)
              $('#fixed_logo_icon').removeClass('inverted');


        }



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

        });


    </script>

<?php
  function get_all_pages_in_this_category(){

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => wp_get_post_parent_id(),  // page_id
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

    .black_cutout_head{
      position: absolute;
      left: 0;
      right: 0;
      height: 100px;
      width: 100%;
      transform: scale(-1, -1);
      object-fit: cover;
      margin-top: -5px;
    }

    .technology_h1{
      max-width: 1280px;
      margin: 70px auto 0;
      padding-left: 75px;
      padding-bottom: 0px;
      color: white;
      font-size: 72px;
      font-weight: bold;
    }

    #technology_header .headimage {
      margin: 0;
    }

    #technology_header .headimage img{
      width: 100%;
      height: 40vh;
      object-fit: cover;
      object-position: bottom;
    }

    #content_holder{
      background: black;
      color: white;
      padding: 0 65px;
    }

    @media (max-width: 770px){
      #content_holder{
        padding: 0 45px;
        margin-bottom: -4px;
      }
    }

    #tech_description{
      max-width: 1140px;
      margin: 0 auto;
      padding: 70px 0 0px;
    }

    .main_description{
      font-size: 29px;
      font-weight: bold;
      padding-right: 60px;
    }

    .sub_descriptions{
      font-size: 19px;
      padding-left: 60px;
    }

    @media (max-width: 770px){
      .technology_h1{
        font-size: 52px;
        padding-left: 55px;
      }

      .main_description{
        font-size: 24px;
        padding-right: 15px;
      }

      .sub_descriptions{
        font-size: 18px;
        padding-left: 15px;
      }
    }

    #tech_properties{
      max-width: 1140px;
      margin: 0 auto;
      padding: 30px 0px 80px;
    }

    .sub_headline{
      font-weight: bold;
      font-size: 24px;
    }

    .technologies table img{
      border-radius: 50%;
      height: 100px;
      width: 100px;
      object-fit: cover;
      margin: 20px;
    }

    .services p{
      margin-bottom: 20px;
    }

    .services a{
      color: white;
      font-weight: bold;
      padding-top: 10px;
    }

    .services a:after {
      font-family: 'FontAwesome';
      content: "\f178";
      padding-right: 5px;
      padding-left: 10px;
  }

    .black_cutout_mid{
      width: 100%;
      object-fit: cover;
      object-position: bottom;
      margin-top: -4px;
    }

    #success_content{
      color: white;
      width: 100%;
      max-width: 1280px;
      padding: 60px 75px 40px;
      margin: 0 auto;
    }

    .success_headline{
      width: 100%;
      font-size: 32px;
      font-weight: bold;
    }

    #success_table {
      width: 100%;
      overflow: hidden;
    }

    #success_table table{
      width: 100%;
      margin-bottom: 30px;
      display: block;
    }

    #success_table tbody{
      width: 100%;
      display: block;
    }

    #success_table tr{
      width: 100%;
      display: block;
    }

    #success_table td{
      width: 25%;
      display: block;
      float: left;
      text-align: center;
    }

    #success_table td:last-child{
      width: 50%;
      height: 160px;
      display: block;
      float: left;
      text-align: right;
      font-size: 120px;
    }

    #success_table tr:last-child{
      font-size: 24px;
    }

    #success_table tr:last-child td:last-child{
      font-size: 24px;
    }

    #success_content table img{
      width: 150px;
      height: 150px;
      border-radius: 50%;
    }

    @media (max-width: 770px){

      #success_content{
        color: white;
        width: 100%;
        max-width: 1280px;
        padding: 60px 60px 49px;
        margin: 0 auto;
      }

      #success_content table img{
        width: 70px;
        height: 70px;
        border-radius: 50%;
      }

      #success_table td:last-child{
        font-size: 60px;
        height: 90px;
      }

      #success_table tr:last-child{
        font-size: 14px;
      }

      #success_table tr:last-child td:last-child{
        font-size: 14px;
      }

      .quote{
        font-size: 16px;
      }
    }

    #quotes{
      width: 100%;
      padding: 0;
      margin: 0;
    }

    .quote{
      padding-right: 0;
      padding: 0 15px;
      margin: 0;
      font-size: 18px;
      text-shadow: none;
      color: black;
    }

    .black_cutout_inverted{
      width: 100%;
      object-fit: contain;
      object-position: bottom;
    }

    #other_industries_holder{
      background: black;
      color: white;
      width: 100%;
      overflow: hidden;
    }

    #other_industries{
      width: 100%;
      max-width: 1140px;
      margin: 0 auto;
      padding: 0 75px 30px;
    }

    .industries_headline{
      font-size: 25px;
      padding-bottom: 10px;
    }

    .industry{
      padding-top: 20px;
    }

    .other_industry_link{
      color: #00EDAE;
      font-weight: bold;
      font-size: 18px;
    }

    .other_industry_link::after {
        font-family: 'FontAwesome';
        content: "\f178";
        padding-right: 5px;
        padding-left: 10px;
    }

    #last_cutout_holder{
      width: 100%;
      margin-bottom: 100px;
    }

    #last_cutout_holder figure{
      width: 100%;
      height: 40vh;
    }

    #last_cutout_holder figure img{
      width: 100%;
      height: 40vh;
      object-fit: cover;
      object-position: bottom;
      z-index: 3;
      position: absolute;
    }

    @media (max-width: 770px){
        #last_cutout_holder figure{
          width: 100%;
          height: 20vh;
        }

        #last_cutout_holder figure img{
          width: 100%;
          height: 20vh;
          object-fit: cover;
          object-position: bottom;
          z-index: 3;
          position: absolute;
        }
      }

    .black_cutout_last{
      width: 100%;
      object-fit: cover;
      object-position: bottom;
      z-index: 4;
      position: absolute;
      transform: scaleX(-1);
    }

  </style>

  <!-- Header -->
  <header class="masthead" style="background: black;">
    <div class="fixed_logo_icon_holder">
      <a href="/wrdprss/">
        <img id="fixed_logo_icon" src="http://localhost/wrdprss/wp-content/themes/tumbaTheme/imgs/logo_icon.svg" class="">
      </a>
    </div>

    <div class="container text-left my-auto" style="max-width: 1280px; margin: 0 auto;">
      <div class="logo">
        <a href="/wrdprss/">
          <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_word.svg">
        </a>
      </div>
    </div>

    <h1 class="technology_h1"><?php the_title(); ?></h1>
  </header>

  <div id="technology_header">
    <img class="black_cutout_head" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="filter: brightness(0%);">
    <?php echo $content_array[0] ?>
  </div>

  <section id="content_holder">
      <div id="tech_description" class="row">
        <div class="main_description col-12 col-md-6">
          <?php echo $content_array[1] ?>
        </div>
        <div class="sub_descriptions col-12 col-md-6">
          <?php echo $content_array[2] ?>
          <?php echo $content_array[3] ?>
        </div>
      </div>
      <div id="tech_properties" class="row">
        <div class="technologies col-12 col-md-6">
          <p class="sub_headline">Technologies</p>
          <?php echo $content_array[4] ?>
        </div>
        <div class="services col-12 col-md-6">
          <p class="sub_headline">Services</p>
          <?php echo $content_array[5] ?>
          <?php echo $content_array[6] ?>
        </div>
      </div>
  </section>

  <img class="black_cutout_mid" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="filter: brightness(0%); object-fit: contain; transform: scale(-1, -1); margin-top: -5px;">

  <section id="success_holder" style="width: 100%; text-shadow: 2px 2px 2px #00000033">
    <div id="success_content" class="row">
      <p class="success_headline">Success stories</p>
      <div id="success_table">
        <?php echo $content_array[7] ?>
      </div>
      <div id="quotes" class="row">
        <div class="quote col-12 col-sm-4">
          <?php echo $content_array[8] ?>
        </div>
        <div class="quote col-12 col-sm-4">
          <?php echo $content_array[9] ?>
        </div>
        <div class="quote col-12 col-sm-4">
          <?php echo $content_array[10] ?>
        </div>
      </div>
    </div>
  </section>

  <img class="black_cutout_inverted" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="filter: brightness(0%); margin-bottom: -5px;">

  <section id="other_industries_holder">
    <div id="other_industries">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/industries_pile.png" style="margin: 50px 0 30px;">
      <p class="industries_headline">More industries</p>
      <div id="industries" class="row">
        <?php
          $industries_list = get_all_pages_in_this_category();
          foreach($industries_list as $element){
              echo "<div class=\"industry col-12 col-md-4\">
                <a class=\"other_industry_link\" href=\"" . $element[link] . "\">" . $element[name] . "</a>
              </div>";
          }
        ?>
      </div>
    </div>
  </section>

  <div id="last_cutout_holder">
    <img class="black_cutout_last" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_bottom.svg" style="margin-top: -5px; transform: scaleY(-1)">
    <?php echo $content_array[0] ?>
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
          var os = $('.black_cutout_mid:first').offset().top; // pixels to the top of div1
          var ht = $('.black_cutout_mid:first').height() + $('#success_holder').height(); // height of div1 in pixels
          // if you've scrolled further than the top of div1 plus it's height
          // change the color. either by adding a class or setting a css property
          if(scroll < os)
            $('#fixed_logo_icon').removeClass('inverted');
          if(scroll > os + ht)
            $('#fixed_logo_icon').removeClass('inverted');
          else if(scroll > os)
            $('#fixed_logo_icon').addClass('inverted');


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

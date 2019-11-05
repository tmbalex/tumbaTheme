<?php
  function get_all_contacts_pages(){

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => 335,  // page_id
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

    #page_header{
      width: 100%;
      color: white;
    }

    #page_header h1{
      max-width: 1280px;
      margin: 40px auto 100px;
      font-size: 54px;
      font-weight: bold;
      padding: 0 70px;
    }

    @media (max-width: 770px){
      #page_header h1{
        padding: 0 50px;
      }
    }

    #location_holder{
      width: 100%;
      max-width: 1240px;
      margin: 0 auto 0;
      padding: 0 40px;
      overflow: hidden;
    }

    #location_holder figure{
      position: fixed;
      left: 0;
      right: 0;
      top: 0;
      bottom: 0;
    }

    #location_holder img{
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      position: fixed;
      max-width: 100vw;
      width: 100vw;
      max-width: none;
      max-height: none;
      height: 100vh;
      z-index: 1;
      object-fit: cover;
    }

    #location_holder p{
      position: relative;
      z-index: 6;
    }


    #location_list{
      bottom: 0;
      position: absolute;
      padding-bottom: 20px;
    }

    @media (max-width: 770px){
      #location_list{
        position: relative;
      }
    }

    #location_list a{
      width: 100%;
      display: block;
      font-weight: bold;
      font-size: 30px;
      text-decoration: none;
      position: relative;
      z-index: 6;
    }

    #location_list a:hover{
      color: white;
    }

    .location_link{
      color: black;
    }

    .selected_location{
      color: white;
    }

    #location_properties{
      text-align: right;
    }

    #location_properties p{
      line-height: 130%;
    }

    #location_holder h2{
      font-size: 120px;
      color: white;
      font-weight: bold;
      width: 100%;
      text-align: right;
      padding: 0;
      margin: 0;
    }

    #background_gradient{
      background: linear-gradient(#00EDAE00, #00EDAE);
      height: 150px;
      width: 100%;
      position: relative;
      z-index: 6;
    }

    footer{
        position: relative;
        z-index: 6;
        width: 100%;

    }

  </style>




  <div id="page_header">
    <h1>Meet us</h1>
  </div>

  <div id="location_holder" class="row">



    <div class="col-12 col-md-4">

      <div id="location_list">
        <?php
          $titles = get_all_contacts_pages();
          foreach( $titles as $title){
            if(strpos($title['link'], $_SERVER['REQUEST_URI']) !== false){
              $selected = " selected_location";
            }
            else{
              $selected = "";
            }
            echo "<a class=\"location_link" . $selected . "\" href=\"" . $title['link'] . "\">" . $title['name'] . "</a>";
          }
        ?>

      </div>

    </div>

    <div id="location_properties" class="col-12 col-md-8">
      <?php echo $content ?>
    </div>

  </div>

  <div id="background_gradient">
  </div>

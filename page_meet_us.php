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
  <header class="masthead d-flex p-5">
    <div class="container text-left my-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png">
    </div>
  </header>

  <style>
    body{
        background: url('<?php echo get_template_directory_uri(); ?>/imgs/sofia_back.png') no-repeat #00EDAE;
        background-size: contain;
    }

    #page_header{
      width: 100%;
      color: white;
    }

    #page_header h1{
      max-width: 960px;
      margin: 40px auto 100px;
      font-size: 44px;
    }

    #location_holder{
      width: 100%;
      max-width: 960px;
      margin: 0 auto 0;
    }

    #location_list{
      bottom: 0;
      position: absolute;
    }

    #location_list a{
      width: 100%;
      display: block;
    }

    #location_properties{
      text-align: right;
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
    }

  </style>




  <div id="page_header">
    <h1>Meet us</h1>
  </div>

  <div id="location_holder" class="row">



    <div class="col-4">

      <div id="location_list">
        <?php
          $titles = get_all_contacts_pages();
          foreach( $titles as $title){
            echo "<a href=\"" . $title['link'] . "\">" . $title['name'] . "</a>";
          }
        ?>

      </div>

    </div>

    <div id="location_properties" class="col-8">
      <?php echo $content ?>
    </div>

  </div>

  <div id="background_gradient">
  </div>

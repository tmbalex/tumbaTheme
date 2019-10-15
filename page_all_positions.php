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

  <!-- Header -->
  <header class="masthead d-flex p-5">
    <div class="container text-left my-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png">
    </div>
  </header>

  <style>

    #page_header{
      width: 100%;
      color: white;
    }

    #page_header h1{
      max-width: 960px;
      margin: 40px auto 20px;
      font-size: 44px;
    }

    .open_positions_link{
      max-width: 960px;
      margin: 0 auto 120px;
      display: block;
    }


    #our_reality_section{
      background: black;
      height: 400px;
    }

    .black_cutout_top{
      width: 100%;
      height: 40px;
    }

    .black_cutout_bottom{
      width: 100%;
      height: 40px;
      transform: rotate(180deg);
    }

    #perks_holder{
      background: url('<?php echo get_template_directory_uri(); ?>/imgs/perks_background.png') no-repeat;
      background-size: cover;
      width: 100%;
      margin: 0;
      margin-top: -35px;
      padding-top: 150px;
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
    }

    #quote_holder{
      max-width: 960px;
      margin: 100px auto;
      color: white;
    }

    #quote_holder p{
      font-size: 45px;
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

  </style>




  <div id="page_header">
    <h1><?php echo $content_array[0] ?></h1>
    <div class="open_positions_link" href="#">
      <a href="#">SEE OPEN POSITIONS</a>
    </div>
  </div>

  <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top.png">
  <section id="our_reality_section">

  </section>
  <img class="black_cutout_bottom" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top.png">

  <div id="perks_holder" class="row">
    <div id="perks" class="row">
      <h3 class="col-12">Office perks & activities</h3>
      <div class="perk col-4"><?php echo $content_array[1] ?></div>
      <div class="perk col-4"><?php echo $content_array[2] ?></div>
      <div class="perk col-4"><?php echo $content_array[3] ?></div>
      <div class="perk col-4"><?php echo $content_array[4] ?></div>
      <div class="perk col-4"><?php echo $content_array[5] ?></div>
      <div class="perk col-4"><?php echo $content_array[6] ?></div>
      <div class="perk col-4"><?php echo $content_array[7] ?></div>
      <div class="perk col-4"><?php echo $content_array[8] ?></div>
      <div class="perk col-4"><?php echo $content_array[9] ?></div>
      <div class="perk col-4"><?php echo $content_array[10] ?></div>
      <div class="perk col-4"><?php echo $content_array[11] ?></div>
      <div class="perk col-4"><?php echo $content_array[12] ?></div>
    </div>
  </div>

  <div id="quote_holder">
    <?php echo $content_array[13] ?>
    <?php echo $content_array[14] ?>
  </div>

  <div id="open_positions_holder" class="row">
    <p class="open-positions_title">Open positions</p>

    <?php
      $titles = get_all_position_pages();
      foreach( $titles as $title){
        echo "<div class=\"open_position col-6\">
          <img src=\"" . get_template_directory_uri() . "/imgs/person_icon.png\"/>
          <p>" . $title['name'] . "</p>
          <a href=\"" . $title['link'] . "\">Details and application form</a>
        </div>";
      }
    ?>

  </div>

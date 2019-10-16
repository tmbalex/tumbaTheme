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

 <!-- Header -->
  <header class="masthead d-flex p-5" style="background: black;">
    <div class="container text-left my-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_inverted.png">
    </div>
  </header>

  <style>
    .black_cutout_head{
      position: absolute; left: 0; right: 0; height: 200px; width: 100%;
    }

    #technology_header h1{
      left: 0; right: 0; width: 100%; max-width: 980px; margin: 0 auto; font-size: 60px; font-weight: bold; position: absolute; color: white;
    }

    #technology_header .headimage {
      margin: 0;
    }

    #technology_header .headimage img{
      width: 100%;
      height: 500px;
      object-fit: cover;
      object-position: bottom;
    }

    #content_holder{
      background: black;
      color: white;
    }

    #tech_description{
      max-width: 980px;
      margin: 0 auto;
      padding-top: 30px;
    }

    .main_description{
      font-size: 28px;
      font-weight: bold;
    }

    .sub_descriptions{
      font-size: 22px;
    }

    #tech_properties{
      max-width: 980px;
      margin: 0 auto;
      padding-top: 30px;
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

    .black_cutout_mid{
      width: 100%;
      height: 200px;
      object-fit: cover;
      object-position: bottom;
    }

    #success_content{
      max-width: 980px;
      margin: 0 auto;
      padding-top: 30px;
      color: white;
    }

    .success_headline{
      width: 100%;
      font-size: 32px;
      font-weight: bold;
    }

    #success_table {
      width: 100%;
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

    #quotes{
      width: 100%;
      padding: 0;
      margin: 0;
    }

    .black_cutout_inverted{
      width: 100%;
      height: 200px;
      object-fit: cover;
      object-position: bottom;
      transform: rotate(180deg);
    }

    #other_industries_holder{
      background: black;
      color: white;
    }

    #other_industries{
      width: 100%;
      max-width: 980px;
      margin: 0 auto;
      padding-bottom: 30px;
    }

    .industries_headline{
      font-size: 34px;
      padding-bottom: 50px;
    }

    #last_cutout_holder{
      width: 100%;
      height: 200px;
      margin-bottom: 100px;
    }

    #last_cutout_holder figure{
      width: 100%;
      height: 200px;
    }

    #last_cutout_holder figure img{
      width: 100%;
      height: 200px;
      object-fit: cover;
      object-position: bottom;
      z-index: 3;
      position: absolute;
    }

    .black_cutout_last{
      width: 100%;
      height: 200px;
      object-fit: cover;
      object-position: bottom;
      z-index: 4;
      position: absolute;
      transform: scaleX(-1);
    }

  </style>

  <div id="technology_header">
    <img class="black_cutout_head" src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png">
    <h1><?php the_title(); ?></h1>
    <?php echo $content_array[0] ?>
  </div>

  <section id="content_holder">
      <div id="tech_description" class="row">
        <div class="main_description col-6">
          <?php echo $content_array[1] ?>
        </div>
        <div class="sub_descriptions  col-6">
          <?php echo $content_array[2] ?>
          <?php echo $content_array[3] ?>
        </div>
      </div>
      <div id="tech_properties" class="row">
        <div class="technologies col-6">
          <p class="sub_headline">Technologies</p>
          <?php echo $content_array[4] ?>
        </div>
        <div class="services col-6">
          <p class="sub_headline">Services</p>
          <?php echo $content_array[5] ?>
          <?php echo $content_array[6] ?>
        </div>
      </div>
  </section>

  <img class="black_cutout_mid" src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png">

  <section id="success_holder">
    <div id="success_content" class="row">
      <p class="success_headline">Success stories</p>
      <div id="success_table">
        <?php echo $content_array[7] ?>
      </div>
      <div id="quotes" class="row">
        <div class="quote col-4">
          <?php echo $content_array[8] ?>
        </div>
        <div class="quote col-4">
          <?php echo $content_array[9] ?>
        </div>
        <div class="quote col-4">
          <?php echo $content_array[10] ?>
        </div>
      </div>
    </div>
  </section>

  <img class="black_cutout_inverted" src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png">

  <section id="other_industries_holder">
    <div id="other_industries">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/industries_pile.png" style="margin: 50px 0 30px;">
      <p class="industries_headline">More industries</p>
      <div id="industries" class="row">
        <?php
          $industries_list = get_all_pages_in_this_category();
          foreach($industries_list as $element){
              echo "<div class=\"industry col-4\">
                <a href=\"" . $element[link] . "\">" . $element[name] . "</a>
              </div>";
          }
        ?>
      </div>
    </div>
  </section>

  <div id="last_cutout_holder">
    <img class="black_cutout_last" src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png">
    <?php echo $content_array[0] ?>
  </div>

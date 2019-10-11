<?php get_header(); ?>

 <!-- Header -->
  <header class="masthead d-flex p-5" style="background: black; padding-bottom: 0 !important;">
    <div class="container text-left my-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_inverted.png">
    </div>
  </header>

  <div style="width: 100%; position: relative; background: black; color: white; margin: 0 auto; overflow: auto;">

    <section class="page-section content-section" style="margin: 62vh auto 0;">
      <h1 style="top: 0; font-size: 60px; font-weight: bold; padding: 30px 10px 70px 10px; z-index: 5; color: white; margin: 0; position: absolute; z-index: 10;"><?php the_title(); ?></h1>



    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>

    </section>

    <img src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png" style="position: absolute; top: 0; left: 0; right: 0; height: 200px; width: 100%;">
  </div>


<style>
.headimage{
  width: 100vw;
  z-index: 6;
  display: block;
  top: 0;
}

.headimage img{
 width: 100vw;
 height: 60vh;
 object-fit: cover;
 object-position: bottom
}

.main-text{
    width: 45%;
    float: left;
    font-size: 24px;
    line-height: 28px;
    padding: 10px;
}

.sub-text{
  width: 50%;
  float: right;
  font-size: 18px;
  line-height: 22px;
  padding: 10px;
}

.headimage{
  position: absolute;
  width: 100vw;
  height: auto;
  left: 0;
  right: 0;
  z-index: 0;
}
 .tech_block{
  width: 50%;
  float: left;
}

hr{
    background: url(http://192.168.86.60/wrdprss/wp-content/themes/tumbaTheme/imgs/black_head_cutout.png);
    height: 200px;
    float: left;
    width: 100%;
    background-position: center bottom;
    background-size: cover;
    background-repeat: no-repeat;
  }

  .technologies_table{
    width: 46% !important;
    float: left;
    font-size: 28px;
    margin-right: 5%;
  }

  .technologies_table img{
    width: 100% !important;
    border-radius: 50%;
    padding: 10px;
  }

  .services_element{
    width: 49%;
    float: right;
  }

  .services_header{
    font-size: 28px;
    width: 49%;
    float: right;
  }

  .success_stories_table::before{
    background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png');
    background-position: bottom;
    background-repeat: no-repeat;
    display: inline-block;
    width: 100%;
    height: 220px;
    content:"";
    position: absolute;
    left: 0;
    right: 0;
    z-index: 3;
  }

  .success_stories_table{
    width: 100% !important;
    display: block !important;
    margin: 40px 0 0;
    float: left;
    background: #00EDAE;
    padding-bottom: 530px;
  }

  .success_stories_table tbody{
    z-index: 2;
    display: block !important;
    position: absolute;
    left: 0;
    right: 0;
    background: #00EDAE;
    padding-top: 180px;
  }

  .success_stories_table tr{
    margin: 0 auto;
    max-width: 1280px;
    display: block;
    overflow: auto;
  }

  .success_stories_table tr:first-child{
    font-size: 28px;
    line-height: 36px;
  }

  .success_stories_table td{
    display: block;
    width: 20%;
    float: left;
  }

  .success_stories_table td:last-child{
    font-size: 80px;
    width: 60%;
    text-align: right;
  }

  .success_stories_table tr:last-child td:last-child{
    font-size: 20px;
  }

  .quotes_table{
    width: 100%;
    background: #00EDAE;
    position: absolute;
    bottom: 0;
    left:0;
    right: 0;
    display: block;
    padding: 40px;
  }

  .quotes_table tbody{
    max-width: 1280px;
    margin: 0 auto;
    display: block;
  }

  .quotes_table td{
    width: 33%;
  }

/*
  .quote:last::after{
    background-image: url('<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png');
    background-repeat: no-repeat;
    background-position: bottom;
    display: inline-block;
    width: 100%;
    height: 200px;
    content:"";
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
  }*/
</style>

<section class="masthead d-flex">
  <div class="container text-left my-auto" style="width: 100%; max-width: 100%; padding: 0;">
    <img src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png" style=" height: 200px; width: 100%; transform: rotate(180deg); -webkit-transform: rotate(180deg);">
    <div style="background: black; width: 100%; height: 200px; color: white;">
      <div>
        <p>More industries</p>
        <a>Smart city</a>
        <a>Smart city</a>
        <a>Smart city</a>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/imgs/black_head_cutout.png" style=" height: 200px; width: 100%;">
  </div>
  <div class="overlay"></div>
</section>

  <section class="masthead d-flex p-5">
    <div class="container text-left my-auto">
      <h3 class="text-black" style="margin-top: 180px">
        <strong>
          *.tumba
        </strong>
      </h3>
    </div>
    <div class="overlay"></div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">
        <div class="col-2">
	  <p>What we do</p>
	  <a href="#">Services</a>
	  <a href="#">Team Extensions</a>
	  <a href="#">Product Growth</a>
	  <a href="#">Domain Ownership</a>
	  <a href="#">Proof of Concept</a>
	</div>
	<div class="col-2">
	  <p></p>
	  <a href="#">Industries</a>
	  <a href="#">AutoTech</a>
	  <a href="#">News</a>
	  <a href="#">Entertainment</a>
	  <a href="#">Wellness</a>
	  <a href="#">Startups</a>
	  <a href="#">More</a>
	</div>
        <div class="col-2">
	  <p>Team</p>
	  <a href="#">Manifesto</a>
	  <a href="#">Why Tumba</a>
	  <a href="#">Careers</a>
        </div>
	<div class="col-2">
	  <p>Activities</p>
	  <a href="#">Events</a>
	  <a href="#">In the news</a>
	  <a href="#">Lab</a>
        </div>
        <div class="col-4">
	  <p>Follow us</p>
	  <a href="#">F</a>
	  <a href="#">G</a>
	  <a href="#">I</a>
      </div>
    </div>
    <div class="stone-cairn">
      <p style="text-align: center; margin-top: 100px; font-size: 11px;">
        Huh, another stone<br />
        cairn, wonder who<br />
        left it here...
      </p>
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/cairn.png">
    </div>
  </footer>

<?php get_footer(); ?>

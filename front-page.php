<?php get_header(); ?>

 <!-- Header -->
  <!-- <header class="masthead d-flex p-5">

  </header> -->

  <?php //if (function_exists(clean_custom_menus())) clean_custom_menus(); ?>

<div class="thold">
  <section class="front-page-headline-section" style="text-shadow: 2px 2px 10px #00000033">
    <div class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png">
    </div>
    <p>
      <?php echo get_theme_mod('frontpage-top-headline')?>
    </p>
  </section>
  <div id="scrlr">
  </div>
</div>
  <section class="content-section front-page-section"  style="text-shadow: 2px 2px 10px #00000033">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
  </section>

  <!-- <section class="content-section front-page-section">
    <?php wp_nav_menu( array( 'theme_location' => 'mid_section-menu', 'container_class' => 'new_menu_class' ) ); ?>
  </section> -->

  <!-- <section class="front-page-headline-section front-page-section">
    <p>
      <?php //echo get_theme_mod('frontpage-bottom-headline')?>
    </p>
  </section> -->

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
  <footer class="footer text-center" style="text-shadow: 1px 1px 3px #00000099">
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

<script>

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

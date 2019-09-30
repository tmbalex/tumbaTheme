<?php get_header(); ?>

 <!-- Header -->
  <header class="masthead d-flex p-5">
    <div class="container text-left my-auto">
      <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo.png">
    </div>
  </header>

  <section class="page-section content-section">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    <?php endwhile; endif; ?>
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

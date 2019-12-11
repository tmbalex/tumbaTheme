<!-- Header -->
<header class="masthead">
  <div class="fixed_logo_icon_holder">
    <a href="/wrdprss/">
      <img id="fixed_logo_icon" src="http://localhost/wrdprss/wp-content/themes/tumbaTheme/imgs/logo_icon.svg">
    </a>
  </div>

  <div class="container text-left my-auto" style="max-width: 1280px; margin: 0 auto;">
    <div class="logo">
      <a href="/wrdprss/">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_word.svg">
      </a>
    </div>
  </div>
</header>

<style>
    .masthead{
      background: black;
    }

    #page_header{
      background: black;
    }

    #page_header h1{
      margin-top: 0;
    }

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
      background: black;
    }

    #page_header h1{
      max-width: 1280px;
      margin: 0 auto;
      font-size: 54px;
      font-weight: bold;
      padding: 60px 80px 20px;
    }

    #header_text_holder{
      background: black;
    }

    .header_text{
      width: 100%;
      max-width: 1280px;
      margin: 0 auto 0;
      padding: 0 80px 100px;
      overflow: hidden;
      color: white;
      font-size: 24px;
      font-weight: bold;
    }

    @media (max-width: 770px){
      #page_header h1{
        padding: 60px 55px 20px;
      }

      .header_text{
        padding: 0 55px 100px;
      }
    }

    #manifesto_section{
      background: white;
      padding: 100px 0;
    }

    .manifesto_text_holder{
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 80px;
    }

    .manifesto_icon{

    }

    .manifesto_icon_svg{
      filter: brightness(0%);
      width: 130px;
    }

    .manifesto_headline{
      font-size: 32px;
      font-weight: bold;
    }

    .manifesto_content{
      font-size: 18px;
    }

    @media (max-width: 770px){
      .manifesto_text_holder{
        padding: 0 60px;
      }

      .manifesto_icon_svg{
        width: 100px;
      }

      .manifesto_headline{
        font-size: 28px;
      }

      .manifesto_content{
        font-size: 15px;
      }
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
    <h1><?php the_title() ?></h1>
  </div>

  <section id="header_text_holder">
    <div class="header_text">
      <?php echo $content_array[0] ?>
    </div>
  </section>

  <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_black.svg" style="transform: scale(-1); object-fit: cover; width: 100vw; height: 80px; margin-top: -2px; background: white;">

  <section id="manifesto_section">
    <div class="manifesto_text_holder">
      <div class="manifesto_icon">
        <img class="manifesto_icon_svg" src="<?php echo get_template_directory_uri(); ?>/imgs/career_icon.svg">
      </div>
      <div class="manifesto_headline">
        <?php echo $content_array[1] ?>
      </div>
      <div class="manifesto_content">
        <?php echo $content_array[2] ?>
      </div>
    </div>
    <div class="manifesto_text_holder">
      <div class="manifesto_icon">
        <img class="manifesto_icon_svg" src="<?php echo get_template_directory_uri(); ?>/imgs/career_icon.svg">
      </div>
      <div class="manifesto_headline">
        <?php echo $content_array[3] ?>
      </div>
      <div class="manifesto_content">
        <?php echo $content_array[4] ?>
      </div>
    </div>
    <div class="manifesto_text_holder">
      <div class="manifesto_icon">
        <img class="manifesto_icon_svg" src="<?php echo get_template_directory_uri(); ?>/imgs/career_icon.svg">
      </div>
      <div class="manifesto_headline">
        <?php echo $content_array[5] ?>
      </div>
      <div class="manifesto_content">
        <?php echo $content_array[6] ?>
      </div>
    </div>
    <div class="manifesto_text_holder">
      <div class="manifesto_icon">
        <img class="manifesto_icon_svg" src="<?php echo get_template_directory_uri(); ?>/imgs/career_icon.svg">
      </div>
      <div class="manifesto_headline">
        <?php echo $content_array[7] ?>
      </div>
      <div class="manifesto_content">
        <?php echo $content_array[8] ?>
      </div>
    </div>
    <div class="manifesto_text_holder">
      <div class="manifesto_icon">
        <img class="manifesto_icon_svg" src="<?php echo get_template_directory_uri(); ?>/imgs/career_icon.svg">
      </div>
      <div class="manifesto_headline">
        <?php echo $content_array[9] ?>
      </div>
      <div class="manifesto_content">
        <?php echo $content_array[10] ?>
      </div>
    </div>
    <div class="manifesto_text_holder">
      <div class="manifesto_icon">
        <img class="manifesto_icon_svg" src="<?php echo get_template_directory_uri(); ?>/imgs/career_icon.svg">
      </div>
      <div class="manifesto_headline">
        <?php echo $content_array[11] ?>
      </div>
      <div class="manifesto_content">
        <?php echo $content_array[12] ?>
      </div>
    </div>
  </section>

  <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="object-fit: cover;  width: 100vw; height: 80px; margin-top: -2px; background: white;">


  <div id="background_gradient">
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
            var os = $('.black_cutout_top:first').offset().top; // pixels to the top of div1
            // if you've scrolled further than the top of div1 plus it's height
            // change the color. either by adding a class or setting a css property
            if(scroll < os)
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

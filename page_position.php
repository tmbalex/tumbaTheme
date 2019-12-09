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
      margin: 60px auto 60px;
      padding: 0 80px;
      font-size: 44px;
      font-weight: bold;
      text-shadow: 2px 2px 10px #00000033;
    }

    @media (max-width: 770px){
      #page_header h1{
        font-size: 34px;
        padding: 0 60px;
      }
    }

    #position_description_section{
      background: black;
      padding: 60px 0;
    }

    .black_cutout_top{
      width: 100%;
      height: 40px;
    }

    #position_description{
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      color: white;
      padding: 0 60px 0;
    }

    .position_icon img{
      object-fit: contain;
      float: right;
      position: absolute;
        padding-left: 20px;
    }

    .position_title{
      font-size: 32px;
      color: #00EDAE;
      padding-left: 100px;
    }

    .position_main_description{
      font-size: 22px;
      padding: 10px;
      padding-left: 100px;
    }


    .position_sub_description{
      font-size: 18px;
      padding: 10px;
      padding-left: 100px;
    }

    .position_subheader{
      color: #00EDAE;
      width: 100%;
      font-size: 20px;
      font-weight: bold;
      display: block;
      margin: 5px 0;
    }

    @media (max-width: 770px){
      #position_description{
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        color: white;
        padding: 0 40px 0;
      }

      .position_icon img{
        position: relative;
          padding-left: 20px;
      }

      .position_title{
        padding-left: 20px;
      }

      .position_main_description{
        padding-left: 20px;
      }


      .position_sub_description{
        padding-left: 20px;
      }
    }

    .black_cutout_bottom{
      width: 100%;
      height: 40px;
      transform: rotate(180deg);
    }

    #form_section{
      background: url('<?php echo get_template_directory_uri(); ?>/imgs/cv_back.png') no-repeat;
      background-size: cover;
      background-position: bottom;
      margin-top: -70px;
    }

  </style>




  <div id="page_header">
    <h1>Careers</h1>
  </div>

  <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="filter: brightness(0%); object-fit: cover; height: 80px; margin-bottom: -2px;">

  <section id="position_description_section">
    <div id="position_description" class="row">
      <div class="position_icon">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/person_icon.png">
      </div>
      <div class="position_title col-12">
        <?php the_title() ?>
      </div>
      <div class="position_main_description col-12">
        <?php echo $content_array[0] ?>
      </div>
      <div class="position_sub_description col-12 col-md-6">
        <span class="position_subheader"><?php echo $content_array[1] ?></span>
        <?php echo $content_array[2] ?>
      </div>
      <div class="position_sub_description col-12 col-md-6">
        <span class="position_subheader"><?php echo $content_array[3] ?></span>
        <?php echo $content_array[4] ?>
      </div>
    </div>
  </section>

    <style>
      #form_holder{
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        padding: 260px 80px;
        text-shadow: 2px 2px 2px #3d3d3d;
      }

      #form_holder h2{
        font-weight: bold;
        color: white;
        margin: 0;
        padding: 0;
      }

      @media (max-width: 770px){
        #form_holder{
          padding: 160px 60px;
        }
      }

      #form_holder input[type=text]{
        background: none;
        border: none;
        border-bottom: 1px white solid;
        padding: 5px;
        font-size: 24px;
        margin-top: 25px;
        text-shadow: 2px 2px 2px #3d3d3d;
        color: white;
      }

      #form_holder input[type=text]::placeholder {
        color: #cdcdcd;
      }

      .checkbox_holder{
        font-size: 24px;
        margin-top: 20px;
        color: white;
      }

      @media (max-width: 920px){
        .checkbox_holder{
          font-size: 18px;
        }
      }

      @media (max-width: 770px){
        .checkbox_holder{
          font-size: 16px;
        }
      }

      @media (max-width: 520px){
        .checkbox_holder{
          font-size: 12px;
          float: left;
        }
      }

      #form_holder input[type=submit]{
        border: none;
        background: gray;
        color: black;
        margin-top: 20px;
        font-size: 30px;
        padding: 10px 0;
        font-weight: bold;
      }

      @media (max-width: 502px){
        #form_holder input[type=submit]{
          margin-top: 40px;
        }
      }

      #files_label{
        color: white;
        width: 175px;
        text-align: center;
        /* height: 100%; */
        /* display: block; */
        position: absolute;
        cursor: pointer;
        top: 48%;
        left: 35%;
      }

      #application_form{
          display: block;
      }

      #form_res{
        display: none;
      }

      #form_res p{
        font-size: 24px;
        color: white;
        margin-top: 60px;
        line-height: 48px;
        padding-bottom: 150px;
      }
    </style>

    <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top_green.svg" style="transform: scale(-1); filter: brightness(0%); object-fit: cover; height: 80px; margin-top: -2px;">

  <section id="form_section">
    <div id="form_holder" class="row">
      <h2 class="col-12">Apply for this position</h2>
      <form id="application_form" method="POST" enctype="multipart/form-data">
        <div class="col-12 col-md-4" style="float: right; margin: 30px 0 0;">
            <div style="transform: rotate(7deg);">
              <div>
                <input name="attachment[]" type="file" id="filesupload" multiple style="display:none"/>
                <img id="file_field" src="<?php echo get_template_directory_uri(); ?>/imgs/file_field.svg"  style="cursor: pointer; float: right">
              </div>
            </div>
            <p id="files_label"></p>
        </div>
        <div class="col-12 col-md-8 row">
          <input name="position" type="text" value="<?php the_title() ?>" style="display: none;"/>
          <input name="person_name" type="text" placeholder="Your name" class="col-12"/>
          <input name="person_email" type="text" placeholder="Your email" class="col-12"/>

          <div class="checkbox_holder col-12">
            <input type="checkbox" id="scales" name="scales">
            <label for="scales"></label><span class="pseudo_label">I agree to Tumba's <a href="#form_section">Terms&Conditions</a></span>
          </div>

          <input type="submit" label="Submit" class="col-12 col-md-4"/>
        </div>
      </form>
      <div id="form_res">
        <p>
          Thank you, your application has been submitted sucessfully.<br />
          Read below what happens next.
        </p>
      </div>
    </div>
  </section>

  <style>


  .checkbox_holder {
    position: relative;
  }

  .checkbox_holder label {
    background-color: #00000000;
    border: 3px solid #AAEDAE;
    border-radius: 50%;
    cursor: pointer;
    height: 28px;
    left: 0;
    position: absolute;
    top: 0;
    width: 28px;
  }

  .checkbox_holder label:after {
    border: 2px solid #fff;
    border-top: none;
    border-right: none;
    content: "";
    height: 6px;
    left: 5px;
    opacity: 0;
    position: absolute;
    top: 6px;
    transform: rotate(-45deg);
    width: 12px;
  }

  .checkbox_holder input[type="checkbox"] {
    visibility: hidden;
  }

  .checkbox_holder input[type="checkbox"]:checked + label {

  }

  .checkbox_holder input[type="checkbox"]:checked + label:after {
    opacity: 1;
    border-color: #AAEDAE;
  }

  .pseudo_label{
    padding-left: 10px;
    text-indent: 0;
    display: block;
    float: left;
    /* padding: 0 0 0 20px; */
    margin-left: 11px;
    position: absolute;
    top: 0px;
    font-size: 18px;
  }

  .checkbox_holder a{
    border-bottom: 2px #AAEDAE dotted;
    color: #AAEDAE;
  }

  .checkbox_holder a:hover{
    border-bottom: 1px #AAEDAE solid;
    text-decoration: none;
  }

    .steps_headline{
      color: white;
      font-weight: bold;
    }

    .steps_sub_headline{
      color: white;
      font-weight: bold;
    }

    #steps{
      width: 100%;
      max-width: 1280px;
      margin: 0 auto;
      margin-top: 100px;
      margin-bottom: 50px;
      padding: 0 60px;
    }

    @media (max-width: 770px){
      #steps{
        padding: 0 40px;
      }

    }

    @media (max-width: 574px){
      .step_number{
        margin-top: 30px;
        margin-bottom: 5px;
      }

      .step_headline{
        margin-bottom: 5px;
      }
    }

    .step_number{
      background: url('<?php echo get_template_directory_uri(); ?>/imgs/white_spot.png') no-repeat;
      object-fit: contain;
      text-align: left;
      font-size: 40px;
      padding: 10px 25px;
    }

    .step_headline{
      font-weight: bold;
    }


  </style>

  <section id="steps_section">
    <div id="steps" class="row">
      <h2 class="col-12 steps_headline">So what's next?</h2>
      <p class="col-12 steps_sub_headline">Recruitment steps</p>
      <div class="col-12 col-sm-4">
          <p class="step_number">1</p>
          <p class="step_headline">Review</p>
          <p>We will read carefully your submitted application. In case you have published open source code, projects or PRs, we'll go through them as well.</p>
      </div>
      <div class="col-12 col-sm-4">
          <p class="step_number">2</p>
          <p class="step_headline">Interview</p>
          <p>We conduct two interviews. First one aligns expectations and overviews each other's expertise. Second one is an in-depth technological chat and development opportunities discussion.</p>
      </div>
      <div class="col-12 col-sm-4">
          <p class="step_number">3</p>
          <p class="step_headline">Offer</p>
          <p>We make an offer to the candidate we think is the best fit for the role. In case you think different, we are open for another conversation.</p>
      </div>
    </div>
  </section>

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
        var ht = $('.black_cutout_top:first').height() * 2 + $('#position_description_section').height() + $('#form_section').height(); // height of div1 in pixels
        // if you've scrolled further than the top of div1 plus it's height
        // change the color. either by adding a class or setting a css property
        if(scroll < os)
          $('#fixed_logo_icon').addClass('inverted');
        else if(scroll < os + ht)
            $('#fixed_logo_icon').removeClass('inverted');
        else
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

        //Files handling
        $('#file_field').click(function(){ $('#filesupload').trigger('click'); });
        $('#files_label').click(function(){ $('#filesupload').trigger('click'); });
        $(function() {
           $("#filesupload:file").change(function (){
             var fileNames = $("#filesupload")[0].files;
             if(fileNames.length > 0){
               $("#file_field").attr("src", "<?php echo get_template_directory_uri(); ?>/imgs/file_field_selected.svg");
               $("#files_label").html(fileNames.length + " files added");
             }
             else{
               $("#file_field").attr("src", "<?php echo get_template_directory_uri(); ?>/imgs/file_field.svg");
               $("#files_label").html("");
             }
           });
        });


        //Form get_all_position_pages
        $("#application_form").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);

            $.ajax({
                url: "<?php echo get_template_directory_uri(); ?>/mmail_sender.php",
                type: 'POST',
                data: formData,
                success: function (data) {
                    if(data == "OK"){
                      $("#application_form").hide();
                      $("#form_res").show();
                    }else{
                      alert("There was a problem, sending your application!" + data);
                    }
                },
                cache: false,
                contentType: false,
                processData: false
            });
        });

      });


  </script>

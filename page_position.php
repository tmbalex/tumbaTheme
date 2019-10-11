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
      margin: 40px auto 100px;
      font-size: 44px;
    }

    #position_description_section{
      background: black;
    }

    .black_cutout_top{
      width: 100%;
      height: 40px;
    }

    #position_description{
      width: 100%;
      max-width: 960px;
      margin: 0 auto;
      color: white;
    }

    .position_icon img{
      width: 80%;
      height: 80%;
      object-fit: contain;

    }

    .position_title{
      font-size: 32px;
      color: #00EDAE;
    }

    .position_main_description{
      font-size: 22px;
      padding: 10px;
    }


    .position_sub_description{
      font-size: 18px;
      padding: 10px;
    }

    .position_subheader{
      color: #00EDAE;
      width: 100%;
      font-size: 20px;
      font-weight: bold;
      display: block;
      margin: 5px 0;
    }

    .black_cutout_bottom{
      width: 100%;
      height: 40px;
      transform: rotate(180deg);
    }

    #form_section{
      background: url('<?php echo get_template_directory_uri(); ?>/imgs/cv_back.png') no-repeat;
      height: 800px;
      background-size: cover;
      background-position: bottom;
      margin-top: -40px;
    }

  </style>




  <div id="page_header">
    <h1>Careers</h1>
  </div>

  <img class="black_cutout_top" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top.png">
  <section id="position_description_section">
    <div id="position_description" class="row">
      <div class="position_icon col-2">
        <img src="<?php echo get_template_directory_uri(); ?>/imgs/person_icon.png">
      </div>
      <div class="position_title col-10">
        Senior iOS developer
      </div>
      <div class="position_empty col-2">
      </div>
      <div class="position_main_description col-10">
        We are looking for an experienced iOS developer who is not afraid of a big code base. You will be an integral part of the team developing the future of one of the biggest news publishing apps in the world.
      </div>
      <div class="position_empty col-2">
      </div>
      <div class="position_sub_description col-5">
        <span class="position_subheader">Core requirements</span>
        All new code is written in Swift. We do have some legacy Objective-C code. Being able to read and fix it is a plus.<br />
        We do value and listen to our developer’s ideas.<br />
        The team is split in New York/US and Sofia/BG. Good communication is important part of our work.
      </div>
      <div class="position_sub_description col-5">
        <span class="position_subheader">Main responsibilities</span>
        Solve complex problems. When existing solutions does not match your needs. Support and improve existing code base. We strive not only to fix, but improve our current solution. Refactoring is part of our culture.
      </div>
    </div>
  </section>

    <style>
      #form_holder{
        width: 100%;
        max-width: 960px;
        margin: 0 auto;
      }

      #form_holder h2{
        padding: 160px 0 0;
        font-weight: bold;
        color: white;
      }

      #form_holder input[type=text]{
        background: none;
        border: none;
        border-bottom: 1px white solid;
        padding: 5px;
        font-size: 24px;
        margin-top: 25px;
      }

      #form_holder input[type=text]::placeholder {
        color: white;
      }

      .checkbox_holder{
        font-size: 24px;
        margin-top: 20px;
        color: white;
      }

      #form_holder input[type=submit]{
        border: none;
        background: gray;
        color: black;
        margin-top: 20px;
        font-size: 30px;
        padding: 10px;
      }
    </style>

  <img class="black_cutout_bottom" src="<?php echo get_template_directory_uri(); ?>/imgs/grudge_top.png">
  <section id="form_section">
    <div id="form_holder" class="row">
      <h2 class="col-12">Apply for this position</h2>
      <form class="col-8 row">
        <input type="text" placeholder="Your name" class="col-12"/>
        <input type="text" placeholder="Your email" class="col-12"/>

        <div class="checkbox_holder col-12">
          <input type="checkbox" id="scales" name="scales">
          <label for="scales">I agree to Tumba's Terms&Conditions</label>
        </div>

        <input type="submit" label="Submit" class="col-4"/>

      </form>
    </div>
  </section>

  <style>
    .steps_headline{
      color: white;
    }

    .steps_sub_headline{
      color: white;
    }

    #steps{
      width: 100%;
      max-width: 960px;
      margin: 0 auto;
      margin-top: 100px;
      margin-bottom: 50px;
    }

    .step_number{
      background: url('<?php echo get_template_directory_uri(); ?>/imgs/white_spot.png') no-repeat;
      object-fit: contain;
      text-align: left;
      font-size: 40px;
      padding: 10px 25px;
    }


  </style>

  <section id="steps_section">
    <div id="steps" class="row">
      <h2 class="col-12 steps_headline">So what's next?</h2>
      <p class="col-12 steps_sub_headline">Recruitment steps</p>
      <div class="col-4">
          <p class="step_number">1</p>
          <p>Review</p>
          <p>We will read carefully your submitted application. In case you have published open source code, projects or PRs, we'll go through them as well.</p>
      </div>
      <div class="col-4">
          <p class="step_number">2</p>
          <p>Interview</p>
          <p>We conduct two interviews. First one aligns expectations and overviews each other's expertise. Second one is an in-depth technological chat and development opportunities discussion.</p>
      </div>
      <div class="col-4">
          <p class="step_number">3</p>
          <p>Offer</p>
          <p>We make an offer to the candidate we think is the best fit for the role. In case you think different, we are open for another conversation.</p>
      </div>
    </div>
  </section>

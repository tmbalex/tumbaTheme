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
      margin: 0 auto 200px;;
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

    <h2>Sofia</h2>

    <div id="location_list" class="col-4">
      <a href="#">Sofia</a>
      <a href="#">Palo Alto</a>
      <a href="#">Upcoming events</a>
      <a href="#">In the news</a>
    </div>

    <div id="location_properties" class="col-8">
      <h3>Bulgaria</h3>
      <p>
        +359 88 812 34 56<br />
        81 Tzar Boris III Blvd.<br />
        Sofia, Bulgaria
      </p>
    </div>

  </div>

  <div id="background_gradient">
  </div>

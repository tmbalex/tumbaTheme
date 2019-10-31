
<?php
  $messages_aray = [];
  $messages_aray[0] = "Huh, another stone<br />cairn, wonder who<br />left it here...";
  $messages_aray[1] = "\"I've learned that everyone wants to live on top of the mountain,<br/>but all the happiness and growth occurs while you're climbing it.\"<br /><b>Andy Rooney</b>";
  $messages_aray[2] = "Another quote to go to the bottom.";
  $messages_aray[3] = "More quotes available at any given time";
  $messages_aray[4] = "Just a joke. Never mind it and go on.";

  $bottom_message = $messages_aray[rand ( 0 , 4 )];
?>


<div class="stone-cairn" style="margin-top:80vh">
  <p style="text-align: center; margin-top: 100px; font-size: 11px; font-weight: normal;">
    <?php echo $bottom_message ?>
  </p>
  <img src="<?php echo get_template_directory_uri(); ?>/imgs/logo_icon.svg" style="filter: brightness(0%)">
</div>

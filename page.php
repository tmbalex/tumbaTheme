<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <?php $content = get_the_content(); ?>
<?php endwhile; endif; ?>
<?php
  $content_array = preg_split('%<!-- wp:(.*)-->%', $content, -1, PREG_SPLIT_NO_EMPTY);
?>

<?php
  if(get_the_ID() == 339)
    include_once("page_all_positions.php");
  else if(get_the_ID() == 451)
    include_once("page_manifesto.php");
  else if(get_the_ID() == 486)
    include_once("page_contacts.php");
  else{
      if(wp_get_post_parent_id() == 335)
        include_once("page_meet_us.php");
      else if(wp_get_post_parent_id() == 339)
        include_once("page_position.php");
      else if(wp_get_post_parent_id() == 331)
        include_once("page_tech.php");
  }
 ?>

<?php get_footer(); ?>

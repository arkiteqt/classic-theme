<?php
/*
* Template Name: Contact Page
*/
get_header();
?>
<section class="section contact">
  <div class="container">
    <h2 class="section__heading">Request Form</h2>
    <div class="section__content">
      <p class="section__content-text">We have some preliminary questions to ask you before we can get started. We understand if you do not have everything thought out yet, but please try to fill out the following form to the best of your ability.</p>
    </div>

    <?php gravity_form(1, false, false, false, '', false ,0,true);?>
  </div>
</section>
<?php get_footer(); ?>

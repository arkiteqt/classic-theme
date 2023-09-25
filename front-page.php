<?php
  get_header();
  $pageData = new Page_Home();
?>
<section class="hero" id="home">
  <?php $heroSection = $pageData->get_hero_section();?>
  <div class="hero__background-image" style="background-image:url('<?php echo $heroSection['background_image_url']; ?>');"><!-- HERO BACKGROUND IMAGE --></div>
  <div class="hero__background-overlay"><!-- HERO BACKGROUND OVERLAY --></div>
  <div class="hero__intro-box">
    <div class="container">
        <h1 class="hero__heading"><?php echo $heroSection['heading'];?></h1>
        <p class="hero__caption"><?php echo $heroSection['caption'];?></p>
        <a href="<?php echo $heroSection['cta']['link'];?>" class="btn btn--primary hero__call-to-action"><?php echo $heroSection['cta']['label'];?></a>
    </div>
  </div>
</section>
<section class="section about" id="about">
  <?php $aboutSection = $pageData->get_about_section();?>
  <div class="container">
    <h2 class="section__heading"><?php echo $aboutSection['heading'];?></h2>
    <div class="section__content">
      <p class="section__content-text"><?php echo $aboutSection['caption'];?></p>
    </div>
  </div>
</section>
<?php
  $servicesSection = $pageData->get_services_section();
  $services = $servicesSection['services'];
  if(!empty($services)){
?>
  <section class="section services" id="services">
    <div class="container">
      <h2 class="section__heading"><?php echo $servicesSection['heading'];?></h2>
      <div class="section__content">
        <?php foreach($services as $service){?>
        <div class="service">
          <div class="service__inner">
            <h3 class="service__inner-title"><span class="service__inner-icon service__inner-icon--<?php echo $service['icon'];?>"></span> <?php echo $service['title'];?></h3>
            <p class="service__inner-description"><?php echo $service['description'];?></p>
          </div>
        </div>
        <?php } ?>
      </div>
      <a href="<?php echo $servicesSection['cta']['link'];?>" class="btn btn--tertiary section__call-to-action"><?php echo $servicesSection['cta']['label'];?></a>
    </div>
  </section>
<?php } ?>
<?php
  $projectsSection = $pageData->get_projects_section();
  if ($projectsSection['projects']->posts) :
?>
  <section class="section projects" id="projects">
    <div class="container">
      <h2 class="section__heading"><?php echo $projectsSection['heading'];?></h2>
      <div class="section__content">
        <?php foreach($projectsSection['projects']->posts as $post):
          setup_postdata($post);
          $thumbnail = get_the_post_thumbnail_url();
          $featured_image = !empty($thumbnail) ? $thumbnail : '';
        ?>
        <div class="project">
          <div class="project__inner">
            <div class="project__inner-image" style="background-image:url('<?php echo $featured_image;?>');"></div>
            <a href="<?php echo get_permalink();?>" class="project__inner-name"><?php echo get_the_title();?></a>
          </div>
        </div>
      <?php endforeach; wp_reset_postdata(); ?>
      </div>
      <a href="<?php echo $projectsSection['cta']['link'];?>" class="btn btn--tertiary  section__call-to-action projects__call-to-action"><?php echo $projectsSection['cta']['label'];?></a>
    </div>
  </section>
<?php endif; ?>
<?php
  $blogSection = $pageData->get_blog_section();
  if ($blogSection['posts']->posts) :
?>
  <section class="section blog" id="blog">
    <div class="container">
      <h2 class="section__heading"><?php echo $blogSection['heading'];?></h2>
      <div class="section__content">
        <?php foreach($blogSection['posts']->posts as $post): setup_postdata($post);?>
        <div class="post">
          <div class="post__inner">
            <div class="post__inner-image"></div>
            <div class="post__inner-content">
              <h3 class="post__inner-content-title"><?php echo get_the_title();?></h3>
              <p class="post__inner-content-excerpt"><?php echo  get_the_excerpt(); ?><a href="<?php echo get_permalink();?>" class="post__inner-link">Read More</a></p>
            </div>
          </div>
        </div>
      <?php endforeach; wp_reset_postdata();?>
      </div>
      <a href="<?php echo $blogSection['cta']['link'];?>" class="btn btn--tertiary section__call-to-action blog__call-to-action"><?php echo $blogSection['cta']['label'];?></a>
    </div>
  </section>
<?php endif; ?>
<section class="section contact" id="contact">
  <?php $contactSection = $pageData->get_contact_section();?>
  <div class="container">
    <div class="section__content">
      <a href="<?php echo $contactSection['cta']['link'];?>" class="btn btn--primary section__call-to-action contact__call-to-action"><?php echo $contactSection['cta']['label'];?></a>
    </div>
  </div>
</section>
<?php get_footer(); ?>

<?php
get_header(); ?>

<!-- bandeau haut -->
<!-- <div class="container-fluid no-padding"> -->
<?php get_template_part('template-parts/herobanner-home'); ?>
<!-- </div> -->

<!-- Bloc 3 colonnes -->
 <div class="home-col3-icones">
  <div class="row">
    <div class="col-md-4">
      <div class="icone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icone-france-80.png" alt="<?php echo esc_html__('Sud Ouest de la France','greenresort-child'); ?>"></div>
      <p class="n1 mb-0"><strong><?php echo esc_html__('Entre Biarritz et Hossegor','greenresort-child'); ?></strong></p>
      <p class="n2"><?php echo esc_html__('1km de la plage','greenresort-child'); ?>
       </p>
    </div>

    <div class="col-md-4">
      <div class="icone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icone-eco-label-80.png" alt="<?php echo esc_html__('Ecolabel','greenresort-child'); ?>"></div>
      <p class="n1 mb-0"><strong><?php echo esc_html__('Certifié Ecolabel','greenresort-child'); ?></strong></p>
      <p class="n2"><?php echo esc_html__('Engagé pour le tourisme durable','greenresort-child'); ?></p>
    </div>

    <div class="col-md-4">
      <div class="icone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icone-tripadvisor-80.png" alt="<?php echo esc_html__('Tripadvisor','greenresort-child'); ?>"></div>
      <p class="n1 mb-0"><strong><?php echo esc_html__('5/5 sur TripAdvisor','greenresort-child'); ?></strong></p>
      <p class="n2"><?php echo esc_html__('On nous recommande !','greenresort-child'); ?></p>
    </div>

  </div>
 </div>

<div class="container py-5">
  <h1 class="text-center mb-4">Bienvenue au Green Resort</h1>

  <section class="mb-5">
    <h2>Nos Écolodges</h2>
    <div class="row">
      <?php
      $ecolodges = new WP_Query(['post_type' => 'ecolodge', 'posts_per_page' => 3]);
      while ($ecolodges->have_posts()) : $ecolodges->the_post(); ?>
        <div class="col-md-4">
          <div class="card mb-3">
            <?php if (has_post_thumbnail()) : the_post_thumbnail('medium', ['class' => 'card-img-top']); endif; ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="mb-5">
    <h2>Nos Expériences</h2>
    <div class="row">
      <?php
      $experiences = new WP_Query(['post_type' => 'experience', 'posts_per_page' => 3]);
      while ($experiences->have_posts()) : $experiences->the_post(); ?>
        <div class="col-md-4">
          <div class="card mb-3">
            <?php if (has_post_thumbnail()) : the_post_thumbnail('medium', ['class' => 'card-img-top']); endif; ?>
            <div class="card-body">
              <h5 class="card-title"><?php the_title(); ?></h5>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>
  </section>

  <section class="mb-5">
    <h2>Ce que disent nos clients</h2>
    <?php
    $avis = new WP_Query(['post_type' => 'avis', 'posts_per_page' => 1]);
    while ($avis->have_posts()) : $avis->the_post(); ?>
      <blockquote class="blockquote">
        <p class="mb-0"><?php the_content(); ?></p>
        <footer class="blockquote-footer"><?php the_title(); ?></footer>
      </blockquote>
    <?php endwhile; wp_reset_postdata(); ?>
  </section>
</div>

<?php get_footer(); ?>

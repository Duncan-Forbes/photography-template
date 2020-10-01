<?php
/*
 * Template Name: Photography Template
 */

$image_data = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full' );
$image_url = $image_data[0]; /* Gets the URL of the featured image and is passed in as the background below */

get_header();
?>


<div id="primary" class="content-area">

  <?php if ($how_it_works = get_field('how_it_works')): ?>

    <section id="how-it-works">

      <div class="container">

        <div class="row">

          <div class="col">

            <div class="hiw-write-up">

              <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#hiw-text" aria-expanded="false" aria-controls="hiw-text">
                Click here for more information
              </button>

              <?php while ( have_posts() ) : the_post(); ?>

                <div class="collapse" id="hiw-text">
                  <?php the_content(); ?>

                  <?php if ($technologies = get_field('technologies')): ?>

                    <div class="tech-heading">
                      <h2>Technologies Used:</h2>
                    </div>

                      <?php foreach ($technologies as $t): ?>

                        <div class="row justify-content-center">

                          <?php if($t['html']): ?>
                            <div class="tech-item">
                              <span class="fab fa-html5"></span>
                              <p>HTML</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['css']): ?>
                            <div class="tech-item">
                              <span class="fab fa-css3-alt"></span>
                              <p>CSS</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['javascript']): ?>
                            <div class="tech-item">
                              <span class="fab fa-js-square"></span>
                              <p>JavaScript jQuery</p>
                            </div>
                          <?php endif; ?>

                          <?php if($t['php']): ?>
                            <div class="tech-item">
                              <span class="fab fa-php"></span>
                              <p>PHP</p>
                            </div>
                          <?php endif; ?>

                        </div>

                      <?php endforeach; ?>

                  <?php endif; ?>

                </div>

              <?php endwhile; wp_reset_query(); ?>

            </div>

          </div>

        </div>

      </div>

    </section>

  <?php endif; ?>

  <main id="main" class="site-main" style="position: relative; scroll-behavior: smooth;height: 1000px; margin: 2em;border: solid 4px #fff;border-radius: 2em;overflow: scroll; box-shadow: 0px 0px 20px -5px #0f0f0f;">

    <section id="photography-template-hm-hero" style="background:url('<?= $image_url ?>');">

      <div class="container">

        <div class="row align-content-center">

          <div class="hero-content">

            <span class="hero-pre-text">Welcome to Jean Yacob</span>
            <h1 class="hero-heading">Photography</h1>
            <span class="hero-sub-text">Capturing your <strong>dreams</strong> on camera</span>

            <a href="#photography-template-about-us"><div class="btn btn-contact">Learn More</div></a>

          </div>

        </div>

      </div>

    </section>

    <section id="photography-template-about-us">

      <div class="container">

        <div class="row">

          <div class="col-md-6">

            <div class="about-us-content">

              <span class="small-about-text">About Me</span>
              <h2>Get to know me</h2>

              <?= the_field('about_text') ?>
              <a href="#photography-template-contact"><div class="btn btn-contact">Contact Me</div></a>

            </div>

          </div>

          <div class="col-md-6">

            <img src="<?= the_field('about_img') ?>" style="border-radius: <?=rand(20,80) ?>% <?=rand(30,60) ?>% <?=rand(30,60) ?>% <?=rand(5,95) ?>% / <?=rand(5,95) ?>% <?=rand(30,60) ?>% <?=rand(30,60) ?>% <?=rand(5,95) ?>%;">

          </div>

        </div>

      </div>

    </section>


    <section id="photography-template-our-work" style="background: url('<?= the_field('bg_texture') ?>')">

      <div class="container">

        <div class="row">

          <div class="col-md-4">

            <div class="our-work-content">

              <span class="small-work-text">What I love to shoot</span>
              <span class="quote">Here is where I would say something about why I love my work</span>

              <ul class="our-work-services">
                <li> <span>/01</span> Weddings</li>
                <li> <span>/02</span> Family</li>
                <li> <span>/03</span> Death Stars</li>
                <li> <span>/04</span> Fitness</li>
              </ul>

            </div>

          </div>

          <div class="col-md-4">

            <div class="our-work-image-1">
              <img src="https://images.pexels.com/photos/948185/pexels-photo-948185.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
            </div>

          </div>

          <div class="col-md-4">

            <div class="our-work-two-images">

              <div class="our-work-image-2">
                <img src="https://images.pexels.com/photos/1682497/pexels-photo-1682497.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
              </div>

              <div class="our-work-image-3">
                <img src="https://images.pexels.com/photos/841131/pexels-photo-841131.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
              </div>

            </div>

          </div>

        </div>

      </div>

    </section>


    <?php if($gallery = get_field('gallery')): ?>

      <section id="photography-template-portfolio">

          <h2>Featured Galleries</h2>

            <div class="slider">

              <?php foreach ($gallery as $image): ?>

                <div class="slider-img">

                  <img src="<?= $image['gallery-image']; ?>" alt="">
                  <span class="gallery-image-label"><?= $image['image_label']; ?></span>

                </div>

              <?php endforeach; ?>

            </div>

      </section>

    <?php endif; ?>


    <?php if($testimonials = get_field('testimonials')): ?>

      <section id="photography-template-testimonials" style="background: url('<?= the_field('testimonial_bg') ?>')">

          <h2>Testimonials</h2>

            <div class="slider">

              <?php foreach ($testimonials as $t): ?>

                <div class="slider-img">

                  <span class="fas fa-quote-right"></span>
                  <p class="testimonial-main"><?= $t['testimonial'] ?></p>
                  <p class="testimonial-author"><?= $t['author'] ?></p>

                </div>

              <?php endforeach; ?>

            </div>

      </section>

    <?php endif; ?>


    <section id="photography-template-contact">

      <h2>Get in Touch</h2>

      <div class="container">

        <div class="row">

          <div class="col-md-6">

            <div class="contact-info">

              <div class="contact-phone"><span class="fal fa-phone"></span>01827 901823</div>

              <div class="contact-address"><span class="fal fa-home"></span>Jean Yacob, 1 Local Heim, Mersmit HI5 5NA</div>

              <div class="contact-social">
                <p class="contact-social-follow">Follow Me</p>
                <span class="fab fa-facebook-f"></span>
                <span class="fab fa-twitter"></span>
                <span class="fab fa-instagram"></span>
              </div>


            </div>

          </div>

          <div class="col-md-6">

            <div class="contact-form">

              <div class="row">

                <div class="col-md-12"><input type="text" placeholder="Name" name="name"></div>
                <div class="col-md-12"><input type="text" placeholder="Email" name="email"></div>
                <div class="col-md-12"><input type="text" placeholder="Phone Number" name="phone"></div>
                <div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
                <button class="btn btn-contact">Send Message</button>

              </div>

            </div>

          </div>

        </div>

      </div>

    </section>

  </main><!-- #main -->

  <div class="modal">

    <div class="modal-content">

      <span class="close">&times;</span>
      <p>In a real world version, this modal would include a gallery of images. Unfortunately I don't have a gallery of images so you're stuck with this rambling text instead.</p>

    </div>

  </div>

</div><!-- #primary -->

<?php
get_footer();

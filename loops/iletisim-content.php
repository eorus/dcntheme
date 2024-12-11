<?php
/**
 * Template Name: İletişim Template
 * Template Post Type: post, page
 *
 * Description: A custom template for displaying a fullwidth layout with no sidebar.
 *
 * @package ORUS_BootStrap_Theme
 */
?>
<?php
  get_header();
  b5st_mainbody_before();
?>

    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">

           <h1 class="my-5 fs-1 fw-bolder"><?php the_title()?></h1>

            <?php if (function_exists('dimox_breadcrumbs')) { ?>
            <?php dimox_breadcrumbs(); ?>
            <?php } ?>

        </div>

      </div>
    </section>


<main id="site-main">

    <!-- Contact Section -->
    <section id="contact" class="contact section">


      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Adres</h3>
                  <p>Çayır Sokak No:15</p>
                  <p>Burgazada - Türkiye</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item h-100" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Telefon</h3>
                  <p>+90 216 3812060</p>
                  <p></p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item h-100" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Eposta</h3>
                  <p>info-saitfaikmuzesi@darussafaka.org</p>
                  <p></p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Ziyaret Saatleri</h3>
                  <p>Çarşamba - Pazar</p>
                  <p>10:30 - 16:45</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Adınız" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Eposta Adresiniz" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Mesaj Konusu" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mesajınız" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <button type="submit">Mesajı Gönderin</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>
        <div class="mt-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3016.652906547144!2d29.064554775997312!3d40.87949077136881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac06af7fd36b1%3A0x17b11ca33346ae99!2sBurgazada%2C%20Sait%20Faik%20Abas%C4%B1yan%C4%B1k%20M%C3%BCzesi%2C%2034975%20Adalar%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1729665756277!5m2!1str!2str" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->
      </div>

    </section><!-- /Contact Section -->

   <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>İletişim</h2>
        <p>Bu kısım iletişim sayfasında kullanılacak form ve bilgileri içeriyor.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt"></i>
                <h3>Adres</h3>
                <p>Çayır Sokak No:15</p>
                <p>Burgazada - Türkiye</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3">
            <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="500">
              <i class="bi bi-clock"></i>
               <h3>Ziyaret Saatleri</h3>
                 <p>Çarşamba - Pazar</p>
                 <p>10:30 - 16:45</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item h-100 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone"></i>
                <h3>Telefon</h3>
                <p>+90 216 3812060</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-3 col-md-6">
            <div class="info-item h-100 d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope"></i>
                <h3>Eposta</h3>
                <p>info-saitfaikmuzesi@darussafaka.org</p>
                <p></p>
            </div>
          </div><!-- End Info Item -->

        </div>

        <div class="row gy-4 mt-1">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3016.652906547144!2d29.064554775997312!3d40.87949077136881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac06af7fd36b1%3A0x17b11ca33346ae99!2sBurgazada%2C%20Sait%20Faik%20Abas%C4%B1yan%C4%B1k%20M%C3%BCzesi%2C%2034975%20Adalar%2F%C4%B0stanbul!5e0!3m2!1str!2str!4v1729665756277!5m2!1str!2str" frameborder="0" style="border:0; width: 100%; height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div><!-- End Google Maps -->

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="400">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Adınız" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Eposta Adresiniz" required="">
                </div>

                <div class="col-12">
                  <input type="text" class="form-control" name="subject" placeholder="Mesaj Konusu" required="">
                </div>

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mesajınız" required=""></textarea>
                </div>

                <div class="col-12 text-center">
                  <button type="submit">Mesajı Gönderin</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
</main>

<?php
  b5st_mainbody_after();
  get_footer();
?>

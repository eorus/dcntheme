<?php b5st_footer_before();?>

<footer class="footer bg-secondary">
  <div class="container">

    <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="columns padme" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>


  </div>
</footer>

<?php b5st_bottomline();?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short" style="font-size: 2rem;"></i></a>

<?php b5st_footer_after();?>


<?php wp_footer(); ?>

</body>
</html>

<!DOCTYPE html>
<html data-theme="light" class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="" name="description">
  <meta content="" name="keywords">


  <!-- Favicons -->
  <link href="<?php bloginfo('template_url'); ?>/theme/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_url'); ?>/theme/img/apple-touch-icon.png" rel="apple-touch-icon">

  <?php wp_head(); ?>
</head>

<body <?php body_class('index-page'); ?>>

<a class="skip-link visually-hidden-focusable p-1" href="#site-main">Skip to main content</a>
<?php b5st_navbar_before();?>

<div class="container">
<nav class="navbar pati">
  <section class="p-2">
    <a href="https://www.dailycameranews.com/tag/canon-rumors/" class="btn btn-link">Canon Rumors</a>
    <a href="https://www.dailycameranews.com/tag/sony-rumors/" class="btn btn-link">Sony Rumors</a>
    <a href="https://www.dailycameranews.com/tag/nikon-rumors/" class="btn btn-link">Nikon Rumors</a>
    <a href="https://www.dailycameranews.com/tag/fujifilm-rumors/" class="btn btn-link">Fujifilm Rumors</a>
  </section>
  <section class="navbar-section p-2">
    <a href="https://www.dailycameranews.com/category/canon/" class="btn btn-error">Canon</a>
    <a href="https://www.dailycameranews.com/category/sony/" class="btn btn-error">Sony</a>
    <a href="https://www.dailycameranews.com/category/nikon/" class="btn btn-error">Nikon</a>
    <a href="https://www.dailycameranews.com/category/fujifilm/" class="btn btn-error">Fujifilm</a>
  </section>
</nav>
</div>

<header id="header" class="header align-items-center">
 <nav class="nav-bar">
     <label class="nav-bar-toggle mt-2" id="js-navbar-toggle" for="chkToggle">
             <i class="bi bi-list align-self-center"></i>
     </label>
    <a href="<?php echo get_home_url(); ?>" class="logo">
     Dailycameranews
    </a>
    <input type="checkbox" id="chkToggle"></input>
    <ul class="main-nav" id="js-menu">
      <li>
        <a href="https://www.dailycameranews.com/tag/camera/" class="nav-links">Cameras</a>
      </li>
      <li>
        <a href="https://www.dailycameranews.com/tag/lens/" class="nav-links">Lenses</a>
      </li>
      <li>
        <a href="https://www.dailycameranews.com/tag/reviews/" class="nav-links">Reviews</a>
      </li>
      <li>
        <a href="https://www.dailycameranews.com/tag/rumors/" class="nav-links">Rumors</a>
      </li>
      <li>
        <a href="https://www.dailycameranews.com/tag/deal/" class="nav-links">Deals</a>
      </li>
      <li>
        <a href="https://www.dailycameranews.com/tag/firmware/" class="nav-links">Firmware</a>
      </li>
    </ul>
  </nav>

<?php b5st_navbar_after();?>
</header>

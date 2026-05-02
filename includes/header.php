<?php
$current = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= isset($pageTitle) ? $pageTitle : 'Kalyanee Marine' ?> &mdash; Kalyanee Marine Shrimp Exports</title>
<link rel="icon" href="assets/logo.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/common.css">
<?php if (isset($pageCss)): ?>
<link rel="stylesheet" href="css/<?= $pageCss ?>.css">
<?php endif; ?>
</head>
<body>
<header class="site-header scrolled" id="siteHeader">
  <div class="top-bar">
    <div class="container top-bar-inner">
      <span>Delivering Quality Globally &middot; Premium Frozen Shrimp Exports</span>
      <span class="top-contact">
        <a href="mailto:krm@kalyaneemarine.com">krm@kalyaneemarine.com</a>
        <a href="tel:+919600060001">+91 96000 60001</a>
      </span>
    </div>
  </div>
  <nav class="main-nav container">
    <a href="index.php" class="brand">
      <img src="assets/logo.png" alt="Kalyanee Marine Shrimp Exports">
    </a>

    <!-- Desktop links -->
    <ul class="nav-links">
      <li><a href="index.php"    class="<?= $current==='index'   ?'active':'' ?>">Home</a></li>
      <li><a href="about.php"    class="<?= $current==='about'   ?'active':'' ?>">About</a></li>
      <li><a href="products.php" class="<?= $current==='products'?'active':'' ?>">Products</a></li>
      <li><a href="gallery.php"  class="<?= $current==='gallery' ?'active':'' ?>">Gallery</a></li>
      <li><a href="contact.php"  class="<?= $current==='contact' ?'active':'' ?>">Contact</a></li>
    </ul>
    <a href="contact.php" class="nav-cta">Get a Quote</a>

    <!-- Hamburger button -->
    <button class="ham-btn" id="hamBtn" aria-label="Open menu" aria-expanded="false">
      <span class="ham-bar"></span>
      <span class="ham-bar"></span>
      <span class="ham-bar"></span>
    </button>
  </nav>
</header>

<!-- Mobile nav backdrop -->
<div class="mob-backdrop" id="mobBackdrop"></div>

<!-- Mobile nav panel -->
<aside class="mob-nav" id="mobNav" aria-hidden="true">
  <div class="mob-nav-inner">

    <div class="mob-nav-top">
      <a href="index.php" class="mob-brand">
        <img src="assets/logo.png" alt="Kalyanee Marine">
      </a>
      <button class="mob-close" id="mobClose" aria-label="Close menu">
        <span></span><span></span>
      </button>
    </div>

    <nav class="mob-links">
      <?php
      $pages = [
        'index'    => ['Home',     'index.php'],
        'about'    => ['About',    'about.php'],
        'products' => ['Products', 'products.php'],
        'gallery'  => ['Gallery',  'gallery.php'],
        'contact'  => ['Contact',  'contact.php'],
      ];
      $i = 1;
      foreach ($pages as $key => [$label, $href]):
      ?>
      <a href="<?= $href ?>"
         class="mob-link <?= $current===$key?'is-active':'' ?>"
         style="--i:<?= $i++ ?>">
        <span class="mob-link-num"><?= str_pad(array_search($key, array_keys($pages))+1, 2,'0',STR_PAD_LEFT) ?></span>
        <span class="mob-link-label"><?= $label ?></span>
        <span class="mob-link-arrow">&#x2192;</span>
      </a>
      <?php endforeach; ?>
    </nav>

    <div class="mob-nav-footer">
      <a href="contact.php" class="btn btn-copper mob-cta">Get a Quote <span class="arrow"></span></a>
      <div class="mob-contact">
        <a href="mailto:krm@kalyaneemarine.com">krm@kalyaneemarine.com</a>
        <a href="tel:+919600060001">+91 96000 60001</a>
      </div>
      <p class="mob-tagline">Premium Frozen Shrimp &mdash; Andhra Coast to the World</p>
    </div>

  </div>
</aside>

<main class="site-main">
</header>
<main class="site-main">

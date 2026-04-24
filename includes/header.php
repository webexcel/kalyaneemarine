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
<header class="site-header" id="siteHeader">
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
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="nav-toggle-label"><span></span></label>
    <ul class="nav-links">
      <li><a href="index.php" class="<?= $current==='index'?'active':'' ?>">Home</a></li>
      <li><a href="about.php" class="<?= $current==='about'?'active':'' ?>">About</a></li>
      <li><a href="products.php" class="<?= $current==='products'?'active':'' ?>">Products</a></li>
      <li><a href="gallery.php" class="<?= $current==='gallery'?'active':'' ?>">Gallery</a></li>
      <li><a href="contact.php" class="<?= $current==='contact'?'active':'' ?>">Contact</a></li>
    </ul>
    <a href="contact.php" class="nav-cta">Get a Quote</a>
  </nav>
</header>
<main class="site-main">

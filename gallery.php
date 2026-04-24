<?php $pageTitle = 'Gallery'; $pageCss = 'gallery'; include 'includes/header.php'; ?>

<section class="page-banner">
  <div class="container">
    <div class="crumbs">Home &rsaquo; The Lens</div>
    <h1>A closer look<br>at the work behind the catch.</h1>
    <p>Inside our facilities, our farms, and the journey each carton takes &mdash; seen through the lens.</p>
  </div>
</section>

<section class="section gallery">
  <div class="container">
    <div class="gallery-tabs">
      <span class="tab active">All</span>
      <span class="tab">Facility</span>
      <span class="tab">Products</span>
      <span class="tab">Packaging</span>
    </div>
    <?php
    $gallery = [
      ['assets/cards/1.jpg',   'Premium Vannamei',      'The Catch'],
      ['assets/cards/2.webp',  'Shell-On Grade',        'The Range'],
      ['assets/cards/3.jpg',   'Peeled &amp; Deveined', 'The Kitchen'],
      ['assets/cards/4.webp',  'Tail-On PDTO',          'The Gourmet'],
      ['assets/cards/5.webp',  'Black Tiger',           'The Prize'],
      ['assets/cards/6.avif',  'Cooked IQF',            'Ready to Plate'],
      ['assets/cards/7.webp',  'Ocean Harvest',         'The Source'],
      ['assets/cards/7.avif',  'Global Logistics',      'The Voyage'],
      ['assets/cards/8.webp',  'Fresh Arrival',         'Dockside'],
      ['assets/cards/9.webp',  'Farm to Export',        'Traceability'],
      ['assets/cards/10.webp', 'Processing Floor',      'The Craft'],
      ['assets/cards/11.webp', 'Quality Control',       'The Check'],
      ['assets/cards/12.webp', 'Export Packaging',      'The Seal'],
      ['assets/cards/13.png',  'Ready to Ship',         'The Voyage'],
      ['assets/cards/14.jpg',  'Signature Grade',       'The Standard'],
    ];
    ?>
    <div class="gallery-grid">
      <?php foreach ($gallery as $i => $g): ?>
        <figure class="gallery-item reveal reveal-delay-<?= ($i % 3) + 1 ?>">
          <img src="<?= $g[0] ?>" alt="<?= $g[1] ?>" loading="lazy">
          <figcaption>
            <div>
              <small><?= $g[2] ?></small>
              <strong><?= $g[1] ?></strong>
            </div>
          </figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

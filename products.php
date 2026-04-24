<?php $pageTitle = 'Our Products'; $pageCss = 'products'; include 'includes/header.php'; ?>

<section class="page-banner">
  <div class="container">
    <div class="crumbs">Home &rsaquo; The Catalogue</div>
    <h1>What the ocean gives.<br>What the world receives.</h1>
    <p>A curated range of premium frozen shrimp &mdash; every specification, every grade, every count &mdash; engineered for discerning markets.</p>
  </div>
</section>

<!-- PRODUCT RANGE -->
<section class="section products-intro">
  <div class="container">
    <div class="section-head center reveal">
      <span class="section-eyebrow">The Range</span>
      <h2>Six signature products,<br><em>one relentless standard.</em></h2>
      <p>Whether your market demands head-on whole shrimp or ready-to-cook peeled portions, every box we pack carries the same promise.</p>
    </div>
    <?php
    $products = [
      ['Vannamei HOSO', 'Head-On Shell-On',    'The classic whole shrimp &mdash; natural flavour, striking presentation, ideal for premium retail and HoReCa.',      'https://images.unsplash.com/photo-1565299507177-b0ac66763828?auto=format&fit=crop&w=900&q=85'],
      ['Vannamei HLSO', 'Headless Shell-On',   'Versatile, easy to handle, IQF-frozen for convenience and consistency in every bag.',                                     'https://images.unsplash.com/photo-1559737558-2f5a35f4523b?auto=format&fit=crop&w=900&q=85'],
      ['Peeled &amp; Deveined',     'PD / Ready to Cook', 'Kitchen-ready shrimp in every count size. The prep is done. The quality is ours.',                               'https://images.unsplash.com/photo-1625944525533-473f1a3d54e7?auto=format&fit=crop&w=900&q=85'],
      ['Peeled Tail-On',            'PDTO / Gourmet Cut', 'Premium PDTO for plating-forward kitchens &mdash; the tail stays, the hassle goes.',                              'https://images.unsplash.com/photo-1610440042657-612c34d95e9f?auto=format&fit=crop&w=900&q=85'],
      ['Cooked Shrimp', 'Fully Cooked IQF',    'Ready-to-eat, flash-frozen at peak doneness &mdash; flavour held, texture preserved.',                                       'https://images.unsplash.com/photo-1563379091339-03b21ab4a4f8?auto=format&fit=crop&w=900&q=85'],
      ['Black Tiger',   'Whole / HLSO / PD',   'Bold-flavoured, larger-sized black tiger prawns &mdash; for markets that ask for something more.',                           'https://images.unsplash.com/photo-1580651214613-f4692d6d138f?auto=format&fit=crop&w=900&q=85'],
    ];
    ?>
    <div class="product-grid">
      <?php foreach ($products as $i => $p): ?>
      <article class="product-card reveal reveal-delay-<?= ($i % 3) + 1 ?>">
        <div class="product-visual" style="background-image: url('<?= $p[3] ?>');">
          <span class="product-badge"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
        </div>
        <div class="product-body">
          <small><?= $p[1] ?></small>
          <h3><?= $p[0] ?></h3>
          <p><?= $p[2] ?></p>
          <a href="contact.php" class="link-arrow">Request Quote <span class="arrow"></span></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SPECIFICATIONS -->
<section class="section specs">
  <div class="container">
    <div class="section-head center reveal">
      <span class="section-eyebrow">Down to the Detail</span>
      <h2>Packaging &amp; export specifications,<br><em>built for every market.</em></h2>
    </div>
    <div class="spec-grid">
      <div class="spec reveal"><span>01</span><h3>Processing</h3><p>IQF, Block Frozen, Semi-IQF, Cooked IQF &mdash; we build to your spec.</p></div>
      <div class="spec reveal reveal-delay-1"><span>02</span><h3>Glazing</h3><p>5% &ndash; 20% as per customer requirement and market norms.</p></div>
      <div class="spec reveal reveal-delay-2"><span>03</span><h3>Packing</h3><p>Inner: 1lb, 2lb, 800g, 1kg, 2kg &middot; Master: 10kg, 20kg</p></div>
      <div class="spec reveal"><span>04</span><h3>Storage</h3><p>Maintained at &minus;18&deg;C or below throughout the cold chain.</p></div>
      <div class="spec reveal reveal-delay-1"><span>05</span><h3>Certifications</h3><p>HACCP, BAP, BRC-compliant facilities with documented audits.</p></div>
      <div class="spec reveal reveal-delay-2"><span>06</span><h3>Shelf Life</h3><p>24 months from date of production, when stored correctly.</p></div>
    </div>
  </div>
</section>

<section class="cta-banner" style="background-image: linear-gradient(135deg, rgba(6,28,41,0.92) 0%, rgba(10,46,66,0.88) 60%, rgba(29,77,106,0.85) 100%), url('assets/banners/2.jpg');">
  <div class="container cta-inner reveal">
    <div>
      <span class="section-eyebrow" style="color: var(--aqua);">Custom Specifications</span>
      <h2>Need something specific?<br>We build to your brief.</h2>
      <p>Tell us your market, your counts, your packaging &mdash; we&rsquo;ll tailor the product to match, without compromising what makes it premium.</p>
    </div>
    <div class="cta-actions">
      <a href="contact.php" class="btn btn-copper">Contact Sales <span class="arrow"></span></a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

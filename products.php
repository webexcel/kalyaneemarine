<?php $pageTitle = 'Our Products'; $pageCss = 'products'; include 'includes/header.php'; ?>

<!-- SCROLL PROGRESS BAR -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- HERO -->
<section class="page-banner prod-hero" data-parallax="hero">
  <div class="prod-hero-bg"></div>
  <div class="container">
    <div class="crumbs">Home &rsaquo; The Catalogue</div>
    <h1 class="prod-h1">
      <span class="ph-line">What the ocean gives.</span>
      <span class="ph-line">What the world receives.</span>
    </h1>
    <p>A curated range of premium frozen shrimp &mdash; every specification, every grade, every count &mdash; engineered for discerning markets.</p>
    <div class="prod-hero-chips">
      <span>Vannamei</span><span>Black Tiger</span><span>IQF Frozen</span><span>HACCP Certified</span>
    </div>
  </div>
  <div class="hero-scroll-cue"><span></span></div>
</section>

<!-- FILTER + GRID -->
<section class="section products-main">
  <div class="container">

    <div class="prod-intro reveal">
      <div>
        <span class="section-eyebrow">The Range</span>
        <h2>Six signature products,<br><em>one relentless standard.</em></h2>
      </div>
      <p>Whether your market demands head-on whole shrimp or ready-to-cook peeled portions, every box we pack carries the same promise.</p>
    </div>

    <!-- FILTER TABS -->
    <div class="filter-bar reveal reveal-delay-1" role="tablist" aria-label="Filter products">
      <button class="filter-btn active" data-filter="all">All Products <span class="fcount">6</span></button>
      <button class="filter-btn" data-filter="vannamei">Vannamei <span class="fcount">4</span></button>
      <button class="filter-btn" data-filter="cooked">Cooked <span class="fcount">1</span></button>
      <button class="filter-btn" data-filter="tiger">Black Tiger <span class="fcount">1</span></button>
    </div>

    <?php
    $products = [
      [
        'name'     => 'Vannamei HOSO',
        'sub'      => 'Head-On Shell-On',
        'desc'     => 'The classic whole shrimp &mdash; natural flavour, striking presentation, ideal for premium retail and HoReCa.',
        'img'      => 'assets/cards/7.webp',
        'cat'      => 'vannamei',
        'tag'      => 'Best Seller',
        'specs'    => ['Count: 16/20, 21/25, 26/30', 'Frozen: IQF / Block', 'Pack: 1kg, 2kg, 5kg'],
      ],
      [
        'name'     => 'Vannamei HLSO',
        'sub'      => 'Headless Shell-On',
        'desc'     => 'Versatile, easy to handle, IQF-frozen for convenience and consistency in every bag.',
        'img'      => 'assets/cards/11.webp',
        'cat'      => 'vannamei',
        'tag'      => 'Popular',
        'specs'    => ['Count: 21/25, 26/30, 31/40', 'Frozen: IQF', 'Pack: 1lb, 2lb, 2kg'],
      ],
      [
        'name'     => 'Peeled &amp; Deveined',
        'sub'      => 'PD / Ready to Cook',
        'desc'     => 'Kitchen-ready shrimp in every count size. The prep is done. The quality is ours.',
        'img'      => 'assets/cards/15.webp',
        'cat'      => 'vannamei',
        'tag'      => 'Kitchen Ready',
        'specs'    => ['Count: 31/40, 41/50, 51/60', 'Frozen: IQF / Semi-IQF', 'Pack: 800g, 1kg, 2kg'],
      ],
      [
        'name'     => 'Peeled Tail-On',
        'sub'      => 'PDTO / Gourmet Cut',
        'desc'     => 'Premium PDTO for plating-forward kitchens &mdash; the tail stays, the hassle goes.',
        'img'      => 'assets/cards/16.webp',
        'cat'      => 'vannamei',
        'tag'      => 'Gourmet',
        'specs'    => ['Count: 16/20, 21/25, 26/30', 'Frozen: IQF', 'Pack: 1lb, 2lb, 1kg'],
      ],
      [
        'name'     => 'Cooked Shrimp',
        'sub'      => 'Fully Cooked IQF',
        'desc'     => 'Ready-to-eat, flash-frozen at peak doneness &mdash; flavour held, texture preserved.',
        'img'      => 'assets/cards/13.png',
        'cat'      => 'cooked',
        'tag'      => 'Ready to Eat',
        'specs'    => ['Count: 26/30, 31/40, 41/50', 'Frozen: Cooked IQF', 'Pack: 1lb, 2lb, 2kg'],
      ],
      [
        'name'     => 'Black Tiger',
        'sub'      => 'Whole / HLSO / PD',
        'desc'     => 'Bold-flavoured, larger-sized black tiger prawns &mdash; for markets that ask for something more.',
        'img'      => 'assets/cards/33.png',
        'cat'      => 'tiger',
        'tag'      => 'Premium',
        'specs'    => ['Count: U/8, U/10, 13/15', 'Frozen: IQF / Block', 'Pack: 2kg, 5kg, 10kg'],
      ],
    ];
    ?>

    <div class="product-grid" id="productGrid">
      <?php foreach ($products as $i => $p): ?>
      <article
        class="product-card reveal"
        data-cat="<?= $p['cat'] ?>"
        style="--card-delay:<?= $i * 0.1 ?>s"
      >
        <div class="pc-image">
          <img src="<?= $p['img'] ?>" alt="<?= strip_tags($p['name']) ?>" loading="lazy">
          <span class="pc-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
          <span class="pc-tag"><?= $p['tag'] ?></span>
        </div>

        <div class="pc-base">
          <small><?= $p['sub'] ?></small>
          <h3><?= $p['name'] ?></h3>
        </div>

        <div class="pc-hover">
          <small><?= $p['sub'] ?></small>
          <h3><?= $p['name'] ?></h3>
          <p><?= $p['desc'] ?></p>
          <ul class="pc-specs">
            <?php foreach ($p['specs'] as $spec): ?>
            <li><?= $spec ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="contact.php" class="btn btn-light pc-cta">Request Quote <span class="arrow"></span></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>

    <!-- Empty state -->
    <div class="no-results" id="noResults" hidden>
      <p>No products match this filter.</p>
    </div>

  </div>
</section>

<!-- FEATURED STRIP -->
<div class="featured-strip">
  <div class="featured-track">
    <?php $labels = ['Vannamei HOSO','Vannamei HLSO','Peeled &amp; Deveined','Peeled Tail-On','Cooked Shrimp','Black Tiger','Premium IQF','Global Export','HACCP Certified']; ?>
    <?php foreach (array_merge($labels,$labels) as $l): ?>
    <span><?= $l ?><em>&#x25CF;</em></span>
    <?php endforeach; ?>
  </div>
</div>

<!-- SPECS -->
<section class="section specs-section">
  <div class="container">
    <div class="section-head center reveal">
      <span class="section-eyebrow">Down to the Detail</span>
      <h2>Packaging &amp; export specifications,<br><em>built for every market.</em></h2>
    </div>
    <div class="spec-grid">
      <?php
      $specs = [
        ['01','Processing','IQF, Block Frozen, Semi-IQF, Cooked IQF &mdash; we build to your spec.','&#9651;'],
        ['02','Glazing','5%&ndash;20% as per customer requirement and market norms.','&#9670;'],
        ['03','Packing','Inner: 1lb, 2lb, 800g, 1kg, 2kg &middot; Master: 10kg, 20kg','&#9633;'],
        ['04','Storage','Maintained at &minus;18&deg;C or below throughout the cold chain.','&#10052;'],
        ['05','Certifications','HACCP, BAP, BRC-compliant facilities with documented audits.','&#10003;'],
        ['06','Shelf Life','24 months from date of production, when stored correctly.','&#9789;'],
      ];
      foreach ($specs as $idx => $s):
        $delay = ['','reveal-delay-1','reveal-delay-2','','reveal-delay-1','reveal-delay-2'][$idx];
      ?>
      <div class="spec-card reveal <?= $delay ?>" style="--spec-i:<?= $idx ?>">
        <div class="spec-icon"><?= $s[3] ?></div>
        <span class="spec-num"><?= $s[0] ?></span>
        <h3><?= $s[1] ?></h3>
        <p><?= $s[2] ?></p>
        <div class="spec-bar"><div class="spec-bar-fill"></div></div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner" style="background-image:linear-gradient(135deg,rgba(6,28,41,0.93) 0%,rgba(10,46,66,0.89) 60%,rgba(29,77,106,0.85) 100%),url('assets/banners/2.jpg');">
  <div class="container cta-inner reveal">
    <div>
      <span class="section-eyebrow" style="color:var(--aqua)">Custom Specifications</span>
      <h2>Need something specific?<br>We build to your brief.</h2>
      <p>Tell us your market, your counts, your packaging &mdash; we&rsquo;ll tailor the product to match, without compromising what makes it premium.</p>
    </div>
    <div class="cta-actions">
      <a href="contact.php" class="btn btn-copper">Contact Sales <span class="arrow"></span></a>
    </div>
  </div>
</section>

<script>
(function(){
  /* ---- Scroll progress bar ---- */
  var bar = document.getElementById('scrollProgress');
  function updateProgress(){
    var h = document.documentElement;
    var pct = (h.scrollTop || document.body.scrollTop) / (h.scrollHeight - h.clientHeight) * 100;
    bar.style.width = pct + '%';
  }
  window.addEventListener('scroll', updateProgress, { passive:true });

  /* ---- Hero parallax ---- */
  var heroBg = document.querySelector('.prod-hero-bg');
  var ticking = false;
  function parallax(){
    if(heroBg) heroBg.style.transform = 'translate3d(0,' + (window.scrollY * 0.35) + 'px,0) scale(1.15)';
    ticking = false;
  }
  window.addEventListener('scroll', function(){ if(!ticking){ requestAnimationFrame(parallax); ticking=true; } }, { passive:true });

  /* ---- Hero headline lines ---- */
  document.querySelectorAll('.ph-line').forEach(function(l, i){
    l.style.transitionDelay = (0.3 + i * 0.18) + 's';
    requestAnimationFrame(function(){ l.classList.add('in'); });
  });

  /* ---- Filter ---- */
  var btns  = document.querySelectorAll('.filter-btn');
  var cards = document.querySelectorAll('.product-card');
  var noRes = document.getElementById('noResults');

  btns.forEach(function(btn){
    btn.addEventListener('click', function(){
      btns.forEach(function(b){ b.classList.remove('active'); });
      btn.classList.add('active');
      var f = btn.getAttribute('data-filter');
      var visible = 0;
      cards.forEach(function(c, idx){
        var show = f === 'all' || c.getAttribute('data-cat') === f;
        if(show){
          c.classList.remove('prod-hidden');
          c.style.setProperty('--card-delay', (visible * 0.08) + 's');
          c.classList.remove('filter-in');
          requestAnimationFrame(function(){ requestAnimationFrame(function(){ c.classList.add('filter-in'); }); });
          visible++;
        } else {
          c.classList.add('prod-hidden');
          c.classList.remove('filter-in');
        }
      });
      noRes.hidden = visible > 0;
    });
  });

  /* ---- Spec bar animate on enter ---- */
  var specIO = new IntersectionObserver(function(entries){
    entries.forEach(function(e){
      if(e.isIntersecting){
        var fill = e.target.querySelector('.spec-bar-fill');
        if(fill) fill.classList.add('active');
        specIO.unobserve(e.target);
      }
    });
  }, { threshold: 0.3 });
  document.querySelectorAll('.spec-card').forEach(function(el){ specIO.observe(el); });

  /* ---- Featured strip speed ---- */
  var track = document.querySelector('.featured-track');
  if(track){
    window.addEventListener('scroll', function(){
      var speed = 1 + window.scrollY * 0.002;
      track.style.animationDuration = Math.max(8, 30 / speed) + 's';
    }, { passive:true });
  }

})();
</script>

<?php include 'includes/footer.php'; ?>

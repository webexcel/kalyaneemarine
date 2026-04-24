<?php $pageTitle = 'Home'; $pageCss = 'home'; include 'includes/header.php'; ?>

<!-- HERO CAROUSEL -->
<section class="hero-carousel">
  <input type="radio" name="slide" id="slide-1" checked>
  <input type="radio" name="slide" id="slide-2">
  <input type="radio" name="slide" id="slide-3">

  <div class="slides">
    <div class="slide" style="background-image: linear-gradient(90deg, rgba(6,28,41,0.72) 0%, rgba(6,28,41,0.45) 50%, rgba(6,28,41,0.25) 100%), url('assets/banners/1.jpg');">
      <div class="container slide-content">
        <span class="slide-eyebrow"><span></span>Welcome</span>
        <h1>Welcome to Kalyanee Marine &mdash;<br><em>premium frozen seafood, delivered worldwide.</em></h1>
        <p>Committed to quality, freshness, and sustainability &mdash; we source the finest shrimp from leading aquaculture regions and deliver excellence to global markets.</p>
        <div class="hero-ctas">
          <a href="products.php" class="btn">Discover More <span class="arrow"></span></a>
          <a href="contact.php" class="btn btn-ghost">Get in Touch <span class="arrow"></span></a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: linear-gradient(90deg, rgba(6,28,41,0.65) 0%, rgba(6,28,41,0.4) 50%, rgba(6,28,41,0.2) 100%), url('assets/banners/2.jpg');">
      <div class="container slide-content">
        <span class="slide-eyebrow"><span></span>Quality First</span>
        <h1>Premium Seafood Processing,<br><em>built to global standards.</em></h1>
        <p>Advanced IQF technology, HACCP &amp; BAP certified facilities, and rigorous quality control &mdash; ensuring every shipment meets the highest international benchmarks.</p>
        <div class="hero-ctas">
          <a href="about.php" class="btn">Our Facilities <span class="arrow"></span></a>
          <a href="products.php" class="btn btn-ghost">View Grades <span class="arrow"></span></a>
        </div>
      </div>
    </div>
    <div class="slide" style="background-image: linear-gradient(90deg, rgba(6,28,41,0.60) 0%, rgba(6,28,41,0.35) 50%, rgba(6,28,41,0.2) 100%), url('assets/banners/3.jpg');">
      <div class="container slide-content">
        <span class="slide-eyebrow"><span></span>Global Reach</span>
        <h1>Exporting Excellence<br><em>to Japan, China, Vietnam &amp; beyond.</em></h1>
        <p>A reliable cold-chain network serving satisfied clients across the globe &mdash; timely delivery, transparent documentation, and consistent quality.</p>
        <div class="hero-ctas">
          <a href="contact.php" class="btn btn-copper">Partner With Us <span class="arrow"></span></a>
        </div>
      </div>
    </div>
  </div>

  <button class="carousel-arrow carousel-prev" aria-label="Previous">&#8249;</button>
  <button class="carousel-arrow carousel-next" aria-label="Next">&#8250;</button>

  <div class="carousel-nav">
    <label for="slide-1"><span></span></label>
    <label for="slide-2"><span></span></label>
    <label for="slide-3"><span></span></label>
  </div>

  <div class="hero-scroll">
    <span>Scroll</span>
    <i></i>
  </div>
</section>

<script>
(function () {
  const total = 3; let current = 1; let autoplay;
  function goTo(n) { current = ((n - 1 + total) % total) + 1; document.getElementById('slide-' + current).checked = true; }
  function restart() { clearInterval(autoplay); autoplay = setInterval(() => goTo(current + 1), 6500); }
  document.querySelector('.carousel-prev').addEventListener('click', () => { goTo(current - 1); restart(); });
  document.querySelector('.carousel-next').addEventListener('click', () => { goTo(current + 1); restart(); });
  document.querySelectorAll('input[name="slide"]').forEach(input => {
    input.addEventListener('change', function () { current = parseInt(this.id.replace('slide-', '')); restart(); });
  });
  restart();
})();
</script>

<!-- ABOUT KALYANEE MARINE PRODUCTS -->
<section class="section intro">
  <div class="container intro-grid">
    <div class="intro-copy reveal">
      <span class="section-eyebrow">About Kalyanee Marine Products</span>
      <h2>Explore the finest seafood processing<br><em>&amp; export facilities worldwide.</em></h2>
      <p class="lead">Kalyanee Marine Products is a leading seafood exporter dedicated to delivering premium frozen shrimp worldwide. Established with a clear mission, our company is strategically located near key aquaculture zones to ensure the freshest, highest-quality seafood.</p>
      <p>With advanced processing facilities on the Andhra coast and decades of industry expertise, we uphold the highest standards of sustainability and excellence. Our commitment to quality has enabled us to serve global markets &mdash; including Japan, China, and Vietnam &mdash; with top-tier seafood products.</p>
      <div class="intro-meta">
        <div>
          <strong>ISO 22000</strong>
          <span>Food Safety</span>
        </div>
        <div>
          <strong>HACCP &middot; BAP</strong>
          <span>Certified Facilities</span>
        </div>
      </div>
      <a href="about.php" class="link-arrow">Discover More <span class="arrow"></span></a>
    </div>
    <div class="intro-visual reveal reveal-delay-1">
      <img src="assets/cards/135.png" alt="Premium shrimp" class="intro-plain-img">
    </div>
  </div>
</section>

<!-- FACTS / STATS -->
<section class="wave-stats">
  <div class="wave-top" aria-hidden="true">
    <svg class="wave wave-back" viewBox="0 0 2880 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 L2880,0 L2880,45 C2760,20 2640,20 2520,45 C2400,70 2280,70 2160,45 C2040,20 1920,20 1800,45 C1680,70 1560,70 1440,45 C1320,20 1200,20 1080,45 C960,70 840,70 720,45 C600,20 480,20 360,45 C240,70 120,70 0,45 Z"/>
    </svg>
    <svg class="wave wave-front" viewBox="0 0 2880 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M0,0 L2880,0 L2880,38 C2760,50 2640,26 2520,38 C2400,50 2280,26 2160,38 C2040,50 1920,26 1800,38 C1680,50 1560,26 1440,38 C1320,50 1200,26 1080,38 C960,50 840,26 720,38 C600,50 480,26 360,38 C240,50 120,26 0,38 Z"/>
    </svg>
  </div>
  <div class="bubbles">
    <?php for ($i = 0; $i < 18; $i++): ?>
      <span style="--size:<?= rand(8,26) ?>px; --left:<?= rand(0,100) ?>%; --dur:<?= rand(8,16) ?>s; --delay:<?= rand(0,10) ?>s;"></span>
    <?php endfor; ?>
  </div>
  <div class="container wave-stats-grid">
    <div class="wstat"><strong>1,000<em>+</em></strong><span>Successful Export Shipments</span></div>
    <div class="wstat"><strong>30<em>+</em></strong><span>Skilled Professionals</span></div>
    <div class="wstat"><strong>15<em>+</em></strong><span>Years of Experience</span></div>
    <div class="wstat"><strong>100<em>%</em></strong><span>Satisfied Clients</span></div>
  </div>
</section>

<!-- OUR SERVICES -->
<section class="section services">
  <div class="container">
    <div class="section-head center reveal">
      <span class="section-eyebrow">Our Services</span>
      <h2>Premium Seafood Processing<br><em>&amp; export solutions.</em></h2>
      <p>We specialize in delivering high-quality frozen seafood, ensuring sustainability and freshness at every step. With state-of-the-art processing facilities and a dedicated team, we provide top-tier seafood solutions to global markets.</p>
    </div>
    <div class="service-grid">
      <?php
      $services = [
        ['img'=>'assets/cards/1.jpg',   'title'=>'Processing &amp; Packaging', 'kicker'=>'Service 01', 'desc'=>'We use advanced technology to process and package seafood with precision, ensuring top-quality exports.'],
        ['img'=>'assets/cards/2.webp',  'title'=>'Quality Assurance',        'kicker'=>'Service 02', 'desc'=>'Strict quality checks ensure all seafood meets global food safety and export regulations.'],
        ['img'=>'assets/cards/3.jpg',   'title'=>'Global Logistics',         'kicker'=>'Service 03', 'desc'=>'Seamless shipping solutions guarantee fresh and timely seafood delivery worldwide.'],
        ['img'=>'assets/cards/4.webp',  'title'=>'Custom Processing',        'kicker'=>'Service 04', 'desc'=>'Tailored processing includes peeling, deveining, and portioning as per client needs.'],
        ['img'=>'assets/cards/5.webp',  'title'=>'Sustainable Sourcing',     'kicker'=>'Service 05', 'desc'=>'We uphold ethical fishing and aquaculture practices to ensure responsible seafood sourcing.'],
      ];
      foreach ($services as $i => $s): ?>
        <article class="service-card reveal reveal-delay-<?= ($i % 3) + 1 ?>">
          <div class="service-img" style="background-image: url('<?= $s['img'] ?>');"></div>
          <div class="service-body">
            <span class="service-num"><?= str_pad($i + 1, 2, '0', STR_PAD_LEFT) ?></span>
            <span class="service-kicker"><?= $s['kicker'] ?></span>
            <h3><?= $s['title'] ?></h3>
            <p><?= $s['desc'] ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- WE ARE EXPERTS -->
<section class="section experts">
  <div class="container experts-grid">
    <div class="experts-copy reveal">
      <span class="section-eyebrow">We Are Experts</span>
      <h2>Delivering premium seafood<br><em>globally.</em></h2>
      <p>At Kalyanee Marine Products, we bring you the finest quality shrimp sourced from leading aquaculture regions. With advanced processing facilities and strict quality control, we ensure freshness and excellence in every shipment.</p>
      <ul class="experts-list">
        <li><span class="check">&#10003;</span> Sourced from certified farms</li>
        <li><span class="check">&#10003;</span> Processed in state-of-the-art facilities</li>
        <li><span class="check">&#10003;</span> Quality-tested for global standards</li>
        <li><span class="check">&#10003;</span> Reliable export and timely delivery</li>
      </ul>
      <a href="about.php" class="btn">Discover More <span class="arrow"></span></a>
    </div>
    <div class="experts-visual reveal reveal-delay-1">
      <img src="assets/cards/6.avif" alt="Premium seafood processing">
    </div>
  </div>
</section>

<!-- HOW WE WORK -->
<section class="section workflow" id="workflow">
  <div class="container">
    <div class="section-head reveal">
      <span class="section-eyebrow">How We Work</span>
      <h2>We ensure excellence<br><em>in seafood supply.</em></h2>
      <p>From procurement to export, we uphold the highest standards to deliver superior seafood products worldwide.</p>
    </div>
    <div class="workflow-list" id="workflowList">
      <div class="workflow-track" aria-hidden="true"><span></span></div>

      <article class="workflow-item" data-step="1">
        <div class="workflow-marker">
          <span class="workflow-dot"></span>
          <span class="workflow-num">01</span>
        </div>
        <div class="workflow-content">
          <span class="workflow-act">Step One</span>
          <h3>Sourcing &amp; Selection</h3>
          <p>We carefully select premium shrimp from trusted aquaculture farms, ensuring sustainability and top-tier quality.</p>
        </div>
        <div class="workflow-image">
          <img src="assets/cards/7.webp" alt="Sourcing">
        </div>
      </article>

      <article class="workflow-item" data-step="2">
        <div class="workflow-marker">
          <span class="workflow-dot"></span>
          <span class="workflow-num">02</span>
        </div>
        <div class="workflow-content">
          <span class="workflow-act">Step Two</span>
          <h3>Material Preparation</h3>
          <p>Our advanced facilities use modern techniques to preserve freshness while adhering to international food safety standards.</p>
        </div>
        <div class="workflow-image">
          <img src="assets/cards/8.webp" alt="Processing">
        </div>
      </article>

      <article class="workflow-item" data-step="3">
        <div class="workflow-marker">
          <span class="workflow-dot"></span>
          <span class="workflow-num">03</span>
        </div>
        <div class="workflow-content">
          <span class="workflow-act">Step Three</span>
          <h3>Executing Project</h3>
          <p>With a strong logistics network, we guarantee timely deliveries to global markets like Japan, China, and Vietnam.</p>
        </div>
        <div class="workflow-image">
          <img src="assets/cards/9.webp" alt="Delivery">
        </div>
      </article>
    </div>
  </div>
</section>

<script>
(function () {
  const list = document.getElementById('workflowList');
  if (!list) return;
  const items = list.querySelectorAll('.workflow-item');
  const track = list.querySelector('.workflow-track span');
  let activated = 0;

  const io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-in');
        activated = Math.max(activated, parseInt(entry.target.dataset.step));
        const pct = (activated / items.length) * 100;
        if (track) track.style.height = pct + '%';
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.28, rootMargin: '0px 0px -80px 0px' });

  items.forEach(function (item) { io.observe(item); });
})();
</script>

<!-- PRICING PACKAGE -->
<section class="section pricing-package">
  <div class="container pricing-grid">
    <div class="pricing-copy reveal">
      <span class="section-eyebrow">Our Offering</span>
      <h2>Enhancing aquatic life<br><em>with premium imports.</em></h2>
      <p>Partner with Kalyanee Marine for trusted international seafood and marine supplies &mdash; quality you can taste, reliability you can build on.</p>
    </div>
    <div class="pricing-card reveal reveal-delay-1">
      <h3>Premium Live &amp; Frozen Seafood</h3>
      <ul class="pricing-list">
        <li><span class="check">&#10003;</span> Exotic &amp; ornamental fish for aquariums</li>
        <li><span class="check">&#10003;</span> Sustainable sourcing &amp; global export</li>
        <li><span class="check">&#10003;</span> Customized bulk orders &amp; on-time delivery</li>
        <li><span class="check">&#10003;</span> HACCP, BAP &amp; ISO 22000 certified processing</li>
      </ul>
      <a href="contact.php" class="btn btn-copper">Contact Us <span class="arrow"></span></a>
    </div>
  </div>
</section>

<!-- PARALLAX INTERLUDE -->
<section class="parallax-interlude" style="background-image: url('assets/bg.webp');">
  <div class="parallax-overlay"></div>
  <div class="container parallax-content reveal">
    <span class="parallax-eyebrow"><span></span>Bringing the Freshest Seafood<span></span></span>
    <blockquote>
      Quality seafood creates the<br>
      finest dining experiences.<br>
      <em>From ocean to plate &mdash; every product meets global standards.</em>
    </blockquote>
    <div class="parallax-meta">
      <a href="products.php" class="btn btn-ghost">Discover More <span class="arrow"></span></a>
    </div>
  </div>
</section>

<!-- OUR GALLERY TEASER -->
<section class="section gallery-teaser">
  <div class="container gallery-teaser-inner reveal">
    <div class="gallery-teaser-copy">
      <span class="section-eyebrow">Our Gallery</span>
      <h2>A legacy of<br><em>premium seafood.</em></h2>
      <p>For years, we have been dedicated to supplying high-quality shrimp and seafood products to international markets. Our passion for excellence drives us to source, process, and deliver only the best.</p>
      <a href="gallery.php" class="btn">Discover More <span class="arrow"></span></a>
    </div>
    <div class="gallery-teaser-grid">
      <img src="assets/cards/10.webp" alt="Gallery 1">
      <img src="assets/cards/11.webp" alt="Gallery 2">
      <img src="assets/cards/12.webp" alt="Gallery 3">
      <img src="assets/cards/13.png" alt="Gallery 4">
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section testimonials">
  <div class="container">
    <div class="section-head center reveal">
      <span class="section-eyebrow">Testimonials</span>
      <h2>What do they<br><em>say about us.</em></h2>
      <p>At Kalyanee Marine, we are committed to delivering high-quality seafood to our international clients. Here&rsquo;s what they have to say.</p>
    </div>
  </div>
  <?php
  $t = [
    ['We are very satisfied with their service. The shrimp are fresh, and our customers love them.', 'Hiroshi Yamamoto', 'Supermarket Chain Manager, Japan'],
    ['Consistently great seafood! The best supplier we have worked with so far.', 'Pham Van Hung', 'Food Processing Company Owner, Vietnam'],
    ['The shrimp quality is excellent, and the packaging is perfect. We trust them for all our imports!', 'Chen Wei', 'Seafood Importer, China'],
    ['Fresh, well-packed, and always on time. Their seafood is in high demand at our restaurants.', 'Zhao Ling', 'Seafood Importer, China'],
    ['Reliable supplier with high-quality prawns. The freshness is unbeatable!', 'Liang Bo', 'Seafood Distributor, China'],
    ['Their seafood meets all export standards. Great taste and perfect for bulk orders.', 'Nguyen Thanh Hoa', 'Wholesale Buyer, Vietnam'],
  ];
  ?>
  <div class="testimonial-marquee reveal">
    <div class="testimonial-track">
      <?php for ($pass = 0; $pass < 2; $pass++): ?>
        <?php foreach ($t as $q): ?>
          <figure class="testimonial" aria-hidden="<?= $pass === 1 ? 'true' : 'false' ?>">
            <div class="quote-mark">&ldquo;</div>
            <blockquote><?= $q[0] ?></blockquote>
            <figcaption>
              <strong><?= $q[1] ?></strong>
              <span><?= $q[2] ?></span>
            </figcaption>
          </figure>
        <?php endforeach; ?>
      <?php endfor; ?>
    </div>
  </div>
</section>

<!-- PROMOTION -->
<section class="cta-banner" style="background-image: linear-gradient(135deg, rgba(6,28,41,0.92) 0%, rgba(10,46,66,0.88) 60%, rgba(29,77,106,0.85) 100%), url('assets/banners/3.jpg');">
  <div class="container cta-inner reveal">
    <div>
      <span class="section-eyebrow" style="color: var(--aqua);">Promotion</span>
      <h2>Get premium samples<br>with your first order.</h2>
      <p>Experience the freshness of our seafood. Place your first bulk order and receive a premium selection of shrimp and prawns at no extra cost.</p>
    </div>
    <div class="cta-actions">
      <a href="contact.php" class="btn btn-copper">Discover More <span class="arrow"></span></a>
      <a href="products.php" class="btn btn-ghost">Browse Products <span class="arrow"></span></a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

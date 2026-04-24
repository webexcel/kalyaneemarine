<?php
$pageTitle = 'Contact';
$pageCss = 'contact';
$sent = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $sent = true;
}
include 'includes/header.php';
?>

<section class="page-banner">
  <div class="container">
    <div class="crumbs">Home &rsaquo; Start the Conversation</div>
    <h1>Every great shipment<br>begins with a conversation.</h1>
    <p>Exploring a new supplier? Scaling an existing one? We&rsquo;re ready to listen, answer, and earn your first order.</p>
  </div>
</section>

<section class="section contact">
  <div class="container contact-grid">
    <div class="contact-info reveal">
      <span class="section-eyebrow">Speak to a Person</span>
      <h2>We pick up.<br><em>We follow up.</em></h2>
      <p>Our team responds to every enquiry within one business day. For faster service, reach the relevant person below directly &mdash; real people, real emails, real phones.</p>

      <div class="contact-cards">
        <div class="contact-card">
          <h3>Naveen Prabhakar</h3>
          <span>Managing Director</span>
          <p><a href="mailto:krm@kalyaneemarine.com">krm@kalyaneemarine.com</a></p>
          <p><a href="tel:+919600060001">+91 96000 60001</a></p>
        </div>
        <div class="contact-card">
          <h3>Ramakrishnan</h3>
          <span>Business Development</span>
          <p><a href="mailto:Rk@kalyaneemarine.com">Rk@kalyaneemarine.com</a></p>
          <p><a href="tel:+918999934444">+91 89999 34444</a></p>
        </div>
        <div class="contact-card">
          <h3>K. Nagaraju</h3>
          <span>Operations</span>
          <p><a href="mailto:NAGARAJU@kalyaneemarine.com">NAGARAJU@kalyaneemarine.com</a></p>
          <p><a href="tel:+919042266888">+91 90422 66888</a></p>
        </div>
        <div class="contact-card">
          <h3>Akash</h3>
          <span>Client Relations</span>
          <p><a href="mailto:Akash@kalyaneemarine.com">Akash@kalyaneemarine.com</a></p>
          <p><a href="tel:+919491033127">+91 94910 33127</a></p>
        </div>
      </div>
    </div>

    <div class="contact-form-wrap reveal reveal-delay-1">
      <span class="section-eyebrow">Send a Message</span>
      <h3>Tell us about your order.</h3>
      <p class="form-sub">Specifications, volumes, destination, timeline &mdash; the more you share, the faster we can help.</p>

      <?php if ($sent): ?>
        <div class="alert-success">Thank you &mdash; your message has been received. Our team will reply within one business day.</div>
      <?php endif; ?>
      <form class="contact-form" method="post" action="contact.php">
        <div class="row">
          <label>
            <span>Your Name</span>
            <input type="text" name="name" required>
          </label>
          <label>
            <span>Your Email</span>
            <input type="email" name="email" required>
          </label>
        </div>
        <div class="row">
          <label>
            <span>Phone</span>
            <input type="tel" name="phone">
          </label>
          <label>
            <span>Subject</span>
            <input type="text" name="subject" required>
          </label>
        </div>
        <label>
          <span>Your Message</span>
          <textarea name="message" rows="6" required></textarea>
        </label>
        <button type="submit" class="btn">Send Message <span class="arrow"></span></button>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

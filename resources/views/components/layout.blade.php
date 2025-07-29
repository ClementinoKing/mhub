<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
  <title>mHub - Where Technology Meets Innovation</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="https://unpkg.com/lottie-web@latest/build/player/lottie.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
  <header class="navbar">
    <div class="logo">
      <a href="/"><img src="assets/icons/mhub_logo.svg" alt="mHub Logo" height="40"></a>
    </div>
  <button class="menu-toggle" id="menuToggle">
    ☰
  </button>
    <nav class="nav-links">
      <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
      <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
      <a href="/work" class="{{ request()->is('work') ? 'active' : '' }}">Our Work</a>
      <a href="/opportunity" class="{{ request()->is('opportunity') ? 'active' : '' }}">Opportunity</a>
      <a href="/chat" class="{{ request()->is('chat') ? 'active' : '' }}">Chat</a>
      <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>

      <!-- Social at bottom -->
      <div class="social-icons mobile-only">
        <a href="https://x.com/mHubMW" target="_blank" rel="noopener noreferrer"><img src="assets/icons/x.svg" alt="X" /></a>
        <a href="https://www.facebook.com/mHubMW" target="_blank" rel="noopener noreferrer"><img src="assets/icons/fb.svg" alt="Facebook" /></a>
        <a href="https://www.instagram.com/mhub_malawi/" target="_blank" rel="noopener noreferrer"><img src="assets/icons/ig.svg" alt="Instagram" /></a>
        <a href="https://www.linkedin.com/company/mhublimited/posts/?feedView=all" target="_blank" rel="noopener noreferrer"><img src="assets/icons/linkedin.svg" alt="LinkedIn" /></a>
        <a href="https://whatsapp.com/channel/0029Vb2L5cr3LdQdYV38XS2W" target="_blank" rel="noopener noreferrer"><img src="assets/icons/whatsapp.svg" alt="WhatsApp" /></a>
      </div>
    </nav>
</div>
  </header>

  {{ $slot }}

<footer class="site-footer">
  <div class="newsletter">
    <div>
      <h3>Subscribe to our Newsletter</h3>
      <p>Get updates on our latest innovations, events, opportunities, <br class="mobile-hide-break"> and stories shaping Malawi’s tech ecosystem.</p>
    </div>
    <form class="newsletter-form">
      <input type="email" placeholder="Enter your email" />
      <button type="submit">Subscribe</button>
    </form>
  </div>

  <div class="footer-main">
    <div class="footer-col logo-col">
      <a href="/"><img src="public/assets/icons/mhub_logo_alt.svg" alt="mHub Logo" height="40"></a>
      <p>Malawi’s first innovation and tech hub, empowering entrepreneurs through digital skills, scalable solutions, and impactful ventures.</p>
      <div class="social-icons">
        <a href="https://x.com/mHubMW" target="_blank" rel="noopener noreferrer"><img src="assets/icons/x.svg" alt="X" /></a>
        <a href="https://www.facebook.com/mHubMW" target="_blank" rel="noopener noreferrer"><img src="assets/icons/fb.svg" alt="Facebook" /></a>
        <a href="https://www.instagram.com/mhub_malawi/" target="_blank" rel="noopener noreferrer"><img src="assets/icons/ig.svg" alt="Instagram" /></a>
        <a href="https://www.linkedin.com/company/mhublimited/posts/?feedView=all" target="_blank" rel="noopener noreferrer"><img src="assets/icons/linkedin.svg" alt="LinkedIn" /></a>
        <a href="https://whatsapp.com/channel/0029Vb2L5cr3LdQdYV38XS2W" target="_blank" rel="noopener noreferrer"><img src="assets/icons/whatsapp.svg" alt="WhatsApp" /></a>
      </div>
    </div>

    <div class="footer-col links-col">
      <h3>Links</h3>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/work">Our Work</a></li>
        <li><a href="/opportunities">Opportunities</a></li>
        <li><a href="/events">Events</a></li>
      </ul>
    </div>

    <div class="footer-col contact-col">
  <h3>Get in touch</h3>
  <div class="contact-item">
    <i class="fas fa-map-marker-alt"></i>
    <div>
      Area 15/46, Chiwengo Road,<br>P. O. Box 1689 Lilongwe
    </div>
  </div>
  <div class="contact-item">
    <i class="fas fa-envelope"></i>
    <div>info@mhubmw.com</div>
  </div>
  <div class="contact-item">
    <i class="fas fa-phone"></i>
    <a href="tel:+265888217937">+265 888 217 937</a>
  </div>
</div>

  </div>

  <div class="footer-bottom">
    <p>© {{ date('Y') }} mHub. All rights reserved.</p>
  </div>
</footer>


<!-- Dynamic Star Script -->
<script>
  document.querySelectorAll('.stars').forEach(starBlock => {
    const rating = parseFloat(starBlock.getAttribute('data-rating'));
    const full = Math.floor(rating);
    const hasHalf = rating % 1 >= 0.25 && rating % 1 < 0.75;
    const totalStars = 5;

    starBlock.innerHTML = '';
    starBlock.style.display = 'flex';
    starBlock.style.gap = '0.25rem';

    for (let i = 0; i < totalStars; i++) {
      const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      svg.classList.add('star');
      svg.setAttribute('viewBox', '0 0 24 24');
      svg.style.width = '1.2rem';
      svg.style.height = '1.2rem';

      const use = document.createElementNS('http://www.w3.org/2000/svg', 'use');

      if (i < full) {
        use.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '#full-star');
      } else if (i === full && hasHalf) {
        use.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '#half-star');
      } else {
        use.setAttributeNS('http://www.w3.org/1999/xlink', 'href', '#full-star');
        svg.style.fill = '#ddd';
      }

      svg.appendChild(use);
      starBlock.appendChild(svg);
    }
  });
</script>
<script>
  lottie.loadAnimation({
    container: document.getElementById('lottie-10years'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/images/10years.json' // update with the correct path if different
  });
</script>
<script>
  lottie.loadAnimation({
    container: document.getElementById('lottie-10years_2'),
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/images/10years_2.json' // Update this path to your actual Lottie JSON file
  });
</script>
<script>
  document.querySelector('.menu-toggle').addEventListener('click', () => {
    document.querySelector('.nav-links').classList.toggle('open');
  });
</script>
<script>
  const track = document.querySelector('.slider-track');
  const cards = document.querySelectorAll('.testimonial-card');
  let index = 0;

  document.querySelector('.next').onclick = () => {
    index = (index + 1) % cards.length;
    track.style.transform = `translateX(-${index * 320}px)`;
  };

  document.querySelector('.prev').onclick = () => {
    index = (index - 1 + cards.length) % cards.length;
    track.style.transform = `translateX(-${index * 320}px)`;
  };
</script>
</body>
</html>

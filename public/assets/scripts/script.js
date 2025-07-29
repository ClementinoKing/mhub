lottie.loadAnimation({
  container: document.getElementById('lottie-10years'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: 'assets/images/10years.json' // adjust to where your .json is stored
});

document.querySelectorAll('.stars').forEach(starBlock => {
  const rating = parseFloat(starBlock.getAttribute('data-rating'));
  const full = Math.floor(rating);
  const hasHalf = rating % 1 >= 0.5;

  starBlock.innerHTML = '';

  for (let i = 0; i < 5; i++) {
    const useHref = i < full ? '#full-star' : (i === full && hasHalf ? '#half-star' : '#full-star');
    const fill = i < full ? 'gold' : (i === full && hasHalf ? 'gold' : '#ddd');

    const svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
    svg.classList.add('star');
    svg.setAttribute('viewBox', '0 0 24 24');

    const use = document.createElementNS('http://www.w3.org/2000/svg', 'use');
    use.setAttributeNS('http://www.w3.org/1999/xlink', 'href', useHref);

    svg.appendChild(use);
    starBlock.appendChild(svg);
  }
});

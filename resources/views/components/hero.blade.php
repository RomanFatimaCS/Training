{{-- resources/views/components/hero.blade.php --}}
<section class="fullscreen-slider">
  <style>
    .fullscreen-slider {
      display: block;
      position: relative;
      width: 100%;
      height: 100vh;
      min-height: 100vh;
      overflow: hidden;
      background: #0a0a0a;
      user-select: none;
      outline: none;
    }

    .fullscreen-slider .slider {
      position: relative;
      width: 100%;
      height: 100%;
      overflow: hidden;
      touch-action: pan-y;
    }

    .fullscreen-slider .track {
      display: flex;
      width: 300%;              /* 3 slides */
      height: 100%;
      transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      will-change: transform;
    }

    .fullscreen-slider .slide {
      width: calc(100% / 3);
      height: 100%;
      flex-shrink: 0;
      position: relative;
      overflow: hidden;
    }

    .fullscreen-slider .slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
      pointer-events: none;
    }

    .fullscreen-slider .nav-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(255, 255, 255, 0.3);
      border: none;
      color: white;
      font-size: 2rem;
      padding: 1rem;
      cursor: pointer;
      z-index: 10;
      transition: background 0.3s;
    }

    .fullscreen-slider .nav-btn:hover {
      background: rgba(255, 255, 255, 0.5);
    }

    .fullscreen-slider .nav-btn.prev { left: 20px; }
    .fullscreen-slider .nav-btn.next { right: 20px; }

    .fullscreen-slider .dots {
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 10px;
      z-index: 10;
    }

    .fullscreen-slider .dot {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.5);
      cursor: pointer;
      transition: background 0.3s;
    }

    .fullscreen-slider .dot.active {
      background: white;
    }
  </style>

  <div class="slider">
    <div class="track">
      <div class="slide">
        <img src="{{ asset('assert\image7.jpg') }}" alt="Slide 7">
      </div>
      <div class="slide">
        <img src="{{ asset('assert\image8.jpg') }}" alt="Slide 2">
      </div>
      <div class="slide">
        <img src="{{ asset('    ,assert\image10.jpg') }}" alt="Slide 5">
      </div>
      <div class="slide">
        <img src="{{ asset('public\assert\image3.jpg') }}" alt="Slide 3">
      </div>
    </div>

    <button class="nav-btn prev" aria-label="Previous slide">‹</button>
    <button class="nav-btn next" aria-label="Next slide">›</button>

    <div class="dots">
      <div class="dot active" data-index="0"></div>
      <div class="dot" data-index="1"></div>
      <div class="dot" data-index="2"></div>
    </div>
  </div>

  <script>
    (function () {
      const root = document.currentScript.closest('.fullscreen-slider');
      if (!root || root.dataset.initialized) return;
      root.dataset.initialized = 'true';

      const totalSlides = 3;
      let currentIndex = 0;

      const track = root.querySelector('.track');
      const dots = root.querySelectorAll('.dot');
      const prevBtn = root.querySelector('.prev');
      const nextBtn = root.querySelector('.next');

      function goToSlide(index) {
        currentIndex = (index + totalSlides) % totalSlides;
        track.style.transform = `translateX(-${currentIndex * (100 / totalSlides)}%)`;
        dots.forEach((dot, i) => {
          dot.classList.toggle('active', i === currentIndex);
        });
      }

      prevBtn.addEventListener('click', () => goToSlide(currentIndex - 1));
      nextBtn.addEventListener('click', () => goToSlide(currentIndex + 1));

      dots.forEach(dot => {
        dot.addEventListener('click', () => goToSlide(parseInt(dot.dataset.index)));
      });

      // Keyboard
      root.setAttribute('tabindex', '0');
      root.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') goToSlide(currentIndex - 1);
        if (e.key === 'ArrowRight') goToSlide(currentIndex + 1);
      });

      // Optional: touch swipe
      let startX = 0;
      root.addEventListener('touchstart', (e) => {
        startX = e.touches[0].clientX;
      }, { passive: true });

      root.addEventListener('touchend', (e) => {
        const diff = startX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
          goToSlide(currentIndex + (diff > 0 ? 1 : -1));
        }
      });
    })();
  </script>
</section>
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        mobileMenu.classList.toggle('hidden');
    });

    // Mobile dropdown menus
    const mobileDropdowns = document.querySelectorAll('.dropdown-mobile');

    mobileDropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('button');
        const menu = dropdown.querySelector('.dropdown-mobile-menu');

        button.addEventListener('click', function() {
            dropdown.classList.toggle('active');
            menu.classList.toggle('hidden');
        });
    });

    // Navbar scroll effect
    const navbar = document.querySelector('.navbar');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Desktop dropdown menus
    const desktopDropdowns = document.querySelectorAll('.dropdown');

    desktopDropdowns.forEach(dropdown => {
        const button = dropdown.querySelector('button');
        const menu = dropdown.querySelector('.dropdown-menu');

        dropdown.addEventListener('mouseenter', function() {
            menu.classList.remove('hidden');
        });

        dropdown.addEventListener('mouseleave', function() {
            menu.classList.add('hidden');
        });
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
            mobileMenu.classList.add('hidden');
        }
    });
});

// Slider functionality
document.addEventListener('DOMContentLoaded', function() {
    // Existing navbar code...
    
    // Initialize Slider
    const sliderTrack = document.querySelector('.slider-track');
    const slides = document.querySelectorAll('.slider-slide');
    const prevBtn = document.querySelector('.slider-prev');
    const nextBtn = document.querySelector('.slider-next');
    const dots = document.querySelectorAll('.slider-dot');
    
    let currentIndex = 0;
    let slideInterval;
    const slideCount = slides.length;
    
    // Set initial active slide
    updateSlider();
    
    // Auto slide
    function startSlider() {
        slideInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % slideCount;
            updateSlider();
        }, 5000);
    }
    
    // Update slider position and active states
    function updateSlider() {
        // Update track position
        sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update active class on slides
        slides.forEach((slide, index) => {
            slide.classList.toggle('active', index === currentIndex);
        });
        
        // Update dots
        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-opacity-100', index === currentIndex);
            dot.classList.toggle('bg-opacity-50', index !== currentIndex);
        });
    }
    
    // Next slide
    function nextSlide() {
        currentIndex = (currentIndex + 1) % slideCount;
        updateSlider();
        resetInterval();
    }
    
    // Previous slide
    function prevSlide() {
        currentIndex = (currentIndex - 1 + slideCount) % slideCount;
        updateSlider();
        resetInterval();
    }
    
    // Reset auto slide interval
    function resetInterval() {
        clearInterval(slideInterval);
        startSlider();
    }
    
    // Event listeners
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    // Dot navigation
    dots.forEach(dot => {
        dot.addEventListener('click', function() {
            currentIndex = parseInt(this.getAttribute('data-index'));
            updateSlider();
            resetInterval();
        });
    });
    
    // Start auto sliding
    startSlider();
    
    // Pause on hover
    const sliderContainer = document.querySelector('.slider-container');
    sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
    sliderContainer.addEventListener('mouseleave', startSlider);
    
    // Touch support for mobile
    let touchStartX = 0;
    let touchEndX = 0;
    
    sliderContainer.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
        clearInterval(slideInterval);
    }, {passive: true});
    
    sliderContainer.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
        startSlider();
    }, {passive: true});
    
    function handleSwipe() {
        const difference = touchStartX - touchEndX;
        if (difference > 50) {
            nextSlide(); // Swipe left
        } else if (difference < -50) {
            prevSlide(); // Swipe right
        }
    }
});

// Tour Package Slider
document.addEventListener('DOMContentLoaded', function() {
  const sliderTrack = document.querySelector('.tour-slider-track');
  const slides = document.querySelectorAll('.tour-slide');
  const prevBtn = document.querySelector('.tour-slider-prev');
  const nextBtn = document.querySelector('.tour-slider-next');
  
  let currentPosition = 0;
  let slideWidth = slides[0].offsetWidth;
  let visibleSlides = 8;
  let slideInterval;
  
  // Calculate visible slides based on screen width
  function calculateVisibleSlides() {
    const containerWidth = document.querySelector('.tour-slider-container').offsetWidth;
    slideWidth = slides[0].offsetWidth;
    visibleSlides = Math.floor(containerWidth / slideWidth);
  }
  
  // Update slider position
  function updateSliderPosition() {
    sliderTrack.style.transform = `translateX(-${currentPosition * slideWidth}px)`;
  }
  
  // Next slide
  function nextSlide() {
    calculateVisibleSlides();
    const maxPosition = slides.length - visibleSlides;
    
    if (currentPosition < maxPosition) {
      currentPosition++;
    } else {
      currentPosition = 0; // Loop back to start
    }
    
    updateSliderPosition();
    resetInterval();
  }
  
  // Previous slide
  function prevSlide() {
    calculateVisibleSlides();
    
    if (currentPosition > 0) {
      currentPosition--;
    } else {
      currentPosition = slides.length - visibleSlides; // Loop to end
    }
    
    updateSliderPosition();
    resetInterval();
  }
  
  // Auto slide
  function startSlider() {
    slideInterval = setInterval(nextSlide, 3000); // Change slide every 3 seconds
  }
  
  // Reset interval
  function resetInterval() {
    clearInterval(slideInterval);
    startSlider();
  }
  
  // Initialize
  calculateVisibleSlides();
  startSlider();
  
  // Event listeners
  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);
  
  // Pause on hover
  const sliderContainer = document.querySelector('.tour-slider-container');
  sliderContainer.addEventListener('mouseenter', () => clearInterval(slideInterval));
  sliderContainer.addEventListener('mouseleave', startSlider);
  
  // Handle window resize
  window.addEventListener('resize', function() {
    calculateVisibleSlides();
    updateSliderPosition();
  });
});

document.addEventListener('DOMContentLoaded', function() {
  // Mobile Filter Toggle
  const mobileFilterBtn = document.getElementById('mobile-filter-btn');
  const filterPanel = document.getElementById('filter-panel');
  
  if (mobileFilterBtn && filterPanel) {
    mobileFilterBtn.addEventListener('click', function() {
      filterPanel.classList.toggle('hidden');
    });
  }

  // Filter Functionality
  const filterBtns = document.querySelectorAll('.filter-btn');
  const packageCards = document.querySelectorAll('.package-card');
  const noResults = document.getElementById('no-results');
  const resetFiltersBtn = document.getElementById('reset-filters');
  const packageSearch = document.getElementById('package-search');
  
  function filterPackages() {
    const activeFilter = document.querySelector('.filter-btn.active').dataset.filter;
    const searchTerm = packageSearch.value.toLowerCase();
    let visibleCount = 0;
    
    packageCards.forEach(card => {
      const category = card.dataset.category;
      const title = card.querySelector('h3').textContent.toLowerCase();
      const matchesFilter = activeFilter === 'all' || category === activeFilter;
      const matchesSearch = title.includes(searchTerm);
      
      if (matchesFilter && matchesSearch) {
        card.style.display = 'block';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });
    
    // Show/hide no results message
    if (visibleCount === 0) {
      noResults.classList.remove('hidden');
    } else {
      noResults.classList.add('hidden');
    }
  }
  
  // Filter button click event
  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      filterPackages();
    });
  });
  
  // Search input event
  packageSearch.addEventListener('input', filterPackages);
  
  // Reset filters
  if (resetFiltersBtn) {
    resetFiltersBtn.addEventListener('click', function() {
      filterBtns.forEach(btn => {
        btn.classList.remove('active');
        if (btn.dataset.filter === 'all') {
          btn.classList.add('active');
        }
      });
      packageSearch.value = '';
      filterPackages();
    });
  }
  
  // Load more functionality (simulated)
  const loadMoreBtn = document.getElementById('load-more');
  if (loadMoreBtn) {
    loadMoreBtn.addEventListener('click', function() {
      this.textContent = 'Loading...';
      this.disabled = true;
      
      // Simulate API call
      setTimeout(() => {
        // In a real implementation, you would append new cards here
        this.textContent = 'No More Tours';
        this.disabled = true;
        this.classList.remove('hover:bg-amber-50');
        this.classList.add('cursor-not-allowed', 'opacity-75');
      }, 1500);
    });
  }
  
  // Initialize
  filterPackages();
});


document.addEventListener('DOMContentLoaded', function() {
  const familyCarousel = new Swiper('.family-carousel', {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
      delay: 3000, // Auto-slide every 3 seconds
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      }
    }
  });
});


document.addEventListener('DOMContentLoaded', function() {
  // Filter Gallery Items
  const filters = document.querySelectorAll('.gallery-filter');
  const items = document.querySelectorAll('.gallery-item');

  filters.forEach(filter => {
    filter.addEventListener('click', () => {
      // Update active filter
      filters.forEach(f => f.classList.remove('active', 'bg-amber-600', 'text-white'));
      filter.classList.add('active', 'bg-amber-600', 'text-white');
      
      // Filter items
      const category = filter.dataset.filter;
      items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
          item.style.display = 'block';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // Lightbox Functionality
  const lightbox = document.getElementById('lightbox');
  const lightboxImg = document.getElementById('lightbox-image');
  const lightboxCaption = document.getElementById('lightbox-caption');
  const closeBtn = document.getElementById('close-lightbox');
  const zoomBtns = document.querySelectorAll('.gallery-zoom');
  
  let currentIndex = 0;
  const images = Array.from(document.querySelectorAll('.gallery-image'));
  const captions = Array.from(document.querySelectorAll('.gallery-caption'));

  // Open Lightbox
  zoomBtns.forEach((btn, index) => {
    btn.addEventListener('click', () => {
      currentIndex = index;
      updateLightbox();
      lightbox.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    });
  });

  // Navigation
  document.getElementById('prev-btn').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateLightbox();
  });

  document.getElementById('next-btn').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateLightbox();
  });

  // Close Lightbox
  closeBtn.addEventListener('click', () => {
    lightbox.classList.add('hidden');
    document.body.style.overflow = 'auto';
  });

  // Close when clicking outside image
  lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
      lightbox.classList.add('hidden');
      document.body.style.overflow = 'auto';
    }
  });

  // Keyboard Navigation
  document.addEventListener('keydown', (e) => {
    if (!lightbox.classList.contains('hidden')) {
      if (e.key === 'Escape') {
        lightbox.classList.add('hidden');
        document.body.style.overflow = 'auto';
      } else if (e.key === 'ArrowLeft') {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateLightbox();
      } else if (e.key === 'ArrowRight') {
        currentIndex = (currentIndex + 1) % images.length;
        updateLightbox();
      }
    }
  });

  function updateLightbox() {
    lightboxImg.src = images[currentIndex].src;
    lightboxCaption.textContent = captions[currentIndex].textContent;
  }

  // Load More Functionality (Simulated)
  document.getElementById('load-more').addEventListener('click', function() {
    this.textContent = 'Loading...';
    setTimeout(() => {
      // In a real app, you would fetch more images here
      this.textContent = 'No More Photos';
      this.disabled = true;
    }, 1500);
  });
});
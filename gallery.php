<?php include('header.php'); ?>

<!-- Gallery Hero Section -->
<section class="relative h-96 flex items-center justify-center bg-gray-900 overflow-hidden">
  <!-- Background Image -->
  <img src="https://images.unsplash.com/photo-1655576939730-bff7f1402b84?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
       alt="Himalayas" 
       class="absolute inset-0 w-full h-full object-cover opacity-70">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
  
  <!-- Hero Content -->
  <div class="container mx-auto px-4 text-center relative z-10 text-white">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Nepal Through Our Lens</h1>
    <p class="text-xl max-w-2xl mx-auto">Explore the breathtaking beauty of the Himalayas</p>
  </div>
</section>

<!-- Gallery Filters -->
<section class="py-8 bg-white sticky top-0 z-20 shadow-sm">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap justify-center gap-2">
      <button class="gallery-filter active px-4 py-2 bg-amber-600 text-white rounded-full text-sm font-medium" data-filter="all">
        All Photos
      </button>
      <button class="gallery-filter px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium hover:border-amber-300" data-filter="trekking">
        <i class="fas fa-mountain mr-1"></i> Trekking
      </button>
      <button class="gallery-filter px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium hover:border-amber-300" data-filter="culture">
        <i class="fas fa-landmark mr-1"></i> Culture
      </button>
      <button class="gallery-filter px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium hover:border-amber-300" data-filter="wildlife">
        <i class="fas fa-paw mr-1"></i> Wildlife
      </button>
    </div>
  </div>
</section>

<!-- Photo Gallery (Masonry Layout) -->
<section class="py-12 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="gallery-grid" id="gallery-grid">
      <!-- Trekking Photos -->
    <!-- Trekking Photos -->
    <div class="gallery-item trekking" data-category="trekking">
      <img src="https://plus.unsplash.com/premium_photo-1697729996368-5b5c7843113e?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
         alt="Everest Base Camp" 
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Everest Base Camp Trek</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>
    <div class="gallery-item trekking" data-category="trekking">
      <img src="https://images.unsplash.com/photo-1650237808767-ce06ee989871?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         alt="Annapurna Circuit"
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Annapurna Circuit</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>

    <!-- Culture Photos -->
    <div class="gallery-item culture" data-category="culture">
      <img src="https://images.unsplash.com/photo-1650731657410-d695fb9f9bda?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
         alt="Kathmandu Durbar Square" 
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Kathmandu Heritage</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>
    <div class="gallery-item culture" data-category="culture">
      <img src="https://plus.unsplash.com/premium_photo-1697729591214-a4dc41d7d760?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         alt="Patan Durbar Square"
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Patan Durbar Square</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>
    <div class="gallery-item culture" data-category="culture">
      <img src="https://images.unsplash.com/photo-1706188047078-0ba67733fa45?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         alt="Bhaktapur Durbar Square"
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Bhaktapur Durbar Square</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>
    <div class="gallery-item culture" data-category="culture">
      <img src="https://images.unsplash.com/photo-1744979937337-d2cbdcbb5b70?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         alt="Lumbini"
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Lumbini - Birthplace of Buddha</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>

    <!-- Wildlife Photos -->
    <div class="gallery-item wildlife" data-category="wildlife">
      <img src="https://images.unsplash.com/photo-1751931817996-368c9ee352ee?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
         alt="Chitwan National Park" 
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Chitwan Safari</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>
    <div class="gallery-item wildlife" data-category="wildlife">
      <img src="https://images.unsplash.com/photo-1563677199194-1248fe516ea7?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         alt="Bardia National Park"
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Bardia National Park</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>

    <!-- Other Places -->
    <div class="gallery-item culture" data-category="culture">
      <img src="https://images.unsplash.com/photo-1647346152940-6902cdf9e875?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
         alt="Pokhara"
         class="gallery-image">
      <div class="gallery-overlay">
        <div class="gallery-caption">Pokhara Lakeside</div>
        <button class="gallery-zoom">
        <i class="fas fa-expand"></i>
        </button>
      </div>
    </div>

      <!-- Add more images (total 9-12 for best layout) -->
    </div>

    <!-- Load More Button -->
    <div class="text-center mt-8">
      <button id="load-more" class="px-6 py-3 bg-white text-amber-600 rounded-lg border border-amber-600 font-medium hover:bg-amber-50 transition-colors">
        Load More Photos
      </button>
    </div>
  </div>
</section>

<!-- Lightbox Modal (Hidden by Default) -->
<div id="lightbox" class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center hidden">
  <button id="close-lightbox" class="absolute top-6 right-6 text-white text-3xl">
    <i class="fas fa-times"></i>
  </button>
  <div class="relative max-w-4xl w-full mx-4">
    <img id="lightbox-image" src="" alt="" class="w-full max-h-[80vh] object-contain">
    <p id="lightbox-caption" class="text-white text-center mt-4"></p>
  </div>
  <button id="prev-btn" class="absolute left-6 text-white text-3xl">
    <i class="fas fa-chevron-left"></i>
  </button>
  <button id="next-btn" class="absolute right-6 text-white text-3xl">
    <i class="fas fa-chevron-right"></i>
  </button>
</div>

<?php include('footer.php'); ?>
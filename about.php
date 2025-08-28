<?php include('header.php'); ?>

<!-- About Us Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden bg-gray-900">
  <!-- Background Image -->
  <img src="https://plus.unsplash.com/premium_photo-1723291283185-8b22a1efb35d?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
       alt="Himalayan Landscape" 
       class="absolute inset-0 w-full h-full object-cover opacity-70">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>

  <!-- Hero Content -->
  <div class="container mx-auto px-4 text-center relative z-10 text-white">
    <h1 class="text-4xl md:text-6xl font-bold mb-4">Our Himalayan Story</h1>
    <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8">Guiding adventurers through Nepal's wonders since 2008</p>
    <a href="#our-mission" class="inline-block px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors duration-300">
      Explore Our Journey
    </a>
  </div>
</section>

<!-- Our Mission Section -->
<section id="our-mission" class="py-16 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex flex-col lg:flex-row items-center gap-12">
      <div class="lg:w-1/2">
        <img src="https://images.unsplash.com/photo-1505245188512-b94de558b203?q=80&w=773&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
             alt="Our Team in Nepal" 
             class="w-full h-auto rounded-xl shadow-xl">
      </div>
      <div class="lg:w-1/2">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Our Mission</h2>
        <p class="text-lg text-gray-600 mb-6">
          At Nepal Tour Packages, we believe in sustainable, authentic Himalayan experiences. Our mission is to connect travelers with Nepal's breathtaking landscapes and rich cultures while supporting local communities.
        </p>
        <div class="space-y-4">
          <div class="flex items-start">
            <div class="flex-shrink-0 bg-amber-100 p-2 rounded-lg mr-4">
              <i class="fas fa-mountain text-amber-600 text-xl"></i>
            </div>
            <div>
              <h3 class="font-bold text-gray-900">Mountain Expertise</h3>
              <p class="text-gray-600">Our guides have 10+ years of Himalayan trekking experience.</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="flex-shrink-0 bg-amber-100 p-2 rounded-lg mr-4">
              <i class="fas fa-hands-helping text-amber-600 text-xl"></i>
            </div>
            <div>
              <h3 class="font-bold text-gray-900">Community Focus</h3>
              <p class="text-gray-600">15% of profits go to local education initiatives.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Why Choose Us -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Why Travel With Us</h2>
      <div class="w-20 h-1 bg-amber-500 mx-auto mb-4"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Reason 1 -->
      <div class="text-center px-6 py-8 bg-amber-50 rounded-xl">
        <div class="bg-amber-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
          <i class="fas fa-shield-alt text-amber-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Safety First</h3>
        <p class="text-gray-600">Certified guides with wilderness first aid training and satellite communication on all treks.</p>
      </div>

      <!-- Reason 2 -->
      <div class="text-center px-6 py-8 bg-amber-50 rounded-xl">
        <div class="bg-amber-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
          <i class="fas fa-leaf text-amber-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Sustainable Travel</h3>
        <p class="text-gray-600">Carbon-neutral treks and partnerships with eco-friendly lodges.</p>
      </div>

      <!-- Reason 3 -->
      <div class="text-center px-6 py-8 bg-amber-50 rounded-xl">
        <div class="bg-amber-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
          <i class="fas fa-heart text-amber-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Personalized Service</h3>
        <p class="text-gray-600">Custom itineraries tailored to your pace and interests.</p>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gray-900 text-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready for Your Himalayan Adventure?</h2>
    <p class="text-xl text-gray-300 max-w-2xl mx-auto mb-8">Let's create your perfect Nepal itinerary together</p>
    <div class="flex flex-wrap justify-center gap-4">
      <a href="#" class="px-8 py-3 bg-amber-600 hover:bg-amber-700 text-white rounded-lg font-medium transition-colors duration-300">
        Contact Our Team
      </a>
      <a href="#" class="px-8 py-3 bg-white hover:bg-gray-100 text-gray-900 rounded-lg font-medium transition-colors duration-300">
        View All Tours
      </a>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
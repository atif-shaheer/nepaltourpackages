<?php include('header.php'); ?>

<!-- Contact Hero Section -->
<section class="relative h-96 flex items-center justify-center bg-gray-900 overflow-hidden">
  <!-- Background Image -->
  <img src="https://images.unsplash.com/photo-1566438480900-0609be27a4be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1887&q=80" 
       alt="Himalayan Landscape" 
       class="absolute inset-0 w-full h-full object-cover opacity-70">
  <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
  
  <!-- Hero Content -->
  <div class="container mx-auto px-4 text-center relative z-10 text-white">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Get in Touch</h1>
    <p class="text-xl max-w-2xl mx-auto">We'd love to help plan your Himalayan adventure</p>
  </div>
</section>

<!-- Contact Cards Section -->
<section class="py-16 bg-white">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Phone Card -->
      <div class="contact-card bg-amber-50 rounded-xl p-8 text-center hover:shadow-lg transition-all duration-300">
        <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-6">
          <i class="fas fa-phone-alt text-amber-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Call Us</h3>
        <p class="text-gray-600 mb-4">Available 9AM - 6PM (NPT), 7 days a week</p>
        <a href="tel:+9771234567890" class="text-amber-600 font-medium text-lg hover:text-amber-700 transition-colors">
          +91-9876543210
        </a>
      </div>

      <!-- Email Card -->
      <div class="contact-card bg-amber-50 rounded-xl p-8 text-center hover:shadow-lg transition-all duration-300">
        <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-6">
          <i class="fas fa-envelope text-amber-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Email Us</h3>
        <p class="text-gray-600 mb-4">Typically respond within 24 hours</p>
        <a href="mailto:info@nepaltourpackages.com" class="text-amber-600 font-medium text-lg hover:text-amber-700 transition-colors">
          info@nepaltourpackages.com
        </a>
      </div>

      <!-- Visit Card -->
      <div class="contact-card bg-amber-50 rounded-xl p-8 text-center hover:shadow-lg transition-all duration-300">
        <div class="bg-amber-100 w-20 h-20 mx-auto rounded-full flex items-center justify-center mb-6">
          <i class="fas fa-map-marker-alt text-amber-600 text-2xl"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-900 mb-3">Visit Us</h3>
        <p class="text-gray-600 mb-4">Open 9AM - 6PM, Sunday to Friday</p>
        <a href="https://maps.google.com?q=Thamel,+Kathmandu" target="_blank" class="text-amber-600 font-medium text-lg hover:text-amber-700 transition-colors">
          India
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-white border-t border-gray-200">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Our Location</h2>
      <div class="w-20 h-1 bg-amber-500 mx-auto mb-4"></div>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Visit our office in the heart of Thamel, Kathmandu</p>
    </div>

    <div class="rounded-xl overflow-hidden shadow-xl h-96">
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.456205029907!2d85.31062331506203!3d27.70654438279396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1908434cb3c7%3A0x1f109b82e91b5a8f!2sThamel%2C%20Kathmandu%2044600%2C%20Nepal!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy"
        class="filter grayscale(20%) contrast(110%) hover:grayscale(0%) transition-all duration-500">
      </iframe>
    </div>
  </div>
</section>

<!-- Social Media Section -->
<section class="py-16 bg-gray-50">
  <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Connect With Us</h2>
    <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-8">Follow our adventures and get travel inspiration</p>
    
    <div class="flex justify-center gap-6">
      <a href="#" class="social-icon w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center text-amber-600 hover:bg-amber-600 hover:text-white transition-colors duration-300">
        <i class="fab fa-facebook-f text-xl"></i>
      </a>
      <a href="#" class="social-icon w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center text-amber-600 hover:bg-amber-600 hover:text-white transition-colors duration-300">
        <i class="fab fa-instagram text-xl"></i>
      </a>
      <a href="#" class="social-icon w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center text-amber-600 hover:bg-amber-600 hover:text-white transition-colors duration-300">
        <i class="fab fa-whatsapp text-xl"></i>
      </a>
      <a href="#" class="social-icon w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center text-amber-600 hover:bg-amber-600 hover:text-white transition-colors duration-300">
        <i class="fab fa-youtube text-xl"></i>
      </a>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
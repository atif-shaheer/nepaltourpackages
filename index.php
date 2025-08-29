<?php include('header.php'); ?>

<main style="padding-top: 4rem;">
    <!-- Hero Slider -->
    <div class="slider-container relative overflow-hidden h-[80vh] max-h-[800px]">
        <!-- Slider Items -->
        <div class="slider-track flex transition-transform duration-700 ease-in-out h-full">
            <!-- Slide 1 -->
            <div class="slider-slide min-w-full relative">
                <img src="https://images.unsplash.com/photo-1575819719798-83d97dd6949c?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Mount Everest" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center">
                    <div class="container mx-auto px-6 text-white">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">Explore the Roof of the World</h1>
                        <p class="text-xl md:text-2xl mb-8 max-w-2xl">Journey to Everest Base Camp through the
                            breathtaking Himalayas</p>
                        <a href="tel:+918112908013"
                            class="inline-block px-8 py-3 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300 text-lg font-medium">Book
                            This Tour</a>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="slider-slide min-w-full relative">
                <img src="https://images.unsplash.com/photo-1562462181-b228e3cff9ad?q=80&w=1010&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Pokhara Lakeside" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center">
                    <div class="container mx-auto px-6 text-white">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">Serenity of Pokhara</h1>
                        <p class="text-xl md:text-2xl mb-8 max-w-2xl">Discover the tranquil beauty of Nepal's lake city
                        </p>
                        <a href="tel:+918112908013"
                            class="inline-block px-8 py-3 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300 text-lg font-medium">Explore
                            Packages</a>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="slider-slide min-w-full relative">
                <img src="https://images.unsplash.com/photo-1687725008439-d37fbe641329?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    alt="Chitwan National Park" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center">
                    <div class="container mx-auto px-6 text-white">
                        <h1 class="text-4xl md:text-6xl font-bold mb-4">Wildlife Adventure</h1>
                        <p class="text-xl md:text-2xl mb-8 max-w-2xl">Experience the exotic wildlife of Chitwan National
                            Park</p>
                        <a href="tel:+918112908013"
                            class="inline-block px-8 py-3 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300 text-lg font-medium">Start
                            Your Safari</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Controls -->
        <button
            class="slider-prev absolute left-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-30 text-white p-3 rounded-full hover:bg-opacity-50 transition z-10">
            <i class="fas fa-chevron-left text-xl"></i>
        </button>
        <button
            class="slider-next absolute right-4 top-1/2 -translate-y-1/2 bg-white bg-opacity-30 text-white p-3 rounded-full hover:bg-opacity-50 transition z-10">
            <i class="fas fa-chevron-right text-xl"></i>
        </button>

        <!-- Slider Dots -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex space-x-2 z-10">
            <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition"
                data-index="0"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition"
                data-index="1"></button>
            <button class="slider-dot w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-100 transition"
                data-index="2"></button>
        </div>
    </div>

    <!-- Rest of your content -->


    <section class="py-12" style="background-color: rgb(255 255 255);">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-2">Popular Tour Packages</h2>
            <p class="text-center text-gray-600 mb-8 max-w-2xl mx-auto">Explore our most sought-after Nepal tour
                experiences</p>

            <div class="relative">
                <!-- Slider Container -->
                <div class="tour-slider-container overflow-hidden">
                    <div class="tour-slider-track flex transition-transform duration-500 ease-in-out">
                        <!-- Slide 1 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1509883488717-779cd2d85976?q=80&w=773&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Everest Base Camp Trek" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Everest Base Camp</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(4.8)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://cdn.pixabay.com/photo/2022/08/07/16/42/freedom-7370957_1280.jpg"
                                        alt="Annapurna Circuit" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Annapurna Circuit</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(5.0)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Add 6 more slides following the same pattern -->
                        <!-- Slide 3 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://cdn.pixabay.com/photo/2020/06/04/18/01/boat-5259878_1280.jpg"
                                        alt="Pokhara Sightseeing" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Pokhara Deluxe</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(4.2)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1549888668-19281758dfbe?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Chitwan Safari" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Chitwan Safari</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(4.7)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1643548947288-fbf86caf414a?q=80&w=802&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Langtang Valley" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Langtang Valley</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(4.0)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 6 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://media.istockphoto.com/id/1066912440/photo/lumbini-nepal-birthplace-of-buddha-siddhartha-gautama.jpg?s=612x612&w=0&k=20&c=92iFEPGMf8iDs9rfYXC3PMeVuMgO5GJdCZMgLvhLB38="
                                        alt="Lumbini Pilgrimage" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Lumbini Pilgrimage</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(5.0)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 7 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://media.himalayanjoy.com/uploads/fullbanner/langtang-gosaikund-trek.webp"
                                        alt="Helambu Trek" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Helambu Trek</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(3.8)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 8 -->
                        <div class="tour-slide px-2 min-w-[12.5%]">
                            <div
                                class="bg-white rounded-3xl shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                                <div class="h-48 overflow-hidden">
                                    <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/84/d6/5b/the-facade.jpg?w=900&h=500&s=1"
                                        alt="Bhaktapur Tour" class="w-full h-full object-cover rounded-t-3xl">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-lg mb-1" style="font-size: 14px;">Bhaktapur Heritage</h3>
                                    <div class="flex items-center mb-2">
                                        <div class="flex text-amber-400">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-sm text-gray-600 ml-1">(4.1)</span>
                                    </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button
                    class="tour-slider-prev absolute left-0 top-1/2 -translate-y-1/2 -ml-4 bg-white shadow-lg rounded-full w-10 h-10 flex items-center justify-center text-amber-600 hover:bg-amber-100 transition z-10">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button
                    class="tour-slider-next absolute right-0 top-1/2 -translate-y-1/2 -mr-4 bg-white shadow-lg rounded-full w-10 h-10 flex items-center justify-center text-amber-600 hover:bg-amber-100 transition z-10">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>


    <!-- Tour Packages Section -->
    <section class="py-12" style="background-color: rgb(255 255 255);">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Explore Nepal's Wonders</h2>
                <div class="w-20 h-1 bg-amber-500 mx-auto mb-4"></div>
            </div>

            <!-- Filter Bar -->
            <div class="mb-8">
                <div class="md:hidden mb-4">
                    <button id="mobile-filter-btn"
                        class="flex items-center justify-center w-full px-4 py-2 bg-white border border-gray-300 rounded-lg shadow-sm text-gray-700 hover:bg-gray-50">
                        <i class="fas fa-filter mr-2 text-amber-600"></i>
                        Filter Tours
                    </button>
                </div>
                <div id="filter-panel" class="hidden md:block bg-white p-4 rounded-xl shadow-sm border border-gray-200">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-search text-gray-400"></i>
                            </div>
                            <input type="text" id="package-search"
                                class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-lg focus:ring-amber-500 focus:border-amber-500"
                                placeholder="Search tours...">
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <button
                                class="filter-btn active px-4 py-2 bg-amber-600 text-white rounded-full text-sm font-medium transition-all duration-200 hover:bg-amber-700"
                                data-filter="all">
                                All Tours
                            </button>
                            <button
                                class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium transition-all duration-200 hover:bg-gray-50 hover:border-amber-300"
                                data-filter="trekking">
                                <i class="fas fa-mountain mr-1"></i> Trekking
                            </button>
                            <button
                                class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium transition-all duration-200 hover:bg-gray-50 hover:border-amber-300"
                                data-filter="safari">
                                <i class="fas fa-paw mr-1"></i> Safari
                            </button>
                            <button
                                class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium transition-all duration-200 hover:bg-gray-50 hover:border-amber-300"
                                data-filter="cultural">
                                <i class="fas fa-landmark mr-1"></i> Cultural
                            </button>
                            <button
                                class="filter-btn px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 text-sm font-medium transition-all duration-200 hover:bg-gray-50 hover:border-amber-300"
                                data-filter="luxury">
                                <i class="fas fa-crown mr-1"></i> Luxury
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Packages Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Kathmandu -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="cultural" data-difficulty="easy">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?q=80&w=870&auto=format&fit=crop"
                            alt="Kathmandu Durbar Square"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">CULTURAL</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 3 Days
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Kathmandu Heritage Tour</h3>
                            <span
                                class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">Easy</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(4.2)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="block text-xl font-bold text-amber-600">$350</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Pokhara -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="luxury" data-difficulty="easy">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?q=80&w=870&auto=format&fit=crop"
                            alt="Pokhara Lakeside"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">LAKESIDE</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 4 Days
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Pokhara Deluxe Retreat</h3>
                            <span
                                class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Easy</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(4.7)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="block text-xl font-bold text-amber-600">$500</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Lumbini -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="cultural" data-difficulty="easy">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?q=80&w=870&auto=format&fit=crop"
                            alt="Lumbini"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">PILGRIMAGE</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 2 Days
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Lumbini Pilgrimage</h3>
                            <span
                                class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">Easy</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(4.5)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="block text-xl font-bold text-amber-600">$250</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Chitwan -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="safari" data-difficulty="easy">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?q=80&w=870&auto=format&fit=crop"
                            alt="Chitwan National Park"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">SAFARI</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 3 Days
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Chitwan Jungle Safari</h3>
                            <span
                                class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Easy</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(4.6)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="block text-xl font-bold text-amber-600">$400</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Everest Base Camp -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="trekking" data-difficulty="moderate">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544735716-ea9ef790f501?q=80&w=870&auto=format&fit=crop"
                            alt="Everest Base Camp Trek"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">BESTSELLER</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 14 Days
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Everest Base Camp Trek</h3>
                            <span
                                class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-medium">Moderate</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(4.8)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="text-gray-500 line-through text-sm">$1,500</span>
                            <span class="block text-xl font-bold text-amber-600">$1,200</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Annapurna Circuit -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="trekking" data-difficulty="challenging">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509883488717-779cd2d85976?q=80&w=773&auto=format&fit=crop"
                            alt="Annapurna Circuit"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">TREKKING</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 18 Days
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Annapurna Circuit Trek</h3>
                            <span
                                class="bg-red-100 text-red-800 px-2 py-1 rounded-full text-xs font-medium">Challenging</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(5.0)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="block text-xl font-bold text-amber-600">$1,400</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Bhaktapur -->
                <div class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300"
                    data-category="cultural" data-difficulty="easy">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/84/d6/5b/the-facade.jpg?w=900&h=500&s=1"
                            alt="Bhaktapur Heritage"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <span
                            class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm">HERITAGE</span>
                        <span
                            class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                            <i class="fas fa-clock text-amber-600 mr-1"></i> 1 Day
                        </span>
                    </div>
                    <div class="p-5">
                        <div class="flex justify-between items-start mb-2">
                            <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                                Bhaktapur Heritage Walk</h3>
                            <span
                                class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium">Easy</span>
                        </div>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm ml-1">(4.1)</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <!-- <div>
                            <span class="block text-xl font-bold text-amber-600">$80</span>
                        </div> -->
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                        </div>
                    </div>
                </div>
                <!-- Add more places as needed -->
                <!-- Empty State (hidden by default) -->
                <div id="no-results" class="col-span-full text-center py-12 hidden">
                    <i class="fas fa-compass text-4xl text-gray-300 mb-4"></i>
                    <h3 class="text-xl font-medium text-gray-700 mb-2">No tours found</h3>
                    <p class="text-gray-500 mb-4">Try adjusting your search or filters</p>
                    <button id="reset-filters"
                        class="px-4 py-2 bg-amber-600 text-white rounded-lg text-sm font-medium hover:bg-amber-700 transition-colors">
                        Reset Filters
                    </button>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="package.php" id="load-more"
                    class="px-6 py-3 bg-white text-amber-600 rounded-lg border border-amber-600 font-medium hover:bg-amber-50 transition-colors duration-200">
                    Load More Tours
                </a>
            </div>
        </div>
    </section>



    <!-- Special Offers Section -->
    <section class="py-16 bg-gradient-to-br from-amber-50 to-amber-100">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <span
                    class="inline-block px-4 py-1 bg-amber-600 text-white rounded-full text-sm font-bold mb-3 shadow-md">LIMITED
                    TIME</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Exclusive Nepal Tour Deals</h2>
                <div class="w-20 h-1 bg-amber-500 mx-auto mb-4"></div>
                <!-- <p class="text-lg text-gray-700 max-w-2xl mx-auto">Unbeatable offers on our most popular Himalayan adventures</p> -->
            </div>

            <!-- Offers Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Offer 1 -->
                <div
                    class="offer-card group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1723624718351-3acf4c9a59eb?q=80&w=887&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Everest Base Camp Trek"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-3 py-1 bg-red-600 text-white rounded-full text-xs font-bold shadow-lg animate-pulse">25%
                                OFF</span>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="inline-block px-3 py-1 bg-white/90 text-gray-800 rounded-full text-xs font-medium flex items-center">
                                <i class="fas fa-clock text-amber-600 mr-1"></i> 14 Days
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Everest Spring Trek</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="text-gray-600 text-sm">(4.8)</span>
                        </div>
                        <!-- <div class="flex justify-between items-center mb-4">
            <div>
              <span class="text-gray-500 line-through">$1,600</span>
              <span class="block text-2xl font-bold text-amber-600">$1,200</span>
            </div>
            <span class="text-sm bg-green-100 text-green-800 px-2 py-1 rounded">Save $400</span>
          </div> -->
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-calendar-alt mr-2 text-amber-500"></i>
                            <span>Valid until: May 30, 2024</span>
                        </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                    </div>
                </div>

                <!-- Offer 2 -->
                <div
                    class="offer-card group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1635350180477-5a91e936880c?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Annapurna Circuit Trek"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-3 py-1 bg-blue-600 text-white rounded-full text-xs font-bold shadow-lg animate-pulse">15%
                                OFF</span>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="inline-block px-3 py-1 bg-white/90 text-gray-800 rounded-full text-xs font-medium flex items-center">
                                <i class="fas fa-clock text-amber-600 mr-1"></i> 18 Days
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Annapurna Circuit</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm">(5.0)</span>
                        </div>
                        <!-- <div class="flex justify-between items-center mb-4">
            <div>
              <span class="text-gray-500 line-through">$1,700</span>
              <span class="block text-2xl font-bold text-amber-600">$1,445</span>
            </div>
            <span class="text-sm bg-green-100 text-green-800 px-2 py-1 rounded">Save $255</span>
          </div> -->
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-calendar-alt mr-2 text-amber-500"></i>
                            <span>Valid until: June 15, 2024</span>
                        </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                    </div>
                </div>

                <!-- Offer 3 -->
                <div
                    class="offer-card group bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="relative h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1632996676096-be89c8184e62?q=80&w=865&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Chitwan Jungle Safari"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent">
                        </div>
                        <div class="absolute top-4 right-4">
                            <span
                                class="inline-block px-3 py-1 bg-purple-600 text-white rounded-full text-xs font-bold shadow-lg animate-pulse">30%
                                OFF</span>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <span
                                class="inline-block px-3 py-1 bg-white/90 text-gray-800 rounded-full text-xs font-medium flex items-center">
                                <i class="fas fa-clock text-amber-600 mr-1"></i> 5 Days
                            </span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Chitwan Safari Adventure</h3>
                        <div class="flex items-center mb-4">
                            <div class="flex text-amber-400 mr-2">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span class="text-gray-600 text-sm">(4.2)</span>
                        </div>
                        <!-- <div class="flex justify-between items-center mb-4">
            <div>
              <span class="text-gray-500 line-through">$650</span>
              <span class="block text-2xl font-bold text-amber-600">$455</span>
            </div>
            <span class="text-sm bg-green-100 text-green-800 px-2 py-1 rounded">Save $195</span>
          </div> -->
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="fas fa-calendar-alt mr-2 text-amber-500"></i>
                            <span>Valid until: April 30, 2024</span>
                        </div>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                    </div>
                </div>
            </div>

            <!-- View All Button -->
            <!-- <div class="text-center mt-12">
      <a href="#" class="inline-flex items-center px-6 py-3 border border-amber-600 text-amber-600 rounded-full font-medium hover:bg-amber-600 hover:text-white transition-colors duration-300">
        View All Special Offers
        <i class="fas fa-chevron-down ml-2 transition-transform group-hover:translate-y-1"></i>
      </a>
    </div> -->
        </div>
    </section>


    <!-- Family Packages Section -->
    <section class="py-16 bg-amber-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Family Adventures in Nepal</h2>
                <div class="w-20 h-1 bg-amber-500 mx-auto mb-4"></div>
                <!-- <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kid-friendly tours designed for unforgettable family memories</p> -->
            </div>

            <!-- Family Packages Carousel -->
            <div class="relative">
                <div class="family-carousel swiper-container overflow-hidden">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div
                                class="family-card bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 mx-2">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1602020234671-15fd6180428d?q=80&w=1032&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Pokhara Family Tour"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
                                    </div>
                                    <span
                                        class="absolute top-4 left-4 bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                        <i class="fas fa-child mr-1"></i> Ages 5+
                                    </span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Pokhara Family Explorer</h3>
                                    <div class="flex items-center mb-3">
                                        <div class="flex text-amber-400 mr-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                        </div>
                                        <span class="text-gray-600 text-sm">(4.7) • 7 Days</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">Boat rides, caves, and mountain views perfect for
                                        families with young kids.</p>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div
                                class="family-card bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 mx-2">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://plus.unsplash.com/premium_photo-1681169159151-46234379b015?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Chitwan Family Safari"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
                                    </div>
                                    <span
                                        class="absolute top-4 left-4 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                        <i class="fas fa-child mr-1"></i> Ages 6+
                                    </span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Chitwan Jungle Adventure</h3>
                                    <div class="flex items-center mb-3">
                                        <div class="flex text-amber-400 mr-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="text-gray-600 text-sm">(5.0) • 5 Days</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">Elephant rides, canoe trips, and wildlife spotting for
                                        the whole family.</p>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div
                                class="family-card bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 mx-2">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1708407298307-7f598cde2532?q=80&w=897&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                        alt="Kathmandu Family Tour"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div
                                        class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent">
                                    </div>
                                    <span
                                        class="absolute top-4 left-4 bg-purple-600 text-white px-3 py-1 rounded-full text-xs font-bold flex items-center">
                                        <i class="fas fa-child mr-1"></i> All Ages
                                    </span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-bold text-gray-900 mb-2">Kathmandu Cultural Tour</h3>
                                    <div class="flex items-center mb-3">
                                        <div class="flex text-amber-400 mr-2">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="text-gray-600 text-sm">(4.2) • 4 Days</span>
                                    </div>
                                    <p class="text-gray-600 mb-4">Explore ancient temples, markets, and puppet shows for
                                        kids.</p>
                                    <a href="tel:+918112908013" 
                                        class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">
                                        Book Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <div class="swiper-button-next !text-amber-600 !right-0 hover:!bg-amber-100 !w-12 !h-12 rounded-full">
                </div>
                <div class="swiper-button-prev !text-amber-600 !left-0 hover:!bg-amber-100 !w-12 !h-12 rounded-full">
                </div>
            </div>
        </div>
    </section>

</main>

<?php include('footer.php'); ?>
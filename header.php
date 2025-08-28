<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nepal Tour Packages - Explore the Himalayas</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <style>
      /* WhatsApp Floating Button */
  .whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    right: 40px;
    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
    overflow: hidden;
  }
  
  .whatsapp-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  }
  
  .my-float {
    position: relative;
    z-index: 2;
  }
  
  /* Radar Effect */
  .radar-effect {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    background-color: rgba(37, 211, 102, 0.5);
    z-index: 1;
    animation: radar 2s infinite;
  }
  
  @keyframes radar {
    0% {
      transform: scale(0.8);
      opacity: 1;
    }
    70% {
      transform: scale(1.5);
      opacity: 0;
    }
    100% {
      transform: scale(0.8);
      opacity: 0;
    }
  }
  
  /* Call Button with Radar Effect */
  .call-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 120px;
    right: 40px;
    background-color: #4285f4;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: all 0.3s ease;
    overflow: hidden;
  }
  
  .call-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
  }
  
  .call-float .radar-effect {
    background-color: rgba(66, 133, 244, 0.5);
  }    
    </style>

</head>
<body class="font-[Poppins] bg-gray-50">

<a href="https://api.whatsapp.com/send?phone=9876543210&text=Hello%21%20I%20need%20information%20about%20Nepal%20tours." class="whatsapp-float" target="_blank">
  <i class="fab fa-whatsapp my-float"></i>
  <span class="radar-effect"></span>
</a>

<!-- Call Floating Button -->
<a href="tel:+91-9876543210" class="call-float">
  <i class="fas fa-phone my-float"></i>
  <span class="radar-effect"></span>
</a>


    <!-- Navbar -->
    <nav class="navbar bg-white shadow-md fixed w-full z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.php" class="flex items-center">
                        <!-- <img src="assets/logo.png" alt="Nepal Tour Package Logo" class="h-10 mr-2"> -->
                        <span class="text-xl font-bold text-amber-600">Nepal Tour Packages</span>
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="nav-link">Home</a>
                    <a href="about.php" class="nav-link">About Us</a>
                    <a href="gallery.php" class="nav-link">Gallery</a>
                    <a href="package.php" class="nav-link">Packages</a>
                    <a href="contact.php" class="nav-link">Contact Us</a>
                </div>

                <!-- CTA Buttons -->
                <div class="hidden md:flex items-center space-x-4">
                    <a href="#" class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">Book Now</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="container mx-auto px-4 py-2">
                <a href="index.php" class="block py-3 border-b text-gray-700 hover:text-amber-600">Home</a>
                <a href="about.php" class="block py-3 border-b text-gray-700 hover:text-amber-600">About Us</a>
                <a href="gallery.php" class="block py-3 border-b text-gray-700 hover:text-amber-600">Gallery</a>
                <a href="#" class="block py-3 border-b text-gray-700 hover:text-amber-600">Packages</a>
                <a href="contact.php" class="block py-3 border-b text-gray-700 hover:text-amber-600">Contact Us</a>
                <div class="flex space-x-4 py-4">
                    <a href="#" class="px-6 py-2 bg-amber-600 text-white rounded-md hover:bg-amber-700 transition duration-300">Book Now</a>
                </div>
            </div>
        </div>
    </nav>

<?php
// Sample packages array (same as package.php, ideally a DB me hoga)
$packages = [
    [
        "name" => "Kathmandu Heritage Tour",
        "days" => "3 Days",
        "category" => "Cultural",
        "difficulty" => "Easy",
        "rating" => "4.2",
        "image" => "https://images.unsplash.com/photo-1755010585956-d32a7036ea87?q=80&w=1086&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Explore the UNESCO World Heritage Sites of Kathmandu, including Durbar Square, Swayambhunath, and Pashupatinath. Immerse yourself in rich culture and history."
    ],
    [
        "name" => "Pokhara Deluxe Retreat",
        "days" => "4 Days",
        "category" => "Luxury",
        "difficulty" => "Easy",
        "rating" => "4.7",
        "image" => "https://images.unsplash.com/photo-1718179634911-8551f8b0cccf?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Relax in luxury resorts, enjoy boating on Phewa Lake, and witness the stunning Annapurna range from Pokhara. Perfect for a rejuvenating getaway."
    ],
    [
        "name" => "Lumbini Pilgrimage",
        "days" => "2 Days",
        "category" => "Pilgrimage",
        "difficulty" => "Easy",
        "rating" => "4.5",
        "image" => "https://images.unsplash.com/photo-1616166831462-48a3e9089c20?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Visit the birthplace of Lord Buddha, explore sacred monasteries, and experience spiritual tranquility in Lumbini."
    ],
    [
        "name" => "Chitwan Jungle Safari",
        "days" => "3 Days",
        "category" => "Safari",
        "difficulty" => "Easy",
        "rating" => "4.6",
        "image" => "https://images.unsplash.com/photo-1549888668-19281758dfbe?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Experience wildlife adventure in Chitwan National Park. Spot rhinos, elephants, and Bengal tigers on jeep and canoe safaris."
    ],
    [
        "name" => "Everest Base Camp Trek",
        "days" => "14 Days",
        "category" => "Trekking",
        "difficulty" => "Moderate",
        "rating" => "4.8",
        "image" => "https://images.unsplash.com/photo-1544735716-ea9ef790f501?q=80&w=870&auto=format&fit=crop",
        "description" => "Embark on the iconic trek to Everest Base Camp, passing through Sherpa villages and breathtaking Himalayan landscapes."
    ],
    [
        "name" => "Annapurna Circuit Trek",
        "days" => "18 Days",
        "category" => "Trekking",
        "difficulty" => "Challenging",
        "rating" => "5.0",
        "image" => "https://images.unsplash.com/photo-1509883488717-779cd2d85976?q=80&w=773&auto=format&fit=crop",
        "description" => "Challenge yourself on the classic Annapurna Circuit, crossing Thorong La Pass and exploring diverse cultures and scenery."
    ],
    [
        "name" => "Bhaktapur Heritage Walk",
        "days" => "1 Day",
        "category" => "Heritage",
        "difficulty" => "Easy",
        "rating" => "4.1",
        "image" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/84/d6/5b/the-facade.jpg?w=900&h=500&s=1",
        "description" => "Discover the medieval city of Bhaktapur, its ancient squares, temples, and vibrant local life on a guided heritage walk."
    ],
    [
        "name" => "Poon Hill Sunrise Trek",
        "days" => "5 Days",
        "category" => "Trekking",
        "difficulty" => "Moderate",
        "rating" => "4.6",
        "image" => "https://images.unsplash.com/photo-1595873371912-27a70363bcf2?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Enjoy panoramic sunrise views of Annapurna and Dhaulagiri ranges from Poon Hill. A short and scenic trek for all levels."
    ],
    [
        "name" => "Rara Lake Adventure",
        "days" => "7 Days",
        "category" => "Adventure",
        "difficulty" => "Moderate",
        "rating" => "4.4",
        "image" => "https://images.unsplash.com/photo-1630291706048-81c1a92faa53?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Journey to Nepal’s largest lake, Rara, surrounded by pristine forests and mountains. Ideal for nature lovers and adventurers."
    ],
    [
        "name" => "Upper Mustang Jeep Tour",
        "days" => "10 Days",
        "category" => "Jeep Tour",
        "difficulty" => "Moderate",
        "rating" => "4.7",
        "image" => "https://images.unsplash.com/photo-1619463206719-f87a692cdd7a?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Explore the mystical landscapes of Upper Mustang by jeep, visiting ancient caves, monasteries, and the walled city of Lo Manthang."
    ],
    [
        "name" => "Gosaikunda Lake Trek",
        "days" => "8 Days",
        "category" => "Trekking",
        "difficulty" => "Moderate",
        "rating" => "4.5",
        "image" => "https://images.unsplash.com/photo-1587007161986-d56743677eba?q=80&w=867&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Trek to the sacred alpine lake of Gosaikunda, revered by Hindus and Buddhists, surrounded by dramatic mountain scenery."
    ],
    [
        "name" => "Bandipur Village Experience",
        "days" => "2 Days",
        "category" => "Cultural",
        "difficulty" => "Easy",
        "rating" => "4.3",
        "image" => "https://plus.unsplash.com/premium_photo-1697729690458-2d64ca777c04?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "description" => "Experience authentic Nepali village life in Bandipur, with traditional architecture, local cuisine, and stunning hilltop views."
    ],
];

// Get package id from URL
$id = isset($_GET['id']) ? intval($_GET['id']) : -1;
$package = $packages[$id] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= $package ? $package['name'] : "Package Not Found" ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50">

<?php include('header.php'); ?>

<div class="max-w-6xl mx-auto px-4 py-10" style="padding-top: 85px;">
  <?php if ($package): ?>
    <div class="bg-white rounded-xl shadow-lg overflow-hidden p-6 md:p-10">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        
        <!-- Left Side: Image -->
        <div class="w-full">
          <img src="<?= $package['image'] ?>" alt="<?= $package['name'] ?>" 
               class="w-full h-[400px] object-cover rounded-xl shadow-md">
        </div>
        
        <!-- Right Side: Content -->
        <div class="flex flex-col justify-between">
          <div>
            <h1 class="text-3xl font-bold text-gray-900 mb-3"><?= $package['name'] ?></h1>
            
            <!-- Badges -->
            <div class="flex flex-wrap gap-3 mb-4">
              <span class="px-3 py-1 bg-amber-100 text-amber-800 rounded-full text-sm">
                <i class="fas fa-clock mr-1"></i> <?= $package['days'] ?>
              </span>
              <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                <?= $package['difficulty'] ?>
              </span>
              <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-sm">
                <?= $package['category'] ?>
              </span>
              <span class="flex items-center text-amber-500 font-medium">
                <i class="fas fa-star mr-1"></i> <?= $package['rating'] ?>
              </span>
            </div>
            
            <!-- Description -->
            <p class="text-gray-700 leading-relaxed mb-6">
              <?= $package['description'] ?>
            </p>
          </div>
          
          <!-- Action Buttons -->
          <div class="flex space-x-4 mt-6">
            <a href="contact.php" 
               class="px-6 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition shadow-md">
               <i class="fas fa-paper-plane mr-2"></i> Book Now
            </a>
            <a href="package.php" 
               class="px-6 py-3 bg-gray-200 text-gray-800 rounded-lg hover:bg-gray-300 transition shadow-md">
               <i class="fas fa-arrow-left mr-2"></i> Back to Packages
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php else: ?>
    <div class="text-center py-20">
      <h2 class="text-2xl font-bold text-gray-800">Package Not Found</h2>
      <a href="package.php" 
         class="mt-4 inline-block px-5 py-3 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition">
         Back to Packages
      </a>
    </div>
  <?php endif; ?>
</div>


<?php include('footer.php'); ?>

</body>
</html>

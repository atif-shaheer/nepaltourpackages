<?php include('header.php'); ?>

<?php
// Example array of Nepal tour packages (Add all from madhutourism.com)
$packages = [
    [
        "name" => "Kathmandu Heritage Tour",
        "days" => "3 Days",
        "category" => "Cultural",
        "difficulty" => "Easy",
        "rating" => "4.2",
        "image" => "https://images.unsplash.com/photo-1755010585956-d32a7036ea87?q=80&w=1086&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Pokhara Deluxe Retreat",
        "days" => "4 Days",
        "category" => "Luxury",
        "difficulty" => "Easy",
        "rating" => "4.7",
        "image" => "https://images.unsplash.com/photo-1718179634911-8551f8b0cccf?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Lumbini Pilgrimage",
        "days" => "2 Days",
        "category" => "Pilgrimage",
        "difficulty" => "Easy",
        "rating" => "4.5",
        "image" => "https://images.unsplash.com/photo-1616166831462-48a3e9089c20?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Chitwan Jungle Safari",
        "days" => "3 Days",
        "category" => "Safari",
        "difficulty" => "Easy",
        "rating" => "4.6",
        "image" => "https://images.unsplash.com/photo-1549888668-19281758dfbe?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Everest Base Camp Trek",
        "days" => "14 Days",
        "category" => "Trekking",
        "difficulty" => "Moderate",
        "rating" => "4.8",
        "image" => "https://images.unsplash.com/photo-1544735716-ea9ef790f501?q=80&w=870&auto=format&fit=crop"
    ],
    [
        "name" => "Annapurna Circuit Trek",
        "days" => "18 Days",
        "category" => "Trekking",
        "difficulty" => "Challenging",
        "rating" => "5.0",
        "image" => "https://images.unsplash.com/photo-1509883488717-779cd2d85976?q=80&w=773&auto=format&fit=crop"
    ],
    [
        "name" => "Bhaktapur Heritage Walk",
        "days" => "1 Day",
        "category" => "Heritage",
        "difficulty" => "Easy",
        "rating" => "4.1",
        "image" => "https://dynamic-media-cdn.tripadvisor.com/media/photo-o/11/84/d6/5b/the-facade.jpg?w=900&h=500&s=1"
    ],
    [
        "name" => "Poon Hill Sunrise Trek",
        "days" => "5 Days",
        "category" => "Trekking",
        "difficulty" => "Moderate",
        "rating" => "4.6",
        "image" => "https://images.unsplash.com/photo-1595873371912-27a70363bcf2?q=80&w=872&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Rara Lake Adventure",
        "days" => "7 Days",
        "category" => "Adventure",
        "difficulty" => "Moderate",
        "rating" => "4.4",
        "image" => "https://images.unsplash.com/photo-1630291706048-81c1a92faa53?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Upper Mustang Jeep Tour",
        "days" => "10 Days",
        "category" => "Jeep Tour",
        "difficulty" => "Moderate",
        "rating" => "4.7",
        "image" => "https://images.unsplash.com/photo-1619463206719-f87a692cdd7a?q=80&w=774&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Gosaikunda Lake Trek",
        "days" => "8 Days",
        "category" => "Trekking",
        "difficulty" => "Moderate",
        "rating" => "4.5",
        "image" => "https://images.unsplash.com/photo-1587007161986-d56743677eba?q=80&w=867&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
    [
        "name" => "Bandipur Village Experience",
        "days" => "2 Days",
        "category" => "Cultural",
        "difficulty" => "Easy",
        "rating" => "4.3",
        "image" => "https://plus.unsplash.com/premium_photo-1697729690458-2d64ca777c04?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
    ],
];
?>

<section class="max-w-7xl mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold text-center mb-8" style="padding-top: 55px;">Our Best Packages</h2>

    <div id="package-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <?php foreach ($packages as $i => $pkg): ?>
        <div
            class="package-card group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 <?= $i >= 4 ? 'hidden-card' : '' ?>">
            <div class="relative h-48 overflow-hidden">
                <img src="<?= $pkg['image'] ?>" alt="<?= $pkg['name'] ?>"
                    class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <span
                    class="absolute top-3 right-3 bg-amber-600 text-white px-2 py-1 rounded-full text-xs font-bold shadow-sm"><?= strtoupper($pkg['category']) ?></span>
                <span
                    class="absolute bottom-3 left-3 bg-white/90 text-gray-800 px-2 py-1 rounded-full text-xs font-medium flex items-center">
                    <i class="fas fa-clock text-amber-600 mr-1"></i> <?= $pkg['days'] ?>
                </span>
            </div>
            <div class="p-5">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-amber-600 transition-colors">
                        <?= $pkg['name'] ?></h3>
                    <span
                        class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-xs font-medium"><?= $pkg['difficulty'] ?></span>
                </div>
                <div class="flex items-center mb-4">
                    <div class="flex text-amber-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <span class="text-gray-600 text-sm ml-1">(<?= $pkg['rating'] ?>)</span>
                </div>
                <div class="flex justify-between items-center">
                    <a href="packagedetails.php?id=<?= $i ?>"
                        class="px-4 py-2 bg-amber-600 text-white rounded-lg text-sm font-medium hover:bg-amber-700 transition-colors duration-200 flex items-center">
                        View Details
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <div class="text-center mt-10">
        <button id="load-more"
            class="px-6 py-3 bg-white text-amber-600 rounded-lg border border-amber-600 font-medium hover:bg-amber-50 transition-colors duration-200">
            Load More Tours
        </button>
    </div>
</section>

<script>
document.getElementById('load-more').addEventListener('click', function() {
    let hiddenCards = document.querySelectorAll('.hidden-card');
    for (let i = 0; i < 4 && i < hiddenCards.length; i++) {
        hiddenCards[i].classList.remove('hidden-card');
    }
    if (document.querySelectorAll('.hidden-card').length === 0) {
        this.style.display = 'none';
    }
});
</script>


<?php include('footer.php'); ?>
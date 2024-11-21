<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PetZilla</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='javascripts/main.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="./output.css" rel="stylesheet">
    <!-- link for image -->
    <script async src="https://imgbb.com/upload.js" data-auto-insert="html-embed-medium"></script>






    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>




    
</head>
<body>
    
    <header>
        <div class="grid grid-rows-1 grid-flow-col">
        <a class="navbar-brand" href="#">
            <img src="img/logo/33.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top mx-2">
            Welcome to PetZilla
          </a>
            <p></p>
            <nav>
                
                <ul>
                    
                    <li><a href="#regular_products">Products</a></li>
                    <li>
                   <a href="vetAppintment.php" >Vet Appoinment</a>
                    </li>
                    
                    <li><a href="register.html">Register</a> </li>
                    <li><a href="#contact">Contact Us</a></li>
                    <li><a href="login.html">Login in</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <!--MFP-->


      <!-- Image for the Magnific Popup -->
      <a href=" img/brand-img/MFP.jpg" id="popup-link">
            
            </a>
     
    
        <script>
            $(document).ready(function() {
                // Open the Magnific Popup for the specific image automatically
                $('#popup-link').magnificPopup({
                    type: 'image'
                }).magnificPopup('open'); // Automatically opens the popup when the page loads
            });
        </script>


    <!--MFP-->
    
    <!-- Hero Section -->
<?php
// Set the path to the images folder
$imagesDir = 'img/banner/';
// Get all image files with specific extensions
$images = glob($imagesDir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
// Select a random image
$randomImage = $images[array_rand($images)];
?>
<?php
// Start session to keep track of cart items
session_start();

// Simulate adding items to cart (this could come from your add-to-cart functionality)
if (!isset($_SESSION['cart_count'])) {
    $_SESSION['cart_count'] = 0;
}
// Example code to increase cart count (you can integrate this with your actual cart logic)
$_SESSION['cart_count'];
?>
<!-- Hero Section -->
<div class="relative h-screen bg-cover bg-center" style="background-image: url('<?php echo $randomImage; ?>');">
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center p-8">
        <h1 class="text-5xl font-bold text-white mb-4">Welcome to PetZilla</h1>
        <p class="text-xl text-gray-200 mb-8">Your one-stop shop for all things pet-related!</p>
        <a href="#shop" class="bg-blue-500 text-white px-6 py-3 rounded-lg text-lg hover:bg-blue-600">Shop Now</a>
    </div>
</div>
<!-- Floating Cart Element -->
<div class="fixed bottom-4 right-4 bg-blue-400 text-white p-3 rounded-full shadow-lg flex items-center space-x-2 hover:bg-green-500">
    <a href="viewCart.php" class="flex items-center space-x-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13M7 13h10M10 21a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z" />
        </svg>
        <span>Cart (<?php echo $_SESSION['cart_count']; ?>)</span>
    </a>
</div>
<!-- Additional Content -->
<section id="shop" class="p-8 max-w-4xl mx-auto text-center">
    <h2 class="text-3xl font-semibold text-gray-800 mb-4">Explore Our Categories</h2>
    <p class="text-gray-600">Find food, toys, medicine, and more for your pets.</p>
</section>
    <!-- Hero Section end -->
  <!-- Services Section -->

  
<section class="product-container  ">
<div class="container mx-auto px-4 py-8">
        <!-- Product Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <?php
// Loop from 1 to 9
        for ($i = 1; $i <= 10; $i++) {
     
          
            echo '<div class="bg-white border rounded-lg shadow-md overflow-hidden">';
                echo'<img src="https://i.ibb.co.com/yqDdP2d/product4.webp" alt="Product Image" class="w-full h-40 object-cover">';
                echo '<div class="p-4">';
                    echo '<h3 class="text-sm font-semibold text-gray-800">
                        Drools Kitten Food – Ocean Fish (400g)
                 </h3>';
                    echo '<div class="flex items-center justify-between mt-2">';
                        echo '<span class="text-green-600 text-sm font-medium">In stock</span>';
                        echo '<span class="text-red-500 font-bold">BDT 250</span>';
                    echo '</div>';
                    echo '<button class="mt-3 bg-blue-500 text-white w-full py-2 rounded hover:bg-pink-600">
                        Add to Cart
                    </button>';
                echo '</div>';
            echo '</div>';
          
          }
          ?>

            <!-- Add more product cards as needed -->
        </div>
    
     

</div>
</section>


<section id="regular_products">
  <div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Regular Products</h1>

    <!-- Category Buttons -->
    <div class="flex space-x-4 mb-4">
        <button onclick="loadProducts('all')" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-600"><a href=""></a>All</button>
        <button onclick="loadProducts('toys')" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-600"><a href="#toys"></a>Toys</button>
        <button onclick="loadProducts('medicine')" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-600"><a href="#medicine"></a>Medicine</button>
    </div>

    <!-- Product Carousel -->
    <div class="relative">
        <!-- Left Arrow -->
        <button onclick="scrollLeft()" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-300 text-gray-600 hover:bg-gray-400 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>

        <!-- Product List -->
        <div id="product-carousel" class="flex space-x-4 overflow-x-auto p-4 scrollbar-hide">
            <!-- Products will be loaded here dynamically -->
          <!--delete-->
          <?php
// Loop from 1 to 9
        for ($i = 1; $i <= 20; $i++) {
          echo '<div class="w-48 bg-white shadow-md rounded-lg p-4 flex-shrink-0">';
          echo '<img src="img/product2.jpg" alt="Product Image" class="w-full h-36 object-cover rounded-lg mb-2">';
          echo '<h3 class="text-sm font-semibold">Product Name</h3>';
          echo '<p class="text-green-500 text-xs mb-2">in stock</p>';
          echo '<p class="text-lg font-bold text-red-600">BDT 85</p>';
          echo '<button class="mt-2 bg-blue-500 text-white rounded-full px-4 py-1 hover:bg-green-600">';
          echo '<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">';
          echo '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13M7 13h10M10 21a1 1 0 100 2 1 1 0 000-2zm6 0a1 1 0 100 2 1 1 0 000-2z" />';
          echo '</svg>';
          echo '</button>';
          echo '</div>';
        }
        ?>
          <!--delete-->
        </div>

        <!-- Right Arrow -->
        <button onclick="scrollRight()" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-300 text-gray-600 hover:bg-gray-400 rounded-full p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>
    </div>
</div>




<script>
// Function to load products based on category
function loadProducts(category = 'all') {
    fetch('get_products.php?category=' + category)
        .then(response => response.json())
        .then(data => {
            const carousel = document.getElementById('product-carousel');
            carousel.innerHTML = ''; // Clear previous products
            data.forEach(product => {
                const productCard = document.createElement('div');
                productCard.classList.add('bg-white', 'shadow-md', 'rounded-lg', 'p-4', 'w-48', 'text-center');
                productCard.innerHTML = `
                    <img src="${product.image}" alt="${product.name}" class="h-32 w-full object-cover rounded-lg mb-4">
                    <h3 class="text-lg font-semibold">${product.name}</h3>
                    <p class="text-green-500 text-sm">${product.availability}</p>
                    <p class="text-red-500 font-bold">BDT ${product.price}</p>
                    <button class="bg-red-500 text-white px-4 py-2 rounded-full mt-4">Add to Cart</button>
                `;
                carousel.appendChild(productCard);
            });
        });
}

// Scroll the product carousel left and right
function scrollLeft() {
    document.getElementById('product-carousel').scrollBy({ left: -200, behavior: 'smooth' });
}

function scrollRight() {
    document.getElementById('product-carousel').scrollBy({ left: 200, behavior: 'smooth' });
}

// Initial load of all products
loadProducts();
</script>
  
</section>

<!-- toys Section -->
<section id="toys">
  <div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Toys</h1>
     
      <!-- Product Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Product Card -->
          <div class="bg-white border rounded-lg shadow-md overflow-hidden">
              <img src="https://via.placeholder.com/150" alt="Product Image" class="w-full h-40 object-cover">
              <div class="p-4">
                  <h3 class="text-sm font-semibold text-gray-800">
                      Drools Kitten Food – Ocean Fish (400g)
                  </h3>
                  <div class="flex items-center justify-between mt-2">
                      <span class="text-green-600 text-sm font-medium">In stock</span>
                      <span class="text-red-500 font-bold">BDT 250</span>
                  </div>
                  <button class="mt-3 bg-blue-500 text-white w-full py-2 rounded hover:bg-pink-600">
                      Add to Cart
                  </button>
              </div>
          </div>

          <!-- Repeat Product Card -->
          

          <!-- Product Card -->
          

          <!-- Add more product cards as needed -->
      </div>


</section>


<!-- Medicine Section -->
<section id="medicine">
  <div class="container mx-auto p-6">
    <h1 class="text-2xl font-bold mb-4">Medicine</h1>
     
      <!-- Product Grid -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Product Card -->
          <div class="bg-white border rounded-lg shadow-md overflow-hidden">
              <img src="https://via.placeholder.com/150" alt="Product Image" class="w-full h-40 object-cover">
              <div class="p-4">
                  <h3 class="text-sm font-semibold text-gray-800">
                      Drools Kitten Food – Ocean Fish (400g)
                  </h3>
                  <div class="flex items-center justify-between mt-2">
                      <span class="text-green-600 text-sm font-medium">In stock</span>
                      <span class="text-red-500 font-bold">BDT 250</span>
                  </div>
                  <button class="mt-3 bg-blue-500 text-white w-full py-2 rounded hover:bg-pink-600">
                      Add to Cart
                  </button>
              </div>
          </div>

          <!-- Repeat Product Card -->
          

          <!-- Product Card -->
          

          <!-- Add more product cards as needed -->
      </div>


</section>

<!-- brands Card -->
<?php
// Define the folder path where your images are stored
$brandImgDir = 'img/brand-img';  // Change this to the path of your folder

// Scan the directory and filter out any non-image files (optional)
$drandPic = array_diff(scandir($brandImgDir), array('.', '..'));

// Prepare the list of image paths (relative to the web root)
$imagePaths = [];
foreach ($drandPic as $image) {
    // You can add validation here to make sure only image files are included
    $imagePaths[] = $brandImgDir . '/' . $image;
}
?>
<script>module.exports = {
  theme: {
    extend: {
      keyframes: {
        scroll: {
          "0%": { transform: "translateX(0)" },
          "100%": { transform: "translateX(-100%)" },
        },
      },
      animation: {
        scroll: "scroll 15s linear infinite",
      },
    },
  },
};
</script>
<div class="container mx-auto px-4 py-8 ">
  <h2 class="text-2xl font-bold mb-4">Brands</h2>

   <!-- Brand Carousel -->
   <div class="relative overflow-hidden border rounded-lg">
    <div id="brandCarousel" class="flex space-x-8 animate-scroll">
       <!-- Brand Logo -->
      <?php
      // PHP loop to render each brand logo
       
      foreach ($imagePaths as $logo) {
           
          echo '<div class="flex-shrink-0">';
          echo '<img src="' . $logo . '" alt="Brand Logo" class="w-32 h-auto object-contain">';
          echo '</div>';
          
      }
       
      ?>
      
    </div>
  </div>
      
</div>
<br>
<br>
<br>
<br>
<br>


<!-- Popup modal -->
<div id="popup" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg max-w-md w-full">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Important Information</h2>
                <p class="text-gray-600">
                    This is the content of the pop-up paragraph. You can add more detailed information here that will appear when the link is clicked. The pop-up will disappear when you click anywhere outside the modal or close it using the button.
                </p>
                <div class="mt-4">
                    <button id="close-popup" class="bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600">Close</button>
                </div>
            </div>
</div>

  <footer class="bg-gray-900 text-gray-200">
    <div class="container mx-auto py-6">
      <div class="grid md:grid-cols-12 grid_cols-1 gap-7">
        <div class="lg:col-span-4 col-span-4">
          <div>
          <a href="">
            <img 
              class="h-12" src="img/logo/33.png" alt=""
            />
          </a>
          <p>PetZilla.com</p>
          </div>
          <p class="mt-6 text-gray300">
          PetZilla is your one-stop solution for all your pet's needs. From food and toys to health care and grooming tips, we've got it all. 
          Join the community and give your pets the love they deserve.
          </p>
        </div>
        <div class="lg:col-span-2 md:col-span-4 col-span-12">
          <h5 class="tracking-wide">Our Services</h5>
          <ul class="list-none mt-6 space-y-2">
            <li>
              <a href="#regular_products" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Pet Products</a>

            </li>
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Veterinary Services</a>

            </li>
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Cat Fotering</a>

            </li>
          </ul>
        </div>
        <div class="lg:col-span-2 md:col-span-4 col-span-12">
          <h5 class="tracking-wide">My Account</h5>
          <ul class="list-none mt-6 space-y-2">
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Trac My Order</a>

            </li>
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">View Cart</a>

            </li>
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Privecy & Policy</a>

            </li>
            <li>
              <a href="login.html" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Sign In</a>

            </li>
          </ul>
        </div>
        <div class="lg:col-span-2 md:col-span-4 col-span-12">
          <h5 class="tracking-wide">Customer Services</h5>
          <ul class="list-none mt-6 space-y-2">
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Support Center</a>

            </li>
            <li>
              <a href="#" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Shipping</a>

            </li>
            <li>
              <a href="#" id="open-popup" class="hover:text-gray-400 transition-all duratin-500 ease-in-out">Term and Conditions</a>

            </li>

            <li>
            <div class="flex justify-center p-2">
            <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 320 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4 ">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 512 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 488 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 448 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
        </svg>
      </a>
      <a href="#!" class="me-6 [&>svg]:h-4 [&>svg]:w-4">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="currentColor"
          viewBox="0 0 448 512">
          <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
          <path
            d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" />
        </svg>
      </a>
       
    </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="border-t border-slate-700 ">
      <div class="md:text-left text-left container mx-auto py-7 px-6">
        <p class="mb-0">
          &copy;<script>
            document.write(new Date().getFullYear());
          </script> PetZilla Ltd.
        </p>

      </div>

    </div>
  </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
        // JavaScript to handle the popup visibility

        // Get the elements
        const openPopupButton = document.getElementById('open-popup');
        const popup = document.getElementById('popup');
        const closePopupButton = document.getElementById('close-popup');

        // Open the popup when the link is clicked
        openPopupButton.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent default anchor behavior
            popup.classList.remove('hidden'); // Show the popup
        });

        // Close the popup when the "Close" button is clicked
        closePopupButton.addEventListener('click', () => {
            popup.classList.add('hidden'); // Hide the popup
        });

        // Optional: Close the popup when clicked outside the modal content
        window.addEventListener('click', (event) => {
            if (event.target === popup) {
                popup.classList.add('hidden'); // Hide the popup when clicked outside
            }
        });
    </script>
</body>
</html>
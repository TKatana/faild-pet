// Sample data for demonstration (replace with data fetched from database)
const products = [
    { name: "Product 1", price: 85, inStock: true, img: "../img/product1.jpg" },
    { name: "Product 2", price: 85, inStock: true, img: "../img/product2.jpg" },
    { name: "Product 3", price: 200, inStock: true, img: "../img/product3.jpg" },
    { name: "Product 4", price: 1300, inStock: true, img: "product-image4.jpg" },
    // Add more products
  ];
  
  let currentStartIndex = 0;
  const productsToShow = 4;
  
  function loadProducts() {
    const carousel = document.getElementById("productCarousel");
    carousel.innerHTML = "";
  
    const visibleProducts = products.slice(currentStartIndex, currentStartIndex + productsToShow);
    visibleProducts.forEach((product) => {
      const productCard = document.createElement("div");
      productCard.classList.add("w-48", "bg-white", "shadow-md", "rounded-lg", "p-4", "flex-shrink-0");
      productCard.innerHTML = `
        <img src="${product.img}" alt="${product.name}" class="w-full h-36 object-cover rounded-lg mb-2">
        <h3 class="text-sm font-semibold">${product.name}</h3>
        <p class="text-green-500 text-xs mb-2">${product.inStock ? "in stock" : "out of stock"}</p>
        <p class="text-lg font-bold text-red-600">BDT ${product.price}</p>
        <button class="mt-2 bg-red-500 text-white rounded-full px-4 py-1 hover:bg-red-600">
          <i class="fas fa-shopping-cart"></i>
        </button>
      `;
      carousel.appendChild(productCard);
    });
  }
  
  document.getElementById("prevArrow").addEventListener("click", () => {
    currentStartIndex = Math.max(currentStartIndex - productsToShow, 0);
    loadProducts();
  });
  
  document.getElementById("nextArrow").addEventListener("click", () => {
    if (currentStartIndex + productsToShow < products.length) {
      currentStartIndex += productsToShow;
      loadProducts();
    }
  });
  
  document.getElementById("viewAll").addEventListener("click", () => {
    // Load different types of products (logic will depend on backend setup)
    alert("Load other types of products");
  });
  
  // Initial load
  loadProducts();
  
document.addEventListener("DOMContentLoaded", function () {
   // Search functionality
   const searchIcon = document.getElementById("search-icon");
   const searchBox = document.querySelector(".search-box");
   
   // Toggle search box visibility
   searchIcon.addEventListener("click", () => {
       searchBox.classList.toggle("active");
   });

   // Product search functionality
   const searchInput = document.querySelector(".search-box input");
   
   searchInput.addEventListener("keypress", (e) => {
       if (e.key === "Enter") {
           const query = searchInput.value.trim().toLowerCase();
           let targetId = "";

           switch (query) {
               case "vanilla":
                   targetId = "vanilla-product";
                   break;
               case "chocolate":
                   targetId = "chocolate-product";
                   break;
               case "strawberry":
                   targetId = "strawberry-product";
                   break;
               case "blueberry":
                   targetId = "blueberry-product";
                   break;
               case "coffee":
                   targetId = "coffee-product";
                   break;
               case "cookies":
                   targetId = "cookies-product";
                   break;
               default:
                   alert("Product not found! Please try vanilla, chocolate, strawberry, blueberry, coffee, or cookies.");
                   return;
           }

           // Scroll to product
           const product = document.getElementById(targetId);
           if (product) {
               product.scrollIntoView({ behavior: "smooth", block: "center" });
               // Highlight the product temporarily
               product.style.boxShadow = "0 0 20px rgba(255, 165, 0, 0.7)";
               setTimeout(() => {
                   product.style.boxShadow = "none";
               }, 2000);
           }
           searchBox.classList.remove("active");
           searchInput.value = "";
       }
   });

   // Mobile menu toggle
   const menuIcon = document.getElementById("menu-icon");
   const navbar = document.querySelector(".navbar");
   
   menuIcon.addEventListener("click", () => {
       navbar.classList.toggle("active");
   });

   // Close mobile menu when clicking on a link
   document.querySelectorAll(".navbar a").forEach(link => {
       link.addEventListener("click", () => {
           navbar.classList.remove("active");
       });
   });

   // Close search box when clicking outside
   document.addEventListener("click", (e) => {
       if (!searchBox.contains(e.target) && e.target !== searchIcon) {
           searchBox.classList.remove("active");
       }
   });
});
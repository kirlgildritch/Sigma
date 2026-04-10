<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalLift PH - Products</title>

    <!-- CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/shopStyle1.css">
    <link rel="stylesheet" href="assets/css/productStyle.css">

</head>

<body>

<!-- TOPBAR -->
<div class="topbar">
  <div class="container">
    <div class="topbar-left">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
      <a href="#"><i class="fa-brands fa-tiktok"></i></a>
      <a href="#"><i class="fa-solid fa-envelope"></i></a>
    </div>

    <div class="topbar-center">
      <i class="fa-solid fa-truck"></i>
      <span>FREE SHIPPING THIS WEEK! ORDER OVER ₱500</span>
    </div>

    <div class="topbar-right">
      <span>ENGLISH <i class="fa-solid fa-chevron-down"></i></span>
    </div>
  </div>
</div>

<!-- HEADER -->
<header class="header">
  <div class="container header-main">
    <a href="index.php" class="logo">
      <div class="logo-icon">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="logo-text">
        LocalLift <span>PH</span>
      </div>
    </a>

    <form class="search-bar">
      <input type="text" placeholder="Search for products, shops, and more...">
      <button type="submit" class="search-btn">
        <i class="fa-solid fa-magnifying-glass"></i>
      </button>
    </form>

    <div class="header-icons">
      <a href="login.php" class="icon-box">
        <i class="fa-regular fa-user"></i> Login
      </a>

      <a href="register.php" class="icon-box">
        <i class="fa-regular fa-user-plus"></i> Register
      </a>
    </div>
  </div>
</header>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="container">
    <a href="index.php">HOME</a>
    <a href="shop.php">SHOPS</a>
    <a href="products.php" class="active">PRODUCTS</a>
    <a href="about.php">ABOUT</a>
    <a href="seller_register.php" class="seller-link">
      <i class="fa-solid fa-store"></i> BECOME A SELLER
    </a>
  </div>
</nav>

<!-- BREADCRUMB -->
<div class="container breadcrumb">
  HOME / PRODUCTS
</div>

<div class="container">
  <div class="page-wrapper">
    <h1 class="page-title">Products</h1>

    <div class="content">

      <!-- SIDEBAR -->
      <div class="sidebar">

        <!-- CATEGORIES -->
        <div class="sidebar-box">
          <h3>Categories</h3>
          <div class="category-list">
            <div class="category-item"><div class="left"><span class="dot"></span> All</div><span class="count">32</span></div>
            <div class="category-item"><div class="left"><span class="dot"></span> Food & Drinks</div><span class="count">8</span></div>
            <div class="category-item"><div class="left"><span class="dot"></span> Clothing & Fashion</div><span class="count">6</span></div>
            <div class="category-item"><div class="left"><span class="dot"></span> Handmade Crafts</div><span class="count">9</span></div>
            <div class="category-item"><div class="left"><span class="dot"></span> Accessories</div><span class="count">5</span></div>
            <div class="category-item"><div class="left"><span class="dot"></span> Souvenirs & Gifts</div><span class="count">4</span></div>
          </div>
        </div>

        <!-- PRICE FILTER -->
      <div class="sidebar-box">
  <h3>FILTER BY PRICE</h3>

  <div class="price-values">
    <span>PHP 50</span>
    <span>PHP 500</span>
  </div>

  <div class="price-slider"></div>

  <button class="filter-btn">FILTER</button>
</div>
        <!-- SEARCH -->
        <div class="sidebar-box">
          <h3>Search Products</h3>
          <input type="text" class="search-shop" placeholder="Search products...">
        </div>

      </div>

      <!-- MAIN CONTENT -->
      <div class="main-content">

        <!-- SORT BAR -->
        <div class="main-top">
          <div class="main-top-left">
            <label>Sort By:</label>
            <select>
              <option>Newest</option>
              <option>Popular</option>
              <option>Highest Rated</option>
            </select>
          </div>

          <div class="view-icons">
            <i class="fa-solid fa-table-cells-large"></i>
            <i class="fa-solid fa-list"></i>
          </div>
        </div>

        <!-- PRODUCT GRID -->
       
        <div class="shops-grid">                 
        <div class="shop-card">
           <div class="shop-logo">
            <img src="assets/product1.png" alt="Breaded Bracelet">
</div>
            <h3>Beaded Bracelet</h3>
            <div class="shop-rating"><span>Likhang Kamay Crafts</span></div>
            <div class="shop-products">₱180.00</div>
            <a href="product_details1.php?id=1" class="view-btn">VIEW</a>
            <a href="#" class="cart-btn">ADD TO CART</a>

          </div>

          <div class="shop-card">
          <div class="shop-logo">
            <img src="assets/product2.png" alt="Banana Chips">
</div>
            <h3>Banana Chips</h3>
            <div class="shop-rating"><span>Brew & Beans Café</span></div>
            <div class="shop-products">₱120.00</div>
             <a href="product_details1.php?id=2" class="view-btn">VIEW</a>
            <a href="#" class="cart-btn">ADD TO CART</a>
          </div>

          <div class="shop-card">
             <div class="shop-logo">
            <img src="assets/product3.png" alt="Handwoven Bag">
</div>
            <h3>Handwoven Bag</h3>
            <div class="shop-rating"><span>Threads & Style PH</span></div>
            <div class="shop-products">₱360.00</div>
             <a href="product_details1.php?id=3" class="view-btn">VIEW</a>
            <a href="#" class="cart-btn">ADD TO CART</a>
          </div>

          <div class="shop-card">
             <div class="shop-logo">
            <img src="assets/product4.png" alt="Herbal Soap">
</div>
            <h3>Herbal Soap</h3>
            <div class="shop-rating"><span>Likhang Kamay Crafts</span></div>
            <div class="shop-products">₱95.00</div>
             <a href="product_details1.php?id=3" class="view-btn">VIEW</a>
            <a href="#" class="cart-btn">ADD TO CART</a>

          <div class="shop-card">
             <div class="shop-logo">
            <img src="assets/product5.png" alt="Handmade Necklace">
</div>
            <h3>Handmade Necklace</h3>
            <div class="shop-rating"><span>Likhang Kamay Crafts</span></div>
            <div class="shop-products">₱220.00</div>
             <a href="product_details1.php?id=4" class="view-btn">VIEW</a>
            <a href="#" class="cart-btn">ADD TO CART</a>
            
          </div>
          

        </div>

      </div>
    </div>
  </div>
</div>

 <footer>
        <div class="container footer-top">
            <div class="footer-about">
                <div class="footer-logo">
                    <div class="logo-icon"><i class="fa-solid fa-location-dot"></i></div>
                    <h3>LocalLift <span>PH</span></h3>
                </div>
                <p>Empowering local businesses by providing a centralized marketplace for sellers and buyers.</p>
            </div>

            <div class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shops.php">Shops</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>Connect With Us</h4>
                <ul>
                    <li><i class="fa-brands fa-facebook-f"></i> Facebook</li>
                    <li><i class="fa-brands fa-instagram"></i> Instagram</li>
                    <li><i class="fa-solid fa-envelope"></i> Email</li>
                </ul>
            </div>
        </div>

        <div class="container footer-bottom">
            <div>© 2025 LocalLift PH. All Rights Reserved.</div>
            <div>Privacy Policy | Terms & Conditions</div>
        </div>
    </footer>



</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalLift PH</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/indexStyle.css">
</head>
<body>
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

  <header class="header">
    <div class="container header-main">
      <a href="index.php" class="logo">
        <div class="logo-icon">
          <i class="fa-solid fa-location-dot"></i>
        </div>
        <div class="logo-text">
          LocalLift
          <span>PH</span>
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
          <i class="fa-regular fa-user"></i>
          Login
        </a>

        <a href="register.php" class="icon-box">
          <i class="fa-regular fa-user-plus"></i>
          Register
         
        </a>

        <a href="#" class="icon-box">
          <i class="fa-regular fa-heart"></i>
          Wishlist
          <span class="badge">0</span>
        </a>

        <a href="cart.php" class="icon-box">
          <i class="fa-solid fa-cart-shopping"></i>
          Cart
          <span class="badge">0</span>
        </a>
      </div>
    </div>
  </header>

  <nav class="navbar">
    <div class="container">
      <a href="index.php" class="active">HOME</a>
      <a href="shop.php">SHOPS</a>
      <a href="products.php">PRODUCTS</a>
      <a href="about.php">ABOUT</a>
      <a href="seller_register.php" class="seller-link"><i class="fa-solid fa-store"></i> BECOME A SELLER</a>
    </div>
  </nav>

  <section class="hero">
    <div class="container">
      <div class="hero-box">
        <div class="hero-content">
          <div class="small">Support Local, Shop Local</div>
          <h1>Discover Amazing Local Products Near You</h1>
          <p>LocalLift PH connects local businesses with customers in one easy-to-use marketplace.</p>

          <div class="hero-buttons">
            <a href="products.php" class="btn btn-primary">
              <i class="fa-solid fa-bag-shopping"></i> SHOP NOW
            </a>
            <a href="seller_register.php" class="btn btn-outline">
              <i class="fa-solid fa-store"></i> BECOME A SELLER
            </a>
          </div>
        </div>

        <div class="hero-image">
          <img src="assets/image/heroBanner.png" alt="Hero Banner">
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Featured Categories</h2>
        <a href="categories.php" class="view-all">View All Categories <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="categories">
        <a href="products.php?category=food" class="category-card">
          <div class="cat-icon"><i class="fa-solid fa-utensils"></i></div>
          <h4>Food & Drinks</h4>
        </a>

        <a href="products.php?category=clothing" class="category-card">
          <div class="cat-icon"><i class="fa-solid fa-shirt"></i></div>
          <h4>Clothing & Fashion</h4>
        </a>

        <a href="products.php?category=crafts" class="category-card">
          <div class="cat-icon"><i class="fa-solid fa-palette"></i></div>
          <h4>Handmade Crafts</h4>
        </a>

        <a href="products.php?category=accessories" class="category-card">
          <div class="cat-icon"><i class="fa-solid fa-bag-shopping"></i></div>
          <h4>Accessories</h4>
        </a>

        <a href="products.php?category=souvenirs" class="category-card">
          <div class="cat-icon"><i class="fa-solid fa-gift"></i></div>
          <h4>Souvenirs & Gifts</h4>
        </a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Featured Shops</h2>
        <a href="shops.php" class="view-all">View All Shops <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="shops">
        <div class="shop-card">
          <div class="shop-logo">
            <img src="assets/shop1.png" alt="Brew & Beans Café">
          </div>
          <div class="shop-info">
            <h3>Brew & Beans Café</h3>
            <p>Food & Drinks</p>
            <div class="rating"><i class="fa-solid fa-star"></i> 4.8 (120)</div>
            <a href="shop_details.php?id=1" class="mini-btn">VISIT SHOP</a>
          </div>
        </div>

        <div class="shop-card">
          <div class="shop-logo">
            <img src="assets/shop2.png" alt="Threads & Style PH">
          </div>
          <div class="shop-info">
            <h3>Threads & Style PH</h3>
            <p>Clothing & Fashion</p>
            <div class="rating"><i class="fa-solid fa-star"></i> 4.7 (98)</div>
            <a href="shop_details.php?id=2" class="mini-btn">VISIT SHOP</a>
          </div>
        </div>

        <div class="shop-card">
          <div class="shop-logo">
            <img src="assets/shop3.png" alt="Likhang Kamay Crafts">
          </div>
          <div class="shop-info">
            <h3>Likhang Kamay Crafts</h3>
            <p>Handmade Crafts</p>
            <div class="rating"><i class="fa-solid fa-star"></i> 4.9 (150)</div>
            <a href="shop_details.php?id=3" class="mini-btn">VISIT SHOP</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="section-header">
        <h2 class="section-title">Featured Products</h2>
        <a href="products.php" class="view-all">View All Products <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="products">

        <div class="product-card">
          <div class="product-image">
            <img src="assets/product1.png" alt="Banana Chips">
          </div>
          <div class="product-info">
            <h4>Banana Chips</h4>
            <div class="sub">Crispy & Sweet</div>
            <div class="price"><small>₱</small>120.00</div>
            <div class="product-actions">
              <a href="product_details.php?id=1" class="details-btn">VIEW DETAILS</a>
              <a href="cart.php" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <img src="assets/product2.png" alt="Handwoven Bag">
          </div>
          <div class="product-info">
            <h4>Handwoven Bag</h4>
            <div class="sub">Native Style</div>
            <div class="price"><small>₱</small>350.00</div>
            <div class="product-actions">
              <a href="product_details.php?id=2" class="details-btn">VIEW DETAILS</a>
              <a href="cart.php" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <img src="assets/product3.png" alt="Beaded Bracelet">
          </div>
          <div class="product-info">
            <h4>Beaded Bracelet</h4>
            <div class="sub">Colorful Design</div>
            <div class="price"><small>₱</small>180.00</div>
            <div class="product-actions">
              <a href="product_details.php?id=3" class="details-btn">VIEW DETAILS</a>
              <a href="cart.php" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
            </div>
          </div>
        </div>

        <div class="product-card">
          <div class="product-image">
            <img src="assets/product4.png" alt="Herbal Soap">
          </div>
          <div class="product-info">
            <h4>Herbal Soap</h4>
            <div class="sub">All-Natural</div>
            <div class="price"><small>₱</small>95.00</div>
            <div class="product-actions">
              <a href="product_details.php?id=4" class="details-btn">VIEW DETAILS</a>
              <a href="cart.php" class="cart-btn"><i class="fa-solid fa-cart-shopping"></i> ADD TO CART</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

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
        <h4>For Sellers</h4>
        <ul>
          <li><a href="create_shop.php">Create a Shop</a></li>
          <li><a href="seller_guide.php">Seller Guide</a></li>
          <li><a href="seller_login.php">Dashboard Login</a></li>
          <li><a href="contact.php">Contact Support</a></li>
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
      <div class="right-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
      </div>
    </div>
  </footer>


</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalLift PH - Shops</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/shopStyle1.css">


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

    
      </div>
    </div>
  </header>



  <nav class="navbar">
    <div class="container">
      <a href="index.php">HOME</a>
      <a href="shop.php" class="active">SHOPS</a>
      <a href="products.php">PRODUCTS</a>
      <a href="about.php">ABOUT</a>
      <a href="seller_register.php" class="seller-link"><i class="fa-solid fa-store"></i> BECOME A SELLER</a>
    </div>
  </nav>

     <div class="container breadcrumb">
        HOME / SHOPS
    </div>



  <div class="container">
        <div class="page-wrapper">
            <h1 class="page-title">Shops</h1>

            <div class="content">
                <div class="sidebar">
                    <div class="sidebar-box">
                        <h3>Categories</h3>
                        <div class="category-list">
                            <div class="category-item">
                                <div class="left"><span class="dot"></span> All</div>
                                <span class="count">32</span>
                            </div>
                            <div class="category-item">
                                <div class="left"><span class="dot"></span> Food & Drinks</div>
                                <span class="count">8</span>
                            </div>
                            <div class="category-item">
                                <div class="left"><span class="dot"></span> Clothing & Fashion</div>
                                <span class="count">6</span>
                            </div>
                            <div class="category-item">
                                <div class="left"><span class="dot"></span> Handmade Crafts</div>
                                <span class="count">9</span>
                            </div>
                            <div class="category-item">
                                <div class="left"><span class="dot"></span> Accessories</div>
                                <span class="count">5</span>
                            </div>
                            <div class="category-item">
                                <div class="left"><span class="dot"></span> Souvenirs & Gifts</div>
                                <span class="count">4</span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h3>Sort By</h3>
                        <div class="sort-list">
                            <select>
                                <option>Newest</option>
                                <option>Popular</option>
                                <option>Highest Rated</option>
                            </select>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h3>Search Shops</h3>
                        <input type="text" class="search-shop" placeholder="Search shops...">
                    </div>
                </div>

                <div class="main-content">
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

                    <div class="shops-grid">
                        <div class="shop-card">
                            <div class="shop-logo">
                                <img src="assets/shop3.png" alt="Likhang Kamay Crafts">
                            </div>
                            <h3>Likhang Kamay Crafts</h3>
                            <div class="shop-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.9 (150)</span>
                            </div>
                            <div class="shop-products">13 Products</div>
                            <a href="shop_details.php?id=3" class="visit-btn">VISIT SHOP</a>
                        </div>

                        <div class="shop-card">
                            <div class="shop-logo">
                                <img src="assets/shop1.png" alt="Brew & Beans Café">
                            </div>
                            <h3>Brew & Beans Café</h3>
                            <div class="shop-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.8 (152)</span>
                            </div>
                            <div class="shop-products">11 Products</div>
                            <a href="shop_details.php?id=1" class="visit-btn">VISIT SHOP</a>
                        </div>

                        <div class="shop-card">
                            <div class="shop-logo">
                                <img src="assets/shop2.png" alt="Threads & Style PH">
                            </div>
                            <h3>Sweet Delights</h3>
                            <div class="shop-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.9 (105)</span>
                            </div>
                            <div class="shop-products">10 Products</div>
                            <a href="shop_details.php?id=2" class="visit-btn">VISIT SHOP</a>
                        </div>

                        <div class="shop-card">
                            <div class="shop-logo">
                                <img src="assets/shop4.png" alt="Home Décor Haven">
                            </div>
                            <h3>Home Décor Haven</h3>
                            <div class="shop-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.9 (135)</span>
                            </div>
                            <div class="shop-products">9 Products</div>
                            <a href="shop_details.php?id=4" class="visit-btn">VISIT SHOP</a>
                        </div>

                        <div class="shop-card">
                            <div class="shop-logo">
                                <img src="assets/shop5.png" alt="Nature's Best Essentials">
                            </div>
                            <h3>Nature’s Best Essentials</h3>
                            <div class="shop-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.9 (75)</span>
                            </div>
                            <div class="shop-products">8 Products</div>
                            <a href="shop_details.php?id=5" class="visit-btn">VISIT SHOP</a>
                        </div>

                        <div class="shop-card">
                            <div class="shop-logo">
                                <img src="assets/shop6.png" alt="Nature's Best Essentials">
                            </div>
                            <h3>Nature’s Best Essentials</h3>
                            <div class="shop-rating">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>4.9 (78)</span>
                            </div>
                            <div class="shop-products">9 Products</div>
                            <a href="shop_details.php?id=6" class="visit-btn">VISIT SHOP</a>
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
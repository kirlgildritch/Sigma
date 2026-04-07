<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LocalLift PH - Product Details</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:'Poppins', sans-serif;
    }

    body{
      background:#fceef4;
      color:#333;
    }

    a{
      text-decoration:none;
      color:inherit;
    }

    ul{
      list-style:none;
    }

    .container{
      width:1200px;
      max-width:95%;
      margin:0 auto;
    }

    /* TOP BAR */
    .topbar{
      background:#f8dce8;
      padding:10px 0;
      font-size:14px;
      color:#5b4b54;
    }

    .topbar .container{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:20px;
    }

    .topbar-left,
    .topbar-center,
    .topbar-right{
      display:flex;
      align-items:center;
      gap:15px;
    }

    .social-icon{
      width:26px;
      height:26px;
      border-radius:6px;
      background:#f3c8d9;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:12px;
      font-weight:600;
    }

    .topbar-center{
      font-weight:600;
      color:#e95b92;
    }

    /* MAIN HEADER */
    .main-header{
      background:#fff;
      padding:22px 0;
      border-bottom:1px solid #f1d7e2;
    }

    .main-header .container{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:20px;
      flex-wrap:wrap;
    }

    .logo{
      display:flex;
      align-items:center;
      gap:12px;
      min-width:220px;
    }

    .logo-bag{
      width:42px;
      height:42px;
      border-radius:10px;
      background:#ff5d9e;
      display:flex;
      align-items:center;
      justify-content:center;
      color:#fff;
      font-size:22px;
      font-weight:700;
    }

    .logo-text{
      line-height:1;
    }

    .logo-text h1{
      font-size:40px;
      font-weight:700;
      color:#222;
    }

    .logo-text span{
      font-size:22px;
      font-weight:700;
      color:#ff5d9e;
      display:block;
      margin-top:4px;
    }

    .search-bar{
      flex:1;
      max-width:520px;
      position:relative;
    }

    .search-bar input{
      width:100%;
      padding:16px 52px 16px 18px;
      border:2px solid #f2d9e4;
      border-radius:14px;
      outline:none;
      font-size:16px;
      color:#666;
      background:#fff;
    }

    .search-bar button{
      position:absolute;
      right:12px;
      top:50%;
      transform:translateY(-50%);
      border:none;
      background:none;
      font-size:20px;
      cursor:pointer;
      color:#555;
    }

    .header-actions{
      display:flex;
      gap:35px;
      align-items:center;
    }

    .action-item{
      text-align:center;
      position:relative;
      font-size:14px;
      color:#333;
    }

    .action-icon{
      font-size:28px;
      margin-bottom:4px;
      display:block;
    }

    .notif-badge{
      position:absolute;
      top:-4px;
      right:-8px;
      width:20px;
      height:20px;
      border-radius:50%;
      background:#ff5d9e;
      color:#fff;
      font-size:11px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight:600;
    }

    /* NAVBAR */
    .navbar{
      background:#fff;
      border-bottom:1px solid #f1d7e2;
    }

    .navbar .container{
      display:flex;
      justify-content:center;
      gap:18px;
      flex-wrap:wrap;
      padding:16px 0;
    }

    .navbar a{
      font-weight:600;
      color:#2e2e2e;
      padding:10px 18px;
      border-radius:12px;
      transition:0.3s;
    }

    .navbar a.active{
      background:#ff5d9e;
      color:#fff;
    }

    /* BREADCRUMB */
    .breadcrumb{
      padding:22px 0;
      font-size:15px;
      color:#7a6e74;
    }

    .breadcrumb span{
      margin:0 8px;
    }

    /* PRODUCT SECTION */
    .product-section{
      background:#fff;
      border-radius:18px;
      padding:28px;
      box-shadow:0 4px 12px rgba(0,0,0,0.04);
      margin-bottom:30px;
    }

    .product-grid{
      display:grid;
      grid-template-columns:1.1fr 1fr;
      gap:30px;
    }

    .product-image img{
      width:100%;
      border-radius:12px;
      display:block;
      object-fit:cover;
      height:520px;
    }

    .product-info h2{
      font-size:46px;
      font-weight:600;
      margin-bottom:5px;
      color:#2d2b31;
    }

    .subtitle{
      font-size:22px;
      color:#666;
      margin-bottom:20px;
    }

    .divider{
      height:1px;
      background:#eee;
      margin:18px 0;
    }

    .price{
      color:#ff5d9e;
      font-size:48px;
      font-weight:700;
      margin-bottom:22px;
    }

    .quantity-row{
      display:flex;
      align-items:center;
      gap:0;
      margin-bottom:20px;
    }

    .qty-btn,
    .qty-number{
      width:60px;
      height:50px;
      border:1px solid #e4dfe2;
      background:#fff;
      font-size:22px;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .qty-btn{
      cursor:pointer;
    }

    .qty-number{
      font-size:20px;
      font-weight:500;
    }

    .cart-row{
      display:flex;
      gap:12px;
      margin-bottom:18px;
    }

    .add-cart{
      flex:1;
      height:58px;
      border:none;
      border-radius:8px;
      background:#ff5d9e;
      color:#fff;
      font-size:22px;
      font-weight:600;
      cursor:pointer;
    }

    .wish-btn{
      width:58px;
      height:58px;
      border:1px solid #eadbe2;
      background:#fff;
      border-radius:8px;
      cursor:pointer;
      font-size:24px;
      color:#ff5d9e;
    }

    .wishlist-link{
      display:flex;
      align-items:center;
      gap:10px;
      color:#7a7075;
      font-size:18px;
      margin-bottom:18px;
    }

    .shop-box{
      display:flex;
      align-items:center;
      gap:16px;
      padding-top:10px;
    }

    .shop-logo{
      width:70px;
      height:70px;
      border-radius:50%;
      background:#f8e9d3;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:12px;
      text-align:center;
      color:#8d6b49;
      font-weight:600;
      padding:8px;
    }

    .shop-details h4{
      font-size:28px;
      margin-bottom:4px;
    }

    .rating{
      color:#ffb400;
      font-size:18px;
      margin-bottom:4px;
    }

    .rating span{
      color:#666;
      margin-left:6px;
    }

    .view-shop{
      color:#ff5d9e;
      font-weight:600;
      font-size:18px;
    }

    /* DESCRIPTION */
    .description{
      margin-top:28px;
    }

    .description h3{
      font-size:34px;
      margin-bottom:8px;
      font-weight:600;
    }

    .description h4{
      font-size:26px;
      margin-bottom:14px;
    }

    .description ul li{
      margin-bottom:14px;
      font-size:20px;
      color:#555;
      line-height:1.6;
    }

    /* RELATED PRODUCTS */
    .related{
      margin-top:26px;
    }

    .related h3{
      font-size:34px;
      margin-bottom:20px;
      font-weight:600;
    }

    .related-grid{
      display:grid;
      grid-template-columns:repeat(4,1fr);
      gap:18px;
    }

    .product-card{
      background:#fff;
      border:1px solid #f0dce4;
      border-radius:12px;
      overflow:hidden;
      padding:12px;
    }

    .product-card img{
      width:100%;
      height:180px;
      object-fit:cover;
      border-radius:10px;
      margin-bottom:12px;
    }

    .product-card h4{
      font-size:24px;
      margin-bottom:6px;
      color:#333;
    }

    .product-card p{
      color:#777;
      margin-bottom:8px;
      font-size:16px;
    }

    .product-card .card-price{
      color:#ff5d9e;
      font-size:30px;
      font-weight:700;
      margin-bottom:12px;
    }

    .card-buttons{
      display:flex;
      gap:10px;
    }

    .view-btn,
    .card-cart-btn{
      flex:1;
      height:42px;
      border:none;
      border-radius:8px;
      font-weight:600;
      cursor:pointer;
      font-size:15px;
    }

    .view-btn{
      background:#f2ecef;
      color:#555;
    }

    .card-cart-btn{
      background:#ff5d9e;
      color:#fff;
    }

    /* FOOTER */
    .footer{
      background:#f8eef2;
      margin-top:40px;
      padding:40px 0;
      border-top:1px solid #ead9e1;
    }

    .footer-grid{
      display:grid;
      grid-template-columns:1.2fr 1fr 1fr;
      gap:40px;
    }

    .footer-logo{
      display:flex;
      align-items:center;
      gap:10px;
      margin-bottom:12px;
    }

    .footer-logo .logo-bag{
      width:38px;
      height:38px;
      font-size:20px;
    }

    .footer-logo h3{
      font-size:24px;
      font-weight:700;
    }

    .footer-logo h3 span{
      color:#ff5d9e;
    }

    .footer p,
    .footer li{
      color:#5c5660;
      font-size:16px;
      line-height:1.8;
    }

    .footer h4{
      font-size:22px;
      margin-bottom:14px;
      font-weight:700;
      color:#333;
    }

    .footer ul li{
      margin-bottom:4px;
    }

    @media (max-width: 992px){
      .product-grid{
        grid-template-columns:1fr;
      }

      .related-grid{
        grid-template-columns:repeat(2,1fr);
      }

      .footer-grid{
        grid-template-columns:1fr;
      }

      .product-info h2{
        font-size:34px;
      }

      .price{
        font-size:38px;
      }
    }

    @media (max-width: 600px){
      .topbar .container,
      .main-header .container{
        flex-direction:column;
        align-items:flex-start;
      }

      .header-actions{
        gap:20px;
      }

      .related-grid{
        grid-template-columns:1fr;
      }

      .navbar .container{
        justify-content:flex-start;
      }

      .product-section{
        padding:18px;
      }

      .product-image img{
        height:320px;
      }

      .product-info h2{
        font-size:28px;
      }

      .subtitle{
        font-size:18px;
      }

      .description h3,
      .related h3{
        font-size:26px;
      }

      .description h4{
        font-size:22px;
      }

      .description ul li{
        font-size:16px;
      }
    }
  </style>
</head>
<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="container">
      <div class="topbar-left">
        <div class="social-icon">f</div>
        <div class="social-icon">ig</div>
        <div class="social-icon">✓</div>
        <div class="social-icon">▶</div>
      </div>

      <div class="topbar-center">
        🚚 FREE SHIPPING THIS WEEK! ORDER OVER ₱500
      </div>

      <div class="topbar-right">
        <span>PHP ₱</span>
        <span>ENGLISH ▼</span>
      </div>
    </div>
  </div>

  <!-- MAIN HEADER -->
  <header class="main-header">
    <div class="container">
      <div class="logo">
        <div class="logo-bag">👜</div>
        <div class="logo-text">
          <h1>LocalLift</h1>
          <span>PH</span>
        </div>
      </div>

      <div class="search-bar">
        <input type="text" placeholder="Search for prdd, hiogs, and more..." />
        <button>🔍</button>
      </div>

      <div class="header-actions">
        <div class="action-item">
          <span class="action-icon">👤</span>
          <span>Login</span>
        </div>

        <div class="action-item">
          <span class="action-icon">👥</span>
          <span>Register</span>
          <div class="notif-badge">1</div>
        </div>
      </div>
    </div>
  </header>

  <!-- NAVBAR -->
  <nav class="navbar">
    <div class="container">
      <a href="#">HOME</a>
      <a href="#">PRODUCTS</a>
      <a href="#" class="active">PRODUCTS</a>
      <a href="#">SHOPS</a>
      <a href="#">ABOUT</a>
      <a href="#">BECOME A SELLER</a>
    </div>
  </nav>

  <!-- BREADCRUMB -->
  <div class="container">
    <div class="breadcrumb">
      HOME <span>/</span> PRODUCTS <span>/</span> BEADED BRACELET
    </div>
  </div>

  <!-- PRODUCT DETAILS -->
  <div class="container">
    <section class="product-section">
      <div class="product-grid">
        <div class="product-image">
          <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?q=80&w=1200&auto=format&fit=crop" alt="Beaded Bracelet">
        </div>

        <div class="product-info">
          <h2>Beaded Bracelet</h2>
          <p class="subtitle">Colorful Design</p>

          <div class="divider"></div>

          <div class="price">₱ 180.00</div>

          <div class="quantity-row">
            <div class="qty-btn">−</div>
            <div class="qty-number">1</div>
            <div class="qty-btn">+</div>
          </div>

          <div class="cart-row">
            <button class="add-cart">ADD TO CART</button>
            <button class="wish-btn">❤</button>
            <button class="wish-btn">♡</button>
          </div>

          <div class="wishlist-link">
            <span>❤</span>
            <span>Add to Wishlist</span>
          </div>

          <div class="divider"></div>

          <div class="shop-box">
            <div class="shop-logo">Likhang Kamay</div>
            <div class="shop-details">
              <h4>Likhang Kamay Crafts</h4>
              <div class="rating">★★★★★ <span>4.9 (150)</span></div>
              <a href="#" class="view-shop">View Shop</a>
            </div>
          </div>
        </div>
      </div>

      <div class="description">
        <h3>About This Product</h3>
        <h4>Description</h4>
        <ul>
          <li>• Handmade beaded bracelet with colorful, vibrant design</li>
          <li>• Made from high-quality, assorted beads including wooden and glass beads</li>
          <li>• Stretchable, fits most wrist sizes comfortably</li>
          <li>• Perfect for adding a pop of color and style to any outfit</li>
        </ul>
      </div>

      <div class="divider" style="margin-top:24px;"></div>

      <div class="related">
        <h3>Related Products</h3>

        <div class="related-grid">
          <div class="product-card">
            <img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=800&auto=format&fit=crop" alt="Herbal Soap">
            <h4>Herbal Soap</h4>
            <p>Likhang Kamay Crafts</p>
            <div class="card-price">₱ 95.00</div>
            <div class="card-buttons">
              <button class="view-btn">VIEW</button>
              <button class="card-cart-btn">ADD TO CART</button>
            </div>
          </div>

          <div class="product-card">
            <img src="https://images.unsplash.com/photo-1585238342024-78d387f4a707?q=80&w=800&auto=format&fit=crop" alt="Banana Chips">
            <h4>Banana Chips</h4>
            <p>Brew & Beans Café</p>
            <div class="card-price">₱ 120.00</div>
            <div class="card-buttons">
              <button class="view-btn">VIEW</button>
              <button class="card-cart-btn">ADD TO CART</button>
            </div>
          </div>

          <div class="product-card">
            <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?q=80&w=800&auto=format&fit=crop" alt="Handwoven Bag">
            <h4>Handwoven Bag</h4>
            <p>Threads & Style PH</p>
            <div class="card-price">₱ 360.00</div>
            <div class="card-buttons">
              <button class="view-btn">VIEW</button>
              <button class="card-cart-btn">ADD TO CART</button>
            </div>
          </div>

          <div class="product-card">
            <img src="https://images.unsplash.com/photo-1611085583191-a3b181a88401?q=80&w=800&auto=format&fit=crop" alt="Handmade Necklace">
            <h4>Handmade Necklace</h4>
            <p>Likhang Kamay Crafts</p>
            <div class="card-price">₱ 220.00</div>
            <div class="card-buttons">
              <button class="view-btn">VIEW</button>
              <button class="card-cart-btn">ADD TO CART</button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <div class="footer-logo">
          <div class="logo-bag">👜</div>
          <h3>LocalLift <span>PH</span></h3>
        </div>
        <p>
          Empowering local businesses<br>
          by providing a centralized<br>
          marketplace for sellers<br>
          and buyers.
        </p>
      </div>

      <div>
        <h4>QUICK LINKS</h4>
        <ul>
          <li>• Home</li>
          <li>• Shops</li>
          <li>• Products</li>
          <li>• About Us</li>
        </ul>
      </div>

      <div>
        <h4>CONNECT WITH US</h4>
        <ul>
          <li>📘 Facebook</li>
          <li>📷 Instagram</li>
          <li>✉ Email</li>
        </ul>
      </div>
    </div>
  </footer>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LocalLift PH - Shopping Cart</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <script src="https://unpkg.com/lucide@latest"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom, #fff7fb, #fdebf6);
      color: #2d2230;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    button,
    input {
      font-family: inherit;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .top-bar {
      background: #f7cde2;
      padding: 12px 0;
      font-size: 14px;
    }

    .top-bar-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .social-icons {
      display: flex;
      gap: 10px;
    }

    .social-icons span {
      width: 28px;
      height: 28px;
      background: #efb7d1;
      border-radius: 6px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #44323c;
      font-weight: 600;
    }

    .shipping-text {
      flex: 1;
      text-align: center;
      font-weight: 500;
      color: #5b4351;
    }

    .top-options {
      display: flex;
      gap: 20px;
      color: #4f3c46;
      font-weight: 500;
    }

    .header {
      background: #fff8fc;
      padding: 24px 0;
    }

    .header-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
      min-width: 220px;
    }

    .logo-icon {
      width: 48px;
      height: 48px;
      background: #ff4fa0;
      border-radius: 12px;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 22px;
      font-weight: 700;
    }

    .logo-text h1 {
      font-size: 28px;
      font-weight: 800;
      line-height: 1;
      color: #231b25;
    }

    .logo-text p {
      color: #ff4fa0;
      font-weight: 800;
      font-size: 24px;
      line-height: 1.1;
    }

    .search-box {
      flex: 1;
      max-width: 480px;
      display: flex;
      align-items: center;
      background: #fff;
      border: 1px solid #ead9e3;
      border-radius: 14px;
      overflow: hidden;
    }

    .search-box input {
      flex: 1;
      border: none;
      outline: none;
      padding: 15px 18px;
      font-size: 15px;
      color: #4d3c46;
      background: transparent;
    }

    .search-box button {
      border: none;
      background: #fff;
      padding: 0 18px;
      cursor: pointer;
      color: #5c4a56;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .search-box button i {
      width: 22px;
      height: 22px;
      stroke-width: 2;
    }

    /* UPDATED AUTH PART */
    .auth-links {
      display: flex;
      align-items: center;
      gap: 38px;
    }

    .auth-item {
      position: relative;
      display: flex;
      flex-direction: column;
      align-items: center;
      color: #2d2230;
      text-decoration: none;
      line-height: 1.2;
    }

    .auth-svg {
      width: 40px;
      height: 40px;
      stroke-width: 1.8;
      margin-bottom: 6px;
      color: #231b25;
    }

    .auth-item span {
      font-size: 16px;
      font-weight: 500;
      color: #231b25;
    }

    .notif-badge {
      position: absolute;
      top: -5px;
      right: -10px;
      width: 24px;
      height: 24px;
      border-radius: 50%;
      background: #ff4fa0;
      color: #fff;
      font-size: 12px;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #fff8fc;
    }

    .navbar {
      background: #fff;
      border-top: 1px solid #f0dde8;
      border-bottom: 1px solid #f0dde8;
    }

    .nav-links {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 18px;
      flex-wrap: wrap;
      padding: 16px 0;
    }

    .nav-links a {
      padding: 10px 18px;
      border-radius: 10px;
      font-weight: 600;
      color: #2e2330;
      transition: 0.3s;
    }

    .nav-links a.active,
    .nav-links a:hover {
      background: #ff4fa0;
      color: white;
    }

    .breadcrumb-wrap {
      padding: 18px 0 10px;
      color: #7a6772;
      font-size: 14px;
    }

    .main-section {
      padding-bottom: 50px;
    }

    .cart-wrapper {
      background: rgba(255, 255, 255, 0.45);
      border: 1px solid #eedbe5;
      border-radius: 26px;
      padding: 28px;
      box-shadow: 0 10px 28px rgba(238, 155, 196, 0.12);
    }

    .cart-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 15px;
      margin-bottom: 18px;
      flex-wrap: wrap;
    }

    .cart-top h2 {
      font-size: 34px;
      font-weight: 700;
      color: #241b26;
    }

    .free-shipping-note {
      font-size: 16px;
      color: #8a6b7b;
      font-weight: 500;
    }

    .free-shipping-note span {
      color: #ff4fa0;
      font-weight: 700;
    }

    .mini-breadcrumb {
      margin-bottom: 20px;
      color: #98828e;
      font-size: 13px;
      font-weight: 500;
    }

    .cart-content {
      display: flex;
      gap: 22px;
      align-items: flex-start;
      flex-wrap: wrap;
    }

    .cart-left {
      flex: 1 1 700px;
      background: rgba(255, 255, 255, 0.5);
      border: 1px solid #edd9e4;
      border-radius: 20px;
      padding: 18px;
    }

    .select-all {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-bottom: 16px;
      font-size: 16px;
      font-weight: 600;
      color: #322733;
    }

    .select-all input {
      width: 18px;
      height: 18px;
      accent-color: #ff4fa0;
    }

    .cart-table {
      width: 100%;
    }

    .table-header,
    .cart-row {
      display: grid;
      grid-template-columns: 80px 2fr 1fr 1fr;
      align-items: center;
      gap: 12px;
    }

    .table-header {
      background: #fcf3f7;
      border: 1px solid #efdde7;
      border-radius: 14px 14px 0 0;
      padding: 14px;
      color: #78656f;
      font-weight: 600;
      font-size: 15px;
    }

    .cart-row {
      background: rgba(255, 255, 255, 0.75);
      border: 1px solid #efdde7;
      border-top: none;
      padding: 16px 14px;
    }

    .cart-row:last-child {
      border-radius: 0 0 14px 14px;
    }

    .cart-row input[type="checkbox"] {
      width: 18px;
      height: 18px;
      accent-color: #ff4fa0;
    }

    .product-info {
      display: flex;
      align-items: center;
      gap: 14px;
    }

    .product-thumb {
      width: 68px;
      height: 68px;
      border-radius: 10px;
      background: linear-gradient(135deg, #f7dfea, #f1ccde);
      border: 1px solid #ead5e0;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #8d6d7c;
      font-size: 12px;
      font-weight: 600;
      flex-shrink: 0;
    }

    .product-info h4 {
      font-size: 18px;
      font-weight: 600;
      margin-bottom: 4px;
      color: #2b2230;
    }

    .product-info p {
      font-size: 13px;
      color: #8c7a85;
    }

    .price {
      font-size: 18px;
      font-weight: 700;
      color: #cf347e;
    }

    .qty-box {
      display: inline-flex;
      align-items: center;
      border: 1px solid #ead7e1;
      border-radius: 8px;
      overflow: hidden;
      width: fit-content;
      background: #fff;
    }

    .qty-box button,
    .qty-box span {
      width: 38px;
      height: 38px;
      display: flex;
      align-items: center;
      justify-content: center;
      border: none;
      background: transparent;
      font-size: 18px;
    }

    .qty-box button {
      cursor: pointer;
      color: #4d3b45;
    }

    .qty-box span {
      border-left: 1px solid #ead7e1;
      border-right: 1px solid #ead7e1;
      font-weight: 600;
      color: #2d2230;
    }

    .cart-summary {
      flex: 1 1 300px;
      background: rgba(255, 255, 255, 0.65);
      border: 1px solid #ecd9e2;
      border-radius: 20px;
      padding: 22px;
      max-width: 320px;
      width: 100%;
    }

    .cart-summary h3 {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #241b26;
    }

    .summary-line {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 15px;
      color: #6e5c67;
      font-size: 16px;
      font-weight: 500;
    }

    .summary-line strong {
      color: #b52d71;
    }

    .summary-line.total {
      margin-top: 8px;
      padding-top: 10px;
      border-top: 1px solid #eddbe4;
      font-size: 20px;
      font-weight: 700;
      color: #221925;
    }

    .checkout-btn {
      width: 100%;
      border: none;
      background: #ff4fa0;
      color: #fff;
      font-size: 18px;
      font-weight: 700;
      padding: 15px;
      border-radius: 10px;
      cursor: pointer;
      margin: 18px 0;
      transition: 0.3s;
    }

    .checkout-btn:hover {
      background: #ea3f90;
    }

    .coupon-box {
      display: flex;
      gap: 8px;
    }

    .coupon-box input {
      flex: 1;
      border: 1px solid #e8d7e0;
      background: #fff;
      border-radius: 8px;
      outline: none;
      padding: 12px;
      font-size: 14px;
    }

    .coupon-box button {
      border: 1px solid #e8d7e0;
      background: #f7eff3;
      padding: 12px 14px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
      color: #5d4b56;
    }

    .recommended-section {
      margin-top: 35px;
    }

    .recommended-section h2 {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 18px;
      color: #241b26;
    }

    .product-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 18px;
    }

    .product-card {
      background: rgba(255, 255, 255, 0.75);
      border: 1px solid #ecd9e2;
      border-radius: 16px;
      overflow: hidden;
      padding-bottom: 14px;
    }

    .product-image {
      height: 180px;
      background: linear-gradient(135deg, #f7ddea, #efd0de);
      border-bottom: 1px solid #ecd9e2;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #8c6f7d;
      font-weight: 600;
      font-size: 14px;
    }

    .product-card-content {
      padding: 14px;
    }

    .product-card h4 {
      font-size: 18px;
      font-weight: 600;
      color: #312631;
      margin-bottom: 6px;
      min-height: 52px;
    }

    .product-price {
      font-size: 16px;
      color: #d5337e;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .card-buttons {
      display: flex;
      gap: 8px;
    }

    .view-btn,
    .add-btn {
      border: none;
      border-radius: 8px;
      padding: 10px 12px;
      font-size: 13px;
      font-weight: 600;
      cursor: pointer;
    }

    .view-btn {
      background: #eee3ea;
      color: #5c4b55;
    }

    .add-btn {
      background: #ff4fa0;
      color: white;
      flex: 1;
    }

    .add-btn:hover {
      background: #ea3f90;
    }

    .footer {
      margin-top: 50px;
      background: linear-gradient(to bottom, #fff2f9, #f7d7e9);
      border-top: 1px solid #ecd8e2;
    }

    .footer-top {
      display: grid;
      grid-template-columns: 1.4fr 1fr 1fr;
      gap: 30px;
      padding: 40px 0;
    }

    .footer-logo {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 14px;
    }

    .footer-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      background: #ff4fa0;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 18px;
    }

    .footer-logo h3 {
      font-size: 28px;
      font-weight: 800;
      color: #241b26;
    }

    .footer-logo h3 span {
      color: #ff4fa0;
    }

    .footer-col p,
    .footer-col li {
      color: #5e4d58;
      line-height: 1.8;
      list-style: none;
      font-size: 15px;
    }

    .footer-col h4 {
      margin-bottom: 12px;
      color: #3b2d35;
      font-size: 18px;
      font-weight: 700;
    }

    .footer-bottom {
      border-top: 1px solid #ead7e0;
      padding: 16px 0;
    }

    .footer-bottom-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
      font-size: 14px;
      color: #584651;
    }

    .footer-links {
      display: flex;
      align-items: center;
      gap: 12px;
    }

    @media (max-width: 1024px) {
      .product-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .footer-top {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 768px) {
      .top-bar-content,
      .header-content,
      .footer-bottom-content {
        flex-direction: column;
        text-align: center;
      }

      .shipping-text {
        order: 3;
      }

      .search-box {
        width: 100%;
        max-width: 100%;
      }

      .cart-top {
        flex-direction: column;
        align-items: flex-start;
      }

      .table-header {
        display: none;
      }

      .cart-row {
        grid-template-columns: 1fr;
        gap: 12px;
        border-top: 1px solid #efdde7;
        border-radius: 14px;
        margin-bottom: 12px;
      }

      .product-grid {
        grid-template-columns: 1fr;
      }

      .footer-top {
        grid-template-columns: 1fr;
      }

      .cart-summary {
        max-width: 100%;
      }
    }

    @media (max-width: 480px) {
      .logo-text h1 {
        font-size: 24px;
      }

      .logo-text p {
        font-size: 20px;
      }

      .cart-top h2,
      .recommended-section h2,
      .cart-summary h3 {
        font-size: 26px;
      }

      .nav-links a {
        font-size: 14px;
        padding: 8px 12px;
      }

      .auth-links {
        gap: 28px;
      }

      .auth-svg {
        width: 34px;
        height: 34px;
      }

      .auth-item span {
        font-size: 15px;
      }
    }
  </style>
</head>
<body>

  <div class="top-bar">
    <div class="container top-bar-content">
      <div class="social-icons">
        <span>f</span>
        <span>ig</span>
        <span>✓</span>
        <span>✉</span>
      </div>

      <div class="shipping-text">FREE SHIPPING THIS WEEK! ORDER OVER ₱500</div>

      <div class="top-options">
        <span>PHP ₱</span>
        <span>ENGLISH ▼</span>
      </div>
    </div>
  </div>

  <header class="header">
    <div class="container header-content">
      <div class="logo">
        <div class="logo-icon">🛍</div>
        <div class="logo-text">
          <h1>LocalLift</h1>
          <p>PH</p>
        </div>
      </div>

      <div class="search-box">
        <input type="text" placeholder="Search for prdd, hiogs, and more..." />
        <button><i data-lucide="search"></i></button>
      </div>

      <!-- UPDATED LOGIN / REGISTER -->
      <div class="auth-links">
        <a href="#" class="auth-item">
          <i data-lucide="user-round" class="auth-svg"></i>
          <span>Login</span>
        </a>

        <a href="#" class="auth-item">
          <i data-lucide="user-round" class="auth-svg"></i>
          <span>Register</span>
          <div class="notif-badge">13</div>
        </a>
      </div>
    </div>
  </header>

  <nav class="navbar">
    <div class="container nav-links">
      <a href="#">HOME</a>
      <a href="#" class="active">SHOPS</a>
      <a href="#">PRODUCTS</a>
      <a href="#">ABOUT</a>
      <a href="#">BECOME A SELLER</a>
    </div>
  </nav>

  <div class="breadcrumb-wrap">
    <div class="container">HOME / SHOPPING CART</div>
  </div>

  <main class="main-section">
    <div class="container">
      <div class="cart-wrapper">

        <div class="cart-top">
          <h2>Shopping Cart</h2>
          <div class="free-shipping-note">
            Amazing! You're eligible for <span>FREE SHIPPING!</span> ✔
          </div>
        </div>

        <div class="mini-breadcrumb">HOME / SHOPPING CART</div>

        <div class="cart-content">
          <div class="cart-left">
            <div class="select-all">
              <input type="checkbox" checked />
              <label>Select All</label>
            </div>

            <div class="cart-table">
              <div class="table-header">
                <div>Select</div>
                <div>Product</div>
                <div>Price</div>
                <div>Subtotal</div>
              </div>

              <div class="cart-row">
                <div><input type="checkbox" checked /></div>
                <div class="product-info">
                  <div class="product-thumb">IMAGE</div>
                  <div>
                    <h4>Beaded Bracelet</h4>
                    <p>Likhang Kamay Crafts</p>
                  </div>
                </div>
                <div class="price">₱ 180.00</div>
                <div class="qty-box">
                  <button>-</button>
                  <span>1</span>
                  <button>+</button>
                </div>
              </div>

              <div class="cart-row">
                <div><input type="checkbox" checked /></div>
                <div class="product-info">
                  <div class="product-thumb">IMAGE</div>
                  <div>
                    <h4>Herbal Soap</h4>
                    <p>Likhang Kamay Crafts</p>
                  </div>
                </div>
                <div class="price">₱ 95.00</div>
                <div class="qty-box">
                  <button>-</button>
                  <span>2</span>
                  <button>+</button>
                </div>
              </div>

              <div class="cart-row">
                <div><input type="checkbox" checked /></div>
                <div class="product-info">
                  <div class="product-thumb">IMAGE</div>
                  <div>
                    <h4>Banana Chips</h4>
                    <p>Brew & Beans Cafe</p>
                  </div>
                </div>
                <div class="price">₱ 240.00</div>
                <div class="qty-box">
                  <button>-</button>
                  <span>2</span>
                  <button>+</button>
                </div>
              </div>
            </div>
          </div>

          <div class="cart-summary">
            <h3>Cart Summary</h3>

            <div class="summary-line">
              <span>Subtotal:</span>
              <strong>₱515.00</strong>
            </div>

            <div class="summary-line">
              <span>Free Shipping:</span>
              <strong>₱0.00</strong>
            </div>

            <div class="summary-line total">
              <span>Total:</span>
              <strong>₱515.00</strong>
            </div>

            <button class="checkout-btn">CHECKOUT</button>

            <div class="coupon-box">
              <input type="text" placeholder="Enter coupon code" />
              <button>Apply</button>
            </div>
          </div>
        </div>

        <section class="recommended-section">
          <h2>Shopping Cart</h2>

          <div class="product-grid">
            <div class="product-card">
              <div class="product-image">PLACEHOLDER IMAGE</div>
              <div class="product-card-content">
                <h4>Woven Tote with Hanale</h4>
                <p class="product-price">₱190.00</p>
                <div class="card-buttons">
                  <button class="view-btn">VIEW</button>
                  <button class="add-btn">ADD TO CART</button>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-image">PLACEHOLDER IMAGE</div>
              <div class="product-card-content">
                <h4>Beaded Bracelet</h4>
                <p class="product-price">₱180.00</p>
                <div class="card-buttons">
                  <button class="view-btn">VIEW</button>
                  <button class="add-btn">ADD TO CART</button>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-image">PLACEHOLDER IMAGE</div>
              <div class="product-card-content">
                <h4>Handmade Soap Trio</h4>
                <p class="product-price">₱290.00</p>
                <div class="card-buttons">
                  <button class="view-btn">VIEW</button>
                  <button class="add-btn">ADD TO CART</button>
                </div>
              </div>
            </div>

            <div class="product-card">
              <div class="product-image">PLACEHOLDER IMAGE</div>
              <div class="product-card-content">
                <h4>Eco-Friendly Straw Set</h4>
                <p class="product-price">₱240.00</p>
                <div class="card-buttons">
                  <button class="view-btn">VIEW</button>
                  <button class="add-btn">ADD TO CART</button>
                </div>
              </div>
            </div>
          </div>
        </section>

      </div>
    </div>
  </main>

  <footer class="footer">
    <div class="container footer-top">
      <div class="footer-col">
        <div class="footer-logo">
          <div class="footer-icon">🛍</div>
          <h3>LocalLift <span>PH</span></h3>
        </div>
        <p>
          Empowering local businesses by providing a centralized marketplace
          for sellers and buyers.
        </p>
      </div>

      <div class="footer-col">
        <h4>QUICK LINKS</h4>
        <ul>
          <li>• Home</li>
          <li>• Shops</li>
          <li>• Products</li>
          <li>• About Us</li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>CONNECT WITH US</h4>
        <ul>
          <li>📘 Facebook</li>
          <li>📷 Instagram</li>
          <li>✉ Email</li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container footer-bottom-content">
        <p>© 2025 <strong>LocalLift PH</strong>. All Rights Reserved.</p>
        <div class="footer-links">
          <span>Privacy Policy</span>
          <span>|</span>
          <span>Terms & Conditions</span>
        </div>
      </div>
    </div>
  </footer>

  <script>
    lucide.createIcons();
  </script>
</body>
</html>
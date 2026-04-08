<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LocalLift PH - Seller Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:'Poppins', sans-serif;
    }

    body{
      background: linear-gradient(to bottom, #fdeef5, #fbe7f1);
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
      width: 1280px;
      max-width: 95%;
      margin: 0 auto;
    }

    /* topbar */
    .topbar{
      background:#f8cfe0;
      padding:10px 0;
      font-size:14px;
      color:#5d4c56;
    }

    .topbar .container{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
    }

    .topbar-left,
    .topbar-center,
    .topbar-right{
      display:flex;
      align-items:center;
      gap:15px;
    }

    .social-icons{
      display:flex;
      gap:10px;
    }

    .social-icons a{
      width:25px;
      height:25px;
      background:#efb7cf;
      color:#4a3f45;
      border-radius:5px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:12px;
    }

    .topbar-center{
      color:#6d5360;
      font-weight:600;
      letter-spacing:.2px;
    }

    .topbar-center i{
      color:#ff4f93;
      margin-right:8px;
    }

    .topbar-right{
      gap:20px;
      font-weight:500;
    }

    /* main header */
    .main-header{
      background:#fff;
      padding:22px 0;
      border-bottom:1px solid #f1dde6;
    }

    .main-header .container{
      display:flex;
      align-items:center;
      justify-content:space-between;
      gap:20px;
      flex-wrap:wrap;
    }

    .logo{
      display:flex;
      align-items:center;
      gap:12px;
      min-width:220px;
    }

    .logo i{
      font-size:44px;
      color:#ff4f93;
    }

    .logo-text{
      line-height:1;
    }

    .logo-text h1{
      font-size:36px;
      font-weight:700;
      color:#222;
    }

    .logo-text span{
      display:block;
      font-size:20px;
      font-weight:700;
      color:#ff4f93;
      margin-top:5px;
    }

    .search-box{
      flex:1;
      max-width:520px;
      position:relative;
    }

    .search-box input{
      width:100%;
      padding:16px 50px 16px 20px;
      border:2px solid #f3dfe7;
      border-radius:14px;
      font-size:16px;
      color:#666;
      outline:none;
    }

    .search-box i{
      position:absolute;
      right:18px;
      top:50%;
      transform:translateY(-50%);
      color:#666;
      font-size:20px;
    }

    .header-right{
      display:flex;
      align-items:center;
      gap:22px;
    }

    .icon-badge{
      position:relative;
      font-size:26px;
      color:#333;
      cursor:pointer;
    }

    .icon-badge .badge{
      position:absolute;
      top:-8px;
      right:-10px;
      width:22px;
      height:22px;
      background:#ff4f93;
      color:#fff;
      border-radius:50%;
      font-size:11px;
      display:flex;
      align-items:center;
      justify-content:center;
      font-weight:600;
      border:2px solid #fff;
    }

    .user-box{
      display:flex;
      align-items:center;
      gap:10px;
    }

    .user-box img{
      width:44px;
      height:44px;
      border-radius:50%;
      object-fit:cover;
    }

    .user-box h4{
      font-size:16px;
      font-weight:600;
      color:#444;
    }

    /* secondary nav */
    .seller-nav{
      background:#fdeff5;
      border-bottom:1px solid #f1dfe7;
    }

    .seller-nav .container{
      display:flex;
      align-items:center;
      gap:28px;
      padding:12px 0;
      flex-wrap:wrap;
    }

    .seller-nav a{
      display:flex;
      align-items:center;
      gap:8px;
      color:#6d5a64;
      font-weight:500;
      font-size:15px;
      padding:9px 14px;
      border-radius:10px;
    }

    .seller-nav a.active{
      background:#ff4f93;
      color:#fff;
    }

    /* content area */
    .dashboard-wrapper{
      padding:32px 0 40px;
    }

    .dashboard-layout{
      display:grid;
      grid-template-columns: 260px 1fr;
      gap:24px;
      align-items:start;
    }

    /* sidebar */
    .sidebar{
      background:#fff;
      border:1px solid #f2dfe7;
      border-radius:16px;
      overflow:hidden;
    }

    .sidebar-title{
      background:#f78fc0;
      color:#fff;
      padding:18px 20px;
      font-size:18px;
      font-weight:600;
      display:flex;
      align-items:center;
      gap:10px;
    }

    .sidebar-menu a{
      display:flex;
      align-items:center;
      justify-content:space-between;
      padding:17px 20px;
      border-bottom:1px solid #f4e4ea;
      color:#5d5560;
      font-weight:500;
      font-size:17px;
    }

    .sidebar-menu a:last-child{
      border-bottom:none;
    }

    .sidebar-menu .left{
      display:flex;
      align-items:center;
      gap:12px;
    }

    .sidebar-menu i{
      color:#ff4f93;
      width:18px;
      text-align:center;
    }

    .mini-badge{
      background:#ff4f93;
      color:#fff;
      font-size:11px;
      font-weight:600;
      padding:2px 7px;
      border-radius:20px;
    }

    /* main dashboard card */
    .dashboard-main{
      background:#fff;
      border:1px solid #f2dfe7;
      border-radius:18px;
      padding:26px;
    }

    .dashboard-main h2{
      font-size:22px;
      font-weight:700;
      color:#3e3540;
      margin-bottom:20px;
    }

    .divider{
      height:1px;
      background:#f2e5ea;
      margin:16px 0 20px;
    }

    /* stats */
    .stats-grid{
      display:grid;
      grid-template-columns: repeat(4, 1fr);
      gap:16px;
      margin-bottom:22px;
    }

    .stat-card{
      border:1px solid #f0dee6;
      border-radius:12px;
      padding:18px;
      background:#fff;
      min-height:110px;
    }

    .stat-card .top{
      display:flex;
      align-items:center;
      gap:10px;
      color:#a15d7a;
      font-weight:600;
      margin-bottom:14px;
      font-size:16px;
    }

    .stat-card .top i{
      color:#ff4f93;
      font-size:20px;
    }

    .stat-card .value{
      font-size:22px;
      font-weight:700;
      color:#2e2830;
    }

    .stat-card .value.highlight{
      color:#d83b7b;
    }

    /* charts and recent orders */
    .middle-grid{
      display:grid;
      grid-template-columns: 1fr 1fr;
      gap:18px;
      margin-bottom:26px;
    }

    .panel{
      border:1px solid #f0dee6;
      border-radius:12px;
      background:#fff;
      overflow:hidden;
    }

    .panel-header{
      padding:16px 18px;
      font-size:16px;
      font-weight:600;
      color:#4a3f47;
      border-bottom:1px solid #f2e4ea;
    }

    .panel-body{
      padding:18px;
    }

    /* fake chart */
    .chart-legend{
      display:flex;
      gap:18px;
      align-items:center;
      margin-bottom:16px;
      font-size:14px;
      color:#666;
      font-weight:500;
    }

    .legend-item{
      display:flex;
      align-items:center;
      gap:8px;
    }

    .legend-line{
      width:24px;
      height:4px;
      border-radius:6px;
    }

    .pink-line{ background:#ff4f93; }
    .gray-line{ background:#bbb1bc; }

    .chart-box{
      position:relative;
      height:250px;
      border-left:2px solid #eee;
      border-bottom:2px solid #eee;
      margin-left:22px;
      margin-right:10px;
      margin-top:10px;
      background:
        linear-gradient(to top, transparent 24%, #f7edf2 25%, transparent 26%),
        linear-gradient(to top, transparent 49%, #f7edf2 50%, transparent 51%),
        linear-gradient(to top, transparent 74%, #f7edf2 75%, transparent 76%);
      background-size:100% 100%;
    }

    .line{
      position:absolute;
      left:0;
      top:0;
      width:100%;
      height:100%;
    }

    .months{
      display:flex;
      justify-content:space-between;
      font-size:13px;
      color:#666;
      margin-top:8px;
      padding:0 4px 0 20px;
    }

    .y-labels{
      position:absolute;
      left:-38px;
      top:0;
      height:100%;
      display:flex;
      flex-direction:column;
      justify-content:space-between;
      font-size:12px;
      color:#666;
    }

    svg{
      width:100%;
      height:100%;
      overflow:visible;
    }

    /* recent orders table */
    .orders-table{
      width:100%;
      border-collapse:collapse;
      font-size:14px;
    }

    .orders-table th,
    .orders-table td{
      text-align:left;
      padding:12px 6px;
      border-bottom:1px solid #f4e8ec;
    }

    .orders-table th{
      color:#4a4348;
      font-size:14px;
      font-weight:700;
    }

    .orders-table td{
      color:#555;
      font-weight:500;
    }

    .status-completed{ color:#4caf50 !important; font-weight:600; }
    .status-processing{ color:#f39c12 !important; font-weight:600; }
    .status-shipped{ color:#f28b30 !important; font-weight:600; }
    .status-pending{ color:#8ea44c !important; font-weight:600; }

    .view-orders{
      text-align:right;
      margin-top:14px;
    }

    .view-orders a{
      color:#7b5e6d;
      font-weight:600;
      font-size:14px;
    }

    /* products */
    .product-section-title{
      font-size:18px;
      font-weight:700;
      color:#4a4047;
      margin-bottom:14px;
    }

    .product-grid{
      display:grid;
      grid-template-columns: repeat(4, 1fr);
      gap:14px;
    }

    .product-card{
      background:#fff;
      border:1px solid #f2dfe7;
      border-radius:12px;
      padding:12px;
    }

    .product-card img{
      width:100%;
      height:140px;
      object-fit:cover;
      border-radius:10px;
      margin-bottom:12px;
    }

    .product-card h4{
      font-size:16px;
      font-weight:600;
      color:#4a3f47;
      margin-bottom:4px;
    }

    .product-card .sub{
      color:#c44784;
      font-weight:600;
      font-size:14px;
      margin-bottom:12px;
    }

    .product-card-bottom{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:10px;
      margin-top:4px;
    }

    .product-price{
      font-size:14px;
      font-weight:700;
      color:#c33f7d;
    }

    .edit-btn{
      background:#ff4f93;
      color:#fff;
      border:none;
      padding:8px 13px;
      border-radius:8px;
      font-size:13px;
      font-weight:600;
      cursor:pointer;
    }

    /* footer */
    .footer{
      margin-top:28px;
      background:#f7d6e6;
      padding:26px 0;
    }

    .footer .container{
      display:flex;
      justify-content:space-between;
      align-items:center;
      gap:20px;
      flex-wrap:wrap;
      color:#6f5e68;
      font-weight:500;
    }

    .footer strong{
      color:#3b2f36;
    }

    .footer-links{
      display:flex;
      gap:18px;
    }

    /* responsive */
    @media (max-width: 1100px){
      .stats-grid{
        grid-template-columns: repeat(2, 1fr);
      }

      .middle-grid{
        grid-template-columns:1fr;
      }

      .product-grid{
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 900px){
      .dashboard-layout{
        grid-template-columns:1fr;
      }

      .sidebar{
        order:2;
      }

      .dashboard-main{
        order:1;
      }
    }

    @media (max-width: 650px){
      .stats-grid,
      .product-grid{
        grid-template-columns:1fr;
      }

      .main-header .container,
      .topbar .container{
        flex-direction:column;
        align-items:flex-start;
      }

      .header-right{
        width:100%;
        justify-content:flex-start;
      }

      .seller-nav .container{
        gap:10px;
      }

      .search-box{
        max-width:100%;
        width:100%;
      }

      .orders-table{
        font-size:12px;
      }

      .orders-table th,
      .orders-table td{
        padding:10px 4px;
      }
    }
  </style>
</head>
<body>

  <!-- TOP BAR -->
  <div class="topbar">
    <div class="container">
      <div class="topbar-left">
        <div class="social-icons">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
          <a href="#"><i class="fa-solid fa-check"></i></a>
          <a href="#"><i class="fa-solid fa-video"></i></a>
        </div>
      </div>

      <div class="topbar-center">
        <i class="fa-solid fa-truck"></i> FREE SHIPPING THIS WEEK! ORDER OVER ₱500
      </div>

      <div class="topbar-right">
        <span>PHP <i class="fa-solid fa-chevron-down" style="font-size:12px;"></i></span>
        <span>ENGLISH <i class="fa-solid fa-chevron-down" style="font-size:12px;"></i></span>
      </div>
    </div>
  </div>

  <!-- HEADER -->
  <header class="main-header">
    <div class="container">
      <div class="logo">
        <i class="fa-solid fa-bag-shopping"></i>
        <div class="logo-text">
          <h1>LocalLift</h1>
          <span>PH</span>
        </div>
      </div>

      <div class="search-box">
        <input type="text" placeholder="Search for prdd, hiogs, and more..." />
        <i class="fa-solid fa-magnifying-glass"></i>
      </div>

      <div class="header-right">
        <div class="icon-badge">
          <i class="fa-regular fa-bell"></i>
          <span class="badge">3</span>
        </div>

        <div class="icon-badge">
          <i class="fa-regular fa-user"></i>
          <span class="badge">3</span>
        </div>

        <div class="user-box">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=300&auto=format&fit=crop" alt="User">
          <h4>Hi, Maria!</h4>
        </div>
      </div>
    </div>
  </header>

  <!-- NAV -->
  <nav class="seller-nav">
    <div class="container">
      <a href="#" class="active"><i class="fa-solid fa-house"></i> Dashboard</a>
      <a href="#"><i class="fa-solid fa-location-dot"></i> AI Contacts</a>
      <a href="#"><i class="fa-regular fa-envelope"></i> Shop</a>
      <a href="#"><i class="fa-solid fa-gear"></i> Info</a>
      <a href="#"><i class="fa-regular fa-bag-shopping"></i> Orders</a>
      <a href="#">More <i class="fa-solid fa-chevron-down" style="font-size:12px;"></i></a>
    </div>
  </nav>

  <!-- DASHBOARD -->
  <section class="dashboard-wrapper">
    <div class="container">
      <div class="dashboard-layout">

        <!-- SIDEBAR -->
        <aside class="sidebar">
          <div class="sidebar-title">
            <i class="fa-solid fa-house"></i> Dashboard
          </div>

          <div class="sidebar-menu">
            <a href="#">
              <div class="left"><i class="fa-solid fa-circle-check"></i> My Products</div>
            </a>
            <a href="#">
              <div class="left"><i class="fa-solid fa-bag-shopping"></i> Orders</div>
            </a>
            <a href="#">
              <div class="left"><i class="fa-solid fa-dollar-sign"></i> Earnings</div>
            </a>
            <a href="#">
              <div class="left"><i class="fa-regular fa-envelope"></i> Messages</div>
              <span class="mini-badge">2</span>
            </a>
            <a href="#">
              <div class="left"><i class="fa-solid fa-gear"></i> Settings</div>
            </a>
            <a href="#">
              <div class="left"><i class="fa-solid fa-power-off"></i> Logout</div>
            </a>
          </div>
        </aside>

        <!-- MAIN -->
        <main class="dashboard-main">
          <h2>Welcome to Your Seller Dashboard!</h2>
          <div class="divider"></div>

          <div class="stats-grid">
            <div class="stat-card">
              <div class="top"><i class="fa-solid fa-bag-shopping"></i> Total Sales</div>
              <div class="value">₱ 25,300</div>
            </div>

            <div class="stat-card">
              <div class="top"><i class="fa-solid fa-cart-shopping"></i> Orders Received</div>
              <div class="value">120</div>
            </div>

            <div class="stat-card">
              <div class="top"><i class="fa-solid fa-cube"></i> Products Listed</div>
              <div class="value">15</div>
            </div>

            <div class="stat-card">
              <div class="top"><i class="fa-regular fa-clock"></i> Pending Orders</div>
              <div class="value highlight">3</div>
            </div>
          </div>

          <div class="middle-grid">
            <!-- Sales Overview -->
            <div class="panel">
              <div class="panel-header">Sales Overview</div>
              <div class="panel-body">
                <div class="chart-legend">
                  <div class="legend-item"><span class="legend-line pink-line"></span> This Month</div>
                  <div class="legend-item"><span class="legend-line gray-line"></span> Last Month</div>
                </div>

                <div class="chart-box">
                  <div class="y-labels">
                    <span>300</span>
                    <span>200</span>
                    <span>100</span>
                    <span>0</span>
                  </div>

                  <svg viewBox="0 0 500 250" preserveAspectRatio="none">
                    <!-- gray line -->
                    <polyline
                      points="20,210 95,150 170,160 245,90 320,120 395,70"
                      fill="none"
                      stroke="#bbb1bc"
                      stroke-width="4"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <circle cx="20" cy="210" r="7" fill="#bbb1bc"/>
                    <circle cx="95" cy="150" r="7" fill="#bbb1bc"/>
                    <circle cx="170" cy="160" r="7" fill="#bbb1bc"/>
                    <circle cx="245" cy="90" r="7" fill="#bbb1bc"/>
                    <circle cx="320" cy="120" r="7" fill="#bbb1bc"/>
                    <circle cx="395" cy="70" r="7" fill="#bbb1bc"/>

                    <!-- pink line -->
                    <polyline
                      points="20,205 95,120 170,125 245,60 320,75 395,30"
                      fill="none"
                      stroke="#ff4f93"
                      stroke-width="5"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    />
                    <circle cx="20" cy="205" r="8" fill="#ff4f93"/>
                    <circle cx="95" cy="120" r="8" fill="#ff4f93"/>
                    <circle cx="170" cy="125" r="8" fill="#ff4f93"/>
                    <circle cx="245" cy="60" r="8" fill="#ff4f93"/>
                    <circle cx="320" cy="75" r="8" fill="#ff4f93"/>
                    <circle cx="395" cy="30" r="8" fill="#ff4f93"/>
                  </svg>
                </div>

                <div class="months">
                  <span>Jan</span>
                  <span>Feb</span>
                  <span>Mar</span>
                  <span>Apr</span>
                  <span>May</span>
                  <span>Jun</span>
                </div>
              </div>
            </div>

            <!-- Recent Orders -->
            <div class="panel">
              <div class="panel-header">Recent Orders</div>
              <div class="panel-body">
                <table class="orders-table">
                  <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>Customer</th>
                      <th>Status</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#1023</td>
                      <td>Anna Santos</td>
                      <td class="status-completed">Completed</td>
                      <td>₱850.00</td>
                    </tr>
                    <tr>
                      <td>#1022</td>
                      <td>Mark Reyes</td>
                      <td class="status-processing">Processing</td>
                      <td>₱1,200.00</td>
                    </tr>
                    <tr>
                      <td>#1021</td>
                      <td>Liza Delacruz</td>
                      <td class="status-shipped">Shipped</td>
                      <td>₱540.00</td>
                    </tr>
                    <tr>
                      <td>#1020</td>
                      <td>John Villanueva</td>
                      <td class="status-pending">Pending</td>
                      <td>₱320.00</td>
                    </tr>
                  </tbody>
                </table>

                <div class="view-orders">
                  <a href="#">View All Orders <i class="fa-solid fa-angle-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- PRODUCTS -->
          <div class="product-section-title">Your Products</div>
          <div class="product-grid">
            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1617038220319-276d3cfab638?q=80&w=800&auto=format&fit=crop" alt="Beaded Bracelet">
              <h4>Beaded Bracelet</h4>
              <div class="sub">10 Sales</div>
              <div class="product-card-bottom">
                <div class="product-price">₱ 180.00</div>
                <button class="edit-btn">Edit / View</button>
              </div>
            </div>

            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1608571423902-eed4a5ad8108?q=80&w=800&auto=format&fit=crop" alt="Herbal Soap Set">
              <h4>Herbal Soap Set</h4>
              <div class="sub">25 in Stock</div>
              <div class="product-card-bottom">
                <div class="product-price">₱ 250.00</div>
                <button class="edit-btn">Edit / View</button>
              </div>
            </div>

            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?q=80&w=800&auto=format&fit=crop" alt="Eco-Friendly Straws">
              <h4>Eco-Friendly Straws</h4>
              <div class="sub">5 Sales</div>
              <div class="product-card-bottom">
                <div class="product-price">₱ 150.00</div>
                <button class="edit-btn">Edit / View</button>
              </div>
            </div>

            <div class="product-card">
              <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?q=80&w=800&auto=format&fit=crop" alt="Woven Tote Bag">
              <h4>Woven Tote Bag</h4>
              <div class="sub">8 Sales</div>
              <div class="product-card-bottom">
                <div class="product-price">₱ 350.00</div>
                <button class="edit-btn">Edit / View</button>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="container">
      <div>© 2025 <strong>LocalLift PH.</strong> All Rights Reserved.</div>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <span>|</span>
        <a href="#">Terms &amp; Conditions</a>
      </div>
    </div>
  </footer>

</body>
</html>
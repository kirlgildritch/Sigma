<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LocalLift PH - Add Product</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/addProductStyle.css">
    
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
        <a href="notification.php" class="icon-box">
          <i class="fa-regular fa-bell"></i>
          Notification
        </a>

        <a href="register.php" class="icon-box">
          <i class="fa-regular fa-user"></i>
          Account
          
        </a>

    
      </div>
    </div>
  </header>


    <nav class="navbar">
    <div class="container">
           <div class="container breadcrumb">
            <a href=""><i class="fa-solid fa-house"></i>&nbsp;Dashboard</a>
            &nbsp;/&nbsp;
            <span>Add Product</span>
    </div>

    </div>
    </nav>


    <div class="add-product-page">
    <div class="container">
        <div class="add-product-card">
        <h1 class="add-product-title">Add Product</h1>
        <hr class="section-line">

        <form class="product-form" action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" class="form-control medium-input">
            </div>

            <div class="form-group">
            <label for="description">Description:</label>
            <textarea id="description" name="description" class="form-textarea"></textarea>
            </div>

            <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" class="form-control short-input" placeholder="₱">
            </div>

            <div class="form-group">
            <label for="category">Category:</label>
            <select id="category" name="category" class="form-select short-input">
                <option>-- Select Category --</option>
                <option>Food & Drinks</option>
                <option>Clothing & Fashion</option>
                <option>Handmade Crafts</option>
                <option>Accessories</option>
                <option>Souvenirs & Gifts</option>
            </select>
            </div>

            <div class="form-group">
            <label for="stock">Stock Quantity:</label>
            <input type="number" id="stock" name="stock" class="form-control short-input">
            </div>

            <div class="form-group">
            <label for="image">Upload Image:</label>
            <div class="file-upload-wrap">
                <label for="image" class="file-upload-btn">Upload Photo</label>
                <input type="file" id="image" name="image" hidden>
                <span class="file-note">No file chosen</span>
            </div>
            </div>

            <div class="submit-wrap">
            <button type="submit" class="submit-btn">Add Product</button>
            </div>
        </form>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <div class="footer-left">
            © 2025 <strong>LocalLift PH.</strong> All Rights Reserved.
        </div>

        <div class="footer-right">
            <a href="#">Privacy Policy</a>
            <span>|</span>
            <a href="#">Terms & Conditions</a>
        </div>
        </div>
    </footer>
    </div>






</body>
</html>
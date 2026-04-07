<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>LocalLift PH - Manage Products</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/manage_products.css">

</head>

<body>

<!-- TOP BAR -->
<div class="topbar">
    <div>FREE SHIPPING THIS WEEK! ORDER OVER ₱500</div>
    <div>PHP | ENGLISH</div>
</div>

<!-- NAVBAR -->
<div class="navbar-custom">
    <div class="logo">LocalLift PH</div>

    <div class="search-box">
        <input type="text" class="form-control" placeholder="Search for prdd, hiogs, and more...">
    </div>

    <div>
        🔔 👤 Hi, Maria!
    </div>
</div>

<!-- BREADCRUMB -->
<div class="breadcrumb">
    Dashboard / Manage Products
</div>

<!-- MAIN CARD -->
<div class="card-custom">

    <div class="card-header-custom">
        <h4>Manage Products</h4>
        <button class="btn btn-pink">+ Add New Product</button>
    </div>

    <br>

    <input type="text" class="form-control" placeholder="Search product...">

    <br>

    <table class="table align-middle">
        <thead>
            <tr>
                <th></th>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input type="checkbox"></td>
                <td>
                    <img src="https://via.placeholder.com/50"> 
                    Beaded Bracelet<br><small>Beaded, Crafts</small>
                </td>
                <td>₱ 180.00</td>
                <td>10</td>
                <td><span class="status">Active</span></td>
                <td>
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox"></td>
                <td>
                    <img src="https://via.placeholder.com/50"> 
                    Herbal Soap Set<br><small>Bath & Body</small>
                </td>
                <td>₱ 250.00</td>
                <td>25</td>
                <td><span class="status">Active</span></td>
                <td>
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox"></td>
                <td>
                    <img src="https://via.placeholder.com/50"> 
                    Eco-Friendly Straws<br><small>Eco Products</small>
                </td>
                <td>₱ 150.00</td>
                <td>5</td>
                <td><span class="status">Active</span></td>
                <td>
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>

            <tr>
                <td><input type="checkbox"></td>
                <td>
                    <img src="https://via.placeholder.com/50"> 
                    Woven Tote Bag<br><small>Crafts</small>
                </td>
                <td>₱ 350.00</td>
                <td>8</td>
                <td><span class="status">Active</span></td>
                <td>
                    <button class="btn-edit">Edit</button>
                    <button class="btn-delete">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- PAGINATION -->
    <div class="text-end">
        <button class="btn btn-light">&lt;</button>
        <button class="btn btn-pink">1</button>
        <button class="btn btn-light">2</button>
        <button class="btn btn-light">&gt;</button>
    </div>

</div>

<!-- FOOTER -->
<div class="footer">
    <div class="row">
        <div class="col-md-4">
            <h5>LocalLift PH</h5>
            <p>Empowering local businesses by providing a centralized marketplace for sellers and buyers.</p>
        </div>

        <div class="col-md-4">
            <h5>Quick Links</h5>
            <p>Home<br>Shops<br>Products<br>About Us</p>
        </div>

        <div class="col-md-4">
            <h5>Connect With Us</h5>
            <p>Facebook<br>Instagram<br>Email</p>
        </div>
    </div>

    <div class="footer-bottom">
        © 2025 LocalLift PH. All Rights Reserved. | Privacy Policy | Terms & Conditions
    </div>
</div>

</body>
</html>
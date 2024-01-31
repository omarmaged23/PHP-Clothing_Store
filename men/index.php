<?php
require_once "../Connection.php";
require_once "../help.php";
// session_start();

$crud = new help();
$rows = $crud->read(1);
$count = count($rows);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bstore</title>
  <!-- font awsome -->
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="../homepage/css/header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- render all element normally -->
  <link rel="stylesheet" href="css/nrmalize.css">
  <!-- css file -->
  <link rel="stylesheet" href="../assets/hope.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/master.css?v=<?php echo time(); ?>">
  <script src="Jquery.js"></script>
  <script src="men.js"></script>
</head>

<body>
  <?php require_once "../assets/header.php"; ?>

  <!-- -------------------------------------------------------------------------------------- -->
  <!-- Start Main Content Secion -->
  <section class="main-content">
    <div class="container">
      <!-- Start Top Conent -->
      <div class="breadcrumb">
        <a href="#">Home</a>
        <span><i class="fa fa-caret-right"></i></span>
        <a href="#">Men</a>
      </div>
      <!-- End Top Conent -->
      <div class="content">
        <!-- Start Left Content -->
        <div class="left-content">
          <!-- Start l-content titele -->
          <h2 class="page-title">Catalog</h2>
          <!-- End l-content titele -->
          <!-- Start Enabled Filters -->
          <div class="sidebar-box">
            <span class="sidebar-title">enabled filters</span>
            <ul>
              <li>
                <span>Categories:All</span>
                <a href="#"><i class="fa-solid fa-x"></i></a>
              </li>
            </ul>
          </div>
          <!-- End Enabled Filters -->

          <!-- Start Categories Sidebar -->
          <div class="sidebar-box">
            <span class="sidebar-title">CATEGORIES</span>
            <ul>
              <li>
                <input type="checkbox">
                <a href="#">Tops <span>(12)</span> </a>
              </li>
            </ul>
          </div>
          <!-- End Categories Sidebar -->

          <!-- Start Availability Sidebar -->
          <div class="sidebar-box">
            <span class="sidebar-title">AVAILABILITY</span>
            <ul>
              <li>
                <input type="checkbox">
                <a href="#">InStock <span>(12)</span> </a>
              </li>
            </ul>
          </div>
          <!-- End Availability Sidebar -->

          <!-- Start Price Sidebar -->
          <div class="sidebar-box">
            <span class="sidebar-title">PRICE</span>
            <strong>Range:</strong>
            <div class="range-box">
              <label for="">min</label>
              <input type="number">
            </div>
            <div class="range-box">
              <label for="">max</label>
              <input type="number">
            </div>
          </div>
          <!-- End Price Sidebar -->

          <!-- Start Size Sidebar -->
          <div class="sidebar-box">
            <span class="sidebar-title">SIZE</span>
            <ul>
              <li>
                <input type="checkbox">
                <a href="#">L <span>(12)</span></a>
              </li>
              <li>
                <input type="checkbox">
                <a href="#">M <span>(12)</span></a>
              </li>
              <li>
                <input type="checkbox">
                <a href="#">S <span>(12)</span></a>
              </li>
            </ul>
          </div>
          <!-- End Size Sidebar -->

          <!-- Start Color Sidebar -->
          <div class="sidebar-box">
            <span class="sidebar-title">COLOR</span>
            <ul>
              <li>
                <i></i>
                <a href="">orange <span>(12)</span></a>
              </li>
            </ul>
          </div>
          <!-- End Color Sidebar -->

          <!-- Start Tags SideBar -->
          <div class="sidebar-box">
            <span class="sidebar-title">TAGS</span>
            <div class="tags-box">
              <a class="tag-attr">Fashion</a>
              <a class="tag-attr">Men</a>
              <a class="tag-attr">Kids</a>
              <a class="tag-attr">Clothing</a>
            </div>
          </div>
          <!-- End Tags SideBar -->
        </div>
        <!-- End Left Content -->
        <!-- Start Right Conent -->
        <div class="right-content">
          <div class="category-header">
            <img src="images/headerr.jpg" alt="">
            <div class="text">
              <h2>Men</h2>
              <p>You will find here all Men fashion collections.</p>
              <p>This category includes all the basics of your wardrobe and much more:<br>
                shoes, accessories, printed t-shirts, feminine dresses, women's jeans!</p>
            </div>
          </div>
          <div class="category-title">
            <h1>
              <span class="cat-name">Men</span>
              <span class="product-count">There are <?php echo $count; ?> Products</span>
            </h1>
          </div>
          <div class="category-products">
            <?php foreach ($rows as $row) : ?>
              <div class="item">
                <div class="product-image">
                  <a href="../sin_pro/single_pro.php?id=<?php echo $row['product_id']; ?>"><img src="<?php echo "../admin_panel/products/" . $row['image']; ?>" alt=""></a>
                  <a href="" class="new-mark">New</a>
                  <div class="overlay-content">
                    <i class="fa-solid fa-plus"></i>
                  </div>
                </div>
                <div class="product-info">
                  <a href="../sin_pro/single_pro.php?id=<?php echo $row['product_id']; ?>" class="desc"><?php echo $row['name']; ?></a>
                  <div class="price-box">
                    <span class="price"><?php echo $row['price']; ?>$</span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- Start Shooting Result -->
          <div class="product-shooting-result">
            <div class="showing-item">
              <span>Showing 1 - 12 of <?php echo $count; ?> items</span>
            </div>
            <div class="show-next-prev">
              <ul class="pagination-bar">
                <li class="disabled">
                  <a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
                </li>
                <li class="active">
                  <a class="page-num" href="#">1</a>
                </li>
                <li>
                  <a class="page-num" href="#">2</a>
                </li>
                <li>
                  <a href="#">Next<i class="fa fa-chevron-right"></i></a>
                </li>
              </ul>
            </div>
            <button class="showAll-btn">Show All</button>
            <button class="compare-btn">Compare <i class="fa fa-angle-right" aria-hidden="true"></i></button>
          </div>
          <!-- End Shooting Result -->
        </div>
        <!-- End Right Conent -->
      </div>
  </section>
  <!-- End Main Content Secion -->
  <!-- start footer -->
  <?php require_once "../assets/footer.php"; ?>
  <script src="../assets/cart.js"></script>
  <!-- end footer -->
</body>

</html>
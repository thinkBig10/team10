<!DOCTYPE html><!--  Last Published: Sun Nov 05 2023 10:17:38 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d2f" data-wf-site="6541d9f4fbd73e9498319e4c">

<head>
  <meta charset="utf-8">
  <title>ThinkBig_Managing Online Shopping Mall Data</title>
  <meta content="Delivery" property="og:title">
  <meta content="Delivery" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/hahas-supercool-site.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Changa One:400,400italic"]
      }
    });
  </script>
  <script type="text/javascript">
    ! function (o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">

  <style>
  .scrollable-div {
  max-height: 500px; 
  overflow-y: auto;
}
.div-block-19.deliverynav {
  position: sticky;
  top: 0;
  background-color: #fff;
  z-index: 1000; 
  width: 100%; 
  padding: 10px; /
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}
</style>
</head>

<body>
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
    role="banner" class="navbar w-nav">
    <div class="navbar-wrapper w-container">
      <a href="notice.php" class="nav-btn w-nav-link">NOTICE</a>
      <a href="user.php" class="nav-btn w-nav-link">USER</a>
      <a href="brand.php" class="nav-btn w-nav-link">BRAND</a>
      <a href="product.php" class="nav-btn w-nav-link">PRODUCT</a>
      <a href="delivery.php" aria-current="page" class="nav-btn w-nav-link w--current">DELIVERY</a>
      <a href="review.php" class="nav-btn w-nav-link">REVIEW</a>
      <a href="coupon.php" class="nav-btn w-nav-link">COUPON</a>
      <a href="qna.php" class="nav-btn w-nav-link">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.php" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt=""
        class="image"></a>
  </section>
  <div id="w-node-_01990053-9cad-eed2-2fd0-c51042324ab2-0e075d2f" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-_01990053-9cad-eed2-2fd0-c51042324ab3-0e075d2f" class="w-layout-cell userinfo"><img
        src="images/ThinkBig.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-_01990053-9cad-eed2-2fd0-c51042324ab5-0e075d2f" class="w-layout-layout info wf-layout-layout">
        <div id="w-node-_01990053-9cad-eed2-2fd0-c51042324ab6-0e075d2f" class="w-layout-cell id">
          <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
        </div>
        <div id="w-node-_01990053-9cad-eed2-2fd0-c51042324ab9-0e075d2f" class="w-layout-cell name">
          <div class="user-info"><?php  echo $_SESSION['name'];?></div>
        </div>
        <div id="w-node-_01990053-9cad-eed2-2fd0-c51042324abc-0e075d2f" class="w-layout-cell department">
          <div class="user-info"><?php echo $_SESSION['department'];?></div>
        </div>
      </div>
    </div>
    <div id="deliverycell"
      class="scrollable-div  w-layout-cell content deliverycell w-node-_01990053-9cad-eed2-2fd0-c51042324abf-0e075d2f">
      <div class="div-block-19 deliverynav">
        <h4 id="delivery_userinfo_col" class="heading-2">INFO</h4>
        <h4 id="delivery_status_col" class="heading-3">STATUS</h4>
        <h4 id="delivery_changestatus_col" class="heading-4">CHANGE STATUS</h4>
      </div>

      <?php
      
      include "./dbConnection.php";
        $sql = "select * from deliveryView";
        $res = mysqli_query($mysqli, $sql);
        if ($res) {
          while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $orderID = $row["orderID"];
            $userID = $row["userID"];
            $orderDate = $row["orderDate"];
            $addr = $row["address"];
            $brandName = $row["brandName"];
            $productName = $row["productName"];
            $orderComment = $row["comment"];
            $deliveryStatus = $row["status"];

            echo "<div class='div-block-14'>
                <div class='div-block-16 deliveryinfo'>
                  <ul role='list' class='list'>
                    <li class='list-item-2' style='list-style:none;'>USER ID : " . $userID . "</li>
                    <li class='list-item-3' style='list-style:none;'>ORDER DATE : " . $orderDate . "</li>
                    <li class='list-item-4' style='list-style:none;'>ADDRESS : " . $addr . "</li>
                    <li class='list-item-6' style='list-style:none;'>BRAND NAME : " . $brandName . "</li>
                    <li class='list-item-7' style='list-style:none;'>PRODUCT NAME : " . $productName . "</li>
                    <li class='list-item-8' style='list-style:none;'>ORDER COMMENT : " . $orderComment . "</li>
                  </ul>
                </div>
              <div class='div-block-17'>
                <div class='text-block-2'>" . $deliveryStatus . "</div>
              </div>";

            if ($deliveryStatus == 'paid') {
              echo "<div class='div-block-18 deliverydata1_changeblock'>
              <form action='deliveryUpdate.php' method='POST'>
                <input type='hidden' name='orderID' value='" . $orderID . "'>
                <button name='deliveryStatus' type='submit' value='paid' class='paid selectdelivery w-button'>PAID</button>
                <button name='deliveryStatus' type='submit' value='ready' class='ready w-button'>READY</button>
                <button name='deliveryStatus' type='submit' value='shipping' class='shipping w-button'>SHIPPING</button>
                <button name='deliveryStatus' type='submit' value='done' class='done w-button'>DONE</button>
              </form>
              </div>
              </div>";
            }
            if ($deliveryStatus == 'ready') {
              echo "<div class='div-block-18 deliverydata1_changeblock'>
              <form action='deliveryUpdate.php' method='POST'>
                <input type='hidden' name='orderID' value='" . $orderID . "'>
                <button name='deliveryStatus' type='submit' value='paid' class='paid w-button'>PAID</button>
                <button name='deliveryStatus' type='submit' value='ready' class='ready selectdelivery w-button'>READY</button>
                <button name='deliveryStatus' type='submit' value='shipping' class='shipping w-button'>SHIPPING</button>
                <button name='deliveryStatus' type='submit' value='done' class='done w-button'>DONE</button>
              </form>
              </div>
              </div>";
            }
            if ($deliveryStatus == 'shipping') {
              echo "<div class='div-block-18 deliverydata1_changeblock'>
              <form action='deliveryUpdate.php' method='POST'>
                <input type='hidden' name='orderID' value='".$orderID."'>
                <button name='deliveryStatus' type='submit' value='paid' class='paid w-button'>PAID</button>
                <button name='deliveryStatus' type='submit' value='ready' class='ready w-button'>READY</button>
                <button name='deliveryStatus' type='submit' value='shipping' class='shipping selectdelivery w-button'>SHIPPING</button>
                <button name='deliveryStatus' type='submit' value='done' class='done w-button'>DONE</button>
              </form>
              </div>
              </div>";
            }
            if ($deliveryStatus == 'done') {
              echo "<div class='div-block-18 deliverydata1_changeblock'>
              <form action='deliveryUpdate.php' method='POST'>
                <input type='hidden' name='orderID' value='".$orderID."'>
                <button name='deliveryStatus' type='submit' value='paid' class='paid w-button'>PAID</button>
                <button name='deliveryStatus' type='submit' value='ready' class='ready w-button'>READY</button>
                <button name='deliveryStatus' type='submit' value='shipping' class='shipping w-button'>SHIPPING</button>
                <button name='deliveryStatus' type='submit' value='done' class='done selectdelivery w-button'>DONE</button>
              </form>
              </div>
              </div>";
            }

          }
        } else {
          printf("%s", mysqli_error($mysqli));
        }
        mysqli_free_result($res);
        mysqli_close($mysqli);
      
      ?>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c"
      type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
      crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
</body>

</html>
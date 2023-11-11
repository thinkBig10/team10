<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d35" data-wf-site="6541d9f4fbd73e9498319e4c">
<head>
  <meta charset="utf-8">
  <title>ThinkBig_Managing Online Shopping Mall Data</title>
  <meta content="Review" property="og:title">
  <meta content="Review" property="twitter:title">
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
      ! function(o, c) {
        var n = c.documentElement,
          t = " w-mod-";
        n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
      }(window, document);
    </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="navbar-wrapper w-container">
      <a href="notice.php" class="nav-btn w-nav-link">NOTICE</a>
      <a href="user.php" class="nav-btn w-nav-link">USER</a>
      <a href="brand.php" class="nav-btn w-nav-link">BRAND</a>
      <a href="product.php" class="nav-btn w-nav-link">PRODUCT</a>
      <a href="delivery.php" class="nav-btn w-nav-link">DELIVERY</a>
      <a href="review.php" aria-current="page" class="nav-btn w-nav-link w--current">REVIEW</a>
      <a href="coupon.php" class="nav-btn w-nav-link">COUPON</a>
      <a href="qna.php" class="nav-btn w-nav-link">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.php" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633dc-0e075d35" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633dd-0e075d35" class="w-layout-cell userinfo"><img src="images/ThinkBig.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633df-0e075d35" class="w-layout-layout info wf-layout-layout">
        <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633e0-0e075d35" class="w-layout-cell id">
          <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
        </div>
        <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633e3-0e075d35" class="w-layout-cell name">
          <div class="user-info"><?php  echo $_SESSION['name'];?></div>
        </div>
        <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633e6-0e075d35" class="w-layout-cell department">
          <div class="user-info"><?php echo $_SESSION['department'];?></div>
        </div>
      </div>
    </div>
    <div id="w-node-_60a055be-d1fc-b8f4-ffed-127c599633e9-0e075d35" class="w-layout-cell content">
      <div class="div-block reviewnav">
        <a href="review_past_month.php" class="button clicked w-button">PAST MONTH</a>
        <a href="review.php" class="button w-button">Total</a>
      </div>
      <div class="div-block-2">
      <div class="Scroll" style="max-height: 410px; overflow-y: auto;">
        <?php
        include "./dbConnection.php";
        if($mysqli){
          $sql = "
          select * from reviews R join products P on R.productID = P.productID WHERE date BETWEEN DATE_ADD(NOW(), INTERVAL -1 MONTH ) AND NOW() ORDER BY DATE ASC;  
          "; 
          $res = mysqli_query($mysqli,$sql);
          if ($res) {
            while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
              $userID = $newArray["userID"];
              $productID = $newArray["productID"];
              $productName = $newArray["productName"];
              $grade = $newArray["grade"];
              $date = $newArray["date"];
              $comment = $newArray["comment"];
              
              echo '<div id="reviewdata2" class="div-block-4">
              <h4 class="reviewinfo">'.$userID.'</h4>
              <h4 class="reviewinfo">'.$date.'</h4>
              <h4 class="reviewinfo">'.$productID.'</h4>
              <h4 class="reviewinfo">'.$productName.'</h4>
              <h4 class="reviewinfo">'.str_repeat("★", $grade).'</h4>
              <p class="paragraph">'.$comment.'</p>
              </div><br><br>';

            }
          }
                
        } else {
            echo "disconnect ";
            exit();
        }
        ?>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>

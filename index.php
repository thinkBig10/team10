<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d2a" data-wf-site="6541d9f4fbd73e9498319e4c">
<head>
  <meta charset="utf-8">
  <title>ThinkBig_Managing Online Shopping Mall Data</title>
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
<body class="body">
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="navbar-wrapper w-container">
      <a href="notice.php" class="nav-btn w-nav-link">NOTICE</a>
      <a href="user.php" class="nav-btn w-nav-link">USER</a>
      <a href="brand.php" class="nav-btn w-nav-link">BRAND</a>
      <a href="product.php" class="nav-btn w-nav-link">PRODUCT</a>
      <a href="delivery.php" class="nav-btn w-nav-link">DELIVERY</a>
      <a href="review.php" class="nav-btn w-nav-link">REVIEW</a>
      <a href="coupon.php" class="nav-btn w-nav-link">COUPON</a>
      <a href="qna.php" class="nav-btn w-nav-link">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.php" aria-current="page" class="link-block w-inline-block w--current"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-f02deb08-1748-36ee-2932-984c42297013-0e075d2a" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-f2afb077-a016-5d75-30ba-dcdbdaafbe58-0e075d2a" class="w-layout-cell userinfo"><img src="images/userImg.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-_607a5ac0-ae65-45d9-dc8c-65b4d7adb672-0e075d2a" class="w-layout-layout info wf-layout-layout">
      <?php
          session_start();
        echo "<div id='w-node-_8b563a7a-f7ab-0bb2-e1d0-7e72b244be19-0e075d2a' class='w-layout-cell id'>";
        echo "<div class='user-info'>" .$_SESSION['employeeID']. "</div>";
        echo "</div>";
       echo "<div id='w-node-c1f49ac5-bf4e-346f-12a9-9c33d711b5db-0e075d2a' class='w-layout-cell name'>";
       echo "<div class='user-info'>" .$_SESSION['name']. "</div>";
        echo "</div>";
          
          
          echo "<div id='w-node-_1293a98e-9dcd-379c-0f63-5602634318ea-0e075d2a' class='w-layout-cell department'>";
          echo "<div class='user-info'>".$_SESSION['department']. "</div>";
          echo "</div>";
      ?>
      
        
      </div>
    </div>
    <div id="w-node-_47fdaf22-571f-8a8a-c367-de86c311fc89-0e075d2a" class="w-layout-cell contentHome">
    <div class="text-block-5"><strong class="bold-text">DATA MANAGEMENT<br>FOR CLOTHE SHOPPING MALL BRANDS</strong></div>
      <div class="text-block-6">We specialize in curating data exclusively for administrators of online clothing stores.<br>Simply navigate through the top navigation bar to access tailored data services. <br>Explore pages for <span class="text-span">NOTICE, USER, BRAND, PRODUCT, DELIVERY, REVIEW, COUPON, and Q&amp;A</span>, all designed to cater to your specific needs.</div>
      <div class="text-block-8"><strong class="bold-text-2">MEET OUR TEAM</strong></div>
      <div id="w-node-_8ccddb9b-1817-3c2d-c6fc-067b3d3c42d8-0e075d2a" class="w-layout-layout quick-stack-5 wf-layout-layout">
        <div id="w-node-_2c37b883-cc55-dd58-2e3f-d612a90c26fe-0e075d2a" class="w-layout-cell cell memberinto"><img src="images/001.jpg" loading="lazy" alt="" class="image-15">
          <div class="text-block-7"><strong>Minji Kwak</strong><br>2176022</div>
        </div>
        <div id="w-node-_456ac7fe-5edc-affe-7a74-00a072634d89-0e075d2a" class="w-layout-cell cell memberinto"><img src="images/003.jpg" loading="lazy" alt="" class="image-16">
          <div class="text-block-7"><strong>Gahyeon Kwon</strong><br>2071059</div>
        </div>
        <div id="w-node-e96f015e-5c40-a21b-c84c-9c2162b2c2f3-0e075d2a" class="w-layout-cell cell memberinto"><img src="images/002.jpg" loading="lazy" alt="" class="image-17">
          <div class="text-block-7"><strong>Boyeong Park</strong><br>2028012 <br></div>
        </div>
        <div id="w-node-ca0293be-835c-4180-d7e1-bba8815588ef-0e075d2a" class="w-layout-cell cell memberinto"><img src="images/004.jpg" loading="lazy" alt="" class="image-18">
          <div class="text-block-7"><strong>Chaerin Hwang</strong><br>2176429</div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>

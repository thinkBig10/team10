<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d2a" data-wf-site="6541d9f4fbd73e9498319e4c">
<head> 
  <meta charset="utf-8">
  <title>Think Big_Managing Online Shopping Mall Data</title>
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
      <a href="brand.html" class="nav-btn w-nav-link">BRAND</a>
      <a href="product.html" class="nav-btn w-nav-link">PRODUCT</a>
      <a href="delivery.html" class="nav-btn w-nav-link">DELIVERY</a>
      <a href="review.html" class="nav-btn w-nav-link">REVIEW</a>
      <a href="coupon.html" class="nav-btn w-nav-link">COUPON</a>
      <a href="qna.html" class="nav-btn w-nav-link">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.html" aria-current="page" class="link-block w-inline-block w--current"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-f02deb08-1748-36ee-2932-984c42297013-0e075d2a" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-f2afb077-a016-5d75-30ba-dcdbdaafbe58-0e075d2a" class="w-layout-cell userinfo"><img src="images/ThinkBig.png" loading="lazy" width="100" height="100" alt="" class="userimage">
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
    <div id="w-node-_47fdaf22-571f-8a8a-c367-de86c311fc89-0e075d2a" class="w-layout-cell content"></div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>
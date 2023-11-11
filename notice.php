<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="65460ab43711faad5ad519dc" data-wf-site="6541d9f4fbd73e9498319e4c">
<head>
  <meta charset="utf-8">
  <title>ThinkBig_Managing Online Shopping Mall Data</title>
  <meta content="NewNotice" property="og:title">
  <meta content="NewNotice" property="twitter:title">
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

<style>
    .scrollable-div {
  max-height: 480px; 
  overflow-y: auto;
}
.noticenav {
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
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="navbar-wrapper w-container">
      <a href="notice.php" aria-current="page" class="nav-btn w-nav-link w--current">NOTICE</a>
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
    <a href="index.php" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac765-5ad519dc" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac766-5ad519dc" class="w-layout-cell userinfo"><img src="images/ThinkBig.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac768-5ad519dc" class="w-layout-layout info wf-layout-layout">
        <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac769-5ad519dc" class="w-layout-cell id">
          <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
        </div>
        <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac76c-5ad519dc" class="w-layout-cell name">
          <div class="user-info"><?php  echo $_SESSION['name'];?></div>
        </div>
        <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac76f-5ad519dc" class="w-layout-cell department">
          <div class="user-info"><?php echo $_SESSION['department'];?></div>
        </div>
      </div>
    </div>
    <div id="w-node-_8767a444-998f-5cec-9e36-f222108ac772-5ad519dc" class="w-layout-cell content noticecell">
      <div id="noticeblock" class="noticeblock notificationblock scrollable-div">
        <h3 class="heading noticenav ">NOTICE</h3>
        <div class="div-block-2 noticesample">
          

        <?php
#$mysqli = mysqli_connect("localhost:43306", "team10", "team10", "team10");
#$mysqli = mysqli_connect("localhost:43306", "root", "123456789", "thinkbig");
include "./dbConnection.php";

if (mysqli_connect_errno()) {
  printf("Connect failed");
} else {
  $sql = "SELECT * FROM notifications";
  $res = mysqli_query($mysqli, $sql);
  if ($res) {
    while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
      $writerid = $newArray['writerID'];
      $date = $newArray['date'];
      $content = $newArray['content'];
      echo "<div class='div-block-4'>";
      echo " <h4 class='reviewinfo'>" . $writerid . "</h4>";
      echo "<h4 class='reviewinfo' style='font-size:12px;'>" . $date . "</h4><br>";
      echo "<p class='paragraph'>" . $content . "</p>";
      echo "</div>";
    }
  } else {
    printf("Error");
  }
  mysqli_free_result($res);
  mysqli_close($mysqli);
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
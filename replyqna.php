<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d34" data-wf-site="6541d9f4fbd73e9498319e4c">
<head>
  <meta charset="utf-8">
  <title>ThinkBig_Managing Online Shopping Mall Data</title>
  <meta content="ReplyQna" property="og:title">
  <meta content="ReplyQna" property="twitter:title">
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
      <a href="review.php" class="nav-btn w-nav-link">REVIEW</a>
      <a href="coupon.php" class="nav-btn w-nav-link">COUPON</a>
      <a href="qna.php" class="nav-btn replyqna w-nav-link">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.php" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-_990be46c-46c2-6338-093e-ab5c1159749a-0e075d34" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-_990be46c-46c2-6338-093e-ab5c1159749b-0e075d34" class="w-layout-cell userinfo"><img src="images/userImg.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-_990be46c-46c2-6338-093e-ab5c1159749d-0e075d34" class="w-layout-layout info wf-layout-layout">
        <div id="w-node-_990be46c-46c2-6338-093e-ab5c1159749e-0e075d34" class="w-layout-cell id">
          <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
        </div>
        <div id="w-node-_990be46c-46c2-6338-093e-ab5c115974a1-0e075d34" class="w-layout-cell name">
          <div class="user-info"><?php  echo $_SESSION['name'];?></div>
        </div>
        <div id="w-node-_990be46c-46c2-6338-093e-ab5c115974a4-0e075d34" class="w-layout-cell department">
          <div class="user-info"><?php echo $_SESSION['department'];?></div>
        </div>
      </div>
    </div>
    <div id="w-node-_990be46c-46c2-6338-093e-ab5c115974a7-0e075d34" class="w-layout-cell content replycell">
      <div class="form-block w-form">
        <?php
          if (isset($_GET['data'])) {
            $receivedData = $_GET['data'];
          }

          echo '<form id="relyqna_form"  action ="replyRequest.php" method="post" name="wf-form-commentform" data-name="commentform"  class="replyform" data-wf-page-id="6545eca4ff3677790e075d34" data-wf-element-id="c3ad7640-86b3-7213-e56d-3c15a7fa761b">
          <label for="replycomment" class="field-label-4">COMMENT</label>
          <input type = "text"  value= "'.$receivedData.'" name ="idField" maxlength="100" class="w-input" style="display: none">
          <input type = "text" name ="field" placeholder="Sample..." maxlength="5000" name = "field"  data-name="Field" class="w-input">
          <input type="submit" value="UPDATE" data-wait="Please wait..." id="updatebtn" class="submit-button-2 w-button">
          </form>';

          ?>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>

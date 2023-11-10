<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6546081fdf5823449b187e56" data-wf-site="6541d9f4fbd73e9498319e4c">
<head>
  <meta charset="utf-8">
  <title>User</title>
  <meta content="User" property="og:title">
  <meta content="User" property="twitter:title">
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
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
    <div class="navbar-wrapper w-container">
      <a href="notice.php" class="nav-btn w-nav-link">NOTICE</a>
      <a href="user.php" aria-current="page" class="nav-btn w-nav-link w--current">USER</a>
      <a href="brand.html" class="nav-btn w-nav-link">BRAND</a>
      <a href="product.html" class="nav-btn w-nav-link">PRODUCT</a>
      <a href="delivery.html" class="nav-btn w-nav-link">DELIVERY</a>
      <a href="review.html" class="nav-btn w-nav-link">REVIEW</a>
      <a href="coupon.html" class="nav-btn w-nav-link">COUPON</a>
      <a href="qna.html" class="nav-btn w-nav-link">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.html" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd37-9b187e56" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd38-9b187e56" class="w-layout-cell userinfo"><img src="images/ThinkBig.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd3a-9b187e56" class="w-layout-layout info wf-layout-layout">
        <div id="w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd3b-9b187e56" class="w-layout-cell id">
          <?php 
          session_start();
          echo "<div class='user-info'>".$_SESSION['employeeID']."</div>";
        echo "</div>";
        echo "<div id='w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd3e-9b187e56' class='w-layout-cell name'>";
        echo "<div class='user-info'>".$_SESSION['name']."</div>";
        echo "</div>";
        echo "<div id='w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd41-9b187e56' class='w-layout-cell department'>";
        echo  "<div class='user-info'>".$_SESSION['department']."</div>";
          ?>
        </div>
      </div>
    </div>
    <div id="deliverycell" class="scrollable-div  w-layout-cell content deliverycell w-node-e5917f05-57d1-a875-ab5a-ebb13a88fd44-9b187e56">
      <div class="div-block-19 deliverynav">
        <h4 id="delivery_userinfo_col" class="heading-2">INFO</h4>
        <h4 id="delivery_status_col" class="heading-3">STATUS</h4>
        <h4 id="delivery_changestatus_col" class="heading-4">CHANGE STATUS</h4>
      </div>
 

      <?php
$mysqli = mysqli_connect("localhost:43306", "team10", "team10", "team10");

if (mysqli_connect_errno()) {
  printf("Connect failed");
} else {
  $sql = "SELECT * FROM users";
  $res = mysqli_query($mysqli, $sql);
  if ($res) {
    while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
      $userid = $newArray['userID'];
      $name = $newArray['name'];
      $phoneNum = $newArray['phoneNum'];
      $address = $newArray['address'];
      $birthday = $newArray['birthday'];
      $rank = $newArray['rank'];

      echo "<div id='delivery_data1' class='div-block-14'>";
      echo "<div id='deliverydata1_userinfo' class='div-block-16 deliveryinfo'>";
      echo "<ul role='list' class='list'>";

      echo "<li class='list-item-2'>" . $userid . "</li>";
      echo "<li class='list-item-3'>" . $name . "</li>";
      echo "<li class='list-item-4'>" . $phoneNum . "</li>";
      echo "<li class='list-item-6'>" . $address . "<br></li>";
      echo "<li class='list-item-7'>" . $birthday . "<br></li>";
      echo "</ul></div>";
      echo "<div id='deliverydata1_status' class='div-block-17'>";
      echo "<div class='text-block-2'>" . $rank . "</div>";
      echo "</div>";

      echo "<div id='deliverydata1_changestatus' class='div-block-18 userdata1_changeblock'>";
      echo "<form method='POST' action='changestatus.php'>";
      echo "<input type='hidden' name='userid' value='". $userid ."'>"  ;
      echo "<button type='submit' name='rank' value='gold' class='gold selectuser w-button gold-button' style='background-color:white; color:black;'>GOLD</button>";
      echo "<button type='submit' name='rank' value='silver' class='silver w-button silver-button'>SILVER</button>";
      echo "<button type='submit' name='rank' value='bronze' class='bronze w-button bronze-button'>BRONZE</button>";
      echo "<button type='submit' name='userid' value='".$userid. "'style='visibility: hidden; opacity: 0;' class='bronze w-button bronze-button'>BRONZE</button>";
      echo "</form>";
      echo "</div>";
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
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
<script>
$(document).ready(function() {
  $('.userdata1_changeblock button').click(function() {
    window.location.reload(true);

    
    var newRank = $(this).data('rank'); // Get the rank from the clicked button
    var userId = $(this).closest('.div-block-14').find('.list-item-2').text(); // Get the user ID

    // Remove existing color classes from all buttons in the group
    $('.userdata1_changeblock button').removeClass('gold-button silver-button bronze-button');

    // Update the HTML content
    $(this).closest('.div-block-14').find('.text-block-2').text(newRank);

    // Add the color class to the clicked button
    $(this).addClass(newRank + '-button');

    
  });
});
</script>

</script>




  </script>
</body>
</html>
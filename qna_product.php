<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d33" data-wf-site="6541d9f4fbd73e9498319e4c">
<head>
  <meta charset="utf-8">
  <title>ThinkBig_Managing Online Shopping Mall Data</title>
  <meta content="Qna" property="og:title">
  <meta content="Qna" property="twitter:title">
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
      <a href="qna.php" aria-current="page" class="nav-btn w-nav-link w--current" style="color: #3880eb">Q&amp;A</a>
    </div>
  </div>
  <section class="titlebar">
    <a href="index.php" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
  </section>
  <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e2e-0e075d33" class="w-layout-layout block wf-layout-layout">
    <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e2f-0e075d33" class="w-layout-cell userinfo"><img src="images/userImg.png" loading="lazy" width="100" height="100" alt="" class="userimage">
      <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e31-0e075d33" class="w-layout-layout info wf-layout-layout">
        <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e32-0e075d33" class="w-layout-cell id">
          <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
        </div>
        <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e35-0e075d33" class="w-layout-cell name">
          <div class="user-info"><?php  echo $_SESSION['name'];?></div>
        </div>
        <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e38-0e075d33" class="w-layout-cell department">
          <div class="user-info"><?php echo $_SESSION['department'];?></div>
        </div>
      </div>
    </div>
    <div id="w-node-_84e908c7-3048-1e43-e0c1-e3228fd97e3b-0e075d33" class="w-layout-cell content">
      <div class="div-block-9 qnanav">
        <a id="qna_restock" href="qna_general.php" class="button w-button">GENERAL</a>
        <a id="qna_service" href="qna_product.php" class="button clicked w-button">PRODUCT</a>
        <a id="qna_delivery" href="qna_shipping.php" class="button w-button">SHIPPING</a>
        <a id="qna_refund" href="qna.php" class="button w-button">TOTAL</a>
      </div> 
      <div class="Scroll" style="width: 100%; max-height: 410px; overflow-y: auto;">
        <?php
        include "./dbConnection.php";
        if($mysqli){
          $sql = "
          select * from qna where type='Product';  
          "; 
          $res = mysqli_query($mysqli,$sql);
          if ($res) {
            while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
              $qnaID = $newArray["qnaID"];
              $userID = $newArray["userID"];
              $type = $newArray["type"];
              $date = $newArray["date"];
              $comment = $newArray["comment"];
              
              echo '<div id="qnadata1" class="div-block-10">
              <div class="text-block">'.$date.'</div>
              <div class="div-block-11"><img src="images/qmark.png" loading="lazy" sizes="20px" height="20" alt="" srcset="images/qmark-p-500.png 500w, images/qmark.png 512w" class="image-4">
                <p class="paragraph-2">'.$userID.': '.$comment.'</p>
              </div>';

              $sqlReply = "select * from replyqna where qnaID = $qnaID";
              $resReply = mysqli_query($mysqli, $sqlReply);
              $totalRows = mysqli_num_rows($resReply);
  
                if ($totalRows>0) {
                    while ($replyArray = mysqli_fetch_array($resReply, MYSQLI_ASSOC)) {
                        $replyID = $replyArray["qnaID"];
                        $reComment = $replyArray["comment"];
                        $employeeID = $replyArray["employeeID"];
                          echo '
                          <div id="qnadata1_responseblock" class="div-block-12"><img src="images/mark.png" loading="lazy" sizes="20px" height="20" alt="" srcset="images/mark-p-500.png 500w, images/mark.png 512w" class="image-5">
                            <p id="qnadata1_replycomment" class="paragraph-3">'.$employeeID.': '.$reComment.'</p>
                          </div>
                        </div>
                        <br>';             
                    }
                }
                else{
                    // 변수 설정. qnaID를 reply 페이지로 보내서 원하는 qnaID의 qna에 reply 달릴 수 있도록
                    $variableToSend = $qnaID;
                    $targetFile = "replyqna.php";
                    $parameterName = "data"; // 전달할 변수 이름 data
                    $link = "$targetFile?$parameterName=" . urlencode($variableToSend);

                  echo '
                  <div id="qnadata1_responseblock" class="div-block-12"><img src="images/mark.png" loading="lazy" sizes="20px" height="20" alt="" srcset="images/mark-p-500.png 500w, images/mark.png 512w" class="image-5">
                    <p id="qnadata1_replycomment" class="paragraph-3"><button type="button"><a href='.$link.' class="reply">reply</a></button></p>
                  </div>
                </div>
                <br>';  
                }
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
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>

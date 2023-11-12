<!DOCTYPE html>
<!-- Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal
Time) -->
<html
    data-wf-page="65473ffbf69dd5d112a33a88"
    data-wf-site="6541d9f4fbd73e9498319e4c">
    <head>
        <meta charset="utf-8">
        <title>ThinkBig_Managing Online Shopping Mall Data</title>
        <meta content="couponTemp2" property="og:title">
        <meta content="couponTemp2" property="twitter:title">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="css/normalize.css" rel="stylesheet" type="text/css">
        <link href="css/webflow.css" rel="stylesheet" type="text/css">
        <link
            href="css/hahas-supercool-site.webflow.css"
            rel="stylesheet"
            type="text/css">
        <link href="https://fonts.googleapis.com" rel="preconnect">
        <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
        <script
            src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"
            type="text/javascript"></script>
        <script type="text/javascript">
            WebFont.load({
                google: {
                    families: ["Changa One:400,400italic"]
                }
            });
        </script>
        <script type="text/javascript">
            !function (o, c) {
                var n = c.documentElement,
                    t = " w-mod-";
                n.className += t + "js",
                ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (
                    n.className += t + "touch"
                )
            }(window, document);
        </script>
        <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link href="images/webclip.png" rel="apple-touch-icon">
    </head>
    <body>
        <div
            data-animation="default"
            data-collapse="medium"
            data-duration="400"
            data-easing="ease"
            data-easing2="ease"
            role="banner"
            class="navbar w-nav">
            <div class="navbar-wrapper w-container">
                <a href="notice.php" class="nav-btn w-nav-link">NOTICE</a>
                <a href="user.php" class="nav-btn w-nav-link">USER</a>
                <a href="brand.php" class="nav-btn w-nav-link">BRAND</a>
                <a href="product.php" class="nav-btn w-nav-link">PRODUCT</a>
                <a href="delivery.php" class="nav-btn w-nav-link">DELIVERY</a>
                <a href="review.php" class="nav-btn w-nav-link">REVIEW</a>
                <a href="coupon.php" aria-current="page" class="nav-btn w-nav-link w--current">COUPON</a>
                <a href="qna.php" class="nav-btn w-nav-link">Q&amp;A</a>
            </div>
        </div>
        <section class="titlebar">
            <a href="index.php" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt="" class="image"></a>
        </section>
        <div
            id="w-node-b30baabe-ca56-adbb-2114-5c1742e912c0-12a33a88"
            class="w-layout-layout block wf-layout-layout">
            <div
                id="w-node-b30baabe-ca56-adbb-2114-5c1742e912c1-12a33a88"
                class="w-layout-cell userinfo"><img
                src="images/userImg.png"
                loading="lazy"
                width="100"
                height="100"
                alt=""
                class="userimage">
                <div
                    id="w-node-b30baabe-ca56-adbb-2114-5c1742e912c3-12a33a88"
                    class="w-layout-layout info wf-layout-layout">
                    <div
                        id="w-node-b30baabe-ca56-adbb-2114-5c1742e912c4-12a33a88"
                        class="w-layout-cell id">
                        <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
                    </div>
                    <div
                        id="w-node-b30baabe-ca56-adbb-2114-5c1742e912c7-12a33a88"
                        class="w-layout-cell name">
                        <div class="user-info"><?php  echo $_SESSION['name'];?></div>
                    </div>
                    <div
                        id="w-node-b30baabe-ca56-adbb-2114-5c1742e912ca-12a33a88"
                        class="w-layout-cell department">
                        <div class="user-info"><?php echo $_SESSION['department'];?></div>
                    </div>
                </div>
            </div>
            <div
                id="w-node-b30baabe-ca56-adbb-2114-5c1742e912cd-12a33a88"
                class="w-layout-cell content noticecell">
                <div id="cuponsblock" class="noticeblock cuponblock">
                    <h3 class="heading">COUPONS</h3>
                    <div class="div-block-2">
                        <div class="div-block-6">
                            <div class="div-block-8">
                                <div class="div-block-7 coupon_rank_col">RANK</div>
                                <div class="div-block-7 productnamecol">EXPIRATION DATE</div>
                                <div class="div-block-7 brandnamecol">DISCOUNT RATE</div>
                                <div class="div-block-7">MINFEE</div>
                            </div>

                            <!--내부 스크롤 .couponShowBlock { max-height: 290px; overflow-y: auto; }-->
                            <div class='couponShowBlock'>
                            <?php
                                #$mysqli = mysqli_connect("localhost", "team10", "team10", "team10");
                                include "./dbConnection.php";

                                if (mysqli_connect_errno()) {
                                  printf("Connect failed: %s\n", mysqli_connect_error());
                                  exit();
                                } else {
                                  $query = "SELECT couponID, rank, expirationDate, discountRate, minFee FROM coupons";
                                  $result = mysqli_query($mysqli, $query);

                                  while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<div class='div-block-8'>
                                      <div class='form-block-4 w-form'>
                                        <input type='button' value='x' class='delete-button' onclick='deleteCoupon(" . $row['couponID'] . ")'>
                                      <div class='w-form-done'>
                                          <div>Thank you! Your submission has been received!</div>
                                        </div>
                                        <div class='w-form-fail'>
                                          <div>Oops! Something went wrong while submitting the form.</div>
                                        </div>
                                      </div>
                                      <div class='div-block-7 datarow coupon_rank'>" . $row['rank'] . "</div>
                                      <div class='div-block-7 productnamecol datarow'>" . $row['expirationDate'] . "</div>
                                      <div class='div-block-7 brandnamecol datarow'>" . $row['discountRate'] . "</div>
                                      <div class='div-block-7 datarow'>" . $row['minFee'] . "</div>
                                    </div>";
                                  }

                                  mysqli_close($mysqli);
                                }
                              ?>

                            </div>
                        </div>
                    </div>
                    <div class="div-block-21">
                        <div class="coupon_formblock w-form">
                            <form
                                action="coupon.php"
                                id="email-form"
                                name="email-form"
                                data-name="Email Form"
                                method="post"
                                class="form-5"
                                data-wf-page-id="65473ffbf69dd5d112a33a88"
                                data-wf-element-id="b30baabe-ca56-adbb-2114-5c1742e91364"
                                onsubmit="return validateForm()">
                                
                                <input
                                    type="submit"
                                    name="submit"
                                    value="Insert Record"
                                    data-wait="Please wait..."
                                    class="submit-button-3 w-button"
                                >
                                
                                <div class="coupon_rankclick_block">
                                    <label id="rank_gold" class="w-checkbox">
                                        <input
                                            type="checkbox"
                                            id="checkbox"
                                            name="checkbox"
                                            data-name="Checkbox"
                                            class="w-checkbox-input">
                                        <span class="w-form-label" for="checkbox">gold</span>
                                    </label>

                                    <label id="rank_silver" class="w-checkbox">
                                        <input
                                            type="checkbox"
                                            id="silver"
                                            name="silver"
                                            data-name="Silver"
                                            class="w-checkbox-input">
                                        <span class="w-form-label" for="silver">silver</span>
                                    </label>

                                    <label id="rank_bronze" class="w-checkbox">
                                        <input
                                            type="checkbox"
                                            id="bronze"
                                            name="bronze"
                                            data-name="Bronze"
                                            class="w-checkbox-input">
                                        <span class="w-form-label" for="bronze">bronze</span>
                                    </label>
                                </div>

                                <input
                                    type="text"
                                    class="text-field-7 w-input"
                                    maxlength="256"
                                    name="field"
                                    data-name="Field"
                                    placeholder="Expiration Date"
                                    id="field"
                                    required="">
                                <input
                                    type="text"
                                    class="text-field-8 w-input"
                                    maxlength="256"
                                    name="field-2"
                                    data-name="Field 2"
                                    placeholder="Discount Rate"
                                    id="field-2"
                                    required="">
                                <input
                                    type="text"
                                    class="text-field-9 w-input"
                                    maxlength="256"
                                    name="field-3"
                                    data-name="Field 3"
                                    placeholder="Min Fee"
                                    id="field-3"
                                    required="">
                            </form>

                            <div class="w-form-done">
                                <div>Thank you! Your submission has been received!</div>
                            </div>
                            <div class="w-form-fail">
                                <div>Oops! Something went wrong while submitting the form.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php
          $mysqli = mysqli_connect("localhost","team10","team10","team10");

          if (mysqli_connect_errno()) {
              printf("Connect failed: %s\n", mysqli_connect_error());
              exit();
          } else {
              mysqli_begin_transaction($mysqli);

              $rank = '';

              if(isset($_POST["checkbox"]) && $_POST["checkbox"] == "on") {
                  $rank = "gold";
              } elseif(isset($_POST["silver"]) && $_POST["silver"] == "on") {
                  $rank = "silver";
              } elseif(isset($_POST["bronze"]) && $_POST["bronze"] == "on") {
                  $rank = "bronze";
              }

              $checkRankQuery = "SELECT * FROM levels WHERE rank = '$rank'";
              $checkRankResult = mysqli_query($mysqli, $checkRankQuery);

              if(mysqli_num_rows($checkRankResult) > 0) {
                  $sql = "INSERT INTO coupons (rank, expirationDate, discountRate, minFee) 
                          VALUES ('$rank', '".$_POST["field"]."', '".$_POST["field-2"]."', '".$_POST["field-3"]."');";
                  $res = mysqli_query($mysqli, $sql);

                  if ($res) {
                      // commit
                      mysqli_commit($mysqli);
                      echo "<meta http-equiv='refresh' content='0'>";
                  } else {
                      // rollback
                      mysqli_rollback($mysqli);
                  }
              }

              mysqli_close($mysqli);
          }
        ?>

        <script>
            function deleteCoupon(couponID) {
                if (confirm("Are you sure you want to delete it?")) {
                    var xhr = new XMLHttpRequest();
                    xhr.open("POST", "deleteCoupon.php", true);
                    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhr.onreadystatechange = function () {
                        if (xhr.readyState == 4 && xhr.status == 200) {
                            location.reload();
                        }
                    }
                    xhr.send("couponID=" + couponID);
                }
            }
        </script>

        <script>
            function validateForm() {
                var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
                if (checkboxes.length > 1) {
                    alert("Please select only one checkbox.");
                    return false;
                }else if (checkboxes.length == 0){
                    alert("Please select one checkbox.");
                    return false;
                }       

                return true;
            }
        </script>

        <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c"
            type="text/javascript"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
        <script src="js/webflow.js" type="text/javascript"></script>
    </body>
</html>
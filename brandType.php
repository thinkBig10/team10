<!DOCTYPE html>
<!-- Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal
Time) -->
<html
    data-wf-page="6545eca4ff3677790e075d2d"
    data-wf-site="6541d9f4fbd73e9498319e4c">
    <head>
        <meta charset="utf-8">
        <title>ThinkBig_Managing Online Shopping Mall Data</title>
        <meta content="Brand" property="og:title">
        <meta content="Brand" property="twitter:title">
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
                <a href="brand.php" aria-current="page" class="nav-btn w-nav-link w--current" style="color: #3880eb">BRAND</a>
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
        <div
            id="w-node-_7b9a4372-5bcf-8df5-bf10-49e65251742a-0e075d2d"
            class="w-layout-layout block wf-layout-layout">
            <div
                id="w-node-_7b9a4372-5bcf-8df5-bf10-49e65251742b-0e075d2d"
                class="w-layout-cell userinfo"><img
                src="images/ThinkBig.png"
                loading="lazy"
                width="100"
                height="100"
                alt=""
                class="userimage">
                <div
                    id="w-node-_7b9a4372-5bcf-8df5-bf10-49e65251742d-0e075d2d"
                    class="w-layout-layout info wf-layout-layout">
                    <div
                        id="w-node-_7b9a4372-5bcf-8df5-bf10-49e65251742e-0e075d2d"
                        class="w-layout-cell id">
                        <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
                    </div>
                    <div
                        id="w-node-_7b9a4372-5bcf-8df5-bf10-49e652517431-0e075d2d"
                        class="w-layout-cell name">
                        <div class="user-info"><?php  echo $_SESSION['name'];?></div>
                    </div>
                    <div
                        id="w-node-_7b9a4372-5bcf-8df5-bf10-49e652517434-0e075d2d"
                        class="w-layout-cell department">
                        <div class="user-info"><?php echo $_SESSION['department'];?></div>
                    </div>
                </div>
            </div>
            <div
                id="w-node-_7b9a4372-5bcf-8df5-bf10-49e652517437-0e075d2d"
                class="w-layout-cell content brandcell">
                <div class="div-block-5">
                    <div class="form-block-2 w-form">
                        <form
                            id="email-form"
                            name="email-form"
                            data-name="Email Form"
                            method="post"
                            class="form-2"
                            data-wf-page-id="6545eca4ff3677790e075d2d"
                            data-wf-element-id="ffd78a53-33d2-75bc-99da-a427247df95e"
                            action="brandType.php">
                            <select id="field" name="Type" data-name="Field" class="select-field w-select" onchange="this.form.submit()">
                            <?php
                            $Type = $_POST['Type'];
                            if($Type == 'footwear'){
                                echo '<option value="footwear" selected="selected">FOOTWEAR</option>
                                <option value="headwear">HEADWEAR</option>
                                <option value="sportswear">SPORTSWEAR</option>
                                <option value="everydaywear">EVERYDAYWEAR</option>
                                <option value="underwear">UNDERWEAR</option>
                                <option value="revenueorder">REVENUE ORDER</option>';
                            }
                            if($Type == 'headwear'){
                                echo '<option value="footwear">FOOTWEAR</option>
                                <option value="headwear" selected="selected">HEADWEAR</option>
                                <option value="sportswear">SPORTSWEAR</option>
                                <option value="everydaywear">EVERYDAYWEAR</option>
                                <option value="underwear">UNDERWEAR</option>
                                <option value="revenueorder">REVENUE ORDER</option>';
                            }
                            if($Type == 'sportswear'){
                                echo '<option value="footwear">FOOTWEAR</option>
                                <option value="headwear">HEADWEAR</option>
                                <option value="sportswear" selected="selected">SPORTSWEAR</option>
                                <option value="everydaywear">EVERYDAYWEAR</option>
                                <option value="underwear">UNDERWEAR</option>
                                <option value="revenueorder">REVENUE ORDER</option>';
                            }
                            if($Type == 'everydaywear'){
                                echo '<option value="footwear">FOOTWEAR</option>
                                <option value="headwear">HEADWEAR</option>
                                <option value="sportswear">SPORTSWEAR</option>
                                <option value="everydaywear" selected="selected">EVERYDAYWEAR</option>
                                <option value="underwear">UNDERWEAR</option>
                                <option value="revenueorder">REVENUE ORDER</option>';
                            }
                            if($Type == 'underwear'){
                                echo '<option value="footwear">FOOTWEAR</option>
                                <option value="headwear">HEADWEAR</option>
                                <option value="sportswear">SPORTSWEAR</option>
                                <option value="everydaywear">EVERYDAYWEAR</option>
                                <option value="underwear" selected="selected">UNDERWEAR</option>
                                <option value="revenueorder">REVENUE ORDER</option>';
                            }
                            if($Type == 'revenueorder'){
                                echo '<option value="footwear">FOOTWEAR</option>
                                <option value="headwear">HEADWEAR</option>
                                <option value="sportswear">SPORTSWEAR</option>
                                <option value="everydaywear">EVERYDAYWEAR</option>
                                <option value="underwear">UNDERWEAR</option>
                                <option value="revenueorder" selected="selected">REVENUE ORDER</option>';
                            }                                
                            ?>
                            </select>
                        </form>
                        <div class="w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>

                <?php
                    #$mysqli = mysqli_connect("localhost", "team10", "team10", "team10");
                    include "./dbConnection.php";
                    if (mysqli_connect_errno()) {
                        printf("Connect failed: %s\n", mysqli_connect_error());
                        exit();
                    } else {
                        echo'<div class="div-block-6">
                        <div class="div-block-8">
                            <div id="brand_rank_col" class="div-block-7 brandcols">RANK</div>
                            <div id="brand_brandname_col" class="div-block-7 productnamecol">BRAND NAME
                            </div>
                            <div id="brand_brandinfo_col" class="div-block-7 brandnamecol">BRAND INFO</div>
                            <div id="brand_revenue_col" class="div-block-7">REVENUE</div>
                        </div>
                        <div class="brandlists">';

                        $Type = $_POST['Type'];
                        $queryRollup = "SELECT CASE WHEN brandType IS NULL THEN 'TOTAL' ELSE brandType END AS brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands JOIN orders ON brands.brandID = orders.brandID GROUP BY brandType, brandName WITH ROLLUP;";
                        $resultRollup = mysqli_query($mysqli, $queryRollup);

                        while ($rowRollup = mysqli_fetch_assoc($resultRollup)) {
                            if ($Type == 'revenueorder' && $rowRollup["brandType"] == 'TOTAL') {
                                $totalT = "TOTAL";
                                $revenueT = $rowRollup["revenue"];
                                $query = "SELECT RANK() OVER (ORDER BY revenue DESC) AS rank, brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands, orders WHERE brands.brandID = orders.brandID GROUP BY brandName ORDER BY rank;";
                            }else if($Type == 'footwear' && $rowRollup["brandType"] == 'footwear'&&$rowRollup["brandName"] == NULL){
                                $totalT = "FOOTWEAR TOTAL";
                                $revenueT = $rowRollup["revenue"];
                                $query = "SELECT RANK() OVER (ORDER BY revenue DESC) AS rank, brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands, orders WHERE brands.brandID = orders.brandID AND brandType = 'footwear' GROUP BY brandName ORDER BY rank;";
                            }else if($Type == 'headwear' && $rowRollup["brandType"] == 'headwear'&&$rowRollup["brandName"] == NULL){
                                $totalT = "HEADWEAR TOTAL";
                                $revenueT = $rowRollup["revenue"];
                                $query = "SELECT RANK() OVER (ORDER BY revenue DESC) AS rank, brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands, orders WHERE brands.brandID = orders.brandID AND brandType = 'headwear' GROUP BY brandName ORDER BY rank;";
                            }else if($Type == 'sportswear' && $rowRollup["brandType"] == 'sportswear'&&$rowRollup["brandName"] == NULL){
                                $totalT = "SPORTSWEAR TOTAL";
                                $revenueT = $rowRollup["revenue"];
                                $query = "SELECT RANK() OVER (ORDER BY revenue DESC) AS rank, brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands, orders WHERE brands.brandID = orders.brandID AND brandType = 'sportswear' GROUP BY brandName ORDER BY rank;";
                            }else if($Type == 'everydaywear' && $rowRollup["brandType"] == 'everydaywear'&&$rowRollup["brandName"] == NULL){
                                $totalT = "EVERYDAYWEAR TOTAL";
                                $revenueT = $rowRollup["revenue"];
                                $query = "SELECT RANK() OVER (ORDER BY revenue DESC) AS rank, brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands, orders WHERE brands.brandID = orders.brandID AND brandType = 'everydaywear' GROUP BY brandName ORDER BY rank;";
                            }else if($Type == 'underwear' && $rowRollup["brandType"] == 'underwear'&&$rowRollup["brandName"] == NULL){
                                $totalT = "UNDERWEAR TOTAL";
                                $revenueT = $rowRollup["revenue"];
                                $query = "SELECT RANK() OVER (ORDER BY revenue DESC) AS rank, brandType, brandName, brandIntro, SUM(purchasePrice) AS revenue FROM brands, orders WHERE brands.brandID = orders.brandID AND brandType = 'underwear' GROUP BY brandName ORDER BY rank;";
                            }
                        }

                        $result = mysqli_query($mysqli, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div class='div-block-8'>
                            <div class='div-block-7 datarow'>" . $row['rank'] . "</div>
                            <div class='div-block-7 productnamecol datarow'>" . $row['brandName'] . "</div>
                            <div class='div-block-7 brandnamecol datarow'>" . $row['brandIntro'] . "</div>
                            <div class='div-block-7 datarow'>" . $row['revenue'] . "</div>
                            </div>";
                        }

                        echo'</div>
                        </div>
                        <div class="div-block-8 brand_rollup_block">
                            <div class="div-block-7 datarow">' . $totalT . '</div>
                            <div class="div-block-7 productnamecol datarow"></div>
                            <div class="div-block-7 brandnamecol datarow"></div>
                            <div class="div-block-7 datarow">' . $revenueT . '</div>
                        </div>';

                        mysqli_close($mysqli);
                    }
                ?>
            </div>
        </div>

        <script
            src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c"
            type="text/javascript"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
        <script src="js/webflow.js" type="text/javascript"></script>
        <script>
    </body>
</html>

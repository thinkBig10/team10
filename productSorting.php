<!DOCTYPE html><!--  Last Published: Mon Nov 06 2023 05:41:27 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="6545eca4ff3677790e075d32" data-wf-site="6541d9f4fbd73e9498319e4c">

<head>
    <meta charset="utf-8">
    <title>Product</title>
    <meta content="Product" property="og:title">
    <meta content="Product" property="twitter:title">
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
</head>

<body>
    <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar w-nav">
        <div class="navbar-wrapper w-container">
            <a href="notice.php" class="nav-btn w-nav-link">NOTICE</a>
            <a href="user.php" class="nav-btn w-nav-link">USER</a>
            <a href="brand.php" class="nav-btn w-nav-link">BRAND</a>
            <a href="product.php" aria-current="page" class="nav-btn w-nav-link w--current">PRODUCT</a>
            <a href="delivery.php" class="nav-btn w-nav-link">DELIVERY</a>
            <a href="review.php" class="nav-btn w-nav-link">REVIEW</a>
            <a href="coupon.php" class="nav-btn w-nav-link">COUPON</a>
            <a href="qna.php" class="nav-btn w-nav-link">Q&amp;A</a>
        </div>
    </div>
    <section class="titlebar">
        <a href="index.html" class="link-block w-inline-block"><img src="images/ThinkBig.png" loading="lazy" alt=""
                class="image"></a>
    </section>
    <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11bc-0e075d32" class="w-layout-layout block wf-layout-layout">
        <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11bd-0e075d32" class="w-layout-cell userinfo"><img
                src="images/ThinkBig.png" loading="lazy" width="100" height="100" alt="" class="userimage">
            <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11bf-0e075d32"
                class="w-layout-layout info wf-layout-layout">
                <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11c0-0e075d32" class="w-layout-cell id">
                    <div class="user-info"><?php session_start(); echo $_SESSION['employeeID'];?></div>
                </div>
                <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11c3-0e075d32" class="w-layout-cell name">
                    <div class="user-info"><?php  echo $_SESSION['name'];?></div>
                </div>
                <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11c6-0e075d32" class="w-layout-cell department">
                    <div class="user-info"><?php echo $_SESSION['department'];?></div>
                </div>
            </div>
        </div>
        <div id="w-node-_17ab5aa1-19f5-d367-e3c3-21d7eecd11c9-0e075d32" class="w-layout-cell content productcell">
            <div class="div-block-5">
                <div class="w-form" style="display:flex;">
                    <form id="productform" action="productSorting.php" method="POST" style="width:1070px;">
                        <select onchange="this.form.submit()" id="productfiled" name="sortBy" data-name="Field"
                            class="select-field w-select">
                            <?php
                            $sortBy = $_POST['sortBy'];
                            if ($sortBy == 'wishes') {
                                echo '<option value="wishes" selected>Wishes</option>
                                <option value="highestPrice">Highest Price</option>
                                <option value="lowestPrice">Lowest Price</option>
                                <option value="order">Order Quantity</option>
                                <option value="rating">Rating</option>';
                            }
                            if ($sortBy == 'highestPrice') {
                                echo '<option value="wishes" >Wishes</option>
                                <option value="highestPrice" selected>Highest Price</option>
                                <option value="lowestPrice">Lowest Price</option>
                                <option value="order">Order Quantity</option>
                                <option value="rating">Rating</option>';
                            }
                            if ($sortBy == 'lowestPrice') {
                                echo '<option value="wishes" >Wishes</option>
                                <option value="highestPrice">Highest Price</option>
                                <option value="lowestPrice" selected>Lowest Price</option>
                                <option value="order">Order Quantity</option>
                                <option value="rating">Rating</option>';
                            }
                            if ($sortBy == 'order') {
                                echo '<option value="wishes" >Wishes</option>
                                <option value="highestPrice">Highest Price</option>
                                <option value="lowestPrice">Lowest Price</option>
                                <option value="order" selected>Order Quantity</option>
                                <option value="rating">Rating</option>';
                            }
                            if ($sortBy == 'rating') {
                                echo '<option value="wishes" >Wishes</option>
                                <option value="highestPrice">Highest Price</option>
                                <option value="lowestPrice">Lowest Price</option>
                                <option value="order">Order Quantity</option>
                                <option value="rating" selected>Rating</option>';
                            }
                            ?>
                        </select>
                    </form>
                    <form action="productSorting_excluding_SoldOut.php" method="POST" style="display:flex;">
                        <?php
                         echo '<input type="hidden" name="sortBy" value="' . $sortBy . '">';
                        ?>
                        <input onchange="this.form.submit()" type="checkbox" name="soldOut" value="Y"
                            style="margin-left:10px; margin-right:5px; "><label for="soldOut"
                            style="padding-top:13px;">Excluding sold-out</label>
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <div class="div-block-6">
                <div id="productcols" class="div-block-8 div-product">
                    <div id="product_rank_col" class="div-block-7">RANK</div>
                    <div id="product_productname_col" class="div-block-7 productnamecol">PRODUCT NAME </div>
                    <div id="product_brandname_col" class="div-block-7 brandnamecol">BRAND NAME</div>
                    <div id="product_price_col" class="div-block-7">TARGET</div>
                    <?php
                    if ($sortBy == "wishes") {
                        echo '<div id="product_price_col" class="div-block-7">wishCount</div>';
                    }
                    if ($sortBy == "highestPrice" || $sortBy == "lowestPrice") {
                        echo '<div id="product_price_col" class="div-block-7">price</div>';
                    }
                    if ($sortBy == "order") {
                        echo '<div id="product_price_col" class="div-block-7">orderCount</div>';
                    }
                    if ($sortBy == "rating") {
                        echo '<div id="product_price_col" class="div-block-7">avgRating</div>';
                    }
                    ?>

                </div>
                <div class="productlists">
                    <?php
                    include "./dbConnection.php";
                        if ($sortBy == "wishes") {
                            $sql = "select RANK() over (ORDER BY  count desc) as 'rank',  productName,brandName,target,count as fivParam from wishCount natural join products natural join brands";
                        }
                        if ($sortBy == 'highestPrice') {
                            $sql = "select RANK() over (ORDER BY price desc) as 'rank',productName, brandName, target, price as fivParam from products natural join brands";
                        }
                        if ($sortBy == "lowestPrice") {
                            $sql = "select RANK() over (ORDER BY price asc) as 'rank',productName, brandName, target, price as fivParam from products natural join brands";
                        }
                        if ($sortBy == "order") {
                            $sql = "select RANK() over (ORDER BY  count desc) as 'rank',  productName,brandName,target,count as fivParam from orderCount natural join products natural join brands";
                        }
                        if ($sortBy == "rating") {
                            $sql = "select RANK() over (ORDER BY  rating desc) as 'rank',  productName,brandName,target,rating as fivParam from reviewRating natural join products natural join brands";
                        }
                        $res = mysqli_query($mysqli, $sql);
                        if ($res) {
                            while ($row = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
                                $rank = $row["rank"];
                                $productName = $row['productName'];
                                $brandName = $row['brandName'];
                                $target = $row['target'];
                                $param = $row['fivParam'];
                                echo "
                                    <div class='div-block-8'>
                                        <div class='div-block-7 datarow'>" . $rank . "</div>
                                        <div class='div-block-7 productnamecol datarow'>" . $productName . "</div>
                                        <div class='div-block-7 brandnamecol datarow'>" . $brandName . "</div>
                                        <div class='div-block-7 datarow'>" . $target . "</div>
                                        <div class='div-block-7 datarow'>" . $param . "</div>
                                    </div>
                                ";
                            }
                        } else {
                            printf("%s", mysqli_error($mysqli));
                        }
                        mysqli_free_result($res);
                        mysqli_close($mysqli);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6541d9f4fbd73e9498319e4c"
        type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
</body>

</html>

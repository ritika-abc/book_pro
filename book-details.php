
<?php
 
include "./admin/db.php";


?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <meta name="description" content>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/icon/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/price_rangs.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script nonce="9291d937-9031-4df0-8de2-6c8cbccf88df">
        (function(w, d) {
            ! function(U, V, W, X) {
                U[W] = U[W] || {};
                U[W].executed = [];
                U.zaraz = {
                    deferred: [],
                    listeners: []
                };
                U.zaraz.q = [];
                U.zaraz._f = function(Y) {
                    return async function() {
                        var Z = Array.prototype.slice.call(arguments);
                        U.zaraz.q.push({
                            m: Y,
                            a: Z
                        })
                    }
                };
                for (const $ of ["track", "set", "debug"]) U.zaraz[$] = U.zaraz._f($);
                U.zaraz.init = () => {
                    var ba = V.getElementsByTagName(X)[0],
                        bb = V.createElement(X),
                        bc = V.getElementsByTagName("title")[0];
                    bc && (U[W].t = V.getElementsByTagName("title")[0].text);
                    U[W].x = Math.random();
                    U[W].w = U.screen.width;
                    U[W].h = U.screen.height;
                    U[W].j = U.innerHeight;
                    U[W].e = U.innerWidth;
                    U[W].l = U.location.href;
                    U[W].r = V.referrer;
                    U[W].k = U.screen.colorDepth;
                    U[W].n = V.characterSet;
                    U[W].o = (new Date).getTimezoneOffset();
                    if (U.dataLayer)
                        for (const bg of Object.entries(Object.entries(dataLayer).reduce(((bh, bi) => ({
                                ...bh[1],
                                ...bi[1]
                            })), {}))) zaraz.set(bg[0], bg[1], {
                            scope: "page"
                        });
                    U[W].q = [];
                    for (; U.zaraz.q.length;) {
                        const bj = U.zaraz.q.shift();
                        U[W].q.push(bj)
                    }
                    bb.defer = !0;
                    for (const bk of [localStorage, sessionStorage]) Object.keys(bk || {}).filter((bm => bm.startsWith("_zaraz_"))).forEach((bl => {
                        try {
                            U[W]["z_" + bl.slice(7)] = JSON.parse(bk.getItem(bl))
                        } catch {
                            U[W]["z_" + bl.slice(7)] = bk.getItem(bl)
                        }
                    }));
                    bb.referrerPolicy = "origin";
                    bb.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(U[W])));
                    ba.parentNode.insertBefore(bb, ba)
                };
                ["complete", "interactive"].includes(V.readyState) ? zaraz.init() : U.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

    <header>
        <div class="header-area">
            <div class="main-header ">
                <div class="header-top ">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="d-flex justify-content-between align-items-center flex-sm">
                                    <div class="header-info-left d-flex align-items-center">

                                        <div class="logo">
                                            <a href="index.html"><img src="assets/img/logo/logo.png" alt></a>
                                        </div>

                                        <form method="post" action="search.php" class="form-box">
                                            <input type="search" name="search" placeholder="Search book by author or publisher">
                                            <button type="submit" name="submit" class="search-icon ">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </form>
                                        <div>
                                            <?php
                                            // include "admin/db.php";
                                            // if (isset($_POST['submit'])) {
                                            //     $search = $_POST['search'];
                                            //     $in = "SELECT * FROM `pro` where title like '%$search%'";
                                            //     // imp
                                            //     $qu = mysqli_query($con, $in);
                                            //     if (mysqli_num_rows($qu) > 0) {
                                            //         while ($row = mysqli_fetch_assoc($qu)) {
                                                   
                                            //             echo "<a href='search.php?pro_id=" . $row['pro_id'] . "'>" . $row['title'] . "</a>";
                                            //         }
                                            //     }
                                            // }

                                            ?>

                                        </div>



                                    </div>
                                    <div class="header-info-right d-flex align-items-center">
                                        <ul>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">Track Order</a></li>
                                            <li class="shopping-card">
                                                <a href="cart.html"><img src="assets/img/icon/cart.svg" alt></a>
                                            </li>
                                            <li><a href="login.html" class="btn header-btn">Sign in</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom  header-sticky">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12">

                                <div class="logo2">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt></a>
                                </div>

                                <div class="main-menu text-center d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="index.php" class="text-decoration-none fw-bold"> Home</a></li>
                                            <li><a href="category.php" class="text-decoration-none fw-bold">Categories</a></li>
                                            <li><a href="about.html" class="text-decoration-none fw-bold">About</a></li>
                                            <li><a href="#" class="text-decoration-none fw-bold">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="book-details.html">book Details</a></li>
                                                    <li><a href="blog_details.html">Blog Details</a></li>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html" class="text-decoration-none fw-bold">Blog</a></li>
                                            <li><a href="contact.html" class="text-decoration-none fw-bold">Contect</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <div class="col-xl-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
    <main>

        <?php
        $pro_id = $_GET['pro_id'];
        include "admin/db.php";
        $sel = "SELECT * FROM `pro` WHERE `pro_id` = '$pro_id'   ";
        $query = mysqli_query($con, $sel);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <div class="services-area2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">

                                    <div class="single-services d-flex align-items-center text-capitalize mb-0">
                                        <div class="features-img">
                                            <img src="admin/<?php echo $row['image'] ?>" height="250px" width="100%" alt="image">
                                        </div>
                                        <div class="features-caption">
                                            <h3><?php echo $row['title'] ?></h3>
                                            <p><?php echo $row['title'] ?></p>
                                            <div class="price">
                                                <span><?php echo $row['price'] ?></span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(<span>120</span> Review)</p>
                                            </div>
                                            <a href="#" class="white-btn mr-10">Add to Cart</a>
                                            <a href="#" class="border-btn share-btn"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="container mt-5 mb-5">
                <div class="row justify-content-center">

                    <div class="col-10">
                        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                                    Author</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                                    Comments</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>review</button>
                            </li>
                        </ul>
                        <div class="tab-content text-capitalize" id="myTabContent" style="color:#8b8889;line-height :1.7;">
                            <div class="tab-pane fade show active text-capitalize"  id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0"><?php echo $row['description'] ?></div>
                            <div class="tab-pane fade"  id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0"><?php echo $row['title'] ?></div>
                            <div class="tab-pane fade"  id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
                            <div class="tab-pane fade"  id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...</div>
                        </div>
                    </div>
                </div>
            </div>
        <?php   } ?>


        <section class="subscribe-area">
            <div class="container">
                <div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="assets/img/gallery/section-bg1.jpg">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8 col-md-9">
                            <h3>Join Newsletter</h3>
                            <p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to ensure pure water and affordable irrigation.</p>
                            <form action="#">
                                <input type="text" placeholder="Enter your email">
                                <button class="subscribe-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    
    <?php
include "include/footer.php";
?>
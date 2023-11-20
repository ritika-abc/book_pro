<?php
include "include/header.php";
?>
 
    <main>

        <div class="slider-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider-active dot-style">

                            <div class="single-slider slider-height slider-bg1 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg2 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider slider-height slider-bg3 d-flex align-items-center">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-xxl-4 col-xl-4 col-lg-5 col-md-6 col-sm-7">
                                            <div class="hero-caption text-center">
                                                <span data-animation="fadeInUp" data-delay=".2s">Science Fiction</span>
                                                <h1 data-animation="fadeInUp" data-delay=".4s">The History<br> of Phipino</h1>
                                                <a href="#" class="btn hero-btn" data-animation="bounceIn" data-delay=".8s">Browse Store</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="best-selling section-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Best Selling Books Ever</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="selling-active">
                            <?php
                            include "admin/db.php";
                            $sel = "SELECT * FROM `pro`";
                            $query = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>

                                <div class="properties pb-20">
                                    <div class="properties-card">
                                        <div class="properties-img">
                                            <a href="book-details.php?pro_id=<?php echo $row['pro_id']; ?>"><img src="admin/<?php echo $row['image'] ?>" height="250px" width="100%" alt="image"></a>
                                            <!-- <a href="single+book.php"><img src="admin/image/1.jpg" alt="qqq"></a> -->
                                        </div>

                                        <div class="properties-caption">
                                            <h3><a href="book-details.html"><?php echo $row['title'] ?></a></h3>

                                            <p> dddddd</p>
                                            <div class="properties-footer d-flex justify-content-between align-items-center">
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
                                                <div class="price">
                                                    <span>$<?php echo $row['price'] ?></span>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="services-area2 top-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-8">
                        <div class="row">

                            <div class="col-xl-12">
                                <div class="section-tittle d-flex justify-content-between align-items-center mb-40">
                                    <h2 class="mb-0">Featured This Week</h2>
                                    <a href="#" class="browse-btn">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="services-active">

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/best-books1.jpg" alt>
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.svg" alt>
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details.html" class="border-btn">View Details</a>
                                        </div>
                                    </div>

                                    <div class="single-services d-flex align-items-center">
                                        <div class="features-img">
                                            <img src="assets/img/gallery/best-books1.jpg" alt>
                                        </div>
                                        <div class="features-caption">
                                            <img src="assets/img/icon/logo.svg" alt>
                                            <h3>The Rage of Dragons</h3>
                                            <p>By Evan Winter</p>
                                            <div class="price">
                                                <span>$50.00</span>
                                            </div>
                                            <div class="review">
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>(120 Review)</p>
                                            </div>
                                            <a href="book-details.html" class="border-btn">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-9">

                        <div class="google-add">
                            <img src="assets/img/gallery/ad.jpg" alt class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="our-client section-padding best-selling " style="margin-bottom:120px;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-5 col-lg-5 col-md-12">

                        <div class="section-tittle  mb-40">
                            <h2>most views Published books</h2>
                        </div>
                    </div>

                </div>
            </div>
            <div class="nav-button">

                <?php
                include_once("./admin/db.php");
                $category_sql = "SELECT * FROM cat  ";
                $resultset = mysqli_query($con, $category_sql) or die("database error:" . mysqli_error($con));
                $active_class = 0;
                $category_html = '';
                $product_html = '';
                while ($row = mysqli_fetch_assoc($resultset)) {
                    $current_tab = "";
                    $current_content = "";
                    if (!$active_class) {
                        $active_class = 1;
                        $current_tab = 'active';
                        $current_content = 'in active';
                    }
                    $category_html .= '<li class="  '  . $current_tab . '"><a  class="nav-link active" href="#' . $row['cat_id'] . '" data-toggle="tab">' .
                        $row['cat_name'] . '</a></li>';
                    $product_html .= '<div id="' . $row["cat_id"] . '" class="tab-pane fade ' . $current_content . '">';
                    $product_sql = "SELECT * FROM pro WHERE cat_id = " . $row["cat_id"];
                    $product_results = mysqli_query($con, $product_sql) or die("database error:" . mysqli_error($con));
                    if (!mysqli_num_rows($product_results)) {
                        $product_html .=  '<br>No product found!';
                    }
                    while ($product = mysqli_fetch_assoc($product_results)) {
                        $product_html .= '<div class="col-md-2 text-center product py-4">';

                        $product_html .=  '<img src="admin/' . $product["image"] . '" class=" " height="250px" width="100%" />';
                        $product_html .=  '<h4>   ' . $product["title"] . '</h4>';
                        $product_html .=  '
                        <div class="properties-footer   d-flex justify-content-between align-items-center">
                        <div class="review   ">
                            <div class="rating">
                                <i class="fa-solid text-warning fa-star"></i>
                                <i class="fa-solid text-warning fa-star"></i>
                                <i class="fa-solid text-warning fa-star"></i>
                                <i class="fa-solid text-warning fa-star"></i>
                                <i class="fa-solid text-warning fa-star-half-alt"></i>
                            </div>
                            <p>(<span>120</span> Review)</p>
                        </div>
                        <div class="price">
                            <span class="fw-bold text-danger   d-inline-block"> ' . '$' . $product["price"] . '</span>
                        </div>
                    </div>
                        
                        ';
                        $product_html .=  '</div>';
                    }
                    $product_html .=  '<div class="clear_both"></div></div>';
                }
                ?>

                <ul class="nav nav-tabs nav-button">
                    <?php echo $category_html; ?>
                </ul>
                <div class="tab-content" style="float:none;clear:both">
                    <?php echo $product_html; ?>

                </div>

            </div>
        </section>


        <section class="container  " style="float:none;clear:both">
            <div>
                <div class="linking text-center">
                    <a href="#" class="btn wantToWork-btn text-dark border border-danger">View All Books</a>
                </div>
            </div>
            <div class="  " style="margin-top:  5rem;"> </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg1.jpg">
                        <h2>The History<br> of Phipino</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="wantToWork-area w-padding2 mb-30" data-background="assets/img/gallery/wants-bg2.jpg">
                        <h2>Wilma Mumduya</h2>
                        <div class="linking">
                            <a href="#" class="btn wantToWork-btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
    ob_end_flush();
    include "include/footer.php";
    ?>
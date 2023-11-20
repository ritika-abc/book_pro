<?php

include "include/header.php";

?>
<main>

  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="slider-area">
          <div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
            <div class="hero-caption hero-caption2">
              <h2>Book Category</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="listing-area pt-50 pb-50">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-6">
          <div class="category-listing mb-50">
            <div class="single-listing">
              <div class="select-Categories pb-30">
                <div class="small-tittle mb-20">
                  <h4>Filter by Genres</h4>
                </div>
                <!--  -->
                <?php
                include "admin/db.php";
                $sel = "SELECT * FROM `cat`";
                $query = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($query)) {
                ?>
                  <!-- <li class="my-3"><a href="" class="text-capitalize fw-bold  box_a"></a></li> -->
                  <a href="Cat-Page.php?cat_id=<?php echo $row['cat_id'] ?>" class="box_a">
                    <p><i class="fa-solid fa-circle-check "></i> <?php echo $row['cat_name'] ?></p>
                  </a>
                <?php
                }
                ?>
                <!--  -->
              </div>
              <div class="select-Categories">
                <div class="small-tittle mb-20">
                  <h4>Filter by Author Name</h4>
                </div>
                <!--  -->
                <?php

                include "admin/db.php";
                $sel = "SELECT * FROM `sub_cat`  ";
                $query = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($query)) {
                ?>

                  <a href="Single-author.php?sub_id=<?php echo $row['sub_id'] ?>" class="box_a">
                    <p><i class="fa-solid fa-circle-check "></i> <?php echo $row['author_name'] ?></p>
                  </a>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-6">
          <div class="row justify-content-end">
            <div class="col-xl-4">
              <div class="product_page_tittle">
                <div class="short_by">
                  <select name="#" id="product_short_list">
                    <option>Browse by popularity</option>
                    <option>Name</option>
                    <option>NEW</option>
                    <option>Old</option>
                    <option>Price</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="best-selling p-0">
            <div class="row">
              <!--  -->
              <?php
              include "admin/db.php";
              $sel = "SELECT * FROM `pro`";
              $query = mysqli_query($con, $sel);
              while ($row = mysqli_fetch_array($query)) {
              ?>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
                  <div class="properties pb-30">
                    <div class="properties-card">
                      <div class="properties-img">
                        <a href="book-details.html"><img src="admin/<?php echo $row['image'] ?>" alt></a>
                      </div>
                      <div class="properties-caption properties-caption2">
                        <h3><a href="book-details.html"><?php echo $row['title'] ?></a></h3>
                        <p><?php echo $row['title'] ?></p>
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
                </div>
                <!--  -->
              <?php } ?>

            </div>
          </div>

          <div class="row">
            <div class="col-xl-12">
              <div class="more-btn text-center mt-15">
                <a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


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
<footer>
  <div class="footer-wrappper section-bg">
    <div class="footer-area footer-padding">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-3 col-lg-5 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="single-footer-caption mb-30">

                <div class="footer-logo mb-25">
                  <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt></a>
                </div>
                <div class="footer-tittle">
                  <div class="footer-pera">
                    <p>Get the breathing space now, and we’ll extend your term at the other end year for go.</p>
                  </div>
                </div>

                <div class="footer-social">
                  <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Book Category</h4>
                <ul>
                  <li><a href="#">History</a></li>
                  <li><a href="#">Horror - Thriller</a></li>
                  <li><a href="#">Love Stories</a></li>
                  <li><a href="#">Science Fiction</a></li>
                  <li><a href="#">Business</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>&nbsp;</h4>
                <ul>
                  <li><a href="#">Biography</a></li>
                  <li><a href="#">Astrology</a></li>
                  <li><a href="#">Digital Marketing</a></li>
                  <li><a href="#">Software Development</a></li>
                  <li><a href="#">Ecommerce</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle">
                <h4>Site Map</h4>
                <ul class="mb-20">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom-area">
      <div class="container">
        <div class="footer-border">
          <div class="row d-flex align-items-center">
            <div class="col-xl-12 ">
              <div class="footer-copy-right text-center">
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" style="color: black" target="_blank" rel="nofollow noopener">Colorlib</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="back-top">
  <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<?php

include "include/footer.php";

?>
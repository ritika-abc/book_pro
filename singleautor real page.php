<?php
include "include/header.php";
?>
<main>
    <div class="cat_bg  ">
        <h2 class=" display-5">all books</h2>
    </div>
</main>
<section>
    <div class="container">
        <div class="row  ">
            <div class="col-12 shadow-lg col-md-12 col-lg-3  ">
                <div class="  p-3">
                    <div class="box px-4 my-2  ">
                        <p class="  fw-bold"> Filter by category</p>
                        <ul class="list-unstyled">
                            <?php
                            include "admin/db.php";
                            $sel = "SELECT * FROM `cat`";
                            $query = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <li class="my-3"><a href="Cat-Page.php?cat_id=<?php echo $row['cat_id'] ?>" class="text-capitalize fw-bold  box_a"><?php echo $row['cat_name'] ?></a></li>

                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="box px-4 py-4 my-2  ">
                        <p class="  fw-bold">Filter by price</p>
                        <ul class="list-unstyled">
                            <?php

                            include "admin/db.php";
                            $sel = "SELECT * FROM `sub_cat`  ";
                            $query = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <li class="my-3 "><a href="Single-author.php?sub_id=<?php echo $row['sub_id'] ?>" class="text-capitalize fw-bold  box_a"><?php echo $row['author_name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-8 ">
                <div class="row">
                    <?php
                    $sub_id = $_GET['sub_id'];
                    include "admin/db.php";
                    $sel = "SELECT * FROM `pro` where `sub_id`='$sub_id'";
                    $query = mysqli_query($con, $sel);
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="col-12 col-md-12 col-lg-4 ">
                            <a href="#" class="text-decoration-none my-4 text-capitalize    d-block border">
                                <div class="card_box">
                                    <div class="img">
                                        <img src="admin/<?php echo $row['image'] ?>" height="auto" width="100%" alt="image">
                                    </div>

                                    <div class="contaent pb-3 px-3   ">
                                        <h4 class="text-dark fw-bold  mt-5"><?php echo $row['title'] ?></h4>
                                        <h5>skdjfkj</h5>
                                        <div class="review mt-3">
                                            <div class="rating">
                                                <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                <i class="fa-solid  fa-star" style="color:#FF5700;"></i>
                                                <i class="fa-solid  fa-star-half-alt" style="color:#FF5700;"></i>
                                            </div>
                                            <small class="float-end text-danger fs-4 fw-bold">$<?php echo $row['price'] ?></small>
                                            <small>(120 Review)</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "include/footer.php";
?>
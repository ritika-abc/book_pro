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
                        <p><i class="fa-solid fa-circle-check " style="color: #ff1616;"></i> <?php echo $row['cat_name'] ?></p>
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
                // $cat_id = $_GET['cat_id'];
                include "admin/db.php";
                $sel = "SELECT * FROM `sub_cat` ";
                $query = mysqli_query($con, $sel);
                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <a href="Single-author.php?sub_id=<?php echo $row['sub_id'] ?>" class="box_a">
                        <p><i class="fa-solid fa-circle-check " style="color: #ff1616;"></i> <?php echo $row['author_name'] ?></p>
                    </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
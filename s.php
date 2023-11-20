<?php
include "include/header.php";
?>
 
<section>
    <div class="container">
        <div class="row  ">
            <div class="col-12 shadow-lg col-md-12 col-lg-3  ">
                <div class="  p-3">
                    <div class="box p-4 my-2  ">
                        <p class="  fw-bold">  Filter by category</p>
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
                    <div class="box p-4 my-2  ">
                        <p class="  fw-bold">Filter by price</p>
                        <ul class="list-unstyled">
                            <?php
                            include "admin/db.php";
                            $sel = "SELECT * FROM `sub_cat` where `cat_id`='$cat_id' ";
                            $query = mysqli_query($con, $sel);
                            while ($row = mysqli_fetch_array($query)) {
                            ?>
                                <li class="my-3 "><a href="" class="text-capitalize fw-bold box_a"><?php echo $row['author_name'] ?></a></li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                    
                </div>
            </div>           
        </div>
    </div>
</section>
<?php
include "include/footer.php";
?>
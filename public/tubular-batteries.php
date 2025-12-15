<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<main class="s1">
    <div class="main-wrapper">
        <div class="page-banner page-banner--contact">
            <div class="page-banner-caption">
                <h5 class="txt-light txt-capitalize">Tubular Batteries</h5>
            </div>
        </div>

        <div class="product-wrapper section-entry">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <ul class="nav nav-pills mb-3 justify-content-center" id="tubular-pills" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="tall-tab" data-bs-toggle="pill"
                                    data-bs-target="#tall" type="button" role="tab">
                                    Tall Tubular
                                </button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link " id="short-tab" data-bs-toggle="pill" data-bs-target="#short"
                                    type="button" role="tab">
                                    Short Tubular
                                </button>
                            </li>


                        </ul>

                        <div class="tab-content" id="tubular-content">


                            <div class="tab-pane fade show active" id="tall" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <?php 
                                    $query = "SELECT * FROM product_specifications WHERE category = 'tall_tubular'";
                                    $result = mysqli_query($link, $query);
                                    while($row = mysqli_fetch_assoc($result)) 
                                    {
                                    ?>
                                        <div class="col-md-4 mt-4 aos-init aos-animate" data-aos="fade-up">
                                            <div class="product-card-wrap">
                                                <div class="img-product">
                                                    <img src="<?php echo $path; ?>img/<?php echo $row['image']; ?>"
                                                        alt="Tall Tubular Battery" class="img-fluid">
                                                </div>
                                                <div class="product-details">
                                                    <h4><?php echo  $row['model']; ?></h4>
                                                </div>
                                                <div class="product-detail-btn mrt30">
                                                    <a href="<?php echo $path; ?>tall-tubular-battery?id=<?php echo $row['id']; ?>">View Details</a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade  " id="short" role="tabpanel">
                                <div class="container">
                                    <div class="row">
                                        <?php 
                                            $query = "SELECT * FROM product_specifications WHERE category = 'short_tubular'";
                                            $result = mysqli_query($link, $query);
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {
                                            ?>
                                        <div class="col-md-4 mt-4 aos-init aos-animate" data-aos="fade-up">
                                            <div class="product-card-wrap">
                                                <div class="img-product">
                                                   <img src="<?php echo $path; ?>img/<?php echo $row['image']; ?>"
                                                        alt="Short Tubular Battery " class="img-fluid">
                                                </div>
                                                <div class="product-details">
                                                    <h4><?php echo  $row['model']; ?></h4>
                                                </div>
                                                <div class="product-detail-btn mrt30">
                                                   <a href="<?php echo $path; ?>tall-tubular-battery?id=<?php echo $row['id']; ?>">View Details</a>
                                                </div>
                                            </div>
                                        </div>

                                        <?php } ?>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
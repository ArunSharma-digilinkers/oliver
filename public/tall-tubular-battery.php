<?php require('../resources/config.php'); ?>

<?php include_once(TEMPLATE_FRONT . DS . 'header.php'); ?>

<?php 

    $id = $_GET['id'];

    $query = "SELECT * FROM `product_specifications` WHERE id= '$id' ";

    $result = $link->query($query);

    $row = $result->fetch_assoc();

 ?>

<main class="s1">
    <div class="main-wrapper">
        <div class="page-banner page-banner--contact">
            <div class="page-banner-caption">
                <h5 class="txt-light txt-capitalize">Tubular Batteries</h5>
            </div>
        </div>
        <div class="product-wrap-container section-entry">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h4 class="fontweight-txt">Model : <?php echo $row['model']; ?></h4>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="automotive-wrap-img">
                            <img src="<?php echo $path; ?>img/<?php echo $row['image']; ?>" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th scope="col">Voltage</td>
                                    <td scope="col"><?php echo $row['voltage']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Capacity</th>
                                    <td><?php echo $row['capacity']; ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Length</th>
                                    <td><?php echo $row['length']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Width</th>
                                    <td><?php echo $row['width']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Height</th>
                                    <td><?php echo $row['height']; ?></td>
                                </tr>
                                <tr>
                                    <th scope="row">Free Replacement</th>
                                    <td><?php echo $row['free-replacement']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>


<?php include_once(TEMPLATE_FRONT . DS . 'footer.php'); ?>
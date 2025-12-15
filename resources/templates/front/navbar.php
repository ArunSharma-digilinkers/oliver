<nav class="navbar navbar-expand-lg navbar-light fixed-top dd-nav">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $path; ?>">
            <img src="<?php echo $path; ?>img/logo.png" alt="" class="img-fluid logo-img" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo $path; ?>">Home <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>about-us">About Us</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>management">Management</a>
                </li>
                <li class="nav-item dropdown-nav">
                    <a class="nav-link dropdown-nav-link" >Products</a>
                    <i class="fa-solid fa-chevron-down hidden-menu"></i>
                    <ul class="sub-drop sub-menu">
                        <li><a href="<?php echo $path; ?>tubular-batteries">Tubular Batteries</a></li>
                    </ul> 
                </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>manufacturing">Manufacturing</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $path; ?>contact-us">Contact Us</a>
                </li>
            </ul>
        </div>
    </div> 
</nav>
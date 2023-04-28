<!DOCTYPE html>
<html lang="en">

<head>
<?php
include 'links.php';
?>
</head>

<body>


<?php
include 'header.php';
?>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Connect Driver With Client</h1>
                                    <a href="https://en.wikipedia.org/wiki/Uber" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="courses.html" class="btn btn-light py-sm-3 px-sm-5 ms-3">About us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7">
                                    <h1 class="display-2 text-light mb-5 animated slideInDown">Safe Driving Is Our Top Priority</h1>
                                    <a href="https://en.wikipedia.org/wiki/Uber" class="btn btn-primary py-sm-3 px-sm-5">Learn More</a>
                                    <a href="courses.html" class="btn btn-light py-sm-3 px-sm-5 ms-3">about us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    

    <?php
include 'footer.php';
?>
</body>

</html>
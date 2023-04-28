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

        <!-- Page Header Start -->
        <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="container text-center">
                <h1 class="display-4 text-white animated slideInDown mb-4">Request</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">Request</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Contact Start -->
        <div class="container-xxl py-6">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 450px;">
                        <div style="width: 90%"><iframe width="90%" height="500" frameborder="0" scrolling="no"
                                marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=100%25&amp;height=200&amp;hl=en&amp;q=V888+FF3,%20Al%20Sikka%20Al%20Hadid%20Al%20Gharbeya,%20Al%20Masaken%20Al%20Iqtisadeyah,%20Helwan,%20Cairo%20Governorate%204034572,%20Egypt+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                                <a href="https://www.maps.ie/distance-area-calculator.html">area maps</a>
                            </iframe></div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <h6 class="text-primary text-uppercase mb-2">User Request</h6>
                        <h1 class="display-6 mb-4">Get A Ride </h1>

                        <form action="" method="">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" id="name"
                                            placeholder="Your Name">
                                        <label name="name">User Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light"
                                            placeholder="Location">
                                        <label name="Location">Your Location</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" 
                                            placeholder="destination">
                                        <label name="destination">Destination</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light"
                                            placeholder="payment">
                                        <label name="payment">Cash Or Visa</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 bg-light" 
                                            placeholder="type">
                                        <label name="type">Ride Or Ship Or Order</label>
                                    </div>
                                </div>
                                
                                </div>
                                
                                
                                <br>
                                
                                <br>
                                 <center><div class="col-12">
                                    <button class="btn btn-primary py-3 px-5" type="submit">Request</button>
                                </div></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php
include 'footer.php';
?>
    </body>

</html>
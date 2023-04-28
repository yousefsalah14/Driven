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
            <h1 class="display-4 text-white animated slideInDown mb-4">Update Information</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Freight</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <center>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Update Info</h6>
                    <h1 class="display-6 mb-4">If You Want Update your Information</h1>
                    
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="password" class="form-control border-0 bg-light"  placeholder="New Password">
                                    <label name="Password">Your Password</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 bg-light" id="subject" placeholder="Username">
                                    <label name="usernamae">Username</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Update </button></center>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <?php
include 'footer.php';
?>
</body>

</html>
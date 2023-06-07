<?php
    session_start();
    include("./config/headerHome.php");
    require("./config/server.php");

    $sql = "SELECT * FROM postedjobs";
    $sql2 = "SELECT * FROM companyprofile";

    $result = $connection->query($sql);

    // Check if there are any job listings
    // if (mysqli_num_rows($result) > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $jobTitle = $row['JobName'];
    //         $companyName = $row['company'];
    //         $location = $row['JobLocation'];
    //         $sector = $row['JobSector'];
    //         $location = $row['JobLocation'];
    //         $contract = $row['ContractType'];
    //         $hours = $row['WorkingHours'];
    //         $salary = $row['Salary'];
    //         $period = $row['S_TimePeriod'];
    //         $description = $row['J_Description'];
    //         $skills = $row['skillsRequired'];
    //         $education = $row['EdLevels'];
  
            // Display job listing HTML
            // echo "
            //     <div class=job-item p-4 mb-4'>
            //         <div class='row g-4'
            //             <div class='col-sm-12 col-md-8 d-flex align-items-center'>
            //                 <img class='flex-shrink-0 img-fluid border rounded' >
            //                     <div class='text-start ps-4'>
            //                         <h5 class='mb-3'>$companyName</h5>
            //                         <h5 class='mb-3'>$jobTitle</h5>
            //                         <span class='text-truncate me-3'><i class='fa fa-map-marker-alt text-primary me-2'></i>$location</p>
            //                         <span class='text-truncate me-3'><i class='far fa-clock text-primary me-2'></i>$contract</span>
            //                         <span class='text-truncate me-0'><i class='far fa-money-bill-alt text-primary me-2'>$salary</span>
            //                     </div>
            //                     <div class='col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center'>
            //                         <div class='d-flex mb-3'>
            //                             <a class='btn btn-light btn-square me-3' href=''><i class='far fa-heart text-primary'></i></a>
            //                             <a class='btn btn-primary' href=''>Apply Now</a>
            //                         </div>
            //                         <!-- <small class='text-truncate'><i class='far fa-calendar-alt text-primary me-2'></i>Date Line: 01 Jan, 2045</small> -->
            //                     </div>
            //                 </div>
            //             </div>
            //         </div>";
    //     }
    // } else {
    //     echo "No job listings found.";
    // }
  
  // Close the database connection
  mysqli_close($connection);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/Project/CSS/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/Project/CSS/home.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">



        <!-- Search Start -->
        <!-- <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2"> -->
                    <!-- <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Search End -->


        <!-- Category Start -->
      
        <!-- Category End -->


        <!-- About Start -->

        <!-- About End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Featured</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <h6 class="mt-n1 mb-0">Full Time</h6>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <h6 class="mt-n1 mb-0">Part Time</h6>
                            </a>
                        </li>
                    </ul>
                            
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">Company</h5>
                                            <h5 class="mb-3">Software Engineer</h5>
                                            
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>New York, USA</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>$123 - $456</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="">Apply Now</a>
                                        </div>
                                        <!-- <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small> -->
                                    </div>
                                </div>
                            </div>
                            <?php
                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $jobTitle = $row['JobName'];
                                        $companyName = $row['company'];
                                        $location = $row['JobLocation'];
                                        $sector = $row['JobSector'];
                                        $location = $row['JobLocation'];
                                        $contract = $row['ContractType'];
                                        $hours = $row['WorkingHours'];
                                        $salary = $row['Salary'];
                                        $period = $row['S_TimePeriod'];
                                        $description = $row['J_Description'];
                                        $skills = $row['skillsRequired'];
                                        $education = $row['EdLevels'];
                                        echo "
                    <div class=job-item p-4 mb-4'>
                        <div class='row g-4'
                            <div class='col-sm-12 col-md-8 d-flex align-items-center'>
                                <img class='flex-shrink-0 img-fluid border rounded' >
                                <div class='text-start ps-4'>
                                    <h5 class='mb-3'>$companyName</h5>
                                    <h5 class='mb-3'>$jobTitle</h5>
                                    <span class='text-truncate me-3'><i class='fa fa-map-marker-alt text-primary me-2'></i>$location</p>
                                    <span class='text-truncate me-3'><i class='far fa-clock text-primary me-2'></i>$contract</span>
                                    <span class='text-truncate me-0'><i class='far fa-money-bill-alt text-primary me-2'>$salary</span>
                                </div>
                                <div class='col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center'>
                                    <div class='d-flex mb-3'>
                                        <a class='btn btn-light btn-square me-3' href=''><i class='far fa-heart text-primary'></i></a>
                                        <a class='btn btn-primary' href=''>Apply Now</a>
                                    </div>
                                    <!-- <small class='text-truncate'><i class='far fa-calendar-alt text-primary me-2'></i>Date Line: 01 Jan, 2045</small> -->
                                </div>
                            </div>
                        </div>
                    </div>";
                }
            } else {
                echo "No job listings found.";
            }?>      
                    <a class="btn btn-primary py-3 px-5" href="/Project/PHP/page.php">Browse Via Adzuna</a>

        <!-- Jobs End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JUSTICE - Free Lawyer Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>

<body>
    <!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h6 class="m-0 display-4 text-primary text-uppercase">eServices</h6>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-white border-bottom d-none d-lg-flex">
                <div class="col-lg-7 text-left">
                    <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>elegalservices@yahoo.com</small>
                    </div>
                    <div class="h-100 d-inline-flex align-items-center py-2 px-2">
                        <i class="fa fa-phone-alt text-primary mr-2"></i>
                        <small>+91 2586789</small>
                    </div>
                </div>
                <div class="col-lg-5 text-right">
                    <div class="d-inline-flex align-items-center p-2">
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="btn btn-sm btn-outline-primary btn-sm-square mr-2" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-0">
                <a href="index.html" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Justice</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <a href="about.html" class="nav-item nav-link">About</a>
                        
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="" class="btn btn-primary mr-3 d-none d-lg-block">Logout</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->
<h2 style="text-align: center;"> Monthly Crime Rate</h2>
<canvas id="myChart" style="width:100%;max-width:400px"></canvas>

<script>
const xValues = ["Labour Matters", "Taxes Matter","Land Matters","Service Matters","Compensation Matters","Criminal Matters","Family Law Matters"];
const yValues = [60, 49, 44, 24, 50,85,78];
const barColors = ["red", "green","blue","orange","brown","yellow","black"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "June"
    }
  }
});
</script>  

      <!-- Footer Start -->
      <div class="container-fluid bg-secondary text-white pt-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row mt-5">
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-map-marker-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">elegalservices</h5>
                        <p class="m-0">123 Street, Trivandrum, Kerala</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Email Us</h5>
                        <p class="m-0">elegalservices@yahoo.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex justify-content-lg-center p-4" style="background: rgba(256, 256, 256, .05);">
                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                    <div class="ml-3">
                        <h5 class="text-white">Call Us</h5>
                        <p class="m-0">+91 2586789</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index.html" class="navbar-brand">
                    <h6 class="m-0 mt-n2 display-4 text-primary text-uppercase">eServices</h6>
                </a>
                <p>Connect through social media platforms</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Popular Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Admin</a>
                    
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>FAQs</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Help</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Terms</a>
                    <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Privacy</a>
                    <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Site Map</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-semi-bold text-primary mb-4">Get In Touch</h4>
                <p>To know more about elegalservices get in touch with our team by giving your emailid</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Get Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row p-4 mt-5 mx-0" style="background: rgba(256, 256, 256, .05);">
            <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a class="font-weight-bold" href="#">Elegal SErvices</a>. All Rights Reserved.</p>
            </div>
            <div class="col-md-6 text-center text-md-right">
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">C-DIT Kerala</a></p>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
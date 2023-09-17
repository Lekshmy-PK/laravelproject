<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eCourt</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">

    
    <link href="{{asset ('assets/img/nationalemblem.png')}}" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/js/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/js/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}"/>
</head>
<body>
<!-- Header Starts -->

@include('layouts.header')


    


    
@yield('content')

    
   


    
@include('layouts.footer')
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('assets/js/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets/js/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{ asset('assets/js/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js')}}"></script>
    <!--  Javascript functions -->
    <script src="{{ asset('assets/js/javascript.js')}}"></script>
</body>

</html>
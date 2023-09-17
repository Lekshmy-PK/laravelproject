<!-- Header Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 bg-secondary d-none d-lg-block">
            <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h6 class="m-0 display-4 text-primary text-uppercase">eCourt</h6>
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row bg-white border-bottom d-none d-lg-flex">
                <div class="col-lg-7 text-left">
                    <div class="h-100 d-inline-flex align-items-center py-2 px-3">
                        <i class="fa fa-envelope text-primary mr-2"></i>
                        <small>ecourtservices@yahoo.com</small>
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
                        <a href="{{route('home')}}" class="nav-item nav-link">Home</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Lawyers</a>
                        <!-- <label for="pageSelector"></label> -->
                        <select id="pageSelector" class="optionselect" onchange="redirectToPage(this)"> Login As
                            <option value="" disabled selected>Login As</option>
                            <option value="{{route('login')}}">Lawyer</option>
                                    <option value="{{route('login')}}">Client</option>
                                    <option value="{{route('login')}}">Studycase</option>
                                    <option value="{{route('login')}}">Clerk</option>
                                </select>

                                
                        </div>
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{route('signup')}}" class="btn btn-primary mr-3 d-none d-lg-block">Sign Up</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->

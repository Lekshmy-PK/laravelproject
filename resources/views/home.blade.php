@extends('layouts.theme')  

@section('content')
   
   <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel-1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Satyamev Jayathe</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Our fighting Is for your justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">File a case</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="assets/img/carousel-2.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Results You Deserve</h4>
                            <h3 class="display-2 text-capitalize text-white mb-4">Prepared to fight for justice</h3>
                            <a class="btn btn-primary py-3 px-5 mt-2" href="#">File a case</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-prev-icon"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-lg btn-secondary btn-lg-square">
                    <span class="carousel-control-next-icon"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5">
                    <img class="img-fluid rounded" src="assets/img/highcourtkerala.png" alt="">
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    
                    <h6 class="text-uppercase">Learn About Us</h6>
                    <h1 class="mb-4">Providing Reliable And Effective Legal Services</h1>
                    <p>Kerala High Court is the apex court in the Indian state of Kerala and in the Union Territory of Lakshadweep</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3">
                    
                    <h1 class="mb-4">Serving Justice</h1>
                    <p>The Indian Constitution empowers the Judiciary to act as the Guardian of the Law. A number of provisions deal with the Judiciary's role, power, function, and officer appointments.</p>
                    
                </div>
                <div class="col-lg-9 pt-5 pt-lg-0">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel service-carousel position-relative" style="margin-top: -100px; padding: 0 30px;">
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-landmark"></i>
                            </div>
                            <h5 class="mb-4 px-4">Civil Law</h5>
                            <p class="m-0">As the name suggests, Civil Law comprises of set of rules and regulations which helps in resolving disputes which are non-criminal in nature. The law in India is primarily governed by the Code of Civil Procedure, 1908 (CPC) which is a procedural law pertaining to administration of civil proceedings in India.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-users"></i>
                            </div>
                            <h5 class="mb-4 px-4">Family Law</h5>
                            <p class="m-0">There are five broad sets of family laws in India, namely Hindu law, which governs all Hindus, Buddhists, Jains, and Sikhs, Muslim law for the Muslims; Christian law for the Christian; Parsi law for the Parsis and secular law, i.e. the Special Marriage Act.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-hand-holding-usd"></i>
                            </div>
                            <h5 class="mb-4 px-4">Business Law</h5>
                            <p class="m-0">All the laws which pertain to how, what and why of how businesses are legally allowed to and supposed to function are encompassed by what is business law. Business law meaning includes contract laws, manufacturing and sales laws, and also hiring practices and ethics. In simple words, it refers to and pertains to the legal laws of business and commerce in the public as well as the private sector. Note that it is also known as commercial law and corporate law, due to its nature of regulating these worlds of business.</p>
                        </div>
                        <div class="d-flex flex-column align-items-center text-center bg-white rounded pt-4">
                            <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                                <i class="fa fa-2x fa-gavel"></i>
                            </div>
                            <h5 class="mb-4 px-4">Criminal Law</h5>
                            <p class="m-0">Criminal law can be regarded as the body of laws that deal with matters of criminal wrongs, for instance, theft, murder, sexual abuse, threatening, etc., and is also accountable for conducting a trial for convicted offenders. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="assets/img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="feature-text bg-white rounded p-lg-5">
                        
                        <h1 class="mb-4">Case Statistics</h1>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h6 class="text-secondary m-0">1875</h6>
                            </div>
                            <div class="ml-4">
                                <h5>Cases Filed</h5>
                                
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h6 class="text-secondary m-0">2845</h6>
                            </div>
                            <div class="ml-4">
                                <h5>Pending Cases</h5>
                                
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="btn-primary btn-lg-square px-3" style="border-radius: 50px;">
                                <h6 class="text-secondary m-0">3875</h6>
                            </div>
                            <div class="ml-4">
                                <h5>Closed Cases</h5>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    

    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center pb-2">
                
                <h1 class="mb-4">Cheif Justice</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="bg-primary rounded" style="height: 200px;"></div>
                    <div class="owl-carousel team-carousel position-relative" style="margin-top: -97px; padding: 0 30px;">
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">A.K Ram</h5>
                            <p class="mb-3 px-4">2022-Present</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-1.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Srinivas Iyyer</h5>
                            <p class="mb-3 px-4">2018-2022</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-2.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Jithendra Pal</h5>
                            <p class="mb-3 px-4">2015-2018</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-3.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Mitra Pandey</h5>
                            <p class="mb-3 px-4">2014-2015</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-4.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                            <h5 class="mb-2 px-4">Anna Chandy</h5>
                            <p class="mb-3 px-4">2011-2014</p>
                            <div class="team-img position-relative">
                                <img class="img-fluid" src="assets/img/team-5.jpg" alt="">
                                <div class="team-social">
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
   
    @endsection
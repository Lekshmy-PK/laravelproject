@extends('layouts.theme')  

@section('content')

    <!--Lawyer Section Starts-->
    <div class="row">
        <div class="col-lg">
            <div class="team-item text-center bg-white rounded overflow-hidden pt-4">
                <h5 class="mb-2 px-4">Lawyer Name</h5>
                <p class="mb-3 px-4">Practice Area</p>
                <div class="team-img position-relative">
                    <img class="img-fluid" src="img/team-3.jpg" alt="">                
                </div>
                <a href="" class="btn btn-primary mt-2">View Details</a>
            </div>
        </div>
        <div>
        <div class="col-lg" style="padding-top: 35%;" >
            <div class="row">
                <div style="display: inline-block;">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-landmark"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="activeCases.html" style="color: #37373F;">Active Cases</a> </h5> 
                                     
                </div>
                <div style="display: inline-block;">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-users"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="closedCases.html" style="color: #37373F; text-align: center; ">Closed Cases</a></h5>                   
                </div>
                <div style="display: inline-block;">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-hand-holding-usd"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="caseRequests.html" style="color: #37373F;">Case Requests</a></h5>                   
                </div>
            </div>
            <div class="row">
                <div style="display: inline-block;">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-gavel"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="caseClosingRequests.html" style="color: #37373F;">Closing Requests</a></h5>                    
                </div>
                <div style="display: inline-block;">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-gavel"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="documentsVerification.html" style="color: #37373F;">Documents Verification</a></h5>                    
                </div>
            </div>
            <div class="row">
                <div style="display: inline-block;">
                    <div class="icon-box bg-secondary text-primary mt-2 mb-4">
                        <i class="fa fa-2x fa-gavel"></i>
                    </div>
                    <h5 class="mb-4 px-4"><a href="" style="color: #37373F;">Case Schedule</a></h5>                    
                </div>
            </div>
            
        </div>
    </div>
</div>
<!--Lawyer Section Ends-->        
@endsection
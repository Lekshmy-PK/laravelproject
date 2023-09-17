@extends('layouts.theme')  

@section('content')

    

<!-- Appointment Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="bg-appointment rounded">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 py-5">
                    <div class="rounded p-5 my-5" style="background: rgba(55, 55, 63, .7);">
                        <h1 class="text-center text-white mb-4">Login Here</h1>
                        <form>
                            <table style="text-align: center;  margin-left: auto;  
                            margin-right: auto;  ">
                                <tr><td><input type="text" class="form-control border-0 p-4" placeholder="Your UserName" required="required" /></td></tr>
                                <tr><td><input type="text" class="form-control border-0 p-4" placeholder="Your Password" required="required" /></td></tr>
                                <tr><td id="id1"><button id="id1">Login</button></td> </tr>
      \     
                                <!-- <tr><td><span>Don't have an account? <a href="clientSignup.html">Signup</a></td> -->
                                  </tr>
                  
                            </table>
                            
                         
                            
                            
                            <!-- <div class="form-group">
                                <input type="text" class="form-control border-0 p-4" placeholder="Your UserName" required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 p-4" placeholder="Your Password" required="required" />
                            </div>                           
                            
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">Login</button>
                            </div>
                            <div>
                                <input type="text" class="form-control border-0 p-4" placeholder="Your UserName" required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" type="submit">SignUp</button>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appointment End -->




    


@endsection
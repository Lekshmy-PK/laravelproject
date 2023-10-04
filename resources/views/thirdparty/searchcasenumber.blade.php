@extends('layouts.profiletheme')
@section('content')
<h4 style="color:black; padding-left:16%; text-decoration:underline; padding: left 60%;">Thirdparty Dashboard</h4>
<div style="margin-left:5%;">
    <form method="POST" action="{{ route('get.casereport') }}">
        @csrf
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="display: inline-block;">
                        <label for="case_type">Select Case Type:</label>
                            <select name="casenumbers" id="case_number" class="form-control">
                                @foreach ($casenumbers as $casenumber)
                                <option value="{{ $casenumber }}">{{ $casenumber }}</option>        
                                @endforeach
                            </select>    
                            <div class="col-md-4" style="display: inline-block; padding-top: 2%;">
                                <button type="submit" class="btn btn-primary">Case Report</button>
                            </div>        
                    </div>
                </div>
            /div>
        </form>
</div>



<!-- Sidebar -->
<div class="sidebar">
      
      <!-- Sidebar Menu -->
      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                       src="{{asset('storage/ecourt/m1.jpg')}}"
                       alt="User profile picture">
                       <h6 style="color: white;">Name</h6>
                  </div>
               </div>
          <div class="text-center">
          
            <li class="nav-item">
                <h6 style="color: white; text-decoration:underline;">Dashboard</h6>
                <a href="../widgets.html" style="color: white;"  class="nav-link">
                    <p style="color: white;">
                        View Reports
                    </p>
                </a>
          </li>
        </ul>
      </nav>
    </div>
</div>
@endsection
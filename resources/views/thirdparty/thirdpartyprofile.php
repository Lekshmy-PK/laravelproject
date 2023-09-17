@extends('layouts.theme')  

@section('content')


    
    <div class="container">
        <div class="sidebar">
            <h2>Profile</h2>
            <p><i class='fas fa-user-alt' style='font-size:36px'></i></p>
        </div>
        <div class="content">
            Select Case Type
            <div class="dropdown">
                <select id="viewDropdown" onchange="changeView()">

                    <option value="profile">Criminal Law</option>
                    <option value="settings">Civil Law</option>
                    <option value="notifications">Family Law</option>
                </select>
            
            </div>
            <div class="viewContent">
                <!-- Content from selected view will be displayed here -->
            </div>
        </div>
    </div>
    
    @endsection
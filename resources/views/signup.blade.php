@extends('layouts.theme')  

@section('content')
   
<div class="signup-container">
        <h1 align="center">Sign Up</h1>
        <form method="post" enctype="Multipart/form-data" onsubmit="return validateForm()">
            <table align="center">
                <tr><td>Login As </td>
                <td>
                    
                   
                        <select name="" id="login" onclick="validateusertype()">Login As
                    <option value="select" id="select"></option>
                        <option value="Lawyer" id="lawyer" class="lawyer" >Lawyer</option>
                        
                        <option value="Client" id="client">Client</option>
                        <option value="Study Case" id="thirdpartyuser">Third Party User</option>
                        </select>
                        <br>
                        <span id="sp0"></span>
                    
                </td>
            </tr>
            
            <tr><td>Profile ID</td>
                <td><input type="text" id="id" name="profileid" onblur="validateProfileId()">
                <br>
                        <span id="sp1"></span></td>
                </tr>
            <tr><td >Name</td>
                <td><input type="text" id="name" name="name" onblur="validateName()">
                <br>
                        <span id="sp2"></span></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <div class="gender-options">
                        <input type="radio" name="gender" value="male" id="maleRadio" class="genderselect" onclick="validategender()"> Male
                        <input type="radio" name="gender" value="female" id="femaleRadio" class="genderselect" onclick="validategender()"> Female<br>
                        
                        <span id="sp3"></span>
                    </td>
                </tr>
                
            
           
            <tr><td>Date of birth</td>
            <td>
                <input type="date" id="dateofbirth" name="dateofbirth" onchange="validatedob()">
                <br>
                <span id="sp4"></span></td>
            
            </tr>
            
            <tr>
                <td>
                    <div id="divdisplayqualification">
                Educational Qualification 
                    </div>
            </td>
                <td>
                    <div id="divqualificationoption">
                        <select name="" id="qualification" onclick="validatequalification()">
                            <option value="select"></option>
                        <option value="LLB">LLB</option>
                        <option value="LLM">LLM</option>
                        </select>
                        <br>
                        <span id="sp5"></span>
        </div>
                    
                
                </td>
            </tr>
            <tr><td>
                <div id="divpracticeareadisplay">
                Practice Area 
            </div>
            </td>
                <td>
                    <div id="divlistpracticearea">
                        <select name="" id="practicearea" onclick="validatepracticearea()">Select Practice Area
                            <option value="select"></option>
                        <option value="civillaw">Civil Law</option>
                        <option value="criminallaw">Criminal Law</option>
                        <option value="familylaw">Family Law</option>
                    </select>
                        <br>
                        <span id="sp6"></span>
                    </div>
                    </td>
                        
                
                
            </tr>
            <tr><td>
                <div id="divdisplayexperience">
                Experience
            </div>
            </td>
                <td>
                    <div id="divlistexperience">
                    <input type="text" id="experience" name="experience" placeholder="Enter experience in number of yers" onblur="validateexperience()">
                    <br>
                    <span id="sp7"></span>
                </div>
                </td>
            </tr>
            <tr><td>Email id</td>
            <td><input type="text" id="email" name="email" onblur="validatemailid()">
            <br>
            <span id="sp8"></span></td>
            </tr>
            <tr><td>Phone Number</td>
            <td><input type="text" id="phonenumber" name="phonenumber" onblur="validatephonenumber()"><br>
                <span id="sp9"></span></td>
            </tr>
            <tr><td>Address</td>
            <td><textarea rows="3" cols="72" id="address" name="address" onblur="validateaddress()"></textarea><br>
                <span id="sp10"></span></td>
            </tr>
            <tr><td>Username</label></td>
                <td><input type="username" id="username" name="username" onblur="validateusername()"><br>
                <span id="sp11"></span></td>
    
            </tr>
            
            
            
            <tr><td>Password</label></td>
            <td><input type="password" id="password" name="password" onblur="validatepassword()"><span class="passwordinfo" onclick="getpasswordinfo()">&#8505;</span>
                <br>
            <span id="sp12"></span></td>

        </tr>
        <tr>
            <td>Upload ID Proof</td>
            <td> <input type="file" id="idproof" name="filename" placeholder="Upload your ID Proof" class="fileupload"  multiple accept=".jpg, .jpeg, .png">
            
            
            <tr>
                <td></td>
                <td align="center"><button type="submit" class="btn btn-primary mr-3 d-none d-lg-block">Sign Up</td></tr>
        </table>



    @endsection
































(function ($) {
    "use strict";
    
    // Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Date and time picker
    $('#date').datetimepicker({
        format: 'L'
    });
    $('#time').datetimepicker({
        format: 'LT'
    });


    // Service carousel
    $(".service-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        margin: 30,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:2
            },
            768:{
                items:3
            },
            992:{
                items:4
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        center: true,
        autoplay: true,
        smartSpeed: 1000,
        margin: 30,
        dots: true,
        loop: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);


function redirectToPage(select) {
    alert("inside function");
    const selectedPage = select.value;
    if (selectedPage) {
        window.location.href = selectedPage;
    }
}
  // JavaScript function to change the view based on the dropdown selection
  function changeView() {
    document.addEventListener("DOMContentLoaded", function () {
    const viewDropdown = document.getElementById("viewDropdown");
    const selectedView = viewDropdown.value;
    const viewContent = document.getElementById("viewContent");
    
    // Replace this with your logic to fetch and display the content for the selected view
    viewContent.innerHTML = `<h2>${selectedView} Content</h2>`;
    });
}

// JavaScript function to navigate to a specific menu item
function navigateTo(view) {
    const viewDropdown = document.getElementById("viewDropdown");
    viewDropdown.value = view;
    changeView();
}

// Initialize the view on page load
window.onload = changeView;

function redirectToPage(select) {
    const selectedPage = select.value;
    if (selectedPage) {
        window.location.href = selectedPage;
    }
}
function validateForm(){

            
            

    let login=document.getElementById("login").value;
    if(login === "select")
    {
        
        
        document.getElementById("sp0").innerHTML="Select usertype";
        return false;
    
        
    }
    
    let id=document.getElementById("id").value;
    if(id == "")
    {
        
        document.getElementById("sp1").innerHTML="Profileid is mandatory";
        return false;
    
        
    }

    let name=document.getElementById("name").value;
    if(name == "")
    {
        
    
        
        document.getElementById("sp2").innerHTML="Name is mandatory";
        return false;
    
        
    }
    let maleRadio = document.getElementById("maleRadio");
    let femaleRadio = document.getElementById("femaleRadio");
  
    
    if (!maleRadio.checked && !femaleRadio.checked) {
    
        document.getElementById("sp3").innerHTML="Gender is mandatory";
        return false;
    }

    
    let dateofbirth=document.getElementById("dateofbirth").value;
    if(!dateofbirth)
    {
        document.getElementById("sp4").innerHTML="DOB is mandatory";
        return false;
        
    }
    let qualification=document.getElementById("qualification").value;
    
    if(login==="Lawyer" && qualification==="select")
    {
    
    document.getElementById("sp5").innerHTML="Educational qualification is mandatory";
    }


    let practicearea=document.getElementById("practicearea").value;

    if(login==="Lawyer" && practicearea==="select")
    {
    
    document.getElementById("sp6").innerHTML="Practice Area is mandatory";
    }

   let experience=document.getElementById("experience").value;
   if(login==="Lawyer" && experience==="")
    {
        document.getElementById("sp7").innerHTML="Experience is mandatory";

   }

    let email=document.getElementById("email").value;
   
   if(email=="")
   {
       document.getElementById("sp8").innerHTML=" Email is mandatory";
       return false;
       

   }
   
   
   
   
    let phonenumber=document.getElementById("phonenumber").value;
    
    if(phonenumber=="")
    {
        document.getElementById("sp9").innerHTML=" Phonenumber is mandatory";
        return false;
        

    }
    
    
    let address=document.getElementById("address").value;
    if(address=="")
    {
        document.getElementById("sp10").innerHTML=" Address is mandatory";
        return false;
        

    }


        
    let username=document.getElementById("username").value;
    if(username=="")
    {
        document.getElementById("sp11").innerHTML=" Username is mandatory";
        return false;
        

    }
    
    
    let password=document.getElementById("password").value;
    if(password=="")
    {
        document.getElementById("sp12").innerHTML=" Password is mandatory";
        return false;
        

    }
   
   
    

}

function validateusertype(){


let user=document.getElementById("login").value;


if(user==="Client")
{
    document.getElementById("divqualificationoption").style.display = "none";
    document.getElementById("divdisplayqualification").style.display = "none";
    document.getElementById("divpracticeareadisplay").style.display = "none";
    document.getElementById("divlistpracticearea").style.display = "none";
    document.getElementById("divdisplayexperience").style.display = "none";
    document.getElementById("divlistexperience").style.display = "none";
}
if(user==="Lawyer"){
    
    document.getElementById("divdisplayqualification").style.display = "";
    document.getElementById("divqualificationoption").style.display = "";          
    document.getElementById("divpracticeareadisplay").style.display = "";
    document.getElementById("divlistpracticearea").style.display = "";
    document.getElementById("divdisplayexperience").style.display = "";
    document.getElementById("divlistexperience").style.display = "";

}
if(user==="Study Case"){
    document.getElementById("divqualificationoption").style.display = "none";
    document.getElementById("divdisplayqualification").style.display = "none";
    document.getElementById("divpracticeareadisplay").style.display = "none";
    document.getElementById("divlistpracticearea").style.display = "none";
    document.getElementById("divdisplayexperience").style.display = "none";
    document.getElementById("divlistexperience").style.display = "none";
}
if(user == "")
    {
        
        document.getElementById("sp0").innerHTML="Usertype is mandatory";
    }
               
    else
    {
        document.getElementById("sp0").innerHTML="";
}

}






    
function validateProfileId(){
    let id=document.getElementById("id").value;
    if (id== "")
    {
        
        document.getElementById("sp1").innerHTML="id is mandatory";
    }
    else if(isNaN(id)){
        document.getElementById("sp1").innerHTML="Please enter valid id";
    }
    else
    {
        document.getElementById("sp1").innerHTML="";
    }
}





function validateName(){
    let name=document.getElementById("name").value;
    if(name == "")
    {
        
        document.getElementById("sp2").innerHTML="Name is mandatory";
    }
    else if(!isNaN(name)){
        document.getElementById("sp2").innerHTML="Please enter valid name";
    }
    else
    {
        document.getElementById("sp2").innerHTML="";
    }
}
function validategender(){
    let maleRadio = document.getElementById("maleRadio");
    let femaleRadio = document.getElementById("femaleRadio");
  

    if (!maleRadio.checked && !femaleRadio.checked) {
    
        document.getElementById("sp3").innerHTML="Selecting Gender is mandatory";
        return false;
    }
    else
    {
        document.getElementById("sp3").innerHTML="";
    }
}
   function validatedob(){
    var dobInput = document.getElementById("dateofbirth");

    // Get the entered date value
    var dobValue = dobInput.value;

    // Create a Date object from the entered date value
    var dobDate = new Date(dobValue);

    // Get today's date
    var today = new Date();

    // Check if the entered date is in the future
    if (dobDate > today) {
        document.getElementById("sp4").innerHTML="Date of birth cannot be in the future.";
        return false;
    } 
    else
    {
        document.getElementById("sp4").innerHTML="";
    }
}
function validatequalification(){
    let qualification=document.getElementById("qualification").value;
    
    if(qualification==="select")
    {
        
        document.getElementById("sp5").innerHTML=" Education Qualification is mandatory";
       return false;
    }
    
    else
    {
        document.getElementById("sp5").innerHTML="";
    }

}


function validatepracticearea(){
    let practicearea=document.getElementById("practicearea").value;
    
    if(practicearea==="select")
    {
        
        document.getElementById("sp6").innerHTML=" Practicearea is mandatory";
       return false;
    }
    
    else
    {
        document.getElementById("sp6").innerHTML="";
    }

}

function validateexperience(){
    let experience=document.getElementById("experience").value;
    
    if(experience==="")
    {
        
        document.getElementById("sp7").innerHTML=" Experience is mandatory";
       return false;
    }
    
    else
    {
        document.getElementById("sp7").innerHTML="";
    }

}








    function validatemailid(){
    let mailid=document.getElementById("email").value;
    
    if(mailid == "")
    {
        
        document.getElementById("sp8").innerHTML="please email is mandatory";
    }
    else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailid)){
        
        document.getElementById("sp8").innerHTML="";
    }
    else
    {
        document.getElementById("sp8").innerHTML="please enter valid email id";
       
    }
    
               
}
function validatephonenumber(){
    let phonenumber=document.getElementById("phonenumber").value;

    if(phonenumber == "")
    {
        
        document.getElementById("sp9").innerHTML="phonenumber is mandatory";
    }
    
    else if(/^(0|91)?[6-9][0-9]{9}$/.test(phonenumber))
    {
        document.getElementById("sp9").innerHTML="";
    }
    else{
        document.getElementById("sp9").innerHTML="please enter valid mobile phonenumber";

    }
}
function validateaddress(){
    let address=document.getElementById("address").value;
    if(address == "")
    {
        
        document.getElementById("sp10").innerHTML="address is mandatory";
    }
    
    else
    {
        document.getElementById("sp10").innerHTML="";
    }
}
function validateusername(){
    let username=document.getElementById("username").value;
    if(username == "")
    {
        
        document.getElementById("sp11").innerHTML="Username is mandatory";
    }
    
    else
    {
        document.getElementById("sp11").innerHTML="";
    }
}
function validatepassword(){
    let password=document.getElementById("password").value;
    let passwordexp=/^[A-Za-z]\w{7,15}$/;
    
    if(password == "")
    {
        
        document.getElementById("sp12").innerHTML="Password is mandatory";
    }
    else if(passwordexp.test(password))
    {
        document.getElementById("sp12").innerHTML="";
        
        

    }
    else
    {
        document.getElementById("sp12").innerHTML=" Enter valid password";
        return false;
    }
}
function getpasswordinfo()
{
    alert("1. Password should be of 8-20 char. \n 2. At least 1 uppercase character.\n 3. At least 1 lowercase character.\n 4. At least 1 digit.\n 5. At least 1 special character.Minimum 8 characters");
}
function redirectToPage(select) {
    const selectedPage = select.value;
    if (selectedPage) {
        window.location.href = selectedPage;
    }
}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="{{ asset('css/second.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Satisfy&family=Ubuntu+Condensed&display=swap" rel="stylesheet">

</head>
<body>

    <div class="parallax">
        <div id="footer_top">
            <div>email: lavish@gmail.com</div>
            <div>call: +7 (777) 444 56 56</div>
        </div>
        <div class="txt_lavish">Lavish</div>
    </div>

    <div class="header" id="menu">
        <a href="{{ url('http://localhost/my_laravel_project/public/lavish') }}"><div class="lavish">Lavish</div></a>
        <a href=""><div id="home" onclick="window.location.reload()">{{__("Home") }}</div></a>
        <a href="#cources"><div id="catalog">{{__("Catalog") }}</div></a>
        <a href="SecondPage.html#scheduleS"><div id="schedule">{{__("Schedule") }}</div></a>
        <a href="lab7.html#about"><div id="about_us">{{__("About us") }}</div></a>
         <a><div onclick="open_login()" id="btn_pass">{{__("Log In") }}</div></a> 

        <div class="user_profile">
            <img id="profile_img" src="{{ asset('images/user.png') }}" alt="">
            <p id="user_name"></p>
        </div>
    </div>

    <div class="threeDiv" onclick="threeDivClick(this)" >
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
      


    <div class="login">
        <div class="login-content" >
            <img class="close" onclick="close_login()" src="{{ asset('images/cancel.png') }}" alt="" width="6%">
            <div class="lavish">Lavish</div>
            <div id="err" style="color: red"> </div>  
            <form name="frm_login" id="frm_login">
            @csrf
                <input type="text"  size="10px" id="username" placeholder="Username" name="username">
                <input type="password" size="10px" id="password" placeholder="password" name="password">
                <button type="button" class="btn btn-danger" onclick="signup()">Sign Up</button>
                <button type="button" class="btn btn-danger" onclick="login(username.value)">{{__("Log In") }}</button>
            </form>
        </div>
    </div>

    <div class="web_dev" >
        <div class="web_dev_head">{{__("Website development") }}</div>
        
        <div class="web_dev_divs">
            <div class="sub_div"> 
                <div class="web_dev_container"><img src="{{ asset('images/web_dev1.png') }}" alt="" width="100%" height="100%"></div>
                <div class="web_dev_txt">{{__("LANDING") }}</div>
                <div class="web_dev_content">{{__("Small and effective one page site containing all the information you need.") }}</div>
                <div><button type="button" onclick="rate()" class="btn btn-danger">{{__("RATE") }}</button></div>
            
                
            </div>
            <div class="sub_div">
                <div class="web_dev_container"><img src="{{ asset('images/web_dev2.png') }}" alt="" width="100%" height="100%"></div>
                <div class="web_dev_txt">{{__("BUSINESS CARD / COMPANY SITE") }}</div>
                <div class="web_dev_content">{{__("Full website of the company. Everything about the company, services provided, portfolio of works, reviews, etc.") }}</div>
                <div><button type="button" onclick="rate()" class="btn btn-danger">{{__("RATE") }}</button></div>
            </div>
            <div class="sub_div">
                <div class="web_dev_container"><img src="{{ asset('images/web_dev3.png') }}" alt="" width="100%" height="100%"></div>
                <div class="web_dev_txt">{{__("ONLINE SHOP") }}</div>
                <div class="web_dev_content">{{__("Optimal online store with a product card, shopping cart, delivery and payment options.") }}</div>
                <div><button type="button" onclick="rate()" class="btn btn-danger">{{__("RATE") }}</button></div>
            </div>
        </div>
        
    </div>
 
   

    <div class="third">
            <div class="contaner4">
                <img class="firstContact" src="{{ asset('images/telephone (2).png') }}">
                <div>010-020-0340</div>
            </div>
            <div class="contaner4">
                <img class="firstContact" src="{{ asset('images/email (1).png') }}">
                <div>info@company.com</div>
            </div>
            <div class="contaner4">
                <img class="firstContact " src="{{ asset('images/pin (1).png') }}">
                <div>480 Old Walking {{__("Street") }} GL 18080</div>
            </div>
    </div>

    <div class="comp">
        <div>Copyright 2084 Company Lavish</div>
        <div style="width: 10vw;"><hr></div>
        <div>
            <img src="{{ asset('images/facebook (2).png') }}" alt="" style="width: 1.5vw;">
            <img src="{{ asset('images/twitter (2).png') }}" alt="" style="width: 1.5vw;">
            <img src="{{ asset('images/instagram (1).png') }}" alt="" style="width: 1.5vw;">
        </div>
        
   </div>


    <script>

        function threeDivClick(y) {
            y.classList.toggle("change");

        var x = document.getElementById("menu");
        if (x.style.display === "flex") {
            x.style.display = "none";
        } else {
            x.style.display = "flex";
        }
        }
        function open_login() {
            var btn = document.getElementById("btn_pass").innerHTML;
            if (btn == "Log In") {
                document.querySelector(".login").style.display="flex";
                $(".login").animate({opacity: "1"}, "slow");
                document.body.style.overflow="hidden";
            }
            else {
                logout_web();
            }

        }

        function close_login() {
            $(".login").animate({opacity: "0"}, "slow");
            document.querySelector(".login").style.display = "none";
            document.body.style.overflow="scroll";
            document.getElementById("username").value = "";
            document.getElementById("pass").value = "";
        }

        function loginToWeb(name) {
            document.querySelector(".user_profile").style.display = "flex";
            document.getElementById("user_name").innerHTML = name;
            document.getElementById("btn_pass").innerHTML = "Log Out";
            close_login();
        }

        function logout_web() {
            document.querySelector(".user_profile").style.display = "none";
            document.getElementById("btn_pass").innerHTML = "Log In";
        }

        function login(name) {
        if($('#username').val() == "")
        {
            $('#username').addClass('has-error');
            return false;
        }
        else if($('#password').val() == "")
        {
            $('#password').addClass('has-error');
            return false;
        }

        var data = $("#frm_login").serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
                type : 'POST',
                url: '{{route('second_page.check')}}',
                data : data,
            success : function(response)
            {
                console.log(response);
                if(response == 1)
                {
                window.location.replace('{{route('home')}}');
                document.querySelector(".user_profile").style.display = "flex";
                document.getElementById("user_name").innerHTML = name;
                document.getElementById("btn_pass").innerHTML = "Log Out";
                close_login(); 
                
                }
                else if(response == 3)
                {
                    $("#err").hide().html("Username or Password  Incorrect. Please Check").fadeIn('slow');
                }
            }
        });   
    }

    function signup() {
        window.location.replace('{{route('register')}}');
    }
    </script>


</body>
</html>
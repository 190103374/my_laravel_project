<!DOCTYPE html>
<html>
    <head>
        <title>Site</title>
        <!-- <link rel='stylesheet' type='text/css' media='screen' href='C:/xampp/htdocs/my_laravel_project/resources/css/main_page.css'> -->
        <link rel="stylesheet" href="{{ asset('css/main_page.css') }}">
        <!-- <link rel="stylesheet" href="<?php echo asset('css/main_page.css')?>" type="text/css">  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;
    apikey=5573fcc8-f03c-497b-a612-2c5d8c564070" type="text/javascript"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&family=Satisfy&display=swap" rel="stylesheet">
 
    </head>
    <body>
        <div class="image">
            <div class="simple">Simple and Elegant</div>
            <div class="lavish"><bdi>Lavish</bdi></div>
            <div class="uiux">UI & UX SPECIALIST</div>
            <div class="text">Coder Enterprise moves software development to your cloud, centralizing an organization's development initiatives and unlocking substantial gains in both developer velocity and enterprise security.</div>
            
            <a  href="NewSecondPage.html"><div id="started" class="start" onmouseover="changeColor()" onmouseout="changeColorBack()"><b>Get started</b></div></a>
            <div class="svgEl">   
                <svg width="4vw" height="8vw" style="margin-left: 95vw">
                <circle cx="2vw" cy="0.5vw" r="0.4vw" fill="white"/>
                <circle cx="2vw" cy="2.1vw" r="0.2vw" fill="white"/>
                <circle cx="2vw" cy="4vw" r="0.2vw" fill="white"/>
                <circle cx="2vw" cy="6vw" r="0.2vw" fill="white"/>
            </svg> 
            </div>
            
        </div>
      
        <div class="whatIdo">
            <div class="what">WHAT I DO</div>
            <div class="box">
                <div class="one">
                    <div><img class="first" src="monitor.png"></div>
                    <div > 
                        <div style="padding-bottom:1vw;"><b>Responsive Design</b></div>
                        <div class="first_text">Lavish website template is brought to you by <a href="https://vc.ru/design/105158-20-krutyh-saytov-2020-goda-dlya-vdohnoveniya">templatemo</a>. Feel free to download and use this.</div>
                    </div>
                 </div>

                 <div class="one">
                    <div><img class="first" src="link.png"></div>
                    <div>
                        <div style="padding-bottom:1vw;"><b>Web Templates</b></div>
                        <div class="first_text">We provide a lot of new HTML5 templates for you. Image credits go to <a href="https://pixabay.com/ru/photos/">Plxabay</a> and <a href="https://www.instagram.com/unsplash/">Unsplash</a>.</div>
                    </div>
                 </div>

                 <div class="one">
                    <div><img class="first" src="send.png"></div>
                    <div>
                        <div style="padding-bottom:1vw;"><b>UI & UX Design</b></div>
                        <div class="first_text">The concepts of UX and UI are about 70 years old, but some designers still confuse them. </div>
                    </div>
                 </div>

            </div>
        </div>
        
        <div class="second">
        <div id="SecondBlockOne">
            <div>
                <div id="about">ABOUT LAVISH</div>
                <div id="des">DESIGNER & DEVELOPER</div>
                <div id="dtext">The designer works to create elements and color palettes and typography that looks great. And this can cause discord between the designer and web developer and in the final design itself.<br><br>Designers and developers work together on projects from start to finish, the result is a more cohesive web project with great aesthetics.</div>
            </div>
            <div id="rec">
               <svg width="40vw" height="30vw">
                   <text  x="0.1vw" y="7.5vw" fill="white">Web Design</text>
                   <text  x="37vw" y="7.5vw" fill="white">95%</text>
                    <rect y="8vw" width="38vw" height="0.2vw" style="fill:#dc143c;stroke-width:0.3vw;" />
                    <rect y="8vw" x="38vw" width="2vw" height="0.2vw" style="fill:white;stroke-width:0.3vw;" />

                    <text  x="0.1vw" y="10.5vw" fill="white">Mobile Apps</text>
                   <text  x="37vw" y="10.5vw" fill="white">80%</text>
                    <rect y="11vw" width="33vw" height="0.2vw" style="fill:#dc143c;stroke-width:0.3vw;" />
                    <rect y="11vw" x="33vw" width="7vw" height="0.2vw" style="fill:white;stroke-width:0.3vw;" />

                    <text  x="0.1vw" y="13.5vw" fill="white">SEO Stuffs</text>
                   <text  x="37vw" y="13.5vw" fill="white">70%</text>
                    <rect y="14vw" width="31vw" height="0.2vw" style="fill:#dc143c;stroke-width:0.3vw;" />
                    <rect y="14vw" x="31vw" width="9vw" height="0.2vw" style="fill:white;stroke-width:0.3vw;" />

                    <text  x="0.1vw" y="16.5vw" fill="white">HTML5 & CSS3</text>
                    <text  x="37vw" y="16.5vw" fill="white">90%</text>
                    <rect y="17vw" width="37vw" height="0.2vw" style="fill:#dc143c;stroke-width:0.3vw;" />
                    <rect y="17vw" x="37vw" width="3vw" height="0.2vw" style="fill:white;stroke-width:0.3vw;" />
                  </svg>
                  
            </div> 
        </div>

            <div>
                <svg width="4vw" height="10vw" style="padding-left: 2vw;">
                    <circle cx="2vw" cy="0.5vw" r="0.2vw" fill="white"/>
                    <circle cx="2vw" cy="2.1vw" r="0.4vw" fill="white"/>
                    <circle cx="2vw" cy="4vw" r="0.2vw" fill="white"/>
                    <circle cx="2vw" cy="6vw" r="0.2vw" fill="white"/>
                </svg> 
            </div>
        </div>

        <hr>
        <div class="center"> 
            <div id="adv">
                <div>
                    <img id="cancel" width="20px" src="cancel.png">
                    <img id="check" width="20px" src="check.png"> 
                    <img id="up" width="20px" src="up-arrow.png"> 
                    <img id="logout" width="20px" src="logout.png"> 
                </div>
                <div id="masterCl" style="display: none;"><strong>Master class in the direction of development</strong></div>
                
                <div id="address">Address</div>
                <div id="street">Thomas Street 156</div>
            </div>
            <div id="upInfo">
                <ul>
                    <li>Web Design</li>
                    <li>Mobile Apps</li>
                    <li>HTML5 & CSS3</li>
                </ul>
            </div>
        </div>
        <hr>

        <div id="third">
            <div id="portfolio">PORTFOLIO</div>
            <div class="imgcont">
                <div > 
                <img class="img1" src="tea-time.jpg">
                <img class="img1" src="acorns.jpg">
                <img class="img1" src="https://images.wallpaperscraft.com/image/winter_snow_sunlight_129303_1280x960.jpg">
                </div>
                <div id="imgCont1"> 
                    <img class="img1" src="https://images.wallpaperscraft.com/image/winter_snow_sunlight_129303_1280x960.jpg">
                    <img class="img1" src="acorns.jpg">
                    <img class="img1" src="tea-time.jpg">
                    </div>
            </div>
         
            <div class="imgcont">
                <div>
                <img class="img2" style="padding-left: 15vw" src="https://thegadgetflow.com/wp-content/uploads/2019/02/work-desk-2019-feb07-featured-dd.jpeg" >
                <img class="img2" src="bridge.jpg">
                </div>
                <svg width="1vw" height="8vw"style="padding-left: 14vw">
                    <circle cx="0.5vw" cy="0.5vw" r="0.2vw" fill="white"/>
                    <circle cx="0.5vw" cy="2.1vw" r="0.2vw" fill="white"/>
                    <circle cx="0.5vw" cy="4vw" r="0.4vw" fill="white"/>
                    <circle cx="0.5vw" cy="6vw" r="0.2vw" fill="white"/>
                </svg>
           </div>   
        </div>
       

        <div class="fourth">
            <div style="padding-left: 20vw;">
                <address>
                     <div class="contactMe"><b>CONTACT ME</b></div>
                <div class="contaner4">
                    <img class="firstContact" src="telephone.png">
                    <div>010-020-0340</div>
                </div>
                <div class="contaner4">
                    <img class="firstContact" src="email.png">
                    <div>info@company.com</div>
                </div>
                <div class="contaner4">
                    <img class="firstContact " src="pin.png">
                    <div id="addressMap" style=" cursor: pointer;">480 Old Walking Street GL 18080</div>
                </div>
                 <div id="map" style="width: 35pw; height: 15vw; display: none"></div>
                 <img src="up-arrow.png" id="mapIcon" style="width: 1.5vw; display: none;  cursor: pointer;">
                </address>
               
            </div>
           

            <div class="inp">
               <input style="margin: 1vw;" type="text" value="Your Name">
               <input style="margin: 1vw;" type="email" value="Your Email"> 
               <textarea style="margin: 1vw;" rows="4" cols="50" style="overflow: auto;">Your Message</textarea>
               <button class="butt">SEND ME</button>
            </div>
             <svg width="1vw" height="8vw" style="padding-left:12vw">
                    <circle cx="0.5vw" cy="0.5vw" r="0.2vw" fill="white"/>
                    <circle cx="0.5vw" cy="2.1vw" r="0.2vw" fill="white"/>
                    <circle cx="0.5vw" cy="4vw" r="0.2vw" fill="white"/>
                    <circle cx="0.5vw" cy="6vw" r="0.4vw" fill="white"/>
                </svg> 
        </div>
        <div class="comp">
             <div>Copyright 2084 Company Lavish</div>
             <div style="width: 10vw;"><hr></div>
             <div>
                 <img src="facebook.png" alt="" style="width: 1.5vw;">
                 <img src="twitter.png" alt="" style="width: 1.5vw;">
                 <img src="instagram.png" alt="" style="width: 1.5vw;">
             </div>
             
        </div>

        <script>


            ymaps.ready(init);
            function init() {
                var myMap = new ymaps.Map("map", {
                    center: [42.312394,-71.061517],
                    zoom: 10
                });

                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
        ),

        myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
            hintContent: '480 Old Walking Street GL 18080',
            balloonContent: 'Our main office'
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'meeting-point.png',
            iconImageSize: [30, 42],
            iconImageOffset: [-5, -38]
        });

        var myRectangle = new ymaps.Rectangle([
            [42.29,-71.124],
            [42.18,-71.241]
        ], {
            hintContent: 'Area of Networking',
            balloonContent:'Our offices'
        }, {
            fillColor: '#dc143c',
            fillOpacity: 0.5,
            strokeColor: '#dc143c',
            strokeWidth: 2,
            borderRadius: 5
        });

        var myPolyline = new ymaps.Polyline([
            [42.40,-71.16],
            [42.40,-71.06],
            [42.30,-71.16],
            [42.30,-71.06]
        ], {
            balloonContent: "Polyline"
        }, {
            balloonCloseButton: false,
            strokeColor: '#dc143c',
            strokeWidth: 4,
        });
        
        myMap.geoObjects
            .add(myPlacemark)
            .add(myRectangle)
            .add(myPolyline);
        }

            
            $("#addressMap").click(function(){
                $("#map").fadeIn("slow");
                $("#mapIcon").fadeIn("slow");
            });

            $("#mapIcon").click(function() {
                $("#map").fadeOut("slow");
                $("#mapIcon").fadeOut("slow");
            })

            function changeColor() {
                document.getElementById("started").style.color="#dc143c";
            }
            function changeColorBack() {
                document.getElementById("started").style.color="white";
            }
    
            $("#cancel").click(function(){
                $("#adv").hide(4000);
                $("#upInfo").hide(4000);
            });
            $("#address").click(function(){
                $("#street").show(2000);
            });
            $("#check").click(function(){
                $("#masterCl").fadeToggle();
            });
            $("#up").click(function(){
                $("#adv").fadeTo("slow", 0.5);
                $("#adv").animate({height: "70px"}, 2000);
                $("#upInfo").slideDown(2000);
            });
            $("#upInfo").click(function(){
                $("#upInfo").stop();
            });
            $("#logout").click(function(){
                $("#upInfo").slideUp(2000);
            });
        </script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:url" content="http://laravellive.in" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="LaravelLive - India, A Laravel Conference" />
        <meta property="og:description" content="LaravelLive is the first annual gathering of web developers and companies who are passionate about building amazing applications with the Laravel PHP framework." />
        <meta property="og:image" content="http://laravellive.in/img/welcome.png" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
               
            }

            #home {
                    background-color: #ECF7F3;
                    background-image: url("img/bg.png");
                    background-position: center bottom;
                    background-size:auto;
                    background-repeat: repeat-x;

                }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 5em;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .navbar-toggle {
                background-color: #080808 !important;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .smallText {
                font-size:40px;
                font-weight: 500;
                padding: 5px;
                margin: 5px;
            }
            .text-orange {
                color: #fb503b;
            }
            .text-medium {
                font-weight: 600;
            }
            .subhead {
                color: #424242;
                font-weight: 800;
                font-size: 3em;
                //margin-left: 7.66%;
                text-align: center;
                display: block;
                //color: #202020;
                //background-color: #2d2d2d;
                //letter-spacing: .1em;
                //text-shadow: 
                  -1px -1px 1px #111, 
                  2px 2px 1px #363636;
            }
            .navbar-inverse {
                background-color: #ffffff;
                border-color: #080808;
            }
            .navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
                font-weight: 600;
                background-color: #FB503B;
            }
            .navbar-inverse .navbar-nav>li>a {
                color: #080808;
                font-weight: 500
            }
            .navbar-inverse .navbar-nav>li>a:focus,
            .navbar-inverse .navbar-nav>li>a:hover{
                color: #ffffff;
                font-weight: 600;
                background-color:#FB503B; 
                
            }


            .navbar-inverse .navbar-nav > .active > a {
              border-radius: 0;
              color: white;
              background-color: #FB503B;
            }
            .navbar-inverse .navbar-nav > .active > a:hover,
            .navbar-inverse .navbar-nav > .active > a:focus {
              color: white;
              background-color: #FB503B;
            }

            .bg-grey100{
                background-color:#F5F5F5; 
            }
            .bg-grey300{
                background-color:#E0E0E0;   
            }
            .bg-grey600{
                background-color:#757575;
            }
            .bg-grey800{
                background-color:#424242;
            }
            .bg-grey900{
                background-color:#212121;
            }
            .bg-orange{
                background-color:#FB503B;
            }
            .image-holder{
                max-width: 300px;
                margin: 20px;
                display: inline-block;
            }
            .speaker-holder{
                float: left;
            }
            .about-speaker{
                text-align: center;
            }
            .speaker-name{
                font-size: 1.5em;
                
            }
            .speaker-title{
                //text-align: center;
                font-size: 1.3em;
                color:#000000;
            }


img
{
    vertical-align: middle;
}
.img-responsive
{
    display: block;
    height: auto;
    max-width: 100%;
}
.img-rounded
{
    border-radius: 3px;
}
.img-thumbnail
{
    background-color: #fff;
    border: 1px solid #ededf0;
    border-radius: 3px;
    display: inline-block;
    height: auto;
    line-height: 1.428571429;
    max-width: 100%;
    moz-transition: all .2s ease-in-out;
    o-transition: all .2s ease-in-out;
    padding: 2px;
    transition: all .2s ease-in-out;
    webkit-transition: all .2s ease-in-out;
}
.img-circle
{
    border-radius: 50%;
}

            * {
                    box-sizing: border-box;
                }

                /* Create three columns of equal width */
                .columns {
                    float: left;
                    width: 33.3%;
                    padding: 8px;
                }

                /* Style the list */
                .price {
                    list-style-type: none;
                    border: 1px solid #eee;
                    margin: 0;
                    padding: 0;
                    -webkit-transition: 0.3s;
                    transition: 0.3s;
                }

                /* Add shadows on hover */
                .price:hover {
                    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
                }

                /* Pricing header */
                .price .header {
                    background-color: #111;
                    color: white;
                    font-size: 25px;
                }

                /* List items */
                .price li {
                    border-bottom: 1px solid #eee;
                    padding: 20px;
                    text-align: center;
                }

                /* Grey list item */
                .price .grey {
                    background-color: #eee;
                    font-size: 20px;
                }

                /* The "Sign Up" button */
                .button {
                    background-color: #4CAF50;
                    border: none;
                    color: white;
                    padding: 10px 25px;
                    text-align: center;
                    text-decoration: none;
                    font-size: 18px;
                }

                /* Change the width of the three columns to 100% 
                (to stack horizontally on small screens) */
                @media only screen and (max-width: 600px) {
                    .columns {
                        width: 100%;
                    }
                }  

        </style>
    </head>
    <body>

    <nav  class="navbar navbar-default navbar-fixed-top navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
      <ul id="top-menu" class="nav navbar-nav">
        <li><a href="#speaker">Speakers <span class="sr-only">(current)</span></a></li>
        <li><a href="#venue">Venue</a></li>
        <li><a href="#schedule">Schedule</a></li>
        <!-- <li><a href="#">Ticket</a></li>
        <li><a href="#">Accomodation</a></li>
        -->
        <li><a href="#sponsor">Sponsor</a></li>
        <li><a href="#contact">Contact</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
    <!-- <div class="clearfix container">
        <div class="row" >
            <span class="title">Laravel<strong class="text-orange">Live</strong>
             <br>India
             </span><br>
             <span class="smallText text-orange text-medium">19 March 2017</span>
             <br> <span class="smallText"> New Delhi</span>
        
        </div>
    </div> -->
        <div id="home" class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <br>
                     <span class="title">Laravel<strong class="text-orange">Live</strong>
                     <br>
                     <span class="smallText">
                     New Delhi,<span class="text-orange text-medium">India</span> 
                     </span>
                     </span><br>
                     <span class="smallText  text-medium">19 March 2017</span>
                     <br> 
                
                </div>

                <div class="links">
                    <!-- <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                    <br>
                    <br>
                    <br>
                    <br>
                                        
                    <button class="btn" style="background-color: #00B286; font-weight: 600; font-size: 1.3em; color: #fff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Early Bird Tickets coming soon.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                </div>
            </div>
        </div>
        <div id="speaker" class="bg-grey300 clearfix" >
            <p class="subhead">
                <br>
                Speakers
            </p>

            <div class="container col-md-offset-2 col-md-8" >

                <div class="col-md-4 speaker-holder">
                    <div class="image-holder">
                        <img src="https://avatars3.githubusercontent.com/u/804684?v=3&s=400" alt="..." class="img-responsive img-thumbnail">
                    </div>
                    <div class="about-speaker">
                        <span class="speaker-name text-medium"> Marcel 
                            <span class="text-orange">
                            Pociot
                            </span>
                        </span>
                        <p class="speaker-title">Creator of BotMan</p>
                        <span class="speaker-bio"></span>
                    </div>
                </div>

                <div class="col-md-4 speaker-holder">
                    <div class="image-holder">
                        <img src="img/LalitVijay.jpg" alt="Lalit Vijay" class="img-responsive img-thumbnail">
                    </div>
                    <div class="about-speaker">
                        <span class="speaker-name text-medium"> Lalit 
                            <span class="text-orange">
                            Vijay
                            </span>
                        </span>
                        <p class="speaker-title">Backend Lead at StyleDotMe</p>
                        <span class="speaker-bio"></span>
                    </div>
                </div>

                <div class="col-md-4 speaker-holder">
                    <div class="image-holder">
                        <img src="img/Freek.png" alt="..." class="img-responsive img-thumbnail">
                    </div>
                    <div class="about-speaker">
                        <span class="speaker-name text-medium"> Freek Van der  
                            <span class="text-orange">
                            Herten
                            </span>
                        </span>
                        <p class="speaker-title">Partner and developer at [Spatie]</p>
                        <span class="speaker-bio"></span>
                    </div>
                </div>

                <div class="col-md-4 speaker-holder">
                    <div class="image-holder">
                        <img src="img/speaker-placeholder.png" alt="..." class="img-responsive img-thumbnail">
                    </div>
                    <div class="about-speaker">
                        <span class="speaker-name text-medium"> Your 
                            <span class="text-orange">
                            Name
                            </span>
                        </span>
                        <p class="speaker-title">Share something Interesting</p>
                        <span class="speaker-bio"></span>
                    </div>
                </div>
                <p style="color:#E0E0E0">ds
                </p> 
                             
            </div>
                
        </div>
        <div id="venue" class="bg-grey800">
            <p class="subhead" style="color: #fff">
                <br>
                Venue
                <br><br>
            </p>        
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3504.978413952922!2d77.16431416455711!3d28.540368532454178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1ddb55725eaf%3A0xdf1d45bdd082aedf!2sConvention+Center!5e0!3m2!1sen!2sin!4v1483786036612" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                
        </div>
        <section id="schedule">
            <div  class="clearfix container">
                <div class="row" >
                    <div class="text-center">
                    <p class="subhead">
                        <br>
                        Schedule

                    </p>
                    </div>
                    <div class="col-md-offset-2 col-md-8 ">
                                
                    <div class="text-medium" style="font-weight: 500 float: none; margin: 0 auto; padding-bottom: 20px">
                      <ul class="price">
                        <li class="bg-orange text-medium" style="color:#fff;">Sunday, March 19, 2017</li>
                        <li>
                            <div class="col-md-4">10:00 AM</div>
                            <div class="col-md-8 ">Doors Open & Mingling</div>
                        </li>
                        <li>
                            <div class="col-md-4">10:30 AM</div>
                            <div class="col-md-8 ">Opening Session</div>
                        </li>
                        <li>
                            <div class="col-md-4">11:00 AM</div>
                            <div class="col-md-8 ">Session 1</div>
                        </li>
                        <li>
                            <div class="col-md-4">11:45 AM</div>
                            <div class="col-md-8 ">Session 2</div>
                        </li>
                        <li>
                            <div class="col-md-4">12:30 AM</div>
                            <div class="col-md-8 text-center">Lunch</div>
                        </li>
                        <li>
                            <div class="col-md-4">01:30 AM</div>
                            <div class="col-md-8">Session 3</div>
                        </li>
                        <li>
                            <div class="col-md-4">02:15 AM</div>
                            <div class="col-md-8">Session 4</div>
                        </li>
                        <li>
                            <div class="col-md-4">03:00 PM</div>
                            <div class="col-md-8">Break & Mingling</div>
                        </li>
                        <li>
                            <div class="col-md-4">03:30 PM</div>
                            <div class="col-md-8">Session 5</div>
                        </li>
                        <li>
                            <div class="col-md-4">04:15 PM</div>
                            <div class="col-md-8">Session 6</div>
                        </li>
                        <li>
                            <div class="col-md-4">05:00 PM</div>
                            <div class="col-md-8">That's All from this Year LaravelLive </div>
                        </li>
                        <!-- <li class="grey"><a href="#" class="button">Sign Up</a></li> -->
                      </ul>
                      <br>
                    </div> 
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- <div class="clearfix bg-grey300" >
            <p class="subhead ">
                Accomodation
            </p>        
        </div> -->
         
        <div id="sponsor" class="clearfix bg-grey300" >
            <p class="subhead ">
                
                <br>
                Sponsor
                
            </p>
            <br>
            <div class="container col-md-offset-3 col-md-6" >
            <p class="text-center text-medium">
                If you'd like to help us by sponsoring LaravelLive India, we'd love to connect. <br>

                We can't put on a great show without some great sponsors. Here is your chance to reach the decision makers and developers from hundreds of top companies. LaravelLive has a capacity of up to 350 attendees and there are sponsorship opportunities to fit any budget. Be part of the LaravelLive conference in India and help us make history.
                <br>
                <br>
                <br>
                <br>
            </p>
            </div>        
        </div>
        <div id="contact" class="clearfix" >
            <div class="col-md-offset-2 col-md-8 text-medium text-center">
                <p class="subhead ">
                    <br>
                    Organizing Team
                    
                    <br><br>
                </p>
                <div class="col-md-4">
                    <span style="font-size: 1.2em">Mridul<span class="text-orange">Sinha</span></span>   
                    <br>
                    Software Engineer
                    <br>
                    Sopra Steria
                    <br><br>
                </div>
                <div class="col-md-4">
                    <span style="font-size: 1.2em">Monis <span class="text-orange">Ahmad</span></span>   
                    <br>
                    Software Engineer
                    <br>
                    Tata Consultancy Services
                    <br><br>
                </div>
                <div class="col-md-4">
                    <span style="font-size: 1.2em">Kumar <span class="text-orange">Shantanu</span> Sahu</span>   
                    <br>
                    Software Test Engineer
                    <br>
                    QA Info Tech
                    <br><br>
                </div>      
                
            </div>            
        </div>
        
        <div id="contact" class="clearfix" >
            <hr>
            <div class="col-md-offset-2 col-md-8">
                <div class="text-medium text-center">
                    <br><br>
                    For any query contact<br>
                    <span style="font-size: 1.3em">Mridul <span class="text-orange">Sinha</span></span>   
                    <br>
                    <br>                    
                    <i class="">Mobile :+91-999-054-9497
                    •
                    <i class="">Email : mridulsnh@gmail.com
    
                    <br>
                    <br>
                    <span style="font-size: 1.5em">

                        <a href="https://www.facebook.com/LaravelLive-India-1653453031614004" target="_blank">
                        <i class="fa fa-facebook-official" style="color:#311B92" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com/LaravelLiveIN" target="_blank">
                        <i class="fa fa-twitter" style="color:#2979FF" aria-hidden="true"></i>
                        </a>
                        <i class="fa fa-linkedin" style="color:#1976D2" aria-hidden="true"></i>
                    </span>
                    <br><br>
                    <hr>
                    © 2017 • LaraveLive.in • All Rights Reserved.
                </div>
            </div>            
        </div>
                
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
var lastId, topMenu = $("#top-menu"), topMenuHeight = topMenu.outerHeight()+5,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href='#"+id+"']").parent().addClass("active");
   }                   
});
</script>>
    </body>
</html>

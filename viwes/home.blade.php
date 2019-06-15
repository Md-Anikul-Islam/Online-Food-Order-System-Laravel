<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{URL::to('public/frontend/images/star.png')}}" type="favicon/ico" />

        <title>Online Food</title>

        <link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/flexslider.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/pricing.css')}}">
        <link rel="stylesheet" href="{{asset('public/frontend/css/main.css')}}">


        <script src="{{asset('public/frontend/js/jquery-1.11.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontend/js/jquery.flexslider.min.js')}}"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('.flexslider').flexslider({
                 animation: "slide",
                 controlsContainer: ".flexslider-container"
                });
            });
        </script>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            function initialize() {
                var mapCanvas = document.getElementById('map-canvas');
                var mapOptions = {
                    center: new google.maps.LatLng(24.909439, 91.833800),
                    zoom: 16,
                    scrollwheel: false,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(mapCanvas, mapOptions)

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(24.909439, 91.833800),
                    title:"Mamma's Kitchen Restaurant"
                });

                // To add the marker to the map, call setMap();
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>


    </head>
    <body data-spy="scroll" data-target="#template-navbar">

        <!--== 4. Navigation ==-->
        <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Food-fair-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <h2>Online Food</h2>
                       <!--  <img id="logo" src="{{URL::to('public/frontend/images/Logo_main.png')}}" class="logo img-responsive"> -->
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="Food-fair-toggle">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="http://localhost/FoodOrderOnline/">Home</a></li>
                        <li><a href="#about">about</a></li>
                        <li><a href="#pricing">Food Item</a></li>
                        <li><a href="#reserve">reservation</a></li>
                        <li><a href="#contact">contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.row -->
        </nav>


        <!--== 5. Header ==-->
    <!--     <section id="header-slider" class="owl-carousel">
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">BEST FOOD</h1>
                        <p class="header-sub-title">create your own slogan</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content">
                        <h1 class="header-title">BEST SNACKS</h1>
                        <p class="header-sub-title">create your own slogan</p>
                    </div> 
                </div>
            </div>
            <div class="item">
                <div class="container">
                    <div class="header-content text-right pull-right">
                        <h1 class="header-title">BEST DRINKS</h1>
                        <p class="header-sub-title">create your own slogan</p>
                    </div>
                </div>
            </div>
        </section> -->

        <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active">
                               <?php
                                   $all_published_slider=DB::table('tbl_slider')
                                                 ->where('publication_status',1)
                                                 ->get();
                                   foreach($all_published_slider as $v_slider){?>
                                <?php } ?>


                                   
                            </div>  
                        </div>  
                    </div>  
                </div>

                <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
                
                <ol class="carousel-indicators">
                
                    @foreach($all_published_slider as $v_slider)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
                    @endforeach


                
                </ol>
                
              
                <div class="carousel-inner" role="listbox">
                    @foreach($all_published_slider as $v_slider)
                        <div class="item {{ $loop->first ? ' active' : '' }}" >
                            <img src="{{ $v_slider->slider_image }}"  style="width:1250px;  height:650px;" >
                        </div>
                    @endforeach
                    
                </div>
            </div>

         </div>
     </div>
 </section>
 



        <!--== 6. About us ==-->
        <section id="about" class="about">
            <img src="{{URL::to('public/frontend/images/icons/about_color.png')}}" class="img-responsive section-icon hidden-sm hidden-xs">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row dis-table">
                        <div class="hidden-xs col-sm-6 section-bg about-bg dis-table-cell">

                        </div>
                        <div class="col-xs-12 col-sm-6 dis-table-cell">
                            <div class="section-content">
                                <h2 class="section-content-title">About us</h2>
                                <p class="section-content-para">
                                    Astronomy compels the soul to look upward, and leads us from this world to another.  Curious that we spend more time congratulating people who have succeeded than encouraging people who have not. As we got further and further away, it [the Earth] diminished in size.
                                </p>
                                <p class="section-content-para">
                                    beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.  Where ignorance lurks, so too do the frontiers of discovery and imagination.
                                </p>
                            </div> <!-- /.section-content -->
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container-fluid -->
            </div> <!-- /.wrapper -->
        </section> <!-- /#about -->


        <!--==  7. Afordable Pricing  ==-->
        <section id="pricing" class="pricing">
            <div id="w">
                <div class="pricing-filter">
                    <div class="pricing-filter-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="section-header">
                                        <h2 class="pricing-title">Food Item Your Choice:</h2>
                                        <ul id="filter-list" class="clearfix">
                                            <?php
                                                 $all_published_item=DB::table('tbl_item')
                                                 ->where('publication_status',1)
                                                 ->get();
                                                 foreach($all_published_item as $v_item){?>
                         
                                                <div class="panel panel-default">
                                                  <div class="panel-heading">
                                                   <h4 class="panel-title"><a href="{{URL::to('/item_by_food/'.$v_item->item_id)}}">{{($v_item->item_name)}}</a></h4>
                                                  </div>
                                                </div>
                                            <?php } ?>


                                        </ul><!-- @end #filter-list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">  
                        <div class="col-md-10 col-md-offset-1">
                            <ul id="menu-pricing" class="menu-price">
                                <li class="item dinner">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food1.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc text-center">
                                            <span>
                                                <h3>Tomato Curry</h3>
                                                Natalie &amp; Justin Cleaning by Justin Younger
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>

                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food2.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Lorem ipsum dolor sit amet
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food3.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Salad Dish</h3>
                                                Consectetur adipisicing elit, sed do eiusmod
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$18</h2>
                                </li>
                                <li class="item breakfast special">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food4.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Prawn Dish</h3>
                                                Tempor incididunt ut labore et dolore
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$15</h2>
                                </li>
                                <li class="item breakfast">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food5.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Dish</h3>
                                                Magna aliqua. Ut enim ad minim veniam
                                            </span>
                                        </div>
                                    </a>
                                        
                                    <h2 class="white">$20</h2>
                                </li>
                                <li class="item dinner special">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food6.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Chicken Dish</h3>
                                                Quis nostrud exercitation ullamco laboris
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$22</h2>
                                </li>
                                <li class="item desert">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food7.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Vegetable Noodles</h3>
                                                Nisi ut aliquip ex ea commodo
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$32</h2>
                                </li>
                                <li class="item dinner">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food8.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Special Salad</h3>
                                                Duis aute irure dolor in reprehenderit
                                            </span>
                                        </div>
                                    </a>

                                    <h2 class="white">$38</h2>
                                </li>
                                <li class="item desert special">

                                    <a href="#">
                                        <img src="{{URL::to('public/frontend/images/food9.jpg')}}" class="img-responsive" alt="Food" >
                                        <div class="menu-desc">
                                            <span>
                                                <h3>Ice-cream</h3>
                                                Excepteur sint occaecat cupidatat non
                                            </span>
                                        </div>
                                    </a>
                                    
                                    <h2 class="white">$38</h2>
                                </li>  
                            </ul>

                            <!-- <div class="text-center">
                                    <a id="loadPricingContent" class="btn btn-middle hidden-sm hidden-xs">Load More <span class="caret"></span></a>
                            </div> -->

                        </div>   
                    </div>
                </div>

            </div> 
        </section>




        <!--== 15. Reserve A Table! ==-->
        <section id="reserve" class="reserve">
        
        </section> 



        <section class="reservation">
            <img class="img-responsive section-icon hidden-sm hidden-xs" src="{{URL::to('public/frontend/images/icons/reserve_color.png')}}">
            <div class="wrapper">
                <div class="container-fluid">
                         <p class="alert-success">
                                  <?php
                                      $messege=Session::get('messege');
                                      if($messege)
                                      {
                                           echo $messege;
                                           Session::put('messege',null);
                                      }
                    
                                   ?>
                           </p>
                   
                    <div class=" section-content">

                           
                        <div class="row">
                         
                            <div class="col-md-5 col-sm-6">
                                <form class="reservation-form" method="post" action="{{url('/save-reserve')}}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="name" id="name" required="required" placeholder="  &#xf007;  Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control reserve-form empty iconified" id="email" required="required" placeholder="  &#xf1d8;  e-mail">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="tel" class="form-control reserve-form empty iconified" name="phone" id="phone" required="required" placeholder="  &#xf095;  Phone">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control reserve-form empty iconified" name="datepicker" id="datepicker" required="required" placeholder="&#xf017;  Time">
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <textarea type="text" name="message" class="form-control reserve-form empty iconified" id="message" rows="3" required="required" placeholder="  &#xf086;  We're listening"></textarea>
                                        </div>

                                        <div class="col-md-12 col-sm-12">
                                            <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                                <span><i class="fa fa-check-circle-o"></i></span>
                                                Make a reservation
                                            </button>
                                        </div>
                                            
                                    </div>
                                </form>
                            </div>

                            <div class="col-md-2 hidden-sm hidden-xs"></div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="opening-time">
                                    <h3 class="opening-time-title">Hours</h3>
                                    <p>Mon to Fri: 7:30 AM - 11:30 AM</p>
                                    <p>Sat & Sun: 8:00 AM - 9:00 AM</p>

                                    <div class="launch">
                                        <h4>Lunch</h4>
                                        <p>Mon to Fri: 12:00 PM - 5:00 PM</p>
                                    </div>

                                    <div class="dinner">
                                        <h4>Dinner</h4>
                                        <p>Mon to Sat: 6:00 PM - 1:00 AM</p>
                                        <p>Sun: 5:30 PM - 12:00 AM</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>




        <section id="contact" class="contact">
            <div class="container-fluid color-bg">
                <div class="row dis-table">
                    <div class="hidden-xs col-sm-6 dis-table-cell">
                        <h2 class="section-title">Contact With us</h2>
                    </div>
                    <div class="col-xs-6 col-sm-6 dis-table-cell">
                        <div class="section-content">
                            <p>Mirpur 01 Chiniz Probati rode #304/4/A</p>
                            <p>019642953542</p>
                            <p>anikulislam123@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="social-media">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <ul class="center-block">
                                <li><a href="#" class="fb"></a></li>
                                <li><a href="#" class="twit"></a></li>
                                <li><a href="#" class="g-plus"></a></li>
                                <li><a href="#" class="link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container-fluid">
            <div class="row">
                <div id="map-canvas"></div>
            </div>
        </div>



        <section class="contact-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                        <div class="row">
                             <form class="contact-form" method="post" action="{{url('')}}">
                                
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input  name="name" type="text" class="form-control" id="name" required="required" placeholder=" Name">
                                    </div>
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control" id="email" required="required" placeholder=" Email">
                                    </div>
                                    <div class="form-group">
                                        <input name="subject" type="text" class="form-control" id="subject" required="required" placeholder=" Subject">
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-6">
                                    <textarea name="message" type="text" class="form-control" id="message" rows="7" required="required" placeholder="Message"></textarea>
                                </div>

                                <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                    <div class="text-center">
                                        <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="copyright text-center">
                            <p>
                                &copy; Md Anikul Islam <a href="#">Your Website Link.</a> Theme by <a href="http://themewagon.com/"  target="_blank">2019</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    
        <script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontend/js/jquery.mixitup.min.js')}}" ></script>
        <script src="{{asset('public/frontend/js/wow.min.js')}}"></script>
        <script src="{{asset('public/frontend/js/jquery.validate.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontend/js/jquery.hoverdir.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/frontend/js/jQuery.scrollSpeed.js')}}"></script>
        <script src="{{asset('public/frontend/js/script.js')}}"></script>
        

    </body>
</html>
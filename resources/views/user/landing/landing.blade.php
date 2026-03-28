
@extends('user.layout.app')
@section('content')
 <div class="fixd">
        <h1>+</h1>
    </div>
    <!-- start header -->

    <!-- end header -->

    <!-- start landing -->
    <!-- start sicstion1 -->
    <div class="sic1">
        <div class="over-ley"></div>
        <div class="text">
            <div class="content">
                <h2> Hello world <br>
                    we are travel point
                    @if(!Auth::check())
                        Welcome, Guest
                    @else
                        Welcome, {{ Auth::user()->name }}
                    @endif

                </h2>
                <p></p>

            </div>

        </div>

    </div>
    <!-- End sicstion -->


    <!-- stRT sicstion2 -->

    <div class="sic2">
        <div class="cont">
            <h3>Joint stock <br> companies</h3>
        </div>
        <div class="p">


            <p><a href="#">Qatar <br> </a></p>
            <p><a href="#">Turkish <br> Airlins</a></p>
            <p><a href="#">Etihad <br> Ariways</a></p>
            <p> <a href="#">Etihad <br> Ariways</a></p>
        </div>
    </div>


    <!-- End sicstion2 -->
    <!-- start sicstion 4 -->

    <div class="sic4">
        <div class="title">
            <h5>Explore the best journeys with us</h5>
            <span></span>
        </div>
        <div class="contaier4">
            <div class="s-search">
                <div class="weay">
                    <div class="h1">
                        <h1> search by key word</h1>
                        <h1> search by key word</h1>
                        <h1> search by key word</h1>
                    </div>

                    <div class="b-search">
                        <button>Search</button>
                    </div>



                </div>
                <div class="s">
                    <p class="ss">search by :</p>
                    <p>ispan - </p>
                    <p>vip - </p>
                    <p>travel with group -</p>
                    <div class="d">
                        <p>delete oll</p>
                    </div>
                </div>
                <div class="block">

                    <div class="block1">
                        <p>itale</p>
                    </div>
                    <div class="block1">
                        <p>itale</p>
                    </div>
                    <div class="block1">
                        <p>itale</p>
                    </div>
                </div>




            </div>
            <div class="felter">
                <i class="fa-regular fa-chart-bar"></i>
            </div>
        </div>


    </div>
    <!-- End sicstion 4 -->

    <!-- start sicstion 3 -->
    <div class="sic3">
        <div class="title">
            <h4>Explore the best journeys with us</h4>
            <span></span>

        </div>
        <div class="container3">
            <div class="card">
                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">

                            <img src="../img/p3.jpg" id="i2" alt="">

                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>
                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">

                            <img src="../img/p3.jpg" id="i2" alt="">

                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>


                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">

                            <img src="../img/p3.jpg" id="i2" alt="">

                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>

                <div class="card1 margin">
                    <img src="../img/المانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>germane</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">
                            <img src="../img/p3.jpg" id="i2" alt="">
                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>
                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">
                            <img src="../img/p3.jpg" id="i2" alt="">
                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>

                <div class="card1 ">
                    <img src="../img/card.jpg" alt="">
                    <div class="cont-card">
                        <h4>Itale</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">
                            <img src="../img/p3.jpg" id="i2" alt="">
                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>

                </div>
                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">
                            <img src="../img/p3.jpg" id="i2" alt="">
                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>
                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">
                            <img src="../img/p3.jpg" id="i2" alt="">
                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>
                <div class="card1 margin">
                    <img src="../img/اسبانيا.webp" alt="">
                    <div class="cont-card">
                        <h4>ispan</h4>
                        <h4>Trip details</h4>
                        <p class="cont-card-pp">TDiscover the splendor of Italy and the magic of its timeless cities.
                        </p>
                    </div>
                    <div class="info">

                        <div class="price">
                            <h4>price</h4>
                            <p>300$ <span>-</span> 400$</p>
                        </div>
                        <div class="daet">
                            <h4>daet</h4>
                            <p>5 May <span>-</span> 30 May</p>
                        </div>


                    </div>
                    <div class="t">
                        <h1>Number of bookings</h1>
                    </div>
                    <div class="button">
                        <div class="img">

                            <img src="../img/p3.jpg" id="i1" alt="">
                            <img src="../img/p3.jpg" id="i2" alt="">
                            <img src="../img/p3.jpg" id="i3" alt="">
                            <img src="../img/p3.jpg" id="i4" alt="">
                            <div>
                                <p>+4</p>
                            </div>

                        </div>

                        <button>Book now</button>

                    </div>
                </div>




            </div>
        </div>


    </div>

    </div>

    <!-- End sicstion 3 -->
    <!--Staart siscyoin 5 -->
    <div class="sic5">
        <div class="title">
            <h5>Type of Travel</h5>
            <span></span>
        </div>
        <div class="cards">
            <div class="cards1">
                <div class="title">
                    <h1>Hajj and Umrah trips</h1>
                    <p>Organizing Hajj and Umrah trips with exceptional service standards</p>
                </div>
                <div class="Trip">
                    <div class="title">
                        <h1>Trip Advantages</h1>
                    </div>
                    <div class="Advantages">
                        <p>1. Fun activities for children</p>
                        <p>2. Entertainment for the whole building</p>
                        <p>3. Comfortable and organized schedule</p>
                        <p>5. star hotel bookings</p>
                    </div>
                    <div class="explor">
                        <a href="#">Explore Further</a>
                    </div>

                </div>
            </div>
            <div class="cards1">
                <div class="title">
                    <h1>Journeys Trips</h1>
                    <p>Perfect trips that combine fun and comfort</p>

                </div>
                <div class="Trip">
                    <div class="title">
                        <h1>Trip Advantages</h1>
                    </div>
                    <div class="Advantages">
                        <p>1. Fun activities for children</p>
                        <p>2. Entertainment for the whole building</p>
                        <p>3. Comfortable and organized schedule</p>
                        <p>5. star hotel bookings</p>
                    </div>
                    <div class="explor">
                        <a href="#">Explore Further</a>
                    </div>

                </div>

            </div>
            <div class="cards1">
                <div class="title">
                    <h1>Trips VIP</h1>
                    <p>Perfect trips that combine fun and comfort</p>

                </div>
                <div class="Trip">
                    <div class="title">
                        <h1>Trip Advantages</h1>
                    </div>
                    <div class="Advantages">
                        <p>1. Fun activities for children</p>
                        <p>2. Entertainment for the whole building</p>
                        <p>3. Comfortable and organized schedule</p>
                        <p>5. star hotel bookings</p>
                    </div>
                    <div class="explor">
                        <a href="#">Explore Further</a>
                    </div>

                </div>

            </div>


        </div>

    </div>


    <!--end siscyoin 5 -->
    <!-- start siction 6 -->
    <div class="sic6">
        <div class="title">
            <h5>Type of Travel</h5>
            <span></span>
        </div>
        <div class="card6">
            <div class="card6_1">
                <img src="../img/الكعبة.webp" alt="">
                <div class="cont_title">
                    <h5>Dobai</h5>
                </div>
                <div class="info6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repudiandae officia esse,
                        voluptates voluptas iusto a alias optio consequuntur est! Facere dignissimos dolorem iure
                        voluptate atque <span> <a href="#">Explore Further</a> </span>
                    </p>
                </div>


            </div>
            <div class="card6_1">
                <img src="../img/دبي.webp" alt="">
                <div class="cont_title">
                    <h5>Dobai</h5>
                </div>
                <div class="info6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repudiandae officia esse,
                        voluptates voluptas iusto a alias optio consequuntur est! Facere dignissimos dolorem iure
                        voluptate atque <span> <a href="#">Explore Further</a> </span>
                    </p>
                </div>


            </div>
            <div class="card6_1">
                <img src="../img/برج ايفل.webp" alt="">
                <div class="cont_title">
                    <h5>Dobai</h5>
                </div>
                <div class="info6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo repudiandae officia esse,
                        voluptates voluptas iusto a alias optio consequuntur est! Facere dignissimos dolorem iure
                        voluptate atque <span> <a href="#">Explore Further</a> </span>
                    </p>
                </div>


            </div>

        </div>
    </div>

    <!-- end siction 6 -->


    <!-- srart siction 7 -->
    <div class="sic7">
        <div class="title">
            <h5>Find your travel route</h5>
            <span></span>
        </div>
        <div class="route">
            <div class="route_1">
                <div class="circle" id="t-l">
                    <p>1</p>
                </div>
                <div class="cont_7">
                    <p>Book your trip from home in <br><span>the easiest way</span></p>
                </div>

            </div>
            <div class="route_1">
                <div class="cont_7">
                    <p>The bus comes to <span>your doorstep</span> <br> picks you and your luggage <br> up while you
                        relax</p>
                </div>
                <div class="circle" id="t-r">
                    <p>2</p>
                </div>


            </div>
            <div class="route_1">
                <div class="circle" id="b-l">
                    <p>3</p>
                </div>
                <div class="cont_7">
                    <p>You board the plane you chose And you <br> <span>sit in the seat</span> of your choice.</p>
                </div>

            </div>
            <div class="route_1">
                <div class="cont_7">
                    <p>You check int the hotel<br> you chose and the porter <br> <span> carries your bags</span> while
                        you relax</p>
                </div>
                <div class="circle" id="b-r">
                    <p>4</p>
                </div>


            </div>



        </div>

    </div>
    <!-- end siction 7 -->

    <!-- srart siction 8 -->
    <div class="sic8">
        <div class="center">
            <div class="title">
                <h5>Find your travel route</h5>
                <span></span>
            </div>
            <div class="icon">
                <div class="icon1">
                    <img src="../img/24-hours-support_white.png" alt="">
                    <div class="cont8">
                        <h1>wwww</h1>
                    </div>
                </div>
                <div class="icon1">
                    <img src="../img/برامج.png" alt="">
                    <div class="cont8">
                        <h1>wwww</h1>
                    </div>
                </div>
                <div class="icon1">
                    <img src="../img/hotel_colored_white.png" alt="">
                    <div class="cont8">
                        <h1>wwww</h1>
                    </div>
                </div>
                <div class="icon1">
                    <img src="../img/حجوزات.png" alt="">
                    <div class="cont8">
                        <h1>www</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end siction 8 -->
    <!-- End landing -->

@endsection



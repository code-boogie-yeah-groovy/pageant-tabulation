@extends('layouts.app')
@section('content')
    <div id="sidebar">
        @include('templates.sidebar')
    </div>
    <!-- CAROUSEL START -->
    <div id="myCarousel" class="carousel slide" date-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
            <li data-target="#myCarousel" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/1.jpg') }}" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/2.jpg') }}" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/3.jpg') }}" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/4.jpg') }}" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/5.jpg') }}" class="d-block w-100"/>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/6.jpg') }}" class="d-block w-100"/>
            </div>
        </div>
    </div>
    <!--CAROUSEL END-->

    <!--FOOTER START-->
    <footer class="text-pink d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4><b>Contact us on</b>	
                    <div class="footer_social">
                        <ul>
                            <a href="#" class="btn contact-link">
                                <i class="fab fa-facebook"></i> 
                                Amacc Naga
                            </a>
                            <a href="#" class="btn contact-link">
                                <i class="fas fa-phone-square"></i>
                                09123456789
                            </a>
                        </ul>
                    </div>
                    </h4>														
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </footer>
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 3000
            });

            $('.menu-link').bigSlide({
                menu: ('#sidebar'),
                menuWidth: '30vw',
                push:('wrap'),
                side: 'right',
                saveState: true,
            });
        });    
    </script>
@endsection
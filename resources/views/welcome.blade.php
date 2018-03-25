@extends('layouts.app')
@section('content')
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
    <footer class="">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4><b>Contact us on</b>	
                    <div class="footer_social">
                        <ul>
                            <a class="f_facebook" href="#"><i class="fab fa-facebook" alt=:""></i> 
                            Amacc Naga</a>
                            <i class="fas fa-phone-square"></i>
                            09123456789
                        </ul>
                    </div>
                    </h4>														
                </div><!--- END COL -->
            </div><!--- END ROW -->
        </div><!--- END CONTAINER -->
    </footer>
@endsection

@section('script')
    <script language="JavaScript" type="text/javascript">
        $(document).ready(function(){
            $('.carousel').carousel({
            interval: 3000
            })
        });    
    </script>
@endsection
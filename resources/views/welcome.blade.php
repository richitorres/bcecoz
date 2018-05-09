@extends('template.main')
@section('title','Welcome')
@section('htmlcore')
@include('partials.header2')
<div class="container">
    <div id="gtco-features-3">
        <div class="gtco-container">
            <div class="gtco-flex">
                <div class="feature feature-1 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">

                        <img src="{{asset('img/j.png')}}" class="img-responsive imge-circle icon" alt="">

                        <h3>Dream</h3>
                        <p>We make your dreams in cozumel island</p>
                        <img src="{{asset('img/imaga3.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="feature feature-2 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
                        <img src="{{asset('img/s.png')}}" class="img-responsive imge-circle icon" alt="">
                        <h3>Explore</h3>
                        <p>The heaven on hearth is awesome, we make your experience some unique.</p>
                        <img src="{{asset('img/imaga2.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="feature feature-3 animate-box" data-animate-effect="fadeInUp">
                    <div class="feature-inner">
                        <img src="{{asset('img/n.png')}}" class="img-responsive imge-circle icon" alt="">
                        <h3>Discover</h3>
                        <p>The sky, sea and maya land are places where your experience in Cozumel will be incredible.</p>
                        <img src="{{asset('img/imaga5.jpg')}}" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="gtco-products">
        <div class="gtco-container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                    <h2>Amazing Tours in Cozumel</h2>
                    <p>Jeep Experience, Jeep Adventure, Prime Time, Off Road</p>

                    <a href="#" class="btn btn-primary" target="_blank">Book Here <span class="icon-calendar"></span></a>


                </div>
            </div>
            <div class="row animate-box">
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="{{asset('img/imaga7.jpg')}}" alt="BestCozumelExcursions">

                    </div>
                    <div class="item">
                        <img src="{{asset('img/imaga6.jpg')}}" alt="BestCozumelExcursions">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/imaga5.jpg')}}" alt="BestCozumelExcursions">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection()
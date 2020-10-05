@extends('template')
@section('content')
<section class="rq-banner-area">
    <div class="rq-banner-area-mask">
        <div class="container">
            <div class="bq-banner-text">
                <div class="bq-banner-text-middle">
                    <img src="{{asset('public/img/banner-logo.png')}}"  alt="Responsive image" />
                    <h1>hotel booking</h1>
                    <h3>hotel resort booking theme</h3>
                    {{-- <div class="banner-logo2">
                        <a href="#"><img src="{{asset('public/img/banner-logo-3.png')}}" alt=".." /></a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rq-hotel-palace">
    <div class="container ">
        <div class="rq-hotel-text text-center">
             <div class="container">
                    <h2 class="text-center">Simulasi</h2>
                    <div class="rq-checkout-form">
                        <div class="row">
                            <form action="{{url('process')}}" method="POST">@csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="contact">Nominal <span>*</span></label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="nominal">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail2" class="contact">Biaya Admin </label>
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="admin" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail2" class="contact">Bunga </label>
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="bunga" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail2" class="contact">Total </label>
                                            <input type="text" class="form-control" id="exampleInputEmail2" name="total" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="rq-common-btn">
                                            <label for="exampleInputEmail2" class="contact">&nbsp;<br></label>
                                            <button class="btn rq-btn-primary" type="submit"> Ajukan</button>
                                         </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <div class="rq-pal-bg">&nbsp;</div>
            <h2 class="text-center">what we offer</h2>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 rq-our-offer">
                <div class="thumbnail">
                    <div class="rq-img-wrapper">
                        <picture>
                            <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-square.jpg')}}>
                            <img alt="Responsive Image" src="{{asset('public/img/placeholder-square.jpg')}}" srcset={{asset('public/img/placeholder-square.jpg')}}>
                        </picture>
                    </div>
                    <div class="caption">
                        <h3><a href="#">large cafe</a></h3>
                        <p>point of using that has more less normal distribution is among</p>
                        <h4 class="special-span"><span>$250</span>Night</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 rq-our-offer">
                <div class="thumbnail">
                    <div class="rq-img-wrapper">
                        <picture>
                            <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-square.jpg')}}>
                            <img alt="Responsive Image" src="{{asset('public/img/placeholder-square.jpg')}}" srcset={{asset('public/img/placeholder-square.jpg')}}>
                        </picture>
                    </div>
                    <div class="caption">
                        <h3><a href="#">rooftop cusine</a></h3>
                        <p>point of using that has more less normal distribution is among</p>
                        <h4 class="special-span"><span>$250</span>Night</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 rq-our-offer">
                <div class="thumbnail">
                    <div class="rq-img-wrapper">
                        <picture>
                            <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-square.jpg')}}>
                            <img alt="Responsive Image" src="{{asset('public/img/placeholder-square.jpg')}} " srcset={{asset('public/img/placeholder-square.jpg')}}>
                        </picture>
                    </div>
                    <div class="caption">
                        <h3><a href="#">premium living</a></h3>
                        <p>point of using that has more less normal distribution is among</p>
                        <h4 class="special-span"><span>$250</span>Night</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rq-slider-area parallax-window">
    <div class="rq-main-slider-mask"></div>
    <a class="rq-video-play-btn popup-vimeo" href="https://vimeo.com/45830194">
        <i class="ion-ios-play-outline"></i>
    </a>
</section>

<section class="rq-suprime-area">
    <div class="container">
        <h1 class="text-center">we are suprime</h1>
        <div class="rq-suprime-logo text-center"><img src="{{asset('public/img/place_logo_2.png')}}" alt="Responsive image" /></div>
        <div class="rq-sup">
            <div class="row ">
                <div class="col-md-7 col-sm-7">
                    <div class="rq-sup-img-wrap">
                        <picture>
                            <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-770.jpg')}}>
                            <img alt="Responsive Image" src="{{asset('public/img/placeholder-770.jpg')}}" srcset={{asset('public/img/placeholder-770.jpg')}}>
                        </picture>
                    </div>
                </div>
                <div class="col-md-5 col-sm-5">
                    <div class="rq-suprime-text">
                        <h4>best food <br> over the world</h4>
                        <p>content here making it look like readable English. Many desktop of letters, as opposed to using content</p>
                        <ul class="nav">
                            <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>Decorated room, proper air condioned</li>
                            <li role="presentation"> <span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>Saloon, gym, spa facilities</li>
                            <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>24 hours room service</li>
                        </ul>
                        <a class="btn rq-btn-secondary" href="#">DETAIL</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rq-sup ">
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="rq-suprime-text rq-suprime-text-2">
                        <h4>luxurious<br>hotel’s room</h4>
                        <p>content here making it look like readable English. Many desktop of letters, as opposed to using content</p>
                        <ul class="nav">
                            <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>Decorated room, proper air condioned</li>
                            <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>Saloon, gym, spa facilities</li>
                            <li role="presentation"><span class="badge"><i class="fa fa-check" aria-hidden="true"></i></span>24 hours room service</li>
                        </ul>
                        <a class="btn rq-btn-secondary" href="#">DETAIL</a>
                    </div>
                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="rq-sup-img-wrap">
                        <picture>
                            <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-770.jpg')}}>
                            <img alt="Responsive Image" src="{{asset('public/img/placeholder-770.jpg')}}" srcset={{asset('public/img/placeholder-770.jpg')}}>
                        </picture>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rq-content-making-area">
    <div class="container ">
        <div class="rq-owl-carousel-content">
            <div class="owl-carousel">
                <div class="rq-content-making-item">
                    <div class="rq-content-logo text-center center-block">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Content making readable English desktop publishing packages editors point using is that making readable English desktop publishing packages editors point using it has a normal distribution as oppo</p>
                    <p class="rq-special text-center">ADRAIN SMITH</p>
                </div>
                <div class="rq-content-making-item">
                    <div class="rq-content-logo text-center center-block">
                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                    </div>
                    <p class="text-center">Content making readable English desktop publishing packages editors point using is making readable English desktop publishing packages editors point using it has a normal distribution as oppo</p>
                    <p class="rq-special text-center">ADRAIN SMITH</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="rq-testimonial-owl-carousel">
    <div class="owl-carousel bg-color">
        <div class="port-img">
            <a href="#">
            <picture>
                <source media="(min-width: 768px)" srcset=img/placeholder-390.jpg>
                <img alt="Portfolio Image" src="{{asset('public/img/placeholder-390.jpg')}}" srcset=img/placeholder-390.jpg>
            </picture>
            <div class="mask1"></div><div class="rq-port-center"><h4>quality food</h4></div>
        </a>
        </div>
        <div class="port-img">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset=img/placeholder-390.jpg>
                    <img alt="Portfolio Image" src="{{asset('public/img/placeholder-390.jpg')}}" srcset=img/placeholder-390.jpg>
                </picture>
                <div class="mask1"></div><div class="rq-port-center"><h4>NICE DECOATION</h4></div>
            </a>
        </div>
        <div class="port-img">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset=img/placeholder-390.jpg>
                    <img alt="Portfolio Image" src="{{asset('public/img/placeholder-390.jpg')}}" srcset=img/placeholder-390.jpg>
                </picture>
                <div class="mask1"></div><div class="rq-port-center"><h4>PEMIUM LIVING</h4></div>
            </a>
        </div>
        <div class="port-img">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset=img/placeholder-390.jpg>
                    <img alt="Portfolio Image" src="{{asset('public/img/placeholder-390.jpg')}}" srcset=img/placeholder-390.jpg>
                </picture>
                <div class="mask1"></div><div class="rq-port-center"><h4>Tradtional CUSiNE</h4></div>
            </a>
        </div>
        <div class="port-img">
            <a href="#">
                <picture>
                    <source media="(min-width: 768px)" srcset=img/placeholder-390.jpg>
                    <img alt="Portfolio Image" src="{{asset('public/img/placeholder-390.jpg')}}" srcset=img/placeholder-390.jpg>
                </picture>
                <div class="mask1"></div><div class="rq-port-center"><h4>organic food</h4></div>
            </a>
        </div>
    </div>
</section>
<section class="rq-offer-section">
    <div class="container">
        <div class="row">
            <p>Join the food festival and enjoy <span class="rq-highlight-text">100%</span> instant discount upto 20 january</p>
        </div>
    </div>
</section>
@stop

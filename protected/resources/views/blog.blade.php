@extends('template')
@section('content')
<section class="rq-page-background rq-blog-page-bg"><div class="banner_shadow"><h1>BLOG</h1></div></section>

<section class="rq-blog-post-section" id="blog-post">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7 rq-blog-post-wrapper">
                @foreach($blog as $b)
                    <div class="rq-blog-items rq-image-post">
                        <div class="rq-blog-img-wrapper">
                            <img src="{{asset('public/img/blog/'.$b->image)}}" alt="Blog Image">
                            <div class="rq-blog-cat-icon"><i class="ion-ios-camera-outline"></i></div>
                        </div>

                        <div class="rq-blog-item-details">
                            <h3><a href="{{url('detail/'.$b->id)}}">{{$b->title}}</a></h3>
                            <p>{{$b->message}}</p>
                            <span class="rq-blog-post-date">March 20, 2016</span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="col-md-4 col-sm-5 rq-sidebar">
                <div class="rq-sidebar-wrapper">
                    <div class="rq-sidebar-widget rq-recent-post-widget">
                        <h3 class="rq-sidebar-title">Recent Posts</h3>
                        <div class="rq-recent-post-wrapper">
                            <div class="rq-recent-post-item">
                                <div class="rq-recent-post-img-wrapper">
                                    <img src="{{asset('public/img/placeholder-70.jpg')}}" alt="Recent Post">
                                </div>

                                <div class="rq-recent-post-details">
                                    <h3><a href="#">Food is poetry </a></h3>
                                    <span class="rq-post-date">March 20, 2016</span>
                                </div>
                            </div>
                            <div class="rq-recent-post-item">
                                <div class="rq-recent-post-img-wrapper">
                                    <img src="{{asset('public/img/placeholder-70.jpg')}}" alt="Recent Post">
                                </div>

                                <div class="rq-recent-post-details">
                                    <h3><a href="#">Nobody can't defeat me !</a></h3>
                                    <span class="rq-post-date">March 20, 2016</span>
                                </div>
                            </div>
                            <div class="rq-recent-post-item">
                                <div class="rq-recent-post-img-wrapper">
                                    <img src="{{asset('public/img/placeholder-70.jpg')}}" alt="Recent Post">
                                </div>

                                <div class="rq-recent-post-details">
                                    <h3><a href="#">Food is poetry </a></h3>
                                    <span class="rq-post-date">March 20, 2016</span>
                                </div>
                            </div>
                            <div class="rq-recent-post-item">
                                <div class="rq-recent-post-img-wrapper">
                                    <img src="{{asset('public/img/placeholder-70.jpg')}}" alt="Recent Post">
                                </div>

                                <div class="rq-recent-post-details">
                                    <h3><a href="#">Nobody can't defeat me !</a></h3>
                                    <span class="rq-post-date">March 20, 2016</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="rq-sidebar-widget rq-category-widget">
                        <h3 class="rq-sidebar-title">Catagories</h3>
                        <ul>
                            <li><a href="#">Programming</a></li>
                            <li><a href="#">Real Estate</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Food &amp; Cafe</a></li>
                            <li><a href="#">Google Map</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@stop

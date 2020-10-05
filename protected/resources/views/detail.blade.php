@extends('template')
@section('content')
<div id="banner"><img src="{{asset('public/img/palceholder-featured.jpg')}}" alt="" class="img-responsive"></div>
<main role="main" id="blog-post-details">
    <div class="container">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <article>
                    <h1>HOTEL BOWLING CLUB</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li><time datetime="2016-05-20">MAY 20, 2016</time></li>
                            <li class="active"><a href="#">ADMIN</a></li>
                            <li><a href="">COMMENT<span> 3</span></a></li>
                        </ol>
                    </div>
                    <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he amon and the other hand, we denounce with righteous indignation and dislike mens who are so begueled and demoralized</p>
                    <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always</p>
                    <blockquote>
                        <p>Making readable English desktop publishing packages editors it has a normal distribution as oppo</p>
                    </blockquote>
                    <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he amon and the other hand, we denounce with righteous</p>
                    <div class="blog-img">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 rq-single-img-left">
                                <picture>
                                    <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-410.jpg')}}>
                                    <img alt="Responsive Image" srcset={{asset('public/img/placeholder-550.jpg')}}>
                                </picture>
                            </div>
                            <div class="col-md-6 col-sm-6 padding-left rq-single-img-right">
                                <picture>
                                    <source media="(min-width: 768px)" srcset={{asset('public/img/placeholder-410.jpg')}}>
                                    <img alt="Responsive Image" srcset={{asset('public/img/placeholder-550.jpg')}}>
                                </picture>
                            </div>
                        </div>
                    </div>
                    <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he amon and the other hand, we denounce with righteous indignation and dislike mens who are so begueled and demoralized. blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always holds in these matters to this princple of selection and he reject</p>
                    <p>Blinded by desire, that they cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will, which is the same therefore always</p>
                    <div class="nav-bottom">
                        <a class="btn btn-flat-text" href="#" role="button">ROOM</a>
                        <a class="btn btn-flat-text" href="#" role="button">HOTEL</a>
                        <a class="btn btn-flat-text" href="#" role="button">TEA</a>
                        <a class="btn btn-flat pull-right" href="#" role="button">SHARE</a>
                    </div>
                </article>
                <article class="comments">
                    <h3>COMMENTS</h3>
                    <ul class="media-list">
                        <li class="media">
                            <div class="media-left">
                                <a href="#"><img src="{{asset('public/img/placeholder-user.png')}}" alt=""></a>
                            </div>
                            <div class="media-body">
                                <div class="arrow_box">
                                    <div class="comment-block">
                                        <h4>DAVID</h4><span><time datetime="2016-05-20">MAY 20, 2016</time></span>
                                    </div>
                                    <p>cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will</p>
                                    <p class="font11">REPLAY</p>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#"><img src="img/placeholder-user.png" alt=""></a>
                                    </div>
                                    <div class="media-body">
                                        <div class="arrow_box">
                                            <div class="comment-block">
                                                <h4>DAVID</h4>span><time datetime="2016-05-20">MAY 20, 2016</time></span>
                                            </div>
                                            <p>cannot foresee the pain and trouble that are bounds to ensure blames belongs to those a weakness of will</p>
                                            <p class="font11">REPLAY</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </article>
                <section id="feedback">
                    <h3>SUBMIT A COMMENT</h3>
                    <div class="row">
                        <form class="comment-form">
                            <div class="form-group">
                                <label class="sr-only" for="userName">User Name</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="userName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="userEmail">Email</label>
                                <div class="col-md-4">
                                    <input type="email" class="form-control" id="userEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="userWeb">Web</label>
                                <div class="col-md-4">
                                    <input type="url" class="form-control" id="userWeb" placeholder="Web">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea class="form-control" rows="7" placeholder="Comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3"><button type="submit" class="btn btn-flat">SUBMIT</button></div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@stop

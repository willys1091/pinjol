@extends('template')
@section('content')
<div id="map"></div>
<div class="rq-contact-message">
    <div class="container">
        <div class="rq-submit-review">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                <h2>send a message</h2>
                    <form action="{{url('contact')}}" method="POST">
                        <input type="text" name="name" id="rq-contact-name" placeholder="Name" required>
                        <input type="email" name="email" id="rq-contact-email" placeholder="Email" required>
                        <textarea name="message" id="rq-contact-message" cols="30" rows="5" placeholder="Message"></textarea>
                        <button type="submit">Submit</button>@csrf
                    </form>
                </div>
                <div class="col-md-3 col-md-offset-1 col-sm-4">
                    <div class="rq-address-wrapper">
                        <h5>address 1</h5>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <a href="#">Green lake, Hotel plaza <br> <span>new york, USA</span> </a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#">807 302 2186</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="#">mail@domain.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="rq-address-wrapper rq-message-address-2">
                        <h5>address 2</h5>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <a href="#">Green lake, Hotel plaza <br> <span>new york, USA</span> </a>
                            </li>
                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <a href="#">807 302 2186</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                <a href="#">mail@domain.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

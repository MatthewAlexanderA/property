@extends('home.layout')

@section('content')
@include('sweetalert::alert')

 <!-- BREADCRUMB -->
 <section class="section__breadcrumb" style="background-color: #363f5e;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Contact Us</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            contact us
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->

<!-- Form contact -->
<section class="wrap__contact-form">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h5>contact us</h5>
                <form method="GET" action="email">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <label for="name"><b>Your Name:</b></label>
                            </div>
                            <div class="input-group">
                                <input name="name" type="text" required class="form-control" placeholder="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <label for="email"><b>Your Email:</b></label>
                        </div>
                    <div class="form-group">
                        <div class="input-group"> 
                            <input name="email" type="email" class="form-control" required  placeholder="" >
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input-group">
                            <label for="desc"><b>Your Message:</b></label>
                        </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea name="desc" rows="4" class="form-control" required placeholder=""></textarea>
                        </div>
                    </div>
                        <div class="form-group float-right mb-0">
                            <button type="submit" class="btn btn-primary btn-contact">Submit</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>


            <div class="col-md-4">
                <h5>Info location</h5>
                <div class="wrap__contact-form-office">
                    <ul class="list-unstyled">
                        <li>
                            <span>
                                <i class="fa fa-home"></i>
                            </span>

                            {{ $config[0]->address }}


                        </li>
                        <li>
                            <span>
                                <i class="fa fa-phone"></i>
                                <a href="tel:">{{ $config[0]->phone }}</a>
                            </span>

                        </li>
                    </ul>

                    <div class="social__media">
                        <h5>find us</h5>
                        <ul class="list-inline">

                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $config[0]->fb }}" class="btn btn-social rounded text-white facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $config[0]->twit }}" class="btn btn-social rounded text-white twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $config[0]->in }}" class="btn btn-social rounded text-white linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $config[0]->ig }}" class="btn btn-social rounded text-white instagram">
                                    <i class="fa fa-instagram"></i>
                                </a> 
                            </li>
                            <li class="list-inline-item">
                                <a target="_blank" href="{{ $config[0]->yt }}" class="btn btn-social rounded text-white youtube">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Form contact  -->

@endsection
@extends('home.layout')

@section('content')
    
    <!-- CAROUSEL -->
    <div class="slider-container">
        <div class="container-slider-image-full  ">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators d-none">
                    @foreach ($slider as $s)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $s->id }}" class=""></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active banner-max-height">
                        <img class="d-block w-100" src="{{ asset('storage/' . $slider[0]->image) }}" alt="No-Image">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">                                    
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="fadeInDown" data-delay=".2s" data-duration="1000ms"
                                                    class="text-white animated fadeInDown">
                                                    {{ $slider[0]->title }}</h2>
                                                <p data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms"
                                                    class="text-white animated fadeInUp">
                                                    {!! $slider[0]->content !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach ($slider as $s)
                    <div class="carousel-item banner-max-height">
                        <img class="d-block w-100" src="{{ asset('storage/' . $s->image) }}" alt="No-Image">
                        <div class="carousel-caption banner__slide-overlay d-flex h-100">
                            <div class="carousel__content">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-8 col-md-12 col-sm-12 text-center">
                                            <div class="slider__content-title ">
                                                <h2 data-animation="animated fadeInDown"
                                                    class="text-white animated fadeInDown">
                                                    {{ $s->title }}</h2>
                                                <p data-animation="animated fadeInUp" 
                                                    class="text-white animated fadeInUp ">
                                                    {!! $s->content !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span> --}}
                <span class="carousel-control-nav-prev">
                    <i class="fa fa-2x fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span> --}}
                <span class="carousel-control-nav-next">
                    <i class="fa fa-2x fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- END CAROUSEL -->
    <div class="clearfix"></div>
    <div class="search__area bg-light">
        <div class="container">
            <div class="search__area-inner">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="area" class="wide select_option">
                                <option value="" data-display="Area From">Area From </option>
                                <option value="1500">1500</option>
                                <option value="1200">1200</option>
                                <option value="900">900</option>
                                <option value="600">600</option>
                                <option value="300">300</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="bed" class="wide select_option">
                                <option value="" data-display="Bedrooms">Bedrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="bath" class="wide select_option">
                                <option value="" data-display="Bathrooms">Bathrooms</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-3">
                        <div class="form-group">
                            <select name="category" class="wide select_option">
                                <option value="" data-display="All Category">All Category</option>
                                @foreach ($category as $c)
                                <option value="{{ $c->category }}">{{ ucfirst($c->category) }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-group">
                            <div class="filter__price">
                                <input class="price-range" type="text" name="price" value="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="form-group">
                            <button class="btn btn-primary text-uppercase btn-block"> search <i
                                    class="fa fa-search ml-1"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            featured properties
                        </h2>
                        <p class="text-center text-capitalize">handpicked exclusive properties by our team.</p>

                    </div>
                </div>
            </div>

            <!--=========================================
=            Section Gallery two            =
==========================================-->
            <div class="card__image-filter">
                <div class="filterizr-control">
                    <ul class="list-inline filterizr-filter">
                        <li class="list-inline-item filtr-active btn-filter" data-filter="all">All Property</li>
                        @foreach ($category as $c)
                            <li class="list-inline-item btn-filter" data-filter="{{ $c->category }}">{{ ucfirst($c->category) }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    <div class="filtr-container">

                        @foreach ($property as $p)
                        <div class="col-md-6 col-lg-4 filtr-item" data-category="{{ $p->category }}" data-title="">

                            <a href="{{ route('properties.show', $p->id) }}">
                            <div class="card__image card__box-v1">
                                <div class="card__image-header h-250">
                                    <div class="ribbon text-capitalize">featured</div>
                                    <img src="{{ asset('storage/' . $p->image) }}" alt="" class="img-fluid w100 img-transition">
                                    <div class="info"> for sale</div>
                                </div>
                                <div class="card__image-body">
                                    <span class="badge badge-primary text-capitalize mb-2">{{ $p->category }}</span>
                                    <h6 class="text-capitalize">
                                        {{ $p->name }}
                                    </h6>

                                    <p class="text-capitalize">
                                        <i class="fa fa-map-marker"></i>
                                        {{ $p->location }}
                                    </p>
                                    <ul class="list-inline card__content">
                                        <li class="list-inline-item">

                                            <span>
                                                baths <br>
                                                <i class="fa fa-bath"></i> {{ $p->bath }}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                beds <br>
                                                <i class="fa fa-bed"></i> {{ $p->bed }}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                rooms <br>
                                                <i class="fa fa-inbox"></i> {{ $p->room }}
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                area <br>
                                                <i class="fa fa-map"></i> {{ $p->area }} sq ft
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__image-footer">
                                    <ul class="list-inline my-auto">
                                    </ul>
                                    <ul class="list-inline my-auto ml-auto">
                                        <li class="list-inline-item">

                                            <h6>${{ number_format($p->price) }}</h6>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            what people says
                        </h2>
                        <p class="text-center text-capitalize">people says about our property.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="testimonial owl-carousel owl-theme">
                <!-- TESTIMONIAL -->
                @foreach ($testimonial as $t)
                <div class="item testimonial__block">
                    <div class="testimonial__block-card bg-reviews">
                        <p>
                            {!! $t->content !!}
                        </p>
                    </div>
                    <div class="testimonial__block-users">
                        <div class="testimonial__block-users-img">
                            <img src="{{ asset('storage/' . $t->image) }}" alt="No-Image" class="img-fluid">
                        </div>
                        <div class="testimonial__block-users-name">
                            {{ $t->name }} <br>
                            <span>{{ $t->profession }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- END TESTIMONIAL -->

            </div>
        </div>
    </section>
    <!-- END TESTIMONIAL -->



    <!-- BLOG -->
    <section class="blog__home bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            lastest news
                        </h2>
                        <p class="text-center text-capitalize">Find Of The Most Popular Property All Around
                            Indonesia.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                @foreach ($blog as $b)
                <div class="col-md-4">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <a href="{{ route('blogs.show', $b->id) }}">
                            <div class="card__image-header h-250">
                            <img src="{{ asset('storage/' . $b->image) }}" alt="" class="img-fluid w100 img-transition">
                            {{-- <div class="info"> event</div> --}}
                            </div>
                        </a>
                        <div class="card__image-body">
                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                            <h6 class="text-capitalize">
                                <a href="{{ route('blogs.show', $b->id) }}">{{ $b->title }} </a>
                            </h6>

                        </div>
                        <div class="card__image-footer">
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item "></li>
                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item ">
                                    <a href="{{ route('blogs.show', $b->id) }}" class="btn btn-sm btn-primary "><small
                                            class="text-white ">read more <i
                                                class="fa fa-angle-right ml-1"></i></small></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    @endsection
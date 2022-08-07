@extends('home.layout')
@php
    use App\Models\Category;
@endphp

@section('content')
    
 <!-- BREADCRUMB -->
 <section class="section__breadcrumb" style="background-color: #363f5e;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Properties</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            properties
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->

<section>
    <div class="container">
        @if(Session::has('successMsg'))
            <div class="alert alert-danger"> {{ Session::get('successMsg') }}</div>
            @php
                Session::forget('successMsg');
            @endphp
        @endif
        <div class="search__area bg-light">
            <div class="container">
                <div class="search__area-inner">
                    <form action="{{ url()->current() }}" autocomplete="off" method="get">
                    <div class="row">
                        <div class="col-6 col-lg-2 col-md-2">
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
                        <div class="col-6 col-lg-2 col-md-2">
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
                        <div class="col-6 col-lg-2 col-md-2">
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
                        <div class="col-6 col-lg-2 col-md-2">
                            <div class="form-group">
                                <select name="category" class="wide select_option">
                                    <option value="" data-display="All Category">All Category</option>
                                    @foreach ($category as $c)
                                    <option value="{{ $c->id }}">{{ ucfirst($c->category) }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-12 col-lg-6 col-md-6">
                            <div class="form-group">
                                <div class="filter__price">
                                    <input class="price-range" type="text" name="price" value="" />
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <input type="number" name="price1" placeholder="Min Price ($)">
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-3">
                            <div class="form-group">
                                <input type="number" name="price2" placeholder="Max Price ($)">
                            </div>
                        </div> --}}
                        <div class="col-12 col-lg-4 col-md-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary text-uppercase btn-block"> search <i
                                        class="fa fa-search ml-1"></i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--=========================================
=            Section Gallery two            =
==========================================-->
        <div class="card__image-filter">
            <div class="row">
                <div class="filtr-container">

                    @foreach ($property as $p)
                    <div class="col-md-6 col-lg-4 filtr-item" data-category="{{ $p->category }}" data-title="">

                        <a href="{{ route('properties.show', $p->name) }}">
                        <div class="card__image card__box-v1">
                            <div class="card__image-header h-250">
                                <div class="ribbon text-capitalize">featured</div>
                                <img src="{{ asset('storage/' . $p->image) }}" alt="" class="img-fluid w100 img-transition">
                                <div class="info"> for sale</div>
                            </div>
                            <div class="card__image-body">
                                @php
                                    $cate = Category::where('id', $p->category)->get();
                                @endphp
                                @foreach ($cate as $ct)
                                    <span class="badge badge-primary text-capitalize mb-2">{{ $ct->category }}</span>
                                @endforeach
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

@endsection
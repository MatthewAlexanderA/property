@extends('home.layout')

@section('content')
@include('sweetalert::alert')

 <!-- BREADCRUMB -->
 <section class="section__breadcrumb" style="background-color: #363f5e;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">{{ $property->name }}</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/properties" class="text-white">
                            Properties
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            {{ $property->name }}
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->

<div class="single__detail-area">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-lg-8">
                <div class="single__detail-area-title">
                    <h3 class="text-capitalize">{{ $property->name }}</h3>
                    <p> {{ $property->location }}</p>
                </div>
            </div>
            <div class="col-md-3 col-lg-4">
                <div class="single__detail-area-price">
                    <h4 class="text-capitalize text-gray">${{ number_format($property->price) }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SLIDER IMAGE DETAIL -->

<!-- SLIDER IMAGE DETAIL -->
    <!-- RECENT PROPERTY -->
    <div class="slider__property bg-light">

        <div class="slider__property-carousel-opacity owl-carousel owl-theme">
            <div class="item">
                <a href="#">
                    <img src="{{  asset('storage/' . $property->image) }}" alt="No-Image" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="
                    @if($property->side_image1)
                        {{  asset('storage/' . $property->side_image1) }}
                    @else
                        {{  asset('storage/' . $property->image) }}
                    @endif
                    " alt="No-Image" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="
                    @if($property->side_image2)
                        {{  asset('storage/' . $property->side_image2) }}
                    @else
                        {{  asset('storage/' . $property->image) }}
                    @endif
                    " alt="No-Image" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="
                    @if($property->side_image3)
                        {{  asset('storage/' . $property->side_image3) }}
                    @else
                        {{  asset('storage/' . $property->image) }}
                    @endif
                    " alt="No-Image" class="img-fluid">
                </a>
            </div>
            <div class="item">
                <a href="#">
                    <img src="
                    @if($property->side_image4)
                        {{  asset('storage/' . $property->side_image4) }}
                    @else
                        {{  asset('storage/' . $property->image) }}
                    @endif
                    " alt="No-Image" class="img-fluid">
                </a>
            </div>


        </div>

    </div>
    <!-- END RECENT PROPERTY -->
    <!-- END SLIDER IMAGE DETAIL -->

    <!-- SINGLE DETAIL -->
    <section class="single__Detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- DESCRIPTION -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single__detail-desc">
                                <h5 class="text-capitalize detail-heading mt-0">description</h5>
                                <div class="show__more">
                                    <p>{!! $property->content !!}</p>
                                    <a href="javascript:void(0)" class="show__more-button ">read more</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <!-- PROPERTY DETAILS SPEC -->
                            <div class="single__detail-features">
                                <h5 class="text-capitalize detail-heading">property details</h5>
                                <!-- INFO PROPERTY DETAIL -->
                                <div class="property__detail-info">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>Price:</b> ${{ $property->price }}</li>
                                                <li><b>Property Size:</b> {{ $property->area }} Sq Ft</li>
                                                <li><b>Rooms:</b> 2</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <ul class="property__detail-info-list list-unstyled">
                                                <li><b>Bedrooms:</b> {{ $property->bed }}</li>
                                                <li><b>Bathrooms:</b> {{ $property->bath }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- END INFO PROPERTY DETAIL -->
                            </div>
                            <!-- END PROPERTY DETAILS SPEC -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
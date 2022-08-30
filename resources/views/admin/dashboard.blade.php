@extends('admin.layout')

@section('dashboard')
active
@endsection

@section('title')
Dashboard
@endsection

@section('content')

<h5 class="mb-2 mt-4">Visitors Information</h5>
<div class="row">

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $visit_u }}</h3>

                <p>Uniq Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-check"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <!-- small card -->
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $visit_t }}</h3>

                <p>Total Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user-clock"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $visit_d }}</h3>

                <p>Today Visitors</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>
</div>

<h5 class="mb-2 mt-4">Data Information</h5>
<div class="row">

    @if (Auth::user()->role == 'operator')

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $property }}</h3>

                <p>Total Properties</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-image"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $blog }}</h3>

                <p>Total Blog</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-file"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    @else

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $property }}</h3>

                <p>Total Properties</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-image"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary" >
            <div class="inner" style="color: white">
                <h3>{{ $testimonial }}</h3>

                <p>Total Testimonials</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-comment"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary" >
            <div class="inner">
                <h3>{{ $blog }}</h3>

                <p>Total Blog</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-file"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner" style="color: white">
                <h3>{{ $slider }}</h3>

                <p>Total Slider</p>
            </div>
            <div class="icon">
                <i class="fa-solid fa-sliders"></i>
            </div>
            <div class="small-box-footer"> </div>
        </div>
    </div>

<div class="col-lg-3 col-6">
    <div class="small-box bg-primary">
        <div class="inner">
            <h3>{{ $category }}</h3>

            <p>Total Category</p>
        </div>
        <div class="icon">
            <i class="fa-solid fa-quote-left"></i>
        </div>
        <div class="small-box-footer"> </div>
    </div>
</div>

    @endif

@endsection
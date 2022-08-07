@extends('home.layout')

@section('content')
@include('sweetalert::alert')

 <!-- BREADCRUMB -->
 <section class="section__breadcrumb" style="background-color: #363f5e;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">{{ $blog->title }}</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/blogs" class="text-white">
                            blogs
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            {{ $blog->title }}
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->

<!-- LISTING LIST -->
<section>
    <div class="container">
        <div class="row">
            <!-- Left part start -->
            <div class="col-lg-12 col-md-12 m-b10">
                <!-- blog start -->
                <div class="blog-post blog-single blog-style-1">
                    <h1>
                        {{ $blog->title }}
                    </h1>
                    <div class="dlab-post-meta">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-dark text-capitalize ml-1">
                                    {{ $blog->date }}
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="dlab-post-media dlab-img-effect zoom-slow m-t20 text-center">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="No-Image" class="img-fluid">
                    </div>
                    <p>
                        {!! $blog->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END LISTING LIST -->

@endsection
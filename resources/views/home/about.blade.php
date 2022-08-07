@extends('home.layout')

@section('content')

 <!-- BREADCRUMB -->
 <section class="section__breadcrumb" style="background-color: #363f5e;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Tentang Kami</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            tantang kami
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->

<!-- ABOUT -->
<section class="home__about bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="title__leading">
                    <!-- <h6 class="text-uppercase">trusted By thousands</h6> -->
                    <h2 class="text-capitalize">{{ $about[0]->title }}</h2>
                    <p>
                        {!! $about[0]->content !!}
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__image">
                    <div class="about__image-top">
                        <div class="about__image-top-hover">
                            <img src="{{ asset('storage/' . $about[0]->image) }}" alt="No-Image" class="img-fluid">
                        </div>

                    </div>
                    <div class="about__image-bottom">
                        <div class="about__image-bottom-hover">
                            <img src="{{ asset('storage/' . $about[0]->img) }}" alt="No-Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END ABOUT -->

<!-- TESTIMONIAL -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 mx-auto">
                <div class="title__head">
                    <h2 class="text-center text-capitalize">
                        {{ $title[0]->testimonial_title }}
                    </h2>
                    <p class="text-center text-capitalize">{{ $title[0]->testimonial_desc }}</p>
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
                        {{ $title[0]->blog_title }}
                    </h2>
                    <p class="text-center text-capitalize">{{ $title[0]->blog_desc }}</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            @foreach ($blog as $b)
            <div class="col-md-4">
                <!-- BLOG  -->
                <div class="card__image">
                    <a href="{{ route('blogs.show', $b->title) }}">
                        <div class="card__image-header h-250">
                            <img src="{{ asset('storage/' . $b->image) }}" alt="" class="img-fluid w100 img-transition">
                            {{-- <div class="info"> event</div> --}}
                        </div>
                    </a>
                    <div class="card__image-body">
                        <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                        <h6 class="text-capitalize">
                            <a href="{{ route('blogs.show', $b->title) }}">{{ $b->title }} </a>
                        </h6>

                    </div>
                    <div class="card__image-footer">
                        <ul class="list-inline my-auto">
                            <li class="list-inline-item "></li>
                        </ul>
                        <ul class="list-inline my-auto ml-auto">
                            <li class="list-inline-item ">
                                <a href="{{ route('blogs.show', $b->title) }}" class="btn btn-sm btn-primary "><small
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
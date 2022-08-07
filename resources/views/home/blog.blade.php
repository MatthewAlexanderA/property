@extends('home.layout')

@section('content')

 <!-- BREADCRUMB -->
 <section class="section__breadcrumb" style="background-color: #363f5e;">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 text-center">
                <h2 class="text-capitalize text-white ">Blogs</h2>
                <ul class="list-inline ">
                    <li class="list-inline-item">
                        <a href="/" class="text-white">
                            home
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">
                            blogs
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->

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
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="{{ url()->current() }}" autocomplete="off" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
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
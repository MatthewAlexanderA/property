@extends('admin.layout')

@section('page')
active
@endsection
@section('title')
Page Title
@endsection

@section('content')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="pull-right">
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            </div>
            <!-- /.card-header -->
            <div class="card-body">


                <form action="{{ route('title.update',1) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Property Title</strong>
                                <input type="text" name="property_title" class="form-control" @error('property_title') is-invalid @enderror placeholder="Property Title" value="{{$title[0]->property_title}}">
                                @error('property_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Property Description</strong>
                                <input type="text" name="property_desc" class="form-control" @error('property_desc') is-invalid @enderror placeholder="Property Description" value="{{$title[0]->property_desc}}">
                                @error('property_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Testimonial Title</strong>
                                <input type="text" name="testimonial_title" class="form-control" @error('testimonial_title') is-invalid @enderror placeholder="Testimonial Title" value="{{$title[0]->testimonial_title}}">
                                @error('testimonial_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Testimonial Description</strong>
                                <input type="text" name="testimonial_desc" class="form-control" @error('testimonial_desc') is-invalid @enderror placeholder="Testimonial Description" value="{{$title[0]->testimonial_desc}}">
                                @error('testimonial_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Blog Title</strong>
                                <input type="text" name="blog_title" class="form-control" @error('blog_title') is-invalid @enderror placeholder="Blog Title" value="{{$title[0]->blog_title}}">
                                @error('blog_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Blog Description</strong>
                                <input type="text" name="blog_desc" class="form-control" @error('blog_desc') is-invalid @enderror placeholder="Blog Description" value="{{$title[0]->blog_desc}}">
                                @error('blog_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Footer Title</strong>
                                <input type="text" name="footer_title" class="form-control" @error('footer_title') is-invalid @enderror placeholder="Footer Title" value="{{$title[0]->footer_title}}">
                                @error('footer_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Footer Description</strong>
                                <input type="text" name="footer_desc" class="form-control" @error('footer_desc') is-invalid @enderror placeholder="Footer Description" value="{{$title[0]->footer_desc}}">
                                @error('footer_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Footer Button Text</strong>
                                <input type="text" name="footer_button" class="form-control" @error('footer_button') is-invalid @enderror placeholder="Footer Button Text" value="{{$title[0]->footer_button}}">
                                @error('footer_button')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Footer Nav Text</strong>
                                <input type="text" name="footer_nav" class="form-control" @error('footer_nav') is-invalid @enderror placeholder="Footer Nav Text" value="{{$title[0]->footer_nav}}">
                                @error('footer_nav')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Social Media Title</strong>
                                <input type="text" name="contact_title" class="form-control" @error('contact_title') is-invalid @enderror placeholder="Social Media Title" value="{{$title[0]->contact_title}}">
                                @error('contact_title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Social Media Description</strong>
                                <input type="text" name="contact_desc" class="form-control" @error('contact_desc') is-invalid @enderror placeholder="Social Media Description" value="{{$title[0]->contact_desc}}">
                                @error('contact_desc')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                
                </form>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->

@endsection
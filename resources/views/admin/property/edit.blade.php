@extends('admin.layout')

@section('menu')
active
@endsection
@section('property')
active
@endsection
@section('title')
Edit Property
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
                <a class="btn btn-danger" href="{{ route('property.index') }}"> Back</a>
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


                <form action="{{ route('property.update',$property->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Main Image</strong>
                                <input type="hidden" name="oldImage" value="{{ $property->image }}">
                                @if ($property->image)
                                    <img src="{{ asset('storage/' . $property->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('image') is-invalid @enderror name="image" id="image" onchange="previewImage()">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                            <div class="form-group">
                                <strong>Category</strong>
                                <select class="form-control" name="category">
                                    @foreach($category as $c)
                                        <option value="{{$c->category}}" @if($property->category == $c->category)selected @endif>{{$c->category}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name</strong>
                                <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror placeholder="Name" value="{{$property->name}}">
                                @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Location</strong>
                                <input type="text" name="location" class="form-control" @error('location') is-invalid @enderror placeholder="Location" value="{{$property->location}}">
                                @error('location')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bath</strong>
                                <input type="number" name="bath" class="form-control" @error('bath') is-invalid @enderror placeholder="Bath" value="{{$property->bath}}">
                                @error('bath')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Bed</strong>
                                <input type="number" name="bed" class="form-control" @error('bed') is-invalid @enderror placeholder="Bed" value="{{$property->bed}}">
                                @error('bed')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Room</strong>
                                <input type="number" name="room" class="form-control" @error('room') is-invalid @enderror placeholder="Room" value="{{$property->room}}">
                                @error('room')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Area (SqFt)</strong>
                                <input type="number" name="area" class="form-control" @error('area') is-invalid @enderror placeholder="Area" value="{{$property->area}}">
                                @error('area')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Price ($)</strong>
                                <input type="number" name="price" class="form-control" @error('price') is-invalid @enderror placeholder="Price" value="{{$property->price}}">
                                @error('price')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Side Image 1</strong>
                                <input type="hidden" name="oldSideImage1" value="{{ $property->side_image1 }}">
                                @if ($property->side_image1)
                                    <img src="{{ asset('storage/' . $property->side_image1) }}" class="img-preview1 img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview1 img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('side_image1') is-invalid @enderror name="side_image1" id="side_image1" onchange="previewImg1()">
                                    @error('side_image1')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Side Image 2</strong>
                                <input type="hidden" name="oldSideImage2" value="{{ $property->side_image2 }}">
                                @if ($property->side_image2)
                                    <img src="{{ asset('storage/' . $property->side_image2) }}" class="img-preview2 img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview2 img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('side_image2') is-invalid @enderror name="side_image2" id="side_image2" onchange="previewImg2()">
                                    @error('side_image2')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Side Image 3</strong>
                                <input type="hidden" name="oldSideImage3" value="{{ $property->side_image3 }}">
                                @if ($property->side_image3)
                                    <img src="{{ asset('storage/' . $property->side_image3) }}" class="img-preview3 img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview3 img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('side_image3') is-invalid @enderror name="side_image3" id="side_image3" onchange="previewImg3()">
                                    @error('side_image3')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Side Image 4</strong>
                                <input type="hidden" name="oldSideImage4" value="{{ $property->side_image4 }}">
                                @if ($property->side_image4)
                                    <img src="{{ asset('storage/' . $property->side_image4) }}" class="img-preview4 img-fluid mb-3 col-sm-5 d-block">
                                @else
                                    <img class="img-preview4 img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('side_image4') is-invalid @enderror name="side_image4" id="side_image4" onchange="previewImg4()">
                                    @error('side_image4')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content</strong>
                                <input id="contents" type="hidden" name="content" class="form-control" value="{{$property->content}}">
                                <trix-editor input="contents"></trix-editor>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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

  <script>

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');
  
        imgPreview.style.display = 'block';
  
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
  
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
  
  </script>
  
  <script>
  
    function previewImg1() {
        const image = document.querySelector('#side_image1');
        const imgPreviews = document.querySelector('.img-preview1');
  
        imgPreviews.style.display = 'block';
  
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
  
        oFReader.onload = function(oFREvent) {
            imgPreviews.src = oFREvent.target.result;
        }
    }
  
  </script>
  
  <script>
  
    function previewImg4() {
        const image = document.querySelector('#side_image4');
        const imgPreviews = document.querySelector('.img-preview4');
  
        imgPreviews.style.display = 'block';
  
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
  
        oFReader.onload = function(oFREvent) {
            imgPreviews.src = oFREvent.target.result;
        }
    }
  
  </script>
  
  <script>
  
    function previewImg2() {
        const image = document.querySelector('#side_image2');
        const imgPreviews = document.querySelector('.img-preview2');
  
        imgPreviews.style.display = 'block';
  
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
  
        oFReader.onload = function(oFREvent) {
            imgPreviews.src = oFREvent.target.result;
        }
    }
  
  </script>
  
  <script>
  
    function previewImg3() {
        const image = document.querySelector('#side_image3');
        const imgPreviews = document.querySelector('.img-preview3');
  
        imgPreviews.style.display = 'block';
  
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
  
        oFReader.onload = function(oFREvent) {
            imgPreviews.src = oFREvent.target.result;
        }
    }
  
  </script>

@endsection
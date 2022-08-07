@extends('admin.layout')
@php
    use App\Models\Category;
@endphp

@section('menu')
active
@endsection
@section('property')
active
@endsection
@section('title')
Property
@endsection

@section('content')

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Table</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Create</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <section class="content">
        <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="pull-right" style="display: inline-block">
              {{-- <a class="btn btn-success" href="{{ route('property.create') }}"> Create</a> --}}
              <a href="#" class="btn btn-danger" id="deleteAllSelectedProperty" onclick="location.reload()">Delete Selected</a>
          </div>
          {{-- @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <p>{{ $message }}</p>
              </div>
          @endif --}}
          </div>
          <!-- /.card-header -->
          <div class="card-body">

            <table id="example" class="display" style="width:100%">
              <thead>
                  <tr>
                    <th><input type="checkbox" id="chkCheckAll" /></th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($property as $p)
                <tr>
                  <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{ $p->id }}" /></td>
                  <td>
                    <div style="width: 200px;">
                        <img src="{{ asset('storage/' . $p->image) }}" alt="No Image" class="img-fluid mt-3">
                    </div>
                  </td>
                  @php
                      $cate = Category::where('id', $p->category)->get();
                  @endphp
                  @foreach ($cate as $ct)
                    <td>{{ $ct->category }}</td>
                  @endforeach
                  <td>{{ $p->name }}</td>
                  <td>{{ $p->location }}</td>
                  <td>${{ number_format($p->price) }}</td>
                  <td>
                    <form action="{{ route('property.destroy',$p->id) }}" method="POST">

                      <a class="btn btn-primary" href="{{ route('property.edit',$p->id) }}">Edit</a>
      
                      @csrf
                      @method('DELETE')
      
                      <button type="submit" class="btn btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                  </td>

              </tr>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                    <th></th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
              </tfoot>
            </table>
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


{!! $property->links() !!}
    </section>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <section class="create">
        <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <div class="pull-right">
              {{-- <a class="btn btn-danger" href="{{ route('property.index') }}"> Back</a> --}}
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


              <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
              
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Image</strong>
                              <img class="img-preview img-fluid mb-3 col-sm-5">
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
                                      <option value="{{$c->id}}">{{$c->category}}</option>
                                  @endforeach
                              </select>
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name</strong>
                            <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror placeholder="Name" value="{{ old('name') }}">
                            @error('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                          <strong>Location</strong>
                          <input type="text" name="location" class="form-control" @error('location') is-invalid @enderror placeholder="Location" value="{{ old('location') }}">
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
                        <input type="number" name="bath" class="form-control" @error('bath') is-invalid @enderror placeholder="Bath" value="{{ old('bath') }}">
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
                      <input type="number" name="bed" class="form-control" @error('bed') is-invalid @enderror placeholder="Bed" value="{{ old('bed') }}">
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
                    <input type="number" name="room" class="form-control" @error('room') is-invalid @enderror placeholder="Room" value="{{ old('room') }}">
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
                  <input type="number" name="area" class="form-control" @error('area') is-invalid @enderror placeholder="Area" value="{{ old('area') }}">
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
                <input type="number" name="price" class="form-control" @error('price') is-invalid @enderror placeholder="Price" value="{{ old('price') }}">
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
                <img class="img-preview1 img-fluid mb-3 col-sm-5">
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
                <img class="img-preview2 img-fluid mb-3 col-sm-5">
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
                <img class="img-preview3 img-fluid mb-3 col-sm-5">
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
                <img class="img-preview4 img-fluid mb-3 col-sm-5">
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
                <textarea name="content" id="contents" cols="30" rows="10"></textarea>
                  <script>
                      CKEDITOR.replace('contents');
                  </script>
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
    </section>
  </div>
</div>

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
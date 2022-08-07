@extends('admin.layout')

@section('menu')
active
@endsection
@section('testimonial')
active
@endsection
@section('title')
Testimonial
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
            <div class="pull-right">
              {{-- <a class="btn btn-success" href="{{ route('testimonial.create') }}"> Create</a> --}}
              <a href="#" class="btn btn-danger" id="deleteAllSelectedTestimonial" onclick="location.reload()">Delete Selected</a>
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
                      <th>Name</th>
                      <th>Profession</th>
                      <th>Image</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($testimonial as $t)
              <tr>
                  <td><input type="checkbox" name="ids" class="checkBoxClass" value="{{ $t->id }}" /></td>
                  <td>{{ $t->name }}</td>
                  <td>{{ $t->profession }}</td>
                  <td>
                      <div style="width: 200px;">
                          <img src="{{ asset('storage/' . $t->image) }}" alt="No Image" class="img-fluid mt-3">
                      </div>
                  </td>

                  <td>
                      <form action="{{ route('testimonial.destroy',$t->id) }}" method="POST">

                          <a class="btn btn-primary" href="{{ route('testimonial.edit',$t->id) }}">Edit</a>
      
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
                      <th>Name</th>
                      <th>Profession</th>
                      <th>Image</th>
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


{!! $testimonial->links() !!}
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
              {{-- <a class="btn btn-danger" href="{{ route('testimonial.index') }}"> Back</a> --}}
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


              <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
              
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Name</strong>
                              <input type="text" name="name" class="form-control" @error('name') is-invalid @enderror placeholder="Name" value="{{ old('name') }}">
                              @error('name')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Profession</strong>
                              <input type="text" name="profession" class="form-control" @error('profession') is-invalid @enderror placeholder="Profession" value="{{ old('profession') }}">
                              @error('profession')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                              @enderror
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Comment</strong>
                              <textarea name="content" id="contents" cols="30" rows="10"></textarea>
                                <script>
                                    CKEDITOR.replace('contents');
                                </script>
                          </div>
                      </div>
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

@endsection
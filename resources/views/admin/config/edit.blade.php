@extends('admin.layout')

@section('config')
active
@endsection
@section('title')
Config
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


                <form action="{{ route('config.update',1) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')
                
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title</strong>
                                <input type="text" name="title" class="form-control" @error('title') is-invalid @enderror placeholder="Title" value="{{$config[0]->title}}">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Favicon</strong>
                                <input type="hidden" name="oldImage" value="{{ $config[0]->favicon }}">
                                @if ($config[0]->favicon)
                                    <img src="{{ asset('../storage/' . $config[0]->favicon) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="width: 200px;">
                                @else
                                    <img class="img-preview img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('favicon') is-invalid @enderror name="favicon" id="favicon" onchange="previewImage()">
                                    @error('favicon')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Logo</strong>
                                <input type="hidden" name="oldLogoImage" value="{{ $config[0]->logo }}">
                                @if ($config[0]->logo)
                                    <img src="{{ asset('../storage/' . $config[0]->logo) }}" class="img-previews img-fluid mb-3 col-sm-5 d-block" style="width: 200px;">
                                @else
                                    <img class="img-previews img-fluid mb-3">
                                @endif
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" @error('logo') is-invalid @enderror name="logo" id="logo" onchange="previewImageLogo()">
                                    @error('logo')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Metadata</strong>
                                <input id="metadatas" type="hidden" name="metadata" class="form-control" value="{{$config[0]->metadata}}">
                                <trix-editor input="metadatas"></trix-editor>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link Facebook</strong>
                                <input type="text" name="fb" class="form-control" @error('fb') is-invalid @enderror placeholder="fb" value="{{$config[0]->fb}}">
                                @error('fb')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link Twitter</strong>
                                <input type="text" name="twit" class="form-control" @error('twit') is-invalid @enderror placeholder="twit" value="{{$config[0]->twit}}">
                                @error('twit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link LinkedIn</strong>
                                <input type="text" name="in" class="form-control" @error('in') is-invalid @enderror placeholder="in" value="{{$config[0]->in}}">
                                @error('in')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link Instagram</strong>
                                <input type="text" name="ig" class="form-control" @error('ig') is-invalid @enderror placeholder="ig" value="{{$config[0]->ig}}">
                                @error('ig')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Link Youtube</strong>
                                <input type="text" name="yt" class="form-control" @error('yt') is-invalid @enderror placeholder="yt" value="{{$config[0]->yt}}">
                                @error('yt')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Floating Button WhatsApp</strong>
                                <input type="text" name="wa" class="form-control" @error('wa') is-invalid @enderror placeholder="wa" value="{{$config[0]->wa}}">
                                @error('wa')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Adress</strong>
                                <input type="text" name="address" class="form-control" @error('address') is-invalid @enderror placeholder="address" value="{{$config[0]->address}}">
                                @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phone</strong>
                                <input type="text" name="phone" class="form-control" @error('phone') is-invalid @enderror placeholder="phone" value="{{$config[0]->phone}}">
                                @error('phone')
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

<script>

    function previewImage() {
        const image = document.querySelector('#favicon');
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

    function previewImageLogo() {
        const image = document.querySelector('#logo');
        const imgPreview = document.querySelector('.img-previews');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>

@endsection
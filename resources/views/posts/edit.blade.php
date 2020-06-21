@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row justify-content-center">
        <div class="col-10">
        <div class="card-body">
            <form action="/post/{{$posts->id}}" method="post" enctype="multipart/form-data">
                @method('patch')
                    @csrf
                <div class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" id="title" placeholder="title" value="{{ $posts->title }}">
                    @error('title')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class=" form-group row">
                  <div class="col-sm-2">picture</div>
                  <div class="col-sm-10">
                      <div class="row">
                          <div class="col-sm-3">
                          <img src="{{$posts->asaDi()}}" class="img-thumbnail">
                          </div>
                          <div class="col-sm-9">
                              <div class="custom-file">
                                  <input type="file" class="custom-file-input" id="thumbnail" name="thumbnail" aria-describedby="inputGroupFileAddon04">
                                  <label class="custom-file-label" for="thumbnail">Choose file</label>
                                </div>
                          </div>
                      </div>
                  </div>
              </div>
                <div class="form-group">
                    <label for="content">Example textarea</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{$posts->content}}</textarea>
                    @error('content')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                  </div>
                <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
            </form>              
    </div>
    </div>
    </div>
  </div>
  <!-- /page content -->
 
@endsection
@section('footer')
<script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content',{
        height: 400,
        language: 'id', // id, es, en, dll
    } );
</script>
@endsection
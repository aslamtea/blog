@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row justify-content-center">

        <div class="col-8">
            <h1 class="mt-3"> robah</h1>

            <div class="card-body">
            <form action="/member/{{$member->id}}" method="post" enctype="multipart/form-data">
                @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="role" class="col-sm-2 col-form-label">role</label>
                    <input type="role" name="role" id="role" class="form-control @error('role') is-invalid @enderror" placeholder="role" value="{{$member->role}}">
                        @error('role')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 col-form-label">name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="name" value="{{$member->name}}">
                        @error('name')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" name="email" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{$member->email}}" readonly>
                       
                    </div>
                    <div class=" form-group row">
                        <div class="col-sm-2">picture</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                <img src="{{$member->asaKau()}}" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="avatar" name="avatar" aria-describedby="inputGroupFileAddon04">
                                        <label class="custom-file-label" for="avatar">Choose file</label>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">robah Data</button>
                </form>              
    
        </div>

    </div>


  </div>
  <!-- /page content -->
@endsection
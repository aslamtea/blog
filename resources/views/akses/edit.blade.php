@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">

<div class="col-8">
    <h1 class="mt-3"> robah</h1>

    <div class="card-body">
    <form action="/akses/{{$akses->id}}" method="post" enctype="multipart/form-data">
        @method('patch')
            @csrf
            <div class="form-group">
                <label for="role_id">role</label>
            <input type="text" name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" placeholder="role_id" value="{{$akses->role_id}}">
                @error('role_id')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="menu_id">menu id</label>
            <input type="text" name="menu_id" id="menu_id" class="form-control @error('menu_id') is-invalid @enderror" placeholder="menu_id" value="{{$akses->menu_id}}">
                @error('menu_id')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
         
            <button type="submit" class="btn btn-primary float-right">robah Data</button>
        </form>              

</div>
</div>
<!-- /page content -->
@endsection
@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-8">
        <div class="card-body">
            <form action="/akses" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="role_id">role</label>
                <input type="number" name="role_id" id="role_id" class="form-control @error('role_id') is-invalid @enderror" placeholder="role" value="{{old('role_id')}}">
                    @error('role_id')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="menu_id">menu id</label>
                    <input type="number" name="menu_id" class="form-control  @error('menu_id') is-invalid @enderror" id="menu_id" placeholder="menu" value="{{old('menu_id')}}">
                    @error('menu_id')
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
@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-8">
        <div class="card-body">
            <form action="/menu" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="m_id">menu id</label>
                <input type="number" name="m_id" id="m_id" class="form-control @error('m_id') is-invalid @enderror" placeholder="menu id" value="{{old('m_id')}}">
                    @error('m_id')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="menu_id">menu</label>
                    <input type="text" name="menu_id" class="form-control  @error('menu_id') is-invalid @enderror" id="menu_id" placeholder="menu_id" value="{{old('menu_id')}}">
                    @error('menu_id')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="icon">Icon</label>
                    <input type="text" name="icon" class="form-control  @error('icon') is-invalid @enderror" id="icon" placeholder="menu" value="{{old('icon')}}">
                    @error('icon')
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
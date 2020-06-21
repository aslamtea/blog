@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-8">
        <div class="card-body">
            <form action="/submenu" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="menu">menu</label>
                <input type="text" name="menu" id="menu" class="form-control @error('menu') is-invalid @enderror" placeholder="menu" value="{{old('menu')}}">
                    @error('menu')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="url">url</label>
                    <input type="text" name="url" class="form-control  @error('url') is-invalid @enderror" id="url" placeholder="url" value="{{old('url')}}">
                    @error('url')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <select name="role_id" id="role_id" class="form-control">
                        <option value="">Select Menu</option>
                  @foreach (Alya() as $m) 
                    <option value="{{$m->m_id}}">{{$m->menu_id}}</option>
                  @endforeach
                    </select>
                </div>
               
                <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
            </form>              

    </div>
    </div>
    </div>
  </div>
  <!-- /page content -->
 
@endsection
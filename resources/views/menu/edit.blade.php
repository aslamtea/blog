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
    <form action="/menu/{{$menu->id}}" method="post" enctype="multipart/form-data">
        @method('patch')
            @csrf
            <div class="form-group">
                <label for="m_id">menu id</label>
            <input type="text" name="m_id" id="m_id" class="form-control @error('m_id') is-invalid @enderror" placeholder="m_id" value="{{$menu->m_id}}">
                @error('m_id')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="menu_id">menu</label>
            <input type="text" name="menu_id" id="menu_id" class="form-control @error('menu_id') is-invalid @enderror" placeholder="menu_id" value="{{$menu->menu_id}}">
                @error('menu_id')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="icon">icon</label>
                <input type="text" name="icon" class="form-control  @error('icon') is-invalid @enderror" id="icon" placeholder="icon" value="{{$menu->icon}}">
                @error('icon')
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
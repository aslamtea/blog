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
    <form action="/submenu/{{$submenu->id}}" method="post">
            @method('patch')
                @csrf
                <div class="form-group">
                    <select name="role_id" id="role_id" class="form-control">
                        @foreach (Alya() as $m)
                        @if ($m->m_id == $submenu->role_id)
                    <option value="{{$m->m_id}}">{{$m->menu_id}}</option>
                        @endif 
                  @endforeach
                        @foreach (Alya() as $m) 
                    <option value="{{$m->m_id}}">{{$m->menu_id}}</option>
                  @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="url" class="col-sm-2 col-form-label">url</label>
                <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" placeholder="url" value="{{$submenu->url}}">
                    @error('url')
                    <div class="invalid-feedback">
                      {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="menu" class="col-sm-2 col-form-label">menu</label>
                <input type="text" name="menu" id="menu" class="form-control @error('menu') is-invalid @enderror" placeholder="menu" value="{{$submenu->menu}}">
                    @error('menu')
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
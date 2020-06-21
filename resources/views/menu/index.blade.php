@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">menu menagement</h1>

            <a href="/menu/create" class="btn btn-primary my-3">tamahan atuh</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">menu id</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Icon</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($menu as $menu)
                        <tr>
                        <th scope="row">{{$menu->m_id}}</th>
                        <td>{{$menu->menu_id}}</td>
                        <td>{{$menu->icon}}</td>
                            <td>
                            <a href="/menu/{{$menu->id}}/edit" class="badge badge-success">edit</a>
                            <form action="/menu/{{$menu->id}}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="badge badge-danger"  onclick="return confirm('yakin');">delete</button>
                            </form>
                            </td>
                        </tr>
                       
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
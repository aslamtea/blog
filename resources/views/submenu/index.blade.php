@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Submenu </h1>

            <a href="/submenu/create" class="btn btn-primary my-3">tamahan atuh</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">role</th>
                        <th scope="col">Name Menu</th>
                        <th scope="col">Url</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($submenu as $submenu)
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                        <td>{{$submenu->menu_id}}</td>
                        <td>{{$submenu->menu}}</td>
                        <td>{{$submenu->url}}</td>
                            <td>
                                <a href="/submenu/{{$submenu->id}}/edit" class="badge badge-success">edit</a>
                                <form action="/submenu/{{$submenu->id}}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="badge badge-danger"  onclick="return confirm('yakin');">delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
  </div>
  <!-- /page content -->

@endsection
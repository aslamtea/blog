@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">Akses role</h1>

            <a href="/akses/create" class="btn btn-primary my-3">tamahan atuh</a>
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
                        <th scope="col">menu id</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($akses as $akses)
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                        <th scope="row">{{$akses->role_id}}</th>
                        <td>{{$akses->menu_id}}</td>
                            <td>
                            <a href="/akses/{{$akses->id}}/edit" class="badge badge-success">edit</a>
                            <form action="/akses/{{$akses->id}}" method="POST" class="d-inline">
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
            <br><br><br>
            <div class="col-lg-4">
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">role </th>
                            <th scope="col">posisi</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                            <td>1</td>
                            <td>admin</td>
                            </tr>
                    </tbody>
                    <tbody>
                            <tr>
                            <td>2</td>
                            <td>angota</td>
                            </tr>
                    </tbody>
                    <tbody>
                            <tr>
                            <td>3</td>
                            <td>penulis blog</td>
                            </tr>
                    </tbody>
                    <tbody>
                            <tr>
                            <td>4</td>
                            <td>asisten admin</td>
                            </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">menu id</th>
                        <th scope="col">Menu</th>
                        
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($menu as $menu)
                        <tr>
                        <th scope="row">{{$menu->m_id}}</th>
                        <td>{{$menu->menu_id}}</td>
                        </tr>
                       
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
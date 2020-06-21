@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row">
        <div class="col-10">
            <h1 class="mt-3">post </h1>

            <a href="/post/create" class="btn btn-primary my-3">tamahan atuh</a>
            @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif

            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">TITLE</th>
                        <th scope="col">USER</th>
                        <th scope="col">thumbnail</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user->name}}</td>
                        <td><img src="{{$post->asaDi()}}" alt="" width="60"></td>
                        <td>{{$post->slug}}</td>
                            <td>
                            <a target="_blank" href="{{route('site.single.post',$post->slug)}}" class="badge badge-primary">view</a>
                            <a href="/post/{{$post->id}}/edit" class="badge badge-success">edit</a>
                  
                            <form action="/post/{{$post->id}}" method="POST" class="d-inline">
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
                <div class="float-right">
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
  <!-- /page content -->
@endsection
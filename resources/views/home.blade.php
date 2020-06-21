@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="col-10">
      <h1 class="mt-3">apa kabar</h1>

      @if (session('status'))
      <div class="alert alert-success">
          {{session('status')}}
      </div>
      @endif
         
      <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
              <div class="col-md-4">
                  <img src="{{auth()->user()->asaKau()}}" class="card-img">
              </div>
              <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">{{auth()->user()->name}} </h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{auth()->user()->email}}</h6>
                    <br><br><br>
                    <a href="/home/{{auth()->user()->id}}/edit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">edit</a>
                    <a href="/home/{{auth()->user()->id}}/ganti" class="btn btn-secondary btn-lg active mr-2" role="button" aria-pressed="true">ganti password</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection
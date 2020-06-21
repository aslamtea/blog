@extends('layouts/header')

@section('judul', 'aslam tampan')

@section('container')


  <!-- page content -->
  <div class="right_col" role="main">
    <!-- top tiles -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="mt-3">{{auth()->user()->name}}</h1>
                                </div>

                                <div class="panel-body">
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                <form class="user text-center" method="POST" action="/home/{{auth()->user()->password}}">
                                    @method('post')
                                    @csrf
                                    <div class="form-group">
                                        <label for="konkon">nu kamari</label>
                                        <input type="password" class="form-control form-control-user @error('konkon') is-invalid @enderror" id="konkon" name="konkon">
                                        @error('konkon')
                                        <div class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konkon1">rek numana</label>
                                        <input type="password" class="form-control form-control-user @error('konkon1') is-invalid @enderror" id="konkon1" name="konkon1">
                                        @error('konkon1')
                                        <div class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="konkon2">nu baleg sia</label>
                                        <input type="password" class="form-control form-control-user @error('konkon2') is-invalid @enderror" id="konkon2" name="konkon2">
                                        @error('konkon2')
                                        <div class="invalid-feedback">
                                          {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            rek ganti lain
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>


  </div>
  <!-- /page content -->
@endsection
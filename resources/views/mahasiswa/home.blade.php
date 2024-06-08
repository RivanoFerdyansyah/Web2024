@extends('layouts.main')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Home Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Home Page</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{asset('img/students.png')}}" alt="" width="100%">
                    </div>
                    <div class="col-10">
                        <h2>Hallo Mahasiswa {{Auth::user()->name}}</h2>
                        <p class="card-text">
                        Some quick example text to build on the card title and make up the bulk of the card's content. 
                        </p>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </div>
@endsection
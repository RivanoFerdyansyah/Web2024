@extends('layouts.main')
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
                    <li class="breadcrumb-item active">Tambah</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data</h3>
                    </div>
                    <form action="{{Route('mahasiswa.update',$mahasiswa->id)}}" method="post">
                        <div class="card-body">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input type="text" class="form-control" name="nik" value="{{$mahasiswa->nik}}">
                                
                            </div>
                            <div class="form-group">
                                <label for="">NPM</label>
                                <input type="text" class="form-control" name="npm" value="{{$mahasiswa->npm}}">
                                
                            </div>
                            <div class="form-group">
                                <label for="">NAMA</label>
                                <input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}">
                                
                            </div>
                            <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                    <option >-Pilih Jenis Kelamin-</option>
                                    <option value="Laki-Laki" {{$mahasiswa->jenis_kelamin == 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                                    <option value="Perempuan" {{$mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                                </select>
                                
                            <div class="form-group">
                                <label for="">Nomor Telpon</label>
                                <input type="text" class="form-control" name="nomor_telepon" value="{{$mahasiswa->nomor_telepon}}">
                                
                            </div>
                            <div class="form-group">
                            <label for="">Jurusan</label>
                                <select class="form-control" name="jurusan" >
                                    <option >-Pilih Jurusan-</option>
                                    <option value="Teknik Informatika"{{$mahasiswa->jurusan == 'Teknik Informatika' ? 'selected' : ''}}Teknik Informatika</option>
                                    <option value="Sistem Informasi"{{$mahasiswa->jurusan == 'Sistem Informasi' ? 'selected' : ''}}>Sistem Informasi</option>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" class="form-control" name="email" value="{{$mahasiswa->user->email}}">
                                
                            </div>
                            <div class="row">
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" class="form-control" name="username" value="{{$mahasiswa->username}}">
                                    </div>
                                
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control" name="password">
                                        <small class="text-danger">isi jika merubah password</small>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <a href="{{Route('mahasiswa.index')}}" class="btn btn-light"><i class="fa fa-arrow-back"></i>Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection
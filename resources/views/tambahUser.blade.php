@extends('layout.minad')

@section('content')
@if (session()->has('error'))
<div class="alert bg-gradient-danger alert-dismissible text-sm  text-white  fade show" role="alert">
    <span class="alert-icon"><i class="fa-solid fa-circle-exclamation"></i></span>
    <span class="alert-text"><strong>Gagal!</strong> {{ session('error') }}</span>
</div>
@endif
<!-- general form elements disabled -->
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title">Data User</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form method="post" action="{{ route('tambahpostu') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>ID User</label>
                        <input type="text" name="id" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="un" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="text" name="pass" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Akses</label>
                        <input type="text" name="akses" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Tambah</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <!-- /.card-body -->
</div>
@endsection
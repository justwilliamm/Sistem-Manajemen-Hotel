@extends('layout.minad')

@section('content')
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Detail Pemesan</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label>Nama Konsumen</label><br>
                <label>{{ $book->nama_konsumen }}</label>
            </div>
            <div class="form-group">
                <label>No. KTP</label><br>
                <label>{{ $book->no_ktp }}</label>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir</label><br>
                <label>{{ $book->tgl_lahir }}</label>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <label>{{ $book->jk }}</label>
            </div>
            <div class="form-group">
                <label>No. Telp</label><br>
                <label>{{ $book->no_telp }}</label>
            </div>
            <div class="form-group">
                <label>Jenis Kamar</label><br>
                <label>{{ $book->jenis }}</label>
            </div>
            <div class="form-group">
                <label>No. Kamar</label><br>
                <label>{{ $book->no_kamar }}</label>
            </div>
            <div class="form-group">
                <label>Tanggal Check-In</label><br>
                <label>{{ $book->tgl_in }}</label>
            </div>
            <div class="form-group">
                <label>Tanggal Check-Out</label><br>
                <label>{{ $book->tgl_out }}</label>
            </div>
            <div class="form-group">
                <label>Subtotal</label><br>
                <label>{{ $book->sub_total }}</label>
            </div>
            <div class="form-group">
                <label>Diskon</label><br>
                <label>{{ $book->diskon }}</label>
            </div>
            <div class="form-group">
                <label>Total</label><br>
                <label>{{ $book->total }}</label>
            </div>
        </div>
    </form>
</div>
<!-- /.card -->

@endsection
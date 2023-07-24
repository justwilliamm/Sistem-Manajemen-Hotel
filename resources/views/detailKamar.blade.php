@extends('layout.minad')

@section('content')
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Detail Kamar</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form>
        <div class="card-body">
            <div class="form-group">
                <label>No. Kamar</label><br>
                <label>{{ $kamar->no_kamar }}</label>
            </div>
            <div class="form-group">
                <label>Lantai</label><br>
                <label>{{ $kamar->lantai }}</label>
            </div>
            <div class="form-group">
                <label>Jenis</label><br>
                <label>{{ $kamar->jenis }}</label>
            </div>
            <div class="form-group">
                <label>Breakfast</label><br>
                <label>{{ $kamar->breakfast }}</label>
            </div>
            <div class="form-group">
                <label>Housekeep</label><br>
                <label>{{ $kamar->housekeep }}</label>
            </div>
            <div class="form-group">
                <label>Wifi</label><br>
                <label>{{ $kamar->free_wifi }}</label>
            </div>
            <div class="form-group">
                <label>TV</label><br>
                <label>{{ $kamar->tv }}</label>
            </div>
            <div class="form-group">
                <label>Swimming Pool</label><br>
                <label>{{ $kamar->swimming_pool }}</label>
            </div>
            <div class="form-group">
                <label>Harga</label><br>
                <label>{{ $kamar->harga }}</label>
            </div>
            <div class="form-group">
                <label>Status</label><br>
                <label>{{ $kamar->status }}</label>
            </div>
        </div>
    </form>
</div>
<!-- /.card -->

@endsection
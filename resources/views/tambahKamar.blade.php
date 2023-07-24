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
        <h3 class="card-title">Tambah Kamar</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form method="post" action="{{ route('tambahpostk') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>No. Kamar</label>
                        <input type="text" name="no" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Lantai</label>
                        <input type="text" name="lt" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kamar</label>
                        <select class="form-control" name="jenis">
                            <option>Pilih...</option>
                            <option>Deluxe</option>
                            <option>Twin</option>
                            <option>Queen</option>
                            <option>King</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Breakfast</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bf" value="Ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bf" value="Tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Housekeep</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hk" value="Ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="hk" value="Tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Free Wifi</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="wf" value="Ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="wf" value="Tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>TV</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tv" value="Ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tv" value="Tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Swimming Pool</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sw" value="Ya">
                            <label class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="sw" value="Tidak">
                            <label class="form-check-label">Tidak</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="hrg" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="text" name="st" class="form-control" placeholder="Enter ...">
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
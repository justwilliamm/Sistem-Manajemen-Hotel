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
        <h3 class="card-title">Pemesanan Kamar</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <form method="post" action="{{ route('tambahpost') }}">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Nama Konsumen</label>
                        <input type="text" name="konsumen" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>No. KTP</label>
                        <input type="text" name="ktp" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="lhr" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                            <label class="form-check-label">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                        <input type="text" name="telp" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kamar</label>
                        <select class="form-control" name="jenis">
                            <option>Pilih...</option>
                            @foreach ($jenis as $j)
                            @if($j->status == "Tersedia")
                            <option>{{ $j->jenis }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>No. Kamar</label>
                        <select class="form-control" id="selectOption" name="no">
                            <option>Pilih...</option>
                            @foreach ($jenis as $j)
                            @if($j->status == "Tersedia")
                            <option>{{ $j->no_kamar }}</option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Check-In</label>
                        <input type="date" name="in" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Check-Out</label>
                        <input type="date" name="out" class="form-control" placeholder="Enter ...">
                    </div>
                    <div class="form-group" id="101" style="display: none;">
                        <!-- Text input for Option 1 -->
                        <label for="textInput">Subtotal:</label><br>
                        <input type="number" id="textInput" name="sub1" value="150000" readonly>
                    </div>
                    <div class="form-group" id="102" style="display: none;">
                        <!-- Text input for Option 2 -->
                        <label for="textInput">Subtotal:</label><br>
                        <input type="number" id="textInput" name="sub2" value="150000" readonly>
                    </div>
                    <div class="form-group" id="201" style="display: none;">
                        <!-- Text input for Option 3 -->
                        <label for="textInput">Subtotal:</label><br>
                        <input type="number" id="textInput" name="sub3" value="300000" readonly>
                    </div>
                    <div class="form-group" id="321" style="display: none;">
                        <!-- Text input for Option 4 -->
                        <label for="textInput">Subtotal:</label><br>
                        <input type="number" id="textInput" name="sub4" value="250000" readonly>
                    </div>
                    <div class="form-group" id="404" style="display: none;">
                        <!-- Text input for Option 5 -->
                        <label for="textInput">Subtotal:</label><br>
                        <input type="number" id="textInput" name="sub5" value="200000" readonly>
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
<script>
    document.getElementById('selectOption').addEventListener('change', function() {
        var selectedOption = this.value;
        var option1Container = document.getElementById('101');
        var option2Container = document.getElementById('102');
        var option3Container = document.getElementById('201');
        var option4Container = document.getElementById('321');
        var option5Container = document.getElementById('404');

        if (selectedOption === '101') {
            option1Container.style.display = 'block';
            option2Container.style.display = 'none';
            option3Container.style.display = 'none';
            option4Container.style.display = 'none';
            option5Container.style.display = 'none';
        } else if (selectedOption === '102') {
            option1Container.style.display = 'none';
            option2Container.style.display = 'block';
            option3Container.style.display = 'none';
            option4Container.style.display = 'none';
            option5Container.style.display = 'none';
        } else if (selectedOption === '201') {
            option1Container.style.display = 'none';
            option2Container.style.display = 'none';
            option3Container.style.display = 'block';
            option4Container.style.display = 'none';
            option5Container.style.display = 'none';
        } else if (selectedOption === '321') {
            option1Container.style.display = 'none';
            option2Container.style.display = 'none';
            option3Container.style.display = 'none';
            option4Container.style.display = 'block';
            option5Container.style.display = 'none';
        } else if (selectedOption === '404') {
            option1Container.style.display = 'none';
            option2Container.style.display = 'none';
            option3Container.style.display = 'none';
            option4Container.style.display = 'none';
            option5Container.style.display = 'block';
        }
    });
</script>
@endsection
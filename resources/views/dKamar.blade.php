@extends('layout.minad')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Data Kamar</h2>
            <div class="text-center">
                <button class="btn btn-primary">
                    <a class="text-white" href="/tambah_kamar">
                        <i class="fa-regular fa-square-plus"></i>
                        Tambah Kamar</a>
                </button>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No. Kamar</th>
                        <th>Lantai</th>
                        <th>Jenis</th>
                        <th>Breakfast</th>
                        <th>Housekeep</th>
                        <th>Free Wifi</th>
                        <th>TV</th>
                        <th>Swimming Pool</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kamar as $j)
                    <tr>
                        <td>{{ $j->no_kamar }}</td>
                        <td>{{ $j->lantai }}</td>
                        <td>{{ $j->jenis }}</td>
                        <td>{{ $j->breakfast }}</td>
                        <td>{{ $j->housekeep }}</td>
                        <td>{{ $j->free_wifi }}</td>
                        <td>{{ $j->tv }}</td>
                        <td>{{ $j->swimming_pool }}</td>
                        <td>{{ $j->harga }}</td>
                        <td>{{ $j->status }}</td>
                        <td>
                            <button class="btn btn-info">
                                <a class="text-white" href="/detail_kamar/{{ $j->no_kamar }}">
                                    <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i>
                                </a>
                            </button>
                            <button class="btn btn-warning">
                                <a class="text-white" href="/edit_kamar/{{ $j->no_kamar }}">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button class="btn btn-danger">
                                <a class="text-white" href="/hapus_kamar/{{ $j->no_kamar }}">
                                    <i class="fa-regular fa-trash-can"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
<!-- /.card -->
<!-- jQuery -->
<script src="{{ asset('asep') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('asep') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Page specific script -->
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endsection
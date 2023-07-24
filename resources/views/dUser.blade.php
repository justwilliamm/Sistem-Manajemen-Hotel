@extends('layout.minad')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Data User</h2>
            <div class="text-center">
                <button class="btn btn-primary">
                    <a class="text-white" href="/tambah_user">
                        <i class="fa-regular fa-square-plus"></i>
                        Tambah User</a>
                </button>
            </div>

        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Akses</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $j)
                    <tr>
                        <td>{{ $j->id_user }}</td>
                        <td>{{ $j->nama }}</td>
                        <td>{{ $j->username }}</td>
                        <td>{{ $j->password }}</td>
                        <td>{{ $j->akses }}</td>
                        <td>
                            <button class="btn btn-warning">
                                <a class="text-white" href="/edit_user/{{ $j->id_user }}">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>
                            </button>
                            <button class="btn btn-danger">
                                <a class="text-white" href="/hapus_user/{{ $j->id_user }}">
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
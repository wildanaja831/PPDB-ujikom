@extends('layout.app')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="my-8">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No. Daftar</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Asal SMP</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Minat Jurusan</th>
                    <th scope="col">Waktu Pendaftaran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @empty($registrars)
                    <tr>
                        <td colspan="10">
                            <center>Data tidak ditemukan</center>
                        </td>
                    </tr>
                @endempty
                @foreach ($registrars as $registrar)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $registrar['full_name'] }}</td>
                        <td>{{ $registrar['gender'] }}</td>
                        <td>{{ $registrar['address'] }}</td>
                        <td>{{ $registrar['asal_smp'] }}</td>
                        <td>{{ $registrar['religion'] }}</td>
                        <td>{{ $registrar['major'] }}</td>
                        <td>{{ $registrar['created_at'] }}</td>
                        <td>
                            <div class="d-inline-flex">
                                <a href="{{ route('registrar.delete', $registrar['id']) }}" class="btn btn-danger m-1" onclick="return confirm('Yakin Ingin Hapus?')">Hapus</a>
                                <a href="{{ route('registrar.edit', $registrar['id']) }}" class="btn btn-warning m-1">Edit</a>
                                <a target="_blank" href="{{ route('registrar.print', $registrar['id']) }}"
                                    class="btn btn-primary m-1">Print</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('table').DataTable();
        });
    </script>
    <script>
        function myFunction() {
          alert("yakin mau hapus!");
        }
        </script>
@endsection

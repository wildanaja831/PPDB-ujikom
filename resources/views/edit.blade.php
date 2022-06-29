@extends('layout.app')

@section('content')
<div class="m-auto w-3/4">
    <h4>Data {{$registrar['full_name']}}</h4>
    <hr>
    <form action="{{route('registrar.update', $registrar['id'])}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
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
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-auto">
                <label for="name" class="form-label">Nama Lengkap</label>
            </div>
            <div class="col-auto">
                <input name="full_name" type="text" class="form-control" id="name" aria-describedby="namaHelp"
                value="{{$registrar['full_name']}}">
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-auto">
                <label class="form-label">Jenis Kelamin</label>
            </div>
            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender-1" value="Laki-laki"
                     {{$registrar['gender'] === 'Laki-laki' ? 'checked' : ''}}>
                    <label class="form-check-label" for="gender-1">
                        Laki-laki
                    </label>
                </div>
            </div>
            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender-2" value="Perempuan"
                        {{$registrar['gender'] === 'Perempuan' ? 'checked' : ''}}>
                    <label class="form-check-label" for="gender-2">
                        Perempuan
                    </label>
                </div>
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-auto">
                <label for="address" class="form-label">Alamat</label>
            </div>
            <div class="col-auto">
                <textarea name="address" type="text" class="form-control" id="address" aria-describedby="addressHelp"
                >{{$registrar['address']}}</textarea>
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-auto">
                <label for="religion" class="form-label">Agama</label>
            </div>
            <div class="col-auto">
                <select id="religion" class="form-select" name="religion">
                    <option disabled value>Agama</option>
                    @foreach (config('constant.registrar.religion') as $religion)
                        <option value="{{$religion}}"
                        {{$registrar['religion'] === $religion ? 'selected' : ''}}>{{ $religion }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-auto">
                <label for="asal-smp" class="form-label">Asal SMP</label>
            </div>
            <div class="col-auto">
                <input name="asal_smp" type="text" class="form-control" id="asal-smp"
                value="{{$registrar['asal_smp']}}">
            </div>
        </div>
        <div class="mb-3 row g-3 align-items-center">
            <div class="col-auto">
                <label for="major" class="form-label">Minat Jurusan</label>
            </div>
            <div class="col-auto">
                <select id="major" class="form-select" name="major">
                    <option selected disabled value>Jurusan</option>
                    @foreach (config('constant.registrar.major') as $major)
                        <option {{$registrar['major'] === $major ? 'selected' : ''}} value="{{$major}}">{{ $major }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
        <a href="{{route('registrar.index')}}" class="btn btn-warning">Kembali</a>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Tambah Daftar Siswa</div>

                <div class="card-body">
                <form action="{{route('siswa.store')}}" method="post">
                    @csrf
                    <div class='form-group'>
                        <label>Nis</label>
                        <input type="text" name="nis" class="form-control" required>
                    </div>
                    <div class='form-group'>
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class='form-group'>
                        <label>Alamat</label>
                        <textarea type="text" name="alamat" class="form-control" required></textarea>
                    </div>
                    <div class='form-group'>
                        <label>Kelas</label>
                        <select name="id_kelas" class="form-control">
                        @foreach ($kelas as $data)
                    <option value="{{$data->id}}">{{ $data->kelas }}</option>
                        @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Mata Pelajaran</label>
                        <select name="mape[]" class="form-control" multiple>
                            @foreach ($mapel as $data)
                        <option value="{{$data->id}}">{{ $data->nama }}</option>
                            @endforeach
                        </select>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

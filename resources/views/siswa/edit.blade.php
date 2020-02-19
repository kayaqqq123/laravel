@extends('layouts.main')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input name="nama" type="text" class="form-control" id="nama" placeholder="nama"
                                            value="{{$siswa->nama}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="kelas">Kelas</label>
                                        <select name="kelas" id="kelas" class="form-control">
                                            <option value="X" @if($siswa->kelas == "X") selected @endif>X</option>
                                            <option value="XI" @if($siswa->kelas == "XI") selected @endif>XI
                                            </option>
                                            <option value="XII" @if($siswa->kelas == "XII") selected @endif>XII
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" rows="3" class="form-control"
                                            placeholder="alamat">{{$siswa->alamat}}</textarea>
                                    </div>
                                    <img src="{{asset('foto/'.$siswa->foto)}}" height="100px" alt="">
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="file" id="foto" name="foto">

                                        <p class="help-block">Masukkan foto</p>
                                    </div>
                                        <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop



@section('content1')
<h1>Edit Data Siswa</h1>
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" placeholder="nama"
                    value="{{$siswa->nama}}">
            </div>
            <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                    <option value="X" @if($siswa->kelas == "X") selected @endif>X</option>
                    <option value="XI" @if($siswa->kelas == "XI") selected @endif>XI
                    </option>
                    <option value="XII" @if($siswa->kelas == "XII") selected @endif>XII
                    </option>
                </select>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" rows="3" class="form-control"
                    placeholder="alamat">{{$siswa->alamat}}</textarea>
            </div>
            <img src="{{asset('foto/'.$siswa->foto)}}" height="100px" alt="">
            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" id="foto" name="foto">

                <p class="help-block">Masukkan foto</p>
            </div>
                <button type="submit" class="btn btn-info">Update</button>
        </form>
    </div>
</div>
@endsection

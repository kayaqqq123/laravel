@extends('layouts.main')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Data Siswa</h3>
                            <div class="right">
                                </button>
                                <button type="button" class="btn" data-toggle="modal"
                                    data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>   
                            </div>
                        </div>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_siswa as $siswa)
                                <tr>
                                    <td>{{$siswa->nama}}</td>
                                    <td>{{$siswa->alamat}}</td>
                                    <td>{{$siswa->kelas}}</td>
                                    <td>
                                        <img src="/foto/{{$siswa->foto}}" alt="foto" height="50px">
                                    </td>
                                    <td>
                                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                                        <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Bener Mau Dihapus???')">Delete</a>
                                        @csrf
                                        @method('DELETE')
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Pilih Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control"
                            placeholder="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@stop



@section('content1')
@if(session('sukses'))
<div class="alert alert-success" role="alert">
    {{session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-lg-12">
        <h1>Data Siswa</h1>
    </div>
    <div class="col-lg-12">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Siswa
        </button>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kelas</th>
                <th scope="col">Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_siswa as $siswa)
            <tr>
                <td>{{$siswa->nama}}</td>
                <td>{{$siswa->alamat}}</td>
                <td>{{$siswa->kelas}}</td>
                <td>
                    <img src="/foto/{{$siswa->foto}}" alt="foto" height="50px">
                </td>
                <td>
                    <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-success btn-sm">Edit</a>
                    <a href="/siswa/{{$siswa->id}}/destroy" class="btn btn-danger btn-sm"
                        onclick="return confirm('Bener Mau Dihapus???')">Delete</a>
                    @csrf
                    @method('DELETE')
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/siswa/create" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="kelas">Pilih Kelas</label>
                        <select class="form-control" id="kelas" name="kelas">
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" rows="3" class="form-control"
                            placeholder="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    @endsection

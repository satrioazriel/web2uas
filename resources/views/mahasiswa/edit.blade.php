@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="post">
                        @csrf

                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">NPM</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Tambahkan NPM" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->npm }}">
                                </div>
                                <div class="col">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_mahasiswa" class="form-control" placeholder="Tambahkan Nama Lengkap" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->nama_mahasiswa }}">
                                </div>
                                <div class="col">
                                    <label for="">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Tambahkan Tempat Lahir" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->tempat_lahir }}">
                                </div>
                                <div class="col">
                                    <label for="">Tanggal Lahir</label>
                                    <input type="text" name="tanggal_lahir" class="form-control" placeholder="Tambahkan Tanggal Lahir" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->tanggal_lahir}}">
                                </div>
                                <div class="col">
                                    <label for="">Jenis Kelamin</label>
                                    <input type="text" name="jenis_kelamin" class="form-control" placeholder="Tambahkan Jenis Kelamin" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->jenis_kelamin }}">
                                    
                                </div>
                                <div class="col">
                                    <label for="">Telepon</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Tambahkan Telepon" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->telepon }}">
                                </div>
                                <div class="col">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" class="form-control" placeholder="Tambahkan Alamat" value="{{ is_null
                                    ($mahasiswa)? '' : $mahasiswa->alamat }}">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="form-row float-right ">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('mahasiswa')}}" class="btn btn-md btn-danger">BATAL</a>
                                </div>
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Nilai</div>

                <div class="card-body">
                    <form action="{{ route('simpan.nilai') }}" method="post">
                        @csrf
                        <div class="form-group">
                        <label for="matkul_id">Nama Matakuliah</label>
                        <select type="number" name="matkul_id"  class="form-control colt-mb-9" id="">
                            @foreach ($matkul as $mk)
                            <option value="{{ $mk->id }}">{{$mk->nama_matkul}}</option>
                            @endforeach
                        </select>
                        </div>
                            <div class="form-group">
                                <label for="mahasiswa_id">Nama Mahasiswa</label>
                                <select type="number" name="mahasiswa_id"  class="form-control colt-mb-9" id="">
                                    @foreach ($mahasiswa as $mhs)
                                    <option value="{{ $mhs->id }}">{{$mhs->nama_mahasiswa}}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="col">
                                    <label for="nilai">Nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <div class="form-row float-right ">
                                <div class="col">
                                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                    <a href="{{ route('nilai')}}" class="btn btn-md btn-danger">BATAL</a>
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Nilai</div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post">
                        @csrf
                        
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label for="">Kode Nilai</label>
                                    <select type="number" name="matkul_id"  class="form-control colt-mb-9" id="">
                                        @foreach ($matkul as $mk)
                                        <option value="{{ $mk->id }}">{{$mk->nama_matkul}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <label for="">Nama Mahasiswa</label>
                                    <select type="number" name="mahasiswa_id"  class="form-control colt-mb-9" id="">
                                        @foreach ($mahasiswa as $mhs)
                                        <option value="{{ $mhs->id }}">{{$mhs->nama_mahasiswa}}</option>
                                        @endforeach
                                </div>
                                <div class="col">
                                    <label for="">nilai</label>
                                    <input type="number" name="nilai" class="form-control" placeholder="Tambahkan SKS Matakuliah" value="{{ is_null
                                    ($nilai)? '' : $nilai->nilai }}">
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

@extends('layouts.master')

@section('title','Data SPP')

@section('content')
<br>
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-0">
                    <div class="col-md-6  col-lg-6 text-left col-12">
                        <h5 class="text-blue">Tambah Data SPP</h5>
                    </div>
                    <div class="col-md-12 col-lg-6 d-flex col-12 justify-content-end">
                        <div class="card-header-action mx-1">
                            <a href="{{route('indexSpp')}}" class="btn btn-primary">List Berita <i class="fas fa-plus"></i></a>
                        </div>
                    </div>
                </div>

                <div class="card-body pb-5 pt-2"> 
                    <form action="{{ route('storeSpp') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class = "col-12 col-md-6">
                                <div class="form-group">
                                    <label for="nisn">Siswa</label>
                                    <select id="nisn" class="form-control" name="nisn">
                                        @foreach ($sql as $siswa)
                                        <option value="">----- Pilih NISN Siswa -----</option>
                                        <option value="{{ $siswa->nisn }}">{{ $siswa->nisn }}</option>
                                        @endforeach
                                        </select>
                                </div>
                             
                            </div>
                            <div class = "col-12 col-md-6">
                                <div class="form-group">
                                    <label for="judul_berita">Nominal</label>
                                    <input type="number" class="form-control" name="nominal" id="nominal">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col-12 col-md-12">
                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input type="text" class="form-control" name="keterangan" id="keterangan">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" onclick="this.disabled=true;this.form.submit();" class="btn btn-success">
                                    <i class="fas fa-save"> </i> Simpan</button>
                                </div>
                        </div>
                      
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

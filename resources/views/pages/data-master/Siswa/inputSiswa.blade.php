@extends('layouts.master')

@section('title','Tambah Data Siswa')

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
                    <form action="{{ route('storeSiswa') }}"  method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class = "col-12 col-md-6">
                                <div class="form-group">
                                    <label for="nisn">NISN</label>
                                    <input type="number" class="form-control" name="nisn" id="nisn">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <input type="text" class="form-control" name="kelas" id="kelas">
                                </div>
                                <div class="form-group">
                                    <label for="kelas">Kelas</label>
                                    <select id="jk" class="form-control" name="jk">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class = "col-12 col-md-6">
                                <div class="form-group">
                                    <label for="nama">Nama Siswa</label>
                                    <input type="text" class="form-control" name="nama" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="absen">Absen</label>
                                    <input type="number" class="form-control" name="absen" id="absen">
                                </div>
                                <div class="form-group">
                                    <label for="tgl">Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl" id="tgl">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col-12 col-md-12">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" id="alamat">
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit"  class="btn btn-success">
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

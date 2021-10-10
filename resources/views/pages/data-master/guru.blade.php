@extends('layouts.master')

@section('title','Data Guru')

@section('content')
<div class="container">
  <div class="row justify-content-between">
    <p style="font-size: 28px;color:#000" class="mt-4">Data Guru</p>
    <button type="button" class="btn btn-secondary btn-sm text-dark button-custom">Tambah Data</button>
  </div>

  <div class="mt-2">
    <a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a>
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250"
      style="border-radius:10px">
  </div>

  <div class="card-body p-0">
    <div class="table-responsive mt-3">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIP</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Bidang Studi</th>
            <th scope="col">ALamat</th>
            <th scope="col">Telepon</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Daniansyah</td>
            <td>19051204043</td>
            <td>Laki-Laki</td>
            <td>Sistem Informasi</td>
            <td>Sidoarjo</td>
            <td>0895804481680</td>
            <td>
              <div class="badge badge-success">Aktif</div>
            </td>
            <td>
              <a href="#" class="badge badge-primary">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Daniansyah</td>
            <td>19051204043</td>
            <td>Laki-Laki</td>
            <td>Sistem Informasi</td>
            <td>Sidoarjo</td>
            <td>0895804481680</td>
            <td>
              <div class="badge badge-danger">Nonktifkan</div>
            </td>
            <td>
              <a href="#" class="badge badge-primary">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Daniansyah</td>
            <td>19051204043</td>
            <td>Laki-Laki</td>
            <td>Sistem Informasi</td>
            <td>Sidoarjo</td>
            <td>0895804481680</td>
            <td>
              <div class="badge badge-success">Aktif</div>
            </td>
            <td>
              <a href="#" class="badge badge-primary">Edit</a>
            </td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Daniansyah</td>
            <td>19051204043</td>
            <td>Laki-Laki</td>
            <td>Sistem Informasi</td>
            <td>Sidoarjo</td>
            <td>0895804481680</td>
            <td>
              <div class="badge badge-success">Aktif</div>
            </td>
            <td>
              <a href="#" class="badge badge-primary">Edit</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


</div>
@endsection